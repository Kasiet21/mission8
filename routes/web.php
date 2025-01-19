<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cloud', function () {
     return view('cloud');
    
});
Route::get('/copy', function () {
    return view('welcome2');
   
});