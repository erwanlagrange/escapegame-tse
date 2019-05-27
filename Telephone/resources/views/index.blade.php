<!-- index.blade.php est la vue du téléphone verrouillé-->
@extends('template')

@section('content')

<div id="ecranTelVerrouiller" >

          <div id ="hautTelVerrouiller">

          </div>

          <div id="logo">

          </div>

          <div>

              <center>
                <a href="{{asset('/numero')}}">
                  <button  id ="btnDeverrouiller" class="btn  btn-light ">Déverrouiller</button>
                </a>
              </center>

          </div>

  </div>

@endsection
