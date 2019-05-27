<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- 		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

        <title>Enigme de la Cour des Matières</title>

<!--         <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	</head>
	
	<body style="background: no-repeat center/100% url('img/fontlab.jpg')">
		
		<div class="container center-align">
			
			<div class="title">
			
                <h3 style="color: white; text-decoration:underline white">Enigme de la Cour des Matières</h3>
                    
            </div>
            
            <div>
            <p style = "color: white; text-decoration: underline white; font-size: 18px">But du jeu :</p> 
            <p style = "color: white; font-size: 16px">Vous devez trouver 3 mots-clés qui vous donneront le mot de passe nécessaire pour débloquer une vidéo.
            Pour trouver les mots, vous devrez résoudre 3 énigmes.
            Vous n'avez pas accès aux bâtiments. Toutes les énigmes peuvent être résolues dans la Cour des Matières.
            </p>
            
            </div>
            
            <div>
            
            <p style = "color: white;">Avant de commencer, vous devez choisir la couleur de votre équipe.</p>
            
			<form action="{{ url('/obsbl') }}" method="POST">
				{{ csrf_field() }}
            	<input class="waves-effect waves-light btn-large blue white-text" style="width: 300px; margin-bottom:10px;" type="submit" name="equipebl" value="Equipe Bleue">
            </form>
          
            <form action="{{ url('/obsro') }}" method="POST">
				{{ csrf_field() }}
            	<input class="waves-effect waves-light btn-large red" style="width: 300px; margin-bottom:10px" type="submit" name="equipero" value="Equipe Rouge">
            </form>
          
            <form action="{{ url('/obsve') }}" method="POST">
				{{ csrf_field() }}
            	<input class="waves-effect waves-light btn-large green" style="width: 300px; margin-bottom:10px" type="submit" name="equipeve" value="Equipe Verte">
            </form>
            
            <form action="{{ url('/obsja') }}" method="POST">
				{{ csrf_field() }}
            	<input class="waves-effect waves-light btn-large yellow" style="width: 300px; margin-bottom:10px" type="submit" name="equipeja" value="Equipe Jaune">
            </form>
            
            <form action="{{ url('/obsvi') }}" method="POST">
				{{ csrf_field() }}            
            	<input class="waves-effect waves-light btn-large purple" style="width: 300px; margin-bottom:10px" type="submit" name="equipevi" value="Equipe Violette">
            </form>
            
            </div>
            
            <div>
            
            @yield('content')
            
            </div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>

	</body>
	
	<footer>
	
		<i class="far fa-copyright"></i>2019
	
	</footer>


</html>