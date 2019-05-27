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

Route::get('/', 'quizcontroller@quizInit');

Route::post('/quizbla', 'quizcontroller@quizJson');

Route::get('/echec', function () {
    return view('echec');
});

Route::get('/echec2', function () {
    return view('echec2');
});

Route::get('/echec3', function () {
    return view('echec3');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/error1', function () {
    return view('indexEchec1');
});

Route::get('/error2', function () {
    return view('indexEchec2');
});
