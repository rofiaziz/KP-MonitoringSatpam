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
    return view('landing');
});
Route::get('/Profile', function () {
    return view('profile');
});
Route::get('/Register', function () {
    return view('Register');
});

Route::get('/FormRegister', function () {
    return view('FormRegister');
});
Route::get('/Login', function () {
    return view('Login');
});
Route::get('/JoinNow', function () {
    return view('JoinNow');
});
Route::get('/Message', function () {
    return view('Message');
});
Route::get('/AddMessage',function(){
    return view('AddMessage');
});
Route::get('/Kota', function () {
    return view('Kota');
});
Route::get('/FormKota', function () {
    return view('FormKota');
});
Route::get('/Kategori', function () {
    return view('Kategori');
});
Route::get('/FormKategori', function () {
    return view('FormKategori');
});