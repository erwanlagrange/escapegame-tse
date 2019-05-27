<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipe;


class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipes = Equipe::all();
    
        return view('accueil')->with('equipe', $equipes);
        
    }
    
    public function equipeBl(){
     
        $equipe = Equipe::where ('couleur', '=', 'bleue')->first();
        
        return view('ebl1', ['equipe' => $equipe]);
    }
    
    public function equipeRo(){
        
        $equipe = Equipe::where ('couleur', '=', 'rouge')->first();
        
        return view('ero1', ['equipe' => $equipe]);
    }
    
    public function equipeVe(){
        
        $equipe = Equipe::where ('couleur', '=', 'verte')->first();
        
        return view('eve1', ['equipe' => $equipe]);
    }
    
    public function equipeJa(){
        
        $equipe = Equipe::where ('couleur', '=', 'jaune')->first();
        
        return view('eja1', ['equipe' => $equipe]);
    }
    
    public function equipeVi(){
        
        $equipe = Equipe::where ('couleur', '=', 'violette')->first();
        
        return view('evi1', ['equipe' => $equipe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
//         $equipe = Equipe::find(1);
//         return view('ebl1')->with('equipe'->$id);
            
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
    public function destroy($id)
    {
        //
    }
}
