<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numero = $_POST['number'];
        
        $bonNumero = '0665782411';
        
        $monNumero='0698950408';
        
       
        
        if($numero == $bonNumero | $numero == $monNumero ){
            
           
            
            return view('appel');
        }
        
        else{
            
            return view('inconnu');
            
        }
        
    }
}
    