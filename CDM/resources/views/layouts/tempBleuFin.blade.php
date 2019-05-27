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
    
    <body style="background-color: #e6f3ff">
    	<div class="container">
  		 
  		 	@yield('title')
  		 
    	 	<div> 
    	 
    	 		<h1 class="titre" style="text-align: center; padding-bottom: 20px; text-decoration: #428bca underline">Enigme de la cour des matières</h1>  
			
        			<div class="contenu" style="text-align: center; margin-bottom:20px">
    	  
    	      	  		@yield('content1')
    	      	  
    	      	  		@yield('reminder')
    	      	  
    	      	  		@yield('content2')
    	  
    	  			</div>
    	 	 	
		 	</div>
		</div> 
    </body>
</html>
