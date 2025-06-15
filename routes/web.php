<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/help-business', function () {
    return view('help-business');
});

Route::get('/help-talent', function () {
    return view('help-talent');
});

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/reset-password', function () {
    return view('reset-password');
});