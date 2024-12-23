<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('first');
});

Route::get('/', function () {
    return view('first');
})->name('home');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/submit-form', [ContactController::class, 'submit_form'])->name('submit_form');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::resource('employees', 'App\Http\Controllers\EmployeeController')->middleware('auth');