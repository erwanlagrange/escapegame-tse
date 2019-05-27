@extends ('layouts.tempRouge')

@section('title')


	
@endsection

@section('reminder')
	<div class="row">
		<div class="col text-right"><p >Enigme 1 : </p></div>
		<div class="col text-left"><p >DESIGN</p></div>
		<div class="w-100"></div>
		<div class="col text-right"><p style="margin-bottom: 5px">Enigme 2 : </p></div>
		<div class="col text-left"><p style="margin-bottom: 12px">TECHNOLOGIE</p></div>			
	</div>
@endsection

@section ('content')

	<div class="col justify-content-center">
		<div class="border border-danger" style="border-width: 3px ! important; padding-top: 5px; margin-bottom:12px">
			<p style="font-size: 18px; text-align:center">Enigme 3 : </p>
			<p style="font-size: 16px">"Sur les 3, seul le premier compte. Dans ce batiment, la 2ème est première, la 3ème est seconde, la 7ème est 5ème, la 8ème est 4ème, la 9ème est 8ème, la 13ème est 7ème, la 34ème est 3ème et la 38ème est 6ème. L'un des points de départ des autres équipes peut être le début de la solution."</p>
		</div>
		<div class="form">
    		<form action="{{ action('EnigmeControllerRo@validE3')}}" method="POST">
        		{{ csrf_field() }}
        		<label for="enigme3ro">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous en MAJUSCULES puis validez pour passer à l'énigme suivante.</label><br>
    			<input id="enigme3ro" type="text" name="enigme3ro" placeholder="Votre réponse" style="margin-right:5px; margin-bottom:5px">
    			<button type="submit" style="margin-bottom:30px">Valider</button>
			</form>
		</div>
	</div>
@endsection