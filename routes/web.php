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


// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/', ('MahasiswaController@index'));
Route::get('/admin/home', function() {return view('admin/home');});
// Route::get('/', [MahasiswaController::class, 'index']);
Route::resource('master-mahasiswa', ('MahasiswaController'));
Route::post('master-mahasiswa/delete/{id}', ('MahasiswaController@destroy'))->name('mahasiswa.destroy');
