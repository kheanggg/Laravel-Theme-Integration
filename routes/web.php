<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(PageController::class)->name('page.')->group(function () {
    Route::get('', 'home')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::get('services', 'services')->name('services');
    Route::get('blog', 'blog')->name('blog');
    Route::get('pricing', 'pricing')->name('pricing');
    Route::get('portfolio', 'portfolio')->name('portfolio');
    Route::get('team', 'team')->name('team');
    Route::get('testimonials', 'testimonials')->name('testimonials');
    Route::get('blog-details', 'blogDetails')->name('blog.details');
    Route::get('portfolio-details', 'portfolioDetails')->name('portfolio.details');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
