<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/webn09c', 'App\Http\Controllers\webn09a@webn09b');
