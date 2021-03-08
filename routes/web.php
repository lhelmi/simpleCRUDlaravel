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

//untuk pemanggilan id route jangan dimasukan
//ke dalam variabel, default saja
Route::resource('article', 'ArticleController');

//CRUD
// Route::get('/article', 'ArticleController@index')->name('article');
// Route::get('/article/create', 'ArticleController@create')->name('article.create');
// Route::get('/article/{title}', 'ArticleController@show')->name('article.show');
// Route::post('/article', 'ArticleController@store')->name('article.store');
// Route::get('/article/{id}', 'ArticleController@edit')->name('article.edit');
// Route::put('/article/{id}', 'ArticleController@update')->name('article.update');
// Route::delete('/article/{id}', 'ArticleController@destroy')->name('article.destroy');

