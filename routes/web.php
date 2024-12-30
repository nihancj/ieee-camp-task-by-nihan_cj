<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function() {
    return view('about');
});

Route::get('/office/2024', function () {
$officers = [
    ['name' => 'Linus', 'post' => 'tech', 'img' => 'https://ieee-link.org/assets/images/team/2024/Functional%20Teams/Project%20and%20Technical%20Team/arjun%20p.webp'],
];
    return view('2024', ['people' => $officers]);
})->name('2024');
