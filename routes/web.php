<?php


#Route::get('/', function () {
#    return view('welcome');
#});
Route::get('/','testcontroller@welcome');

Route::get('prueba', function (){
  return "hola mundo, soy la ruta de prueba";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
