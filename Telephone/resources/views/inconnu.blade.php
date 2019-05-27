<!-- inconnu.blade.php est la vue du mauvais numero avec un message audio aléatoire fourni avec scriptSon.js-->
@extends('template')

@section('content')


<div id="ecranTelInconnu">
      <div id="audio">
          <audio controls autoplay id="audioInconnu">

              <source id="audioInconnu" src="">

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
  <script src="{{asset('/js/scriptSon.js')}}"></script>

  
     @endsection
