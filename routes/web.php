<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/courses', [MainController::class, 'courses'])->name('courses');

Route::get('/opening', [MainController::class, 'opening'])->name('opening');

Route::get('/teachers', [MainController::class, 'teachers'])->name('teachers');

Route::get('/teachers/{id}', [MainController::class, 'teachersid'])->name('teachers-id');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');
