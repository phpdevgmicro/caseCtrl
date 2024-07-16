<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Livewire\User\dashboard;
use App\Livewire\User\NewCase;
use App\Livewire\User\Cases;

Route::get('login', function () {
    return view('auth.login');
})->name('login')->middleware('guest');
Route::post('login', [AuthController::class, 'authenticate'])->middleware('throttle:login');
Route::get('signout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/new-case', NewCase::class);
    Route::get('/cases', Cases::class);
});
