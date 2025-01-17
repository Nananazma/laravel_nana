<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestBookController;



Route::get( '/welcome', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/master', function () {
    return view('template/master');
});


Route::get('/satu', [GuestBookController::class, 'satu']);
Route::get('/dua', [GuestBookController::class, 'dua']);
