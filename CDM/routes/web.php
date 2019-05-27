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
//Accueil
Route::get('/', 'EquipeController@index');

//route équipe bleue
Route::get('/obsbl', 'EquipeController@equipeBl');
Route::post('/obsbl', 'EquipeController@equipeBl');

Route::post('/coobl', 'EnigmeControllerBl@validE1');
Route::get('/coobl', 'EnigmeControllerBl@validE1');

Route::post('/refbl', 'EnigmeControllerBl@validE2');

Route::post('/inibl', 'EnigmeControllerBl@validE3');

Route::post('/vidbl', 'EnigmeControllerBl@validE4');


//route équipe rouge
Route::get('/obsro', 'EquipeController@equipeRo');
Route::post('/obsro', 'EquipeController@equipeRo');

Route::post('/cooro', 'EnigmeControllerRo@validE1');
Route::get('/cooro', 'EnigmeControllerRo@validE1');

Route::post('/refro', 'EnigmeControllerRo@validE2');

Route::post('/iniro', 'EnigmeControllerRo@validE3');

Route::post('/vidro', 'EnigmeControllerRo@validE4');


//route équipe verte
Route::get('/obsve', 'EquipeController@equipeVe');
Route::post('/obsve', 'EquipeController@equipeVe');

Route::post('/coove', 'EnigmeControllerVe@validE1');
Route::get('/coove', 'EnigmeControllerVe@validE1');

Route::post('/refve', 'EnigmeControllerVe@validE2');

Route::post('/inive', 'EnigmeControllerVe@validE3');

Route::post('/vidve', 'EnigmeControllerVe@validE4');


//route équipe jaune
Route::get('/obsja', 'EquipeController@equipeJa');
Route::post('/obsja', 'EquipeController@equipeJa');

Route::post('/cooja', 'EnigmeControllerJa@validE1');
Route::get('/cooja', 'EnigmeControllerJa@validE1');

Route::post('/refja', 'EnigmeControllerJa@validE2');

Route::post('/inija', 'EnigmeControllerJa@validE3');

Route::post('/vidja', 'EnigmeControllerJa@validE4');


//route équipe violette
Route::get('/obsvi', 'EquipeController@equipeVi');
Route::post('/obsvi', 'EquipeController@equipeVi');

Route::post('/coovi', 'EnigmeControllerVi@validE1');
Route::get('/coovi', 'EnigmeControllerVi@validE1');

Route::post('/refvi', 'EnigmeControllerVi@validE2');

Route::post('/inivi', 'EnigmeControllerVi@validE3');

Route::post('/vidvi', 'EnigmeControllerVi@validE4');


// Auth::routes();

// Route::get('enigme', 'EnigmeController@create');
// Route::post('enigme', 'EnigmeController@store');

