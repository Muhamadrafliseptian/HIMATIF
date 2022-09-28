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
    return view('wargahimatif.menu.home');
});

Route::get('/divisi/bph', function () {
    return view('wargahimatif.menu.divisi.bph.index');
});

Route::get('/about_us/sejarah', function () {
    return view('wargahimatif.menu.about_us.sejarah');
});

Route::get('/program/study_club', function () {
    return view('wargahimatif.menu.program.study_club');
});

Route::get('/event/', function () {
    return view('wargahimatif.menu.event.index');
});
