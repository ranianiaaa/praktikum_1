<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () { 
    return view('welcome');
});

Route::get('/biodata', function () { 
    return view('biodata');
});

Route::get('/orangtua', function () { 
    return view('orangtua');
});

Route::get('/sekolah', function () { 
    return view('sekolah');
});
