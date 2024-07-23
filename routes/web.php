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


// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function() {
	Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
 	Artisan::call('config:cache');
 	return 'Config cache has been cleared';
}); 

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});
