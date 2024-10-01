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

Route::get('/', ['uses' => 'PagesController@home'])->name('home');
Route::get('/about', ['uses' => 'PagesController@about'])->name('about');
Route::get('/connected', ['uses' => 'PagesController@connected'])->name('connected');

Route::get('/daos', ['uses' => 'DaoController@showAll'])->name('show_all_daos');
Route::get('/daos/{id}', ['uses' => 'DaoController@show'])->name('show_dao');

Route::get('/start', ['uses' => 'DaoController@create'])->name('create_dao');
Route::get('/daos/{id}/info', ['uses' => 'DaoController@edit'])->name('edit_dao');