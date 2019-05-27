<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;




class quizcontroller extends Controller
{
    public function quizInit() {

        $badge1 = "";
        $badge2 = "";
        $badge3 = "";
        $badge4 = "";
        $badge5 = "";

        $quizRep1 = "";
        $quizRep2 = "";
        $quizRep3 = "";
        $quizRep4 = "";
        $quizRep5 = "";


        return view('index', compact('badge1','badge2','badge3','badge4','badge5', 'quizRep1', 'quizRep2', 'quizRep3', 'quizRep4', 'quizRep5' ));

    }

    public function quizJson()
    {
        $quizJson = file_get_contents(__DIR__ . "/data.json");
        $quizData = json_decode($quizJson);
        $quizRep = $_POST;

        $validate = [];




        for ($i = 1; $i <= 5; $i++) {

            $code = "code".$i;

            if ($quizRep["q$i"] == $quizData->rep->$code) {

                $validate["q$i"] = 1 ;


            } elseif ($quizRep["q$i"] !== $quizData->rep->code1 and $quizRep["q$i"] == $quizData->rep->code2 || $quizRep["q$i"] == $quizData->rep->code3 || $quizRep["q$i"] == $quizData->rep->code4 || $quizRep["q$i"] == $quizData->rep->code5) {


                $validate["q$i"] = 2 ;


            } else {

                $validate["q$i"] = 3 ;

            }
            
            $var = "badge$i";

            if ($validate["q$i"] == 1 ) {
                $$var = "badge-success";


            }

            elseif ($validate["q$i"] == 2 ) {
                $$var = "badge-warning";


            }


            elseif ($validate["q$i"] == 3 ){
                $$var = "badge-danger";


            }


        }
        $validateJson = json_encode($validate);
        $file = __DIR__ ."datajsonvalidate.json";

        file_put_contents($file, $validateJson);

        if ($validate["q1"] == 1 and $validate["q2"] == 1 and $validate["q3"] == 1 and $validate["q4"] == 1 and $validate["q5"] == 1) {

            return view('success');
        }

        else {

            $lose = rand(1,2);
            $quizRep1 = $quizRep["q1"];
            $quizRep2 = $quizRep["q2"];
            $quizRep3 = $quizRep["q3"];
            $quizRep4 = $quizRep["q4"];
            $quizRep5 = $quizRep["q5"];

            return view("indexEchec$lose", compact('badge1','badge2','badge3','badge4','badge5', 'quizRep1', 'quizRep2', 'quizRep3', 'quizRep4', 'quizRep5' ));
        }

    }
}
