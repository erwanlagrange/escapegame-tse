@extends('layouts.tempVertFin')

@section('title')

	
@endsection

@section('content1')

	<p style="font-size: 30px; margin-bottom: 30px">Bravo ! Vous avez trouvé les 3 mots-clés. </p>
	
@endsection

@section('reminder')
	<div class="row">
		<div class="col text-right"><p >Enigme 1 : </p></div>
		<div class="col text-left"><p >DESIGN</p></div>
		<div class="w-100"></div>
		<div class="col text-right"><p>Enigme 2 : </p></div>
		<div class="col text-left"><p>TECHNOLOGIE</p></div>
		<div class="w-100"></div>
		<div class="col text-right"><p>Enigme 3 : </p></div>
		<div class="col text-left"><p style="margin-bottom: 45px">ACADEMIE</p></div>	
	</div>
@endsection

@section('content2')

	<p style="margin-bottom: 20px">Entrer les initiales de ces mots dans le bon ordre pour débloquer la vidéo qui vous indiquera la suite de votre parcours.</p>

	        <form action="{{ action('EnigmeControllerVe@validE4') }}" method="POST" > {{csrf_field()}}				
				<label for="enigme4ve">Mot de passe</label><br>
				<input id="enigme4ve" type="text" name="enigme4ve" placeholder="Votre réponse" style="margin-right:5px; margin-bottom:5px">
				<button type="submit">Valider</button>
			</form>

@endsection