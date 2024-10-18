<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//tugas 2
Route::get('/home', function () {
    return view('welcome');
});

Route::get('/hello', function(){
    return 'Hello World';
});
//praktikum 1
Route::get('/belajar', function()
{
echo 'Hello Word';
echo 'Saya Sedang Belajar Laravel';
});
//praktikum 2
Route::get('/belajarlaravel', function()
{
echo 'Hello Word';
echo 'Saya Sedang Belajar Laravel';
});
//route resource dikecualikan tugas 1
// Route::resource('namaResource', MahasiswaController::class)->except(['show']);
