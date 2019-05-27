@extends ('layouts.tempBleu')

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
		<div class="border border-primary" style="border-width: 3px ! important; padding-top: 5px; margin-bottom:12px">
			<p style="font-size: 18px; text-align:center">Enigme 3 : </p>
			<p style="font-size: 16px">"Au point de départ de l'équipe jaune. A propos du bâtiment B : la 3ème est la seconde, la 7ème est la 8ème, la 8ème est la 4ème et la 38ème est la 6ème.  Au point de départ d'une autre équipe (qui n'est pas l'équipe violette), seul le premier bâtiment compte. Ici, la seconde est 5ème, la 9ème est première, la 10ème est 7ème et la 20ème est 3ème."</p>
		</div>
		<div class="form">
    		<form action="{{ action('EnigmeControllerBl@validE3')}}" method="POST">
        		{{ csrf_field() }}
        		<label for="enigme3bl">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous en MAJUSCULES puis validez pour passer à l'énigme suivante.</label><br>
    			<input id="enigme3bl" type="text" name="enigme3bl" placeholder="Votre réponse" style="margin-right:5px; margin-bottom:5px">
    			<button type="submit" style="margin-bottom:30px">Valider</button>
			</form>
		</div>
	</div>
@endsection