<!DOCTYPE html>
<html lang="fr" >

<head>
  <meta charset="UTF-8">
  <title>Bien joué</title>
  <script src="https://use.fontawesome.com/b5bf1bd49e.js"></script>


<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto:700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

  <div class="e-button">
	<button class="btn">
		<span class="text">
				Voici la solution
		</span>
		<span class="success-text">
		    55
		</span>
	</button>
</div>
  <script src='https://code.jquery.com/jquery-3.2.1.js'></script>
<script src='https://use.fontawesome.com/b5bf1bd49e.js'></script>



    <script  src="js/index.js"></script>

<style>
body {
  margin: 0;
  padding: 0;
  font-family: "Open Sans", sans-serif;
  width: 100vw;
  height: 100vh;
  background-color: #35373A;
}

h1, h2, h3, h4 {
  font-family: "Roboto", sans-serif;
  font-weight: 900;
}

p {
  font-size: 18px;
  font-size: 1.8rem;
  line-height: 26px;
}

.e-button {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-51%, -50%);
  -moz-transform: translate(-51%, -50%);
  -ms-transform: translate(-51%, -50%);
  -o-transform: translate(-51%, -50%);
  transform: translate(-51%, -50%);
  width: 100%;
  text-align: center;
}
.e-button .btn {
  font-size: 20px;
  font-size: 2rem;
  line-height: 28px;
  transition: all .2s ease-in-out;
  padding: 25px 0px;
  height: 78px;
  border: none;
  background: none;
  color: #fff;
  font-weight: 600;
  position: relative;
  outline: none;
  width: 260px;
}
.e-button .btn span {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  transition: all .3s ease-in-out;
}
.e-button .btn span.success-text {
  visibility: hidden;
  opacity: 0;
}
.e-button .btn:before {
  border-radius: 50px;
  content: " ";
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  right: 0;
  background: #222;
  z-index: -1;
  transition: all .5s ease-in-out, border .3s ease-in-out;
  border: 2px solid #fff;
  box-sizing: border-box;
}
.e-button .btn:after {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: '\f00c';
  position: absolute;
  top: 50%;
  transform: translateY(-50%) scale(0);
  transform-origin: center;
  right: -28px;
  z-index: 0;
  color: #fff;
  transition: all .2s ease-in-out;
}
.e-button .btn:hover {
  cursor: pointer;
  transform: scale(1.05) translateY(-5px) translateZ(0);
}
.e-button .btn:hover:before {
  background: #2f2f2f;
  border-color: transparent;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2), 0 15px 20px rgba(0, 0, 0, 0.1);
}
.e-button .btn:active {
  transform: scale(1) translateY(0) translateZ(0);
}
.e-button .btn:active:before {
  box-shadow: none;
}
.e-button .btn.clicked {
  transform: scale(1) translateY(0) translateZ(0);
}
.e-button .btn.clicked:before {
  box-shadow: none;
}
.e-button .btn.success {
  color: #FFF;
}
.e-button .btn.success:hover {
  cursor: default;
}
.e-button .btn.success span.text {
  opacity: 0;
  visibility: hidden;
}
.e-button .btn.success span.success-text {
  transform: translate(-50%, -50%);
  opacity: 1;
  visibility: visible;
}
.e-button .btn.success:before {
  right: -50px;
  height: 100%;
  width: 78px;
  background: #4db948;
  border-color: #3e9539;
}
.e-button .btn.success:after {
  transition-delay: .3s;
  transform: translateY(-50%) scale(1);
}
.e-button .btn.success:hover, .e-button .btn.success:active {
  transform: scale(1) translateY(0) translateZ(0);
}
.e-button .btn.success:hover:before, .e-button .btn.success:active:before {
  box-shadow: none;
}
</style>

<script>
$('.btn').stop().on('click', function(){
  button = $(this);
  button.addClass('clicked');

  setTimeout(function(){
    button.addClass('success');
  },300);


  setTimeout(function(){
    button.removeClass('clicked');
    button.removeClass('success');
  },10000);
});
</script>

</body>

</html>
