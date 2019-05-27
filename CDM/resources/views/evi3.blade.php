@extends ('layouts.tempViolet')

@section ('content')

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
		<div class="border" style="border: 3px solid purple ! important; padding-top: 5px; margin-bottom:12px">
			<p style="font-size: 18px; text-align:center">Enigme 3 : </p>
			<p style="font-size: 16px">"Sur les 4, seules les 2 du milieu comptent. Ici, la première est première, la 6ème est 7ème, la 7ème est 3ème, la 22ème est 6ème, la 23ème est 5ème, la 28ème est seconde, la 29ème est 4ème et la 30ème est 8ème. L'un des points de départ des autres équipes peut être le début de la solution."</p>
		</div>
		<div class="form">
    		<form action="{{ action('EnigmeControllerVi@validE3')}}" method="POST">
        		{{ csrf_field() }}
        		<label for="enigme3vi">Lorsque vous avez trouvé le mot, inscrivez-le ci-dessous en MAJUSCULES puis validez pour passer à l'énigme suivante.</label><br>
    			<input id="enigme3vi" type="text" name="enigme3vi" placeholder="Votre réponse" style="margin-right:5px; margin-bottom:5px">
    			<button type="submit" style="margin-bottom:30px">Valider</button>
			</form>
		</div>
	</div>
@endsection

@endsection