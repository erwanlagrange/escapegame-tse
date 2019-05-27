<!-- template.blade.php est le template du telehpone -->

<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
    <title>TSE Escape Game</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="{{asset('/css/style.css')}}">
    </head>
  <body>



<div id="divTel" >

    @yield('content')

</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

  <script src="{{asset('/js/script.js')}}"></script>
  </body>
</html>
