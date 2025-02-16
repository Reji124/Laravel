<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Default home page
Route::view('/', 'welcome')->name('welcome');


// Authentication Views (Ensure they exist in resources/views/auth/)
Route::view('/register', 'auth.register');
Route::view('/login', 'auth.login');

// Profile Routes
Route::view('/edit', 'profile.partials.edit');
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/blog', 'blog');
Route::view('/list', 'list');
Route::view('/media', 'media');
Route::view('/styling', 'styling');
Route::view('/users', 'users');

// Route to display users with database data
Route::get('/users', function () {
    $users = User::all();
    return view('users', compact('users'));
})->name('users');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Protected Routes (Require Authentication)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
