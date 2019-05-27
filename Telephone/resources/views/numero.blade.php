<!-- numero.blade.php est la vue ou l'ont tape le numero -->

@extends('template')

@section('content')




<div id="ecranTel" >

        <form method="post" action="{{asset('/numero')}}">
        {{ csrf_field() }}

    <div id="test">

        <input type="text" id="input" maxlength="10" name="number" >

    </div>

    <div class="row col-12 bouttonsTel">


	  <div class="col-4">

        <div class="col-12">
			       <button type="button"  class="btn  btn-light btnMax">1</button>
		    </div>

        <div class="col-12">
            <button type="button"  class="btn  btn-light btnMax ">4</button>
        </div>

        <div class="col-12">
            <button type="button"  class="btn  btn-light  btnMax">7</button>
        </div>

        <div class="col-12">
            <button type="button" class="btn  btn-light btnMax" >*</button>
        </div>
    </div>


	 <div class="col-4">

      <div class="col-12">
			     <button type="button"  class="btn  btn-light btnMax ">2</button>
		  </div>

      <div class="col-12">
            <button type="button"  class="btn  btn-light btnMax">5</button>
      </div>

      <div class="col-12">
            <button type="button"  class="btn  btn-light btnMax">8</button>
      </div>

      <div class="col-12">
            <button type="button"  class="btn  btn-light  btnMax">0</button>
      </div>

      <div class="col-12">
            <button type="submit" id ="btnCall" class="btn  btn-success  "><img class="btnCall" src="img/telephonegris.png"></button>
      </div>

  </div>

	<div class="col-4">

     <div class="col-12">
			    <button type="button"  class="btn  btn-light btnMax">3</button>
		 </div>

		 <div class="col-12">
            <button type="button"  class="btn  btn-light btnMax">6</button>
     </div>

     <div class="col-12">
            <button type="button"  class="btn  btn-light btnMax">9</button>
    </div>

    <div class="col-12">
            <button type="button" class="btn  btn-light  btnMax" >#</button>
    </div>

    <div class="col-12">
           <button type="button" id="b14" class="btn  btn-light  btnStop">C</button>
    </div>

	</div>
  </form>
</div>



  </div>
  
  
  @endsection
