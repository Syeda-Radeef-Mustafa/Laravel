<?php

// routes/web.php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;

// Route::get('/contact', [ContactController::class, 'showForm'])->name('contacts.showForm');
// Route::post('/contact', [ContactController::class, 'submitForm'])->name('contacts.submitForm');
Route::resource('contacts', ContactController::class)->middleware('auth');
// routes/web.php



// Route::get('/login', [LoginController::class, 'showLoginForm']);
// Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

