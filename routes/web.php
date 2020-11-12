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

Route::get('/','PagesController@index');
Route::get('/login/{keyword}','LoginController@login');

Route::post('/login/administrator/addBookProccess','BooksController@store');
Route::get('/login/administrator/daftarbuku','BooksController@index');
Route::get('/login/administrator/addBook','BooksController@create');
Route::get('/login/administrator/deleteBook/{book}','BooksController@destroy');
Route::get('/login/administrator/detailBook/{book}','BooksController@show');
Route::get('/login/administrator/detailBook/editBook/{book}','BooksController@edit');

Route::get('/login/administrator/peminjaman','PeminjamanController@index');
Route::get('/login/administrator/detailBook/bookBorrower/{book}','PeminjamanController@show');
Route::post('/login/administrator/updateBookProccess/{book}','BooksController@update');


Route::get('/login/administrator/user','UserController@index');
Route::get('/login/administrator/addUser','UserController@create');
Route::get('/login/administrator/deleteUser/{user}','UserController@destroy');
Route::get('/login/administrator/detailUser/{user}','UserController@show');
Route::get('/login/administrator/detailUser/editUser/{user}','UserController@edit');
Route::post('/login/administrator/updateUserProccess/{user}','UserController@update');

Route::post('/login/administrator/addUserProccess','UserController@store');

Route::get('/login/administrator/pengembalian','PengembalianController@index');
