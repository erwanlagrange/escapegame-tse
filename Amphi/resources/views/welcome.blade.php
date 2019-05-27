<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ENIGME DE L'AMPHITHEATRE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{asset('css/index.css')}}" rel="stylesheet">


    </head>
    <body>


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="grey" href="{{ url('/home') }}">Panneau d'administration</a>
                        <a class="grey" href="{{ url('/logout') }}"> Déconnexion </a>
                    @else
                        <a class="grey" href="{{ route('login') }}">Accéder au panneau d'administration</a>

                    @endauth
                </div>
            @endif



            <div class="content">
                <div class="title m-b-md ">
                    Choisissez votre équipe !
                </div>

                <div class="links">

                    <form action="{{ route('scene') }}" method="POST">
                        {{csrf_field()}}
                        <button class="btn btn-lg btn-outline-success blue"   ><input type="hidden" name="color" value="Bl"> Bleu   </button>
                    </form>

                    <form action="{{ route('scene') }}" method="POST">
                        {{csrf_field()}}
                        <button class="btn btn-lg btn-outline-success red"    ><input type="hidden" name="color" value="Ro"> Rouge  </button>
                    </form>

                    <form action="{{ route('scene') }}" method="POST">
                        {{csrf_field()}}
                        <button class="btn btn-lg btn-outline-success green"  ><input type="hidden" name="color" value="Ve"> Vert   </button>
                    </form>

                    <form action="{{ route('scene') }}" method="POST">
                        {{csrf_field()}}
                        <button class="btn btn-lg btn-outline-success yellow" ><input type="hidden" name="color" value="Ja"> Jaune  </button>
                    </form>

                    <form action="{{ route('scene') }}" method="POST">
                        {{csrf_field()}}
                        <button class="btn btn-lg btn-outline-success violet" ><input type="hidden" name="color" value="Vi"> Violet </button>
                    </form>


                </div>
            </div>

        </div>

        <script src="{{asset('scripts/index.js')}}"></script>



    </body>
</html>
