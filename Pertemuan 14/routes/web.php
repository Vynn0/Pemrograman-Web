<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\BiodataController;

Route::get('/', function () {
    return view('welcome');
});

// Membuat http://pemrograman-web-b.test/hello

Route::get('/hello', function() {
    return 'Whats up mate?';
});

Route::get('/belajar', function() {
    echo '<h1>Whats up with the world?</h1>';
    echo 'Pretty cool.';
});

Route::get('/biodata/{namadepan}/{namabelakang}', function($namadepan, $namabelakang) {
    return "<h1>Whats up with the world?</h1>
            Welcome, $namadepan $namabelakang";
});

Route::get('/web', function() {
    return view('web_home'); // Goes to home.blade.php
}) -> name('web.home');

Route::get('/web/about', function() {
    return view('web_about'); // Goes to about.blade.php
}) -> name('web.about');

Route::get('/web/contact', function() {
    return view('web_contact'); // Goes to contact.blade.php
}) -> name('web.contact');

Route::get('/new', [PageController::class, 'home'])->name('web.home');
Route::get('/new/about', [PageController::class, 'about'])->name('web.about');
Route::get('/new/contact', [PageController::class, 'contact'])->name('web.contact');

Route::get('/baru/home', [HalamanController::class, 'home'])->name('topmenu1');
Route::get('/baru/about', [HalamanController::class, 'about'])->name('topmenu2');
Route::get('/baru/contact', [HalamanController::class, 'contact'])->name('topmenu3');

// Pertemuan 14

Route::resource('biodatas', BiodataController::class);
// Route::get('/biodatas', [BiodataController::class, 'index'])->name('biodatas');
// Route::get('/biodatas/create', [BiodataController::class, 'create'])->name('biodatas.create');
// Route::get('/biodatas/{id}edit', [BiodataController::class, 'edit'])->name('biodatas.edit');