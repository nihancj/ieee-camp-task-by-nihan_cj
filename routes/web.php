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
    ['name' => 'Varghese Cherian', 'post' => 'SAC Advisor', 'img' => asset('assets/images/2024/Varghese_Cherian.webp')],
    ['name' => 'Shone Jose', 'post' => 'Chair, SAC', 'img' => asset('assets/images/2024/Shone_Jose.webp')],
    ['name' => 'Sreeram M', 'post' => 'VSAC - Malabar Hub', 'img' => asset('assets/images/2024/Sreeram_M_-_VSAC,_Malabar.jpg')],
    ['name' => 'Dr. A. Dolly Mary', 'post' => 'VSAC - Kochi Hub', 'img' => asset('assets/images/2024/Dolly_Marry.webp')],
    ['name' => 'Dr. John George', 'post' => 'VSAC - Travancore Hub', 'img' => asset('assets/images/2024/John_George_-_VSAC,_Travancore.jpg')],
],
'Core Team' => [
    ['name' => 'Vaishakh Suresh', 'post' => 'Section Student Representative', 'img' => asset('assets/images/2024/Vaishakh_Suresh.webp')],
    ['name' => 'Anagha Ravikumar', 'post' => 'Co-Section Student Representative', 'img' => asset('assets/images/2024/anagha_ravikumar.webp')],
    ['name' => 'R Hariprasad', 'post' => 'Program Coordinator', 'img' => asset('assets/images/2024/R_Hariprasad.webp')],
    ['name' => 'Aswathi T', 'post' => 'Memebership Development Coordinator', 'img' => asset('assets/images/2024/Aswathi_T.webp')],
    ['name' => 'Rini Sara Markose', 'post' => 'Treasurer ', 'img' => asset('assets/images/2024/Rini_Sara_Markose.webp')],
    ['name' => 'Jeswin Joshy', 'post' => 'Project and Technical Coordinator', 'img' => asset('assets/images/2024/jeswin_joshy.webp')],
    ['name' => 'Haritha Harilal', 'post' => 'Wie Coordinator ', 'img' => asset('assets/images/2024/Haritha_Harilal.webp')],
    ['name' => 'Devarsh R Namboothiri', 'post' => 'Digital Media Coordinator ', 'img' => asset('assets/images/2024/Devarsh_R_Namboothiri.webp')],
    ['name' => 'Rithika C', 'post' => 'HSR-Malabar Hub ', 'img' => asset('assets/images/2024/Rithika_Santhosh.webp')],
    ['name' => 'Mohamed Shibin', 'post' => 'Co HSR-Malabar Hub ', 'img' => asset('assets/images/2024/SHIBIN.webp')],
    ['name' => 'Manu C Madhu', 'post' => 'HSR-Kochi Hub ', 'img' => asset('assets/images/2024/Manu_c_Madhu.webp')],
    ['name' => 'Ann Maria Simon', 'post' => 'Co HSR-Kochi Hub ', 'img' => asset('assets/images/2024/Ann_Maria_Simon.webp')],
    ['name' => 'S Amina Nagmi', 'post' => 'HSR-Travancore Hub', 'img' => asset('assets/images/2024/AMINA_NAGMI.webp')],
    ['name' => 'Abhinandana Mohan R A', 'post' => 'Co HSR-Travancore Hub ', 'img' => asset('assets/images/2024/ABHINANDANA_MOHAN_R_A.webp')],
],
];
$roles = ['SAC / VSAC', 'Core Team'];
    return view('2024', ['officers' => $officers], ['roles' => $roles]);
})->name('2024');
