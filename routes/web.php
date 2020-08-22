<?php

use Illuminate\Support\Facades\Route;

Route::GET('/', 'studentcontroller@index')->name('home');
Route::GET('/create', 'Studentcontroller@create')->name('create');
Route::POST('/create', 'Studentcontroller@store')->name('store');
Route::GET('/edit/{id}', 'Studentcontroller@edit')->name('edit');
Route::POST('/update/{id}', 'Studentcontroller@update')->name('update');
Route::DELETE('/delete/{id}', 'Studentcontroller@delete')->name('delete');


/*Route::get('/', function () {
    return view('welcome');
});*/

// Route::get('/hello', function () {
//     return "hello";
// });

// Route::get('/hello/{id}', function ($id) {
//     return "hello your id is :" . $id;
// });

// Route::GET('/testmessage', 'testcontroller@index');
