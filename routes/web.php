<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() { return view('index'); })->name('home');


Route::get('/course', function() { return view('course'); })->name('course');


Route::get('/course-detail', function() { return view('course-detail'); })->name('course-detail');


Route::get('/gallery', function() { return view('gallery'); })->name('gallery');


Route::get('/blog', function() { return view('blog'); })->name('blog');


Route::get('/blog-archive', function() { return view('blog-archive'); })->name('blog-archive');


Route::get('blog-single', function() { return view('blog-single'); })->name('blog-single');


Route::get('/contact', function() { return view('contact'); })->name('contact');


Route::get('/404', function() { return view('404'); })->name('404');
