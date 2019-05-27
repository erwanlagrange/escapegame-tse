<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enigme;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Redirect;

class EnigmeControllerBl extends Controller
{
    
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('ebl2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
        
   }
   
   
   public function validE1(Request $request){
       
       $valider1 = $request->input('enigme1bl');
       
       if ($valider1 == 'DESIGN'){
          
           //$numero++;
           //A voir: mettre variables globales dans un fichier.php séparé/ utiliser namespace / use
           //return view($page[$numero]);  
           return view('ebl2');
           
       }
       else {
           
           return redirect()->back();
           
       }     
   }
   
   public function validE2(Request $request){
       
       $valider2 = $request->input('enigme2bl');
       
       if ($valider2 == 'TECHNOLOGIE'){
           
           return view('ebl3');
           
       }
       else {
           
           return view('ebl2');
           
       }
   }
   
   public function validE3(Request $request){
       
       $valider3 = $request->input('enigme3bl');
       
       if ($valider3 == 'ACADEMIE'){
           
           return view('ebl4');
           
       }
       else {
           
           return view('ebl3');
           
       }
   }
   
   public function validE4(Request $request){
       
       $valider4 = $request->input('enigme4bl');
       
       if ($valider4 == 'DTA'){
           
           return view('ebl5');
           
       }
       else {
           
           return view('ebl4');
           
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
    public function destroy($id)
    {
        //
    }
}
