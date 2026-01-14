<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Contact form submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Quote request API endpoint
Route::post('/api/quote-request', [ContactController::class, 'quoteRequest'])->name('quote.request');
