@extends ('layouts.tempBleu')

@section('title')



@endsection

@section('reminder')
	<div class="row">
		<div class="col text-right"><p >Enigme 1 : </p></div>
		<div class="col text-left"><p style="margin-bottom: 25px">DESIGN</p></div>
	</div>
@endsection

@section ('content')

	<div class="col justify-content-center">
		<div class="border border-primary" style="border-width: 3px ! important; padding-top: 10px; margin-bottom:30px">
			<p style="font-size: 18px; text-align:center">Enigme 2 : </p>
			<p style="font-size: 16px">"A l'aide du plan ci-dessous, trouver le point de coordonnées (3;4) sur la grille végétale."</p>
		</div>
		<div class="form">
    		<form action="{{ action('EnigmeControllerBl@validE2') }}" method="POST">
        		{{ csrf_field() }}
        		<label for="enigme2bl">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous en MAJUSCULES puis validez pour passer à l'énigme suivante.</label><br>
    			<input id="enigme2bl" type="text" name="enigme2bl" placeholder="Votre réponse" style="margin-right:5px; margin-bottom:5px">
    			<button type="submit" style="margin-bottom:30px">Valider</button>
			</form>
		</div>
	</div>

@endsection