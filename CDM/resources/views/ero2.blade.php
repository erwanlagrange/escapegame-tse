@extends ('layouts.tempRouge')

@section('title')



@endsection

@section('reminder')
	<div class="row">
		<div class="col text-right"><p >Enigme 1 : </p></div>
		<div class="col text-left"><p style="margin-bottom: 45px">DESIGN</p></div>
	</div>
@endsection

@section ('content')

	<div class="col justify-content-center">
		<div class="border border-danger" style="border-width: 3px ! important; padding-top: 10px; margin-bottom:30px">
			<p style="font-size: 18px; text-align:center">Enigme 2 : </p>
			<p style="font-size: 16px">"A l'aide du plan ci-dessous, trouver le point de coordonnées (1;3) sur la grille végétale."</p>
		</div>
		<div class="form">
    		<form action="{{ action('EnigmeControllerRo@validE2') }}" method="POST">
        		{{ csrf_field() }}
        		<label for="enigme2ro">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous en MAJUSCULES puis validez pour passer à l'énigme suivante.</label><br>
    			<input id="enigme2ro" type="text" name="enigme2ro" placeholder="Votre réponse" style="margin-right:5px; margin-bottom:5px">
    			<button type="submit" style="margin-bottom:30px">Valider</button>
			</form>
		</div>
	</div>

@endsection