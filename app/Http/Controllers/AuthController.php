<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid email or password.',
                'errors' => $validator->errors(),
            ], 422);
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            return response()->json([
                'status' => 'success',
                'message' => 'Authenticated successfully.'               
            ]);
        }

        return response()->json([
            'status' => 'error',
            'message' => 'The provided credentials do not match our records.',
        ], 401);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }

    public function recoverPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Provided email not found in our record.',
                'errors' => $validator->errors(),
            ], 422);
        }

        try {
            $status = Password::sendResetLink($request->only('email'));

            if ($status === Password::RESET_LINK_SENT) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'The password reset link has been sent.',
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Failed! The password reset link has not been sent.',
                    'errors' => ['email' => __($status)],
                ], 422);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed! The password reset link has not been sent.',
                'errors' => ['exception' => $e->getMessage()],
            ], 500);
        }
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);       
        
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, string $password) {
                //dd($user);
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));     
                $user->save();     
            }
        );
     
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('success', 'Login with your new password.')
            : back()->withErrors(['email' => [__($status)]]);
    }    

}
