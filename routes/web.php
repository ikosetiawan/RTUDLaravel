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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/pertanyaan', 'CrudController@ShowQuest');
Route::get('/pertanyaan/create', 'CrudController@InsertQuest');
Route::post('/create', 'CrudController@CreateQuest');

Route::get('/jawaban', 'CrudController@ShowAnswer');

Route::get('/tanya/{id}', 'CrudController@ShowTanya');
Route::post('/jawaban/{id}', 'CrudController@TanyaCreat');
