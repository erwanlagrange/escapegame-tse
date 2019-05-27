<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
		<link href="{{ asset('../public/css/app.css') }}" rel="stylesheet" type="text/css" >
        <script type="text/javascript" src="{{ asset('../public/js/app.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    </head>
    
    <body style="background-color: #ccffdd">
    	<div class="container" style="margin: 0, auto">
    		<div class="col justify-content-center">
    		
  		 		<div>@yield('title')</div>
    
    	 		<div> 
    	 			<h1 class="titre" style="text-align: center; padding-bottom: 5px; text-decoration: #00C851 underline">Enigme de la cour des matières</h1>
    	 		</div>  
    	  
    	 		<div class="consignes" style="text-align: center">
					<div class="row-md-auto" style="text-align: center">
							<p><a style = "text-decoration: black underline; font-size: 15px">Votre objectif :  </a></p>
							<p>Trouver <strong>3 mots-clés</strong> qui vous permettront de débloquer une vidéo. 
							Cette dernière vous mettra sur la piste de Théo.</p>
					</div>
					<div class="row-md-auto" style="text-align: center">
							<p><a style = "text-decoration: black underline; font-size: 15px">Consignes :  </a></p>
							<p>Vous devez tout d'abord rejoindre votre point de départ indiqué sur le plan ci-dessous en fonction 
							 la couleur de votre équipe.</p>
					</div>
					<div class="row-md-auto" style="text-align: center; margin-bottom:15px">
							<p><a style = "text-decoration: black underline; font-size: 15px">Note importante :  </a></p>
							<p>Vous n'avez pas accès aux bâtiments, toutes les énigmes peuvent être résolues dans la cour des matières.</p>
    				</div>
    					@yield('reminder')
    		   
        			<div class="col justify-content-center">
    	  
    	      	  		@yield('content')
    	  
    	  			</div>
    	 	
    	 			<div>
    	 
    	 				<img src="img/plancdm3.png" class="img-fluid border border-success" style="padding:30px; border-width: 3px ! important;" alt="Plan de la cour des matières" /></img>
                   
		 			</div>
		 	
		 		</div>
		 	</div>
		 </div>
    </body>
</html>
