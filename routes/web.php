<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function ()  {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/Mahasiswa', function () {
    $npm = [123,124,125,126];
    $nama = ['Cantika','Zahra','Melati','Rara'];
    $jumlah = count ($npm);
    return view('mahasiswa',compact('npm','jumlah','nama'));
});

Route::get('/profile', function () {
    $nama = 'Mauli Fathia Zahra';
    //return view('profile' , compact ('nama'));
    return view('profile')->with('nama', $nama);
});
