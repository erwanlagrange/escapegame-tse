<!DOCTYPE html>
<html>
<head>

    <meta charset=utf-8>
    <title>ENIGME DE L'AMPHI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<div id="webgl"></div>



<script src="{{asset('js/dat.gui.min.js')}}"></script>

<script src="{{asset('js/three.js')}}"></script>

<script src="{{asset('js/OrbitControls.js')}}"></script>
<script src="{{asset('js/MTLLoader.js')}}"></script>
<script src="{{asset('js/OBJLoader.js')}}"></script>

<script>
    var PHPtoJs = @json($indices);
</script>
<script src="{{asset('js/scene.js')}}"></script>


</body>
