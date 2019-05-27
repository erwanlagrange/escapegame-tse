@extends('template')

@section('content')

<br>
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
 clic me
</button> <br> <br>

<h2>Code 1 <span id="q1" class="badge {{$badge1}}"><i class="fas fa-dot-circle"></i></span> </h2>
<form action="{{ url('quizbla') }}" method="post">
    {{ csrf_field() }}

        <div class="row">
            <div class="col">
                <input type="text" id="q1" name="q1" required
                       minlength="0" maxlength="50" size="50" value="{{$quizRep1}}"  placeholder="if">
            </div>
        </div> <br>

            <h2>Code 2 <span id="q2" class="badge {{$badge2}}"><i class="fas fa-dot-circle"></i></span> </h2>
            <div class="row">
                <div class="col">
                    <input type="text" id="q2" name="q2" required
                           minlength="0" maxlength="50" size="50" value="{{$quizRep2}}" placeholder="==">
                </div>
            </div> <br>

        <h2>Code 3 <span id="q3" class="badge {{$badge3}}"><i class="fas fa-dot-circle"></i></span> </h2>
        <div class="row">
            <div class="col">
                <input type="text" id="q3" name="q3" required
                       minlength="0" maxlength="50" size="50" value="{{$quizRep3}}" placeholder="{l">
            </div>
        </div> <br>

          <h2>Code 4 <span id="q4" class="badge {{$badge4}}"><i class="fas fa-dot-circle"></i></span></h2>
          <div class="row">
              <div class="col">
                  <input type="text" id="q4" name="q4" required
                         minlength="0" maxlength="50" size="50" value="{{$quizRep4}}" placeholder=".s">
              </div>
          </div> <br>

            <h2>Code 5 <span id="q4" class="badge {{$badge5}}"><i class="fas fa-dot-circle"></i></span></h2>
            <div class="row">
                <div class="col">
                    <input type="text" id="q5" name="q5" required
                           minlength="0" maxlength="50" size="50" value="{{$quizRep5}}" placeholder=" get ">
                </div>
            </div> <br>

          <br><div class="row">
                <div class="col">
                  <button type="submit" class="btn btn-light"><i class="fas fa-laptop-code"></i></button>
                </div>
              </div>
</form> <br>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vous n'y êtes pas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="code-area">
        <span style="color: #777;font-style:italic;">
          // 404 Théo not found.
        </span>
        <span>
          <span style="color:#d65562;">
            if
          </span>
          (<span style="color:#4ca8ef;">!</span><span style="font-style: italic;color:#bdbdbd;">found</span>)
          {
        </span> <br>
        <span>
          <span style="padding-left: 15px;color:#2796ec">
             <i style="width: 10px;display:inline-block"></i>throw
          </span>
          <span>
            (<span style="color: #a6a61f">"(╯°□°)╯︵ ┻━┻"</span>);
          </span>
          <span style="display:block">}</span>
          <span style="color: #777;font-style:italic;">
            // Retournez chercher Théo !
          </span>
        </span>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Continuez à chercher</button>
      </div>
    </div>
  </div>
</div>

@endsection
