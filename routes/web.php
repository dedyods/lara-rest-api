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
});


Route::get('mahasiswa', function() 
{
    return view('mahasiswa.index');
});


Route::get('prodi', function() 
{
    return view('prodi.index');
});


Route::get('parameter', function() 
{
    return view('parameter.index');
});

Route::get('dashboard', function() 
{
    return view('dashboard');
});