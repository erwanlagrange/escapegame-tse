@extends ('layouts.tempJaune')

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
		<div class="border border-warning" style="border-width: 3px ! important; padding-top: 5px; margin-bottom:12px">
			<p style="font-size: 18px; text-align:center">Enigme 3 : </p>
			<p style="font-size: 16px">"Sur les 3, seul le bâtiment IJ compte. Dans ce bâtiment, la seconde est 5ème, la 5ème est seconde, la 7ème est 6ème, la 9ème est 3ème, la 10èmè est 7ème, la 16ème est 8ème, la 20ème est première et la 51ème est 4ème. L'un des points de départ des autres équipes peut être le début de la solution."</p>
		</div>
		<div class="form">
    		<form action="{{ action('EnigmeControllerJa@validE3')}}" method="POST">
        		{{ csrf_field() }}
        		<label for="enigme3ja">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous en MAJUSCULES puis validez pour passer à l'énigme suivante.</label><br>
    			<input id="enigme3ja" type="text" name="enigme3ja" placeholder="Votre réponse" style="margin-right:5px; margin-bottom:5px">
    			<button type="submit" style="margin-bottom:30px">Valider</button>
			</form>
		</div>
	</div>
@endsection