<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/login', [PageController::class, 'showLogin'])->name('login');

Route::post('/handle-login', [PageController::class, 'handleLogin'])->name('handle.login');

Route::get('/dashboard', [PageController::class, 'showDashboard'])->name('dashboard');

Route::get('/pengelolaan', [PageController::class, 'showPengelolaan'])->name('pengelolaan');

Route::get('/profile', [PageController::class, 'showProfile'])->name('profile');

Route::get('/', function () {
    return redirect()->route('login');
});
