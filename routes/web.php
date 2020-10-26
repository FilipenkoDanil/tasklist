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

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);

Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', 'TaskController')->except([
        'index', 'create', 'show', 'edit'
    ]);
    Route::get('/', 'TaskController@index')->name('index');
});

