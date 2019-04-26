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

Route::get('/questaoUm', 'Controller@questaoUm')->name('questaoUm');

Route::get('/questaoDois', 'Controller@questaoDois')->name('questaoDois');

Route::get('/questaoTres', 'Controller@questaoTres')->name('questaoTres');

Route::get('/tarefa', 'TarefaController@list')->name('tarefa');


