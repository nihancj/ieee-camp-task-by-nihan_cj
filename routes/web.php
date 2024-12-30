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
'SAC / VSAC' => [
    ['name' => 'Varghese Cherian', 'post' => 'SAC Advisor', 'img' => 'https://ieee-link.org/assets/images/team/2024/SAC_VSAC/Varghese%20Cherian.webp'],
    ['name' => 'Shone Jose', 'post' => 'Chair, SAC', 'img' => 'https://ieee-link.org/assets/images/team/2024/SAC_VSAC/Shone%20Jose.webp'],
    ['name' => 'Sreeram M', 'post' => 'VSAC - Malabar Hub', 'img' => 'https://ieee-link.org/assets/images/team/2023/SAC%20VSAC/Sreeram%20M%20-%20VSAC,%20Malabar.jpg'],
    ['name' => 'Dr. A. Dolly Mary', 'post' => 'VSAC - Kochi Hub', 'img' => 'https://ieee-link.org/assets/images/team/2024/SAC_VSAC/Dolly%20Marry.webp'],
    ['name' => 'Dr. John George', 'post' => 'VSAC - Travancore Hub', 'img' => 'https://ieee-link.org/assets/images/team/2023/SAC%20VSAC/John%20George%20-%20VSAC,%20Travancore.jpg'],
],
'Core Team' => [
    ['name' => 'Vaishakh Suresh', 'post' => 'Section Student Representative', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/Vaishakh%20Suresh.webp'],
    ['name' => 'Anagha Ravikumar', 'post' => 'Co-Section Student Representative', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/anagha%20ravikumar.webp'],
    ['name' => 'R Hariprasad', 'post' => 'Program Coordinator', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/R%20Hariprasad.webp'],
    ['name' => 'Aswathi T', 'post' => 'Memebership Development Coordinator', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/Aswathi%20T.webp'],
    ['name' => 'Rini Sara Markose', 'post' => 'Treasurer ', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/Rini%20Sara%20Markose.webp'],
    ['name' => 'Jeswin Joshy', 'post' => 'Project and Technical Coordinator', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/jeswin%20joshy.webp'],
    ['name' => 'Haritha Harilal', 'post' => 'Wie Coordinator ', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/Haritha%20Harilal.webp'],
    ['name' => 'Devarsh R Namboothiri', 'post' => 'Digital Media Coordinator ', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/Devarsh%20R%20Namboothiri.webp'],
    ['name' => 'Rithika C', 'post' => 'HSR-Malabar Hub ', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/Rithika%20Santhosh.webp'],
    ['name' => 'Mohamed Shibin', 'post' => 'Co HSR-Malabar Hub ', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/SHIBIN.webp'],
    ['name' => 'Manu C Madhu', 'post' => 'HSR-Kochi Hub ', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/Manu%20c%20Madhu.webp'],
    ['name' => 'Ann Maria Simon', 'post' => 'Co HSR-Kochi Hub ', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/Ann%20Maria%20Simon.webp'],
    ['name' => 'S Amina Nagmi', 'post' => 'HSR-Travancore Hub', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/AMINA%20NAGMI.webp'],
    ['name' => 'Abhinandana Mohan R A', 'post' => 'Co HSR-Travancore Hub ', 'img' => 'https://ieee-link.org/assets/images/team/2024/Core%20Team/ABHINANDANA%20MOHAN%20R%20A.webp'],
],
];
$roles = ['SAC / VSAC', 'Core Team'];
    return view('2024', ['officers' => $officers], ['roles' => $roles]);
})->name('2024');
