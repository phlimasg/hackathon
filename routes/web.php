<?php

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
})->name('home');
Route::get('/preciso_ajuda', function () {
    return view('ajuda');
})->name('ajuda');
Route::get('/cadastro_idoso', function () {
    return view('cadastro_idoso');
})->name('cad_idoso');
Route::get('/bank', function () {
    return view('cadastro_bank');
})->name('cad_bank');

Auth::routes();

Route::get('/home', function () {
    return view('home_idoso');
})->name('home_idoso');
