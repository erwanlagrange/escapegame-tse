@extends('layouts.app')

@section('content')

<div class="container">

    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    PREVIEW
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
{{--                    Création d'un compte administrateur supplémentaire--}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __("Créer un compte admin supplémentaire") }}</a>
                        </li>

                </ul>
            </div>
        </div>
    </nav>
    {{--CONTENU--}}
    <div id="j21">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>
        <div class="row">
            <div class="col-9" id="amphi21">
                <script>
                    var PHPtoJs = @json($indices2);
                </script>
                <div id="webgl"></div>
                <script src="{{asset('js/sceneadmin.js')}}"></script>

            </div>
            <div style="border-left: #4e555b 1px solid; margin-bottom: 10px;" class="col">
                <form method="POST" action="{{ route('indices.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="selectrang">Selectionnez une colonne</label>
                        <input type="text" class="form-control" id="selectrang" placeholder="Min: 1 , Max: 38" name="rang_x">
                    </div>
                    <div class="form-group">
                        <label for="selectcol">Selectionnez une rangée</label>
                        <input type="text" class="form-control" id="selectcol" placeholder="Min: 1 , Max: 11" name="col_yz">
                    </div>
                    <div class="form-group">
                        <label for="#">Selectionnez la couleur d'équipe</label>
                        <select class="form-control" name="obj_text">
                            <option value="Ro">Rouge</option>
                            <option value="Bl">Bleu</option>
                            <option value="Ja">Jaune</option>
                            <option value="Ve">Vert</option>
                            <option value="Vi">Violet</option>
                    </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter l'indice</button>
                </form>
            </div>
        </div>
        <div class="row">

                <table class="table table-dark table-striped table-responsive-sm table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" scope="col">Couleur</th>
                        <th class="text-center" scope="col">Rangée</th>
                        <th class="text-center" scope="col">Colonne</th>
                        <th class="text-center" scope="col">Supprimer l'indice</th>
                    </tr>
                    <tbody>
                    {{-- Affichage des indices dans un tableau--}}
                    <?php $indices = App\Indices::all();?>
                    </thead>
                    @foreach($indices as $indice)
                        <tr>
                        <td class="text-center">{{ $indice->obj_text }}</td>
                        <td class="text-center">{{ $indice->rang_x }}</td>
                        <td class="text-center">{{ $indice->col_yz }}</td>
                            <td><form  method="POST" action="{{ route('indices.destroy', $indice->id) }}">
                                    {{ csrf_field() }}{{ method_field('DELETE') }}
                                    <button class="btn btn-sm btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
        </div>
    </div>
    <div id="j22">
        <div class="flash-message">
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                @if(Session::has('alert-' . $msg))

                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                @endif
            @endforeach
        </div>
        <div class="row">
            <div class="col-9">
{{--                AMPHI INTEGRATION--}}
            </div>
            <div style="border-left: #4e555b 1px solid; margin-bottom: 10px;" class="col">
                <form method="POST" action="{{ route('indices.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="selectrang2">Selectionnez une rangée</label>
                        <input type="text" class="form-control" id="selectrang2" placeholder="Ex : 9">
                    </div>
                    <div class="form-group">
                        <label for="selectcol2">Selectionnez une colonne</label>
                        <input type="text" class="form-control" id="selectcol2" placeholder="Ex : 12">
                    </div>
                    <div class="form-group">
                        <label for="#">Selectionnez la couleur d'équipe</label>
                        <select class="form-control">
                            <option selected>Choisissez ...</option>
                            <option>Rouge</option>
                            <option>Bleu</option>
                            <option>Jaune</option>
                            <option>Vert</option>
                            <option>Violet</option>
                        </select>
                    </div>
                    <button id= type="submit" class="btn btn-primary">Ajouter l'indice</button>
                </form>
            </div>
        </div>
        <div class="row">

            <table class="table table-dark table-striped table-responsive-sm table-bordered">
                <thead>
                <tr>
                    <th class="text-center" scope="col">Couleur</th>
                    <th class="text-center" scope="col">Rangée</th>
                    <th class="text-center" scope="col">Colonne</th>
                    <th class="text-center" scope="col">Supprimer l'indice</th>
                </tr>
                <tbody>
                <?php $indices = App\Indices::all();?>
                </thead>
                @foreach($indices as $indice)
                    <tr>
                        <td class="text-center">{{ $indice->obj_text }}</td>
                        <td class="text-center">{{ $indice->rang_x }}</td>
                        <td class="text-center">{{ $indice->col_yz }}</td>
                        <td><form  method="POST" action="{{ route('indices.destroy', $indice->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-sm btn-danger" type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
