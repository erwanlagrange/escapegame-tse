<!-- Appel.blade.php est la vue du bon numero avec le message de théo-->
@extends('template')

@section('content')


  <div id ="ecranTheo">

            <div id="audio">

                <audio controls autoplay>

                    <source src="{{asset('Fake/Solution.mp3')}}">

                </audio>

            </div>

            <div class="col-12 divInconnu">

                <center>
                  <a href="{{asset('/numero')}}">
                    <button type="submit" id ="btnInconnu" class="btn  btn-success  ">
                      <img class="btnInconnu" src="img/telephonegris.png">
                    </button>
                  </a>
                </center>

            </div>


        </div>
        
        
   @endsection
