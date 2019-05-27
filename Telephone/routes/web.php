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



/* la vue index est la vue du telephone verrouillé*/

Route::get('/', function () {
        return view('index');
});

/* la vue numero est a vue pour taper le numero de Théo*/  
   
Route::get('/numero', function () {
        return view('numero');
    });


/* la route POST pour recupérer le numero et l'envoyer a Telcontroller*/

Route::post('/numero', 'TelController@index');

    
/* la vue inconnu s'affiche si le numero n'est pas le bon*/

Route::get('/inconnu', function () {
            return view('inconnu');
        });

/* la vue du bon numero avec le message de Théo "->middleware('auth')" middleware bloque l'accès a cette vue si l'on force l'url */

    Route::get('/appel', function () {
        return view('appel');
    })->middleware('auth');
    

/* si l'url est du message de théo est rentré en dure dans le navigateur alors il sera renvoyé a la vue ou il doit taper le numero*/

    Route::get('/appel', function () {
        return view('numero');
    });
