<?php

namespace App\Http\Controllers;

use App\Indices;
use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;

class IndiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Recuperation de tout les indices existant en BDD
        $indices = Indices::all();
        return $indices;
    }






    //Return indice table in json format for the scene builder js.
    public function indices2()
    {
        $indices2=Indices::all();
        return view('home')->with('indices2',$indices2);

    }

    //Return indice table in json format for the scene builder js.
    public function indices()
    {
        $indices=Indices::where('obj_text', Input::get('color'))->get();
        return view('amphi')->with('indices',$indices);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Mise en cache des information de remplissage de la table
        $indice = new Indices([
            'rang_x' => $request->get('rang_x'),
            'col_yz'=> $request->get('col_yz'),
            'obj_text'=> $request->get('obj_text'),

            $rang_x=$request->get('rang_x'),
            $col_yz=$request->get('col_yz'),
        //concaténation des  deux colonne pour vérification de doublon
            'xyz'=>($rang_x.'-'.$col_yz)


        ]);

            // Verification de l'existance de l'indice
        if ((Indices::where('xyz',Input::get('rang_x'))->exists()) && (Indices::where('col_yz',Input::get('col_yz'))->exists())) {
            $request->session()->flash('alert-danger', 'Ces coordonées sont déjà utilisées !');
            return redirect()->back();

        }

        //Prevents user from adding negative numbers in the database.
        elseif (
            (Input::get('rang_x') < 1) || (Input::get('col_yz') < 1)
        )
        {
            $request->session()->flash('alert-danger', "Arretez de chercher à faire buger le site avec des nombres négatifs ou de lettres, bande de petits sacripans !");
            return redirect()->back();
        }

        //Prevent user from adding tips out of model limits.
        elseif (
        (
            (Input::get('col_yz') > 11) || (Input::get('rang_x') > 38)
        )
        )
        {
            $request->session()->flash('alert-danger', "Il n'y a que 11 rangées et 38 colonne !");
            return redirect()->back();
        }

        //Prevents user from adding tips where there is no seats.
        elseif (
            (
                (Input::get('rang_x') <= 3) || (Input::get('rang_x') >= 36)
            )
            &&
            (
                Input::get('col_yz') <= 6
            )
        )
        {
            $request->session()->flash('alert-danger', "Ces coordonées désignent les couloirs d'entrée sur les cotés !");
            return redirect()->back();
        }

        else {
            // Ajout de l'indice en BDD
            $indice->save();
            $request->session()->flash('alert-success', 'Indice ajouté avec succès');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // suppresion de l'indice
    public function destroy($id)

    {
//        Recherche de l'id de l'indice
        $indice = Indices::find($id);
        // Suppression de l'indice
        $indice->delete();

        return redirect()->back();
    }
}
