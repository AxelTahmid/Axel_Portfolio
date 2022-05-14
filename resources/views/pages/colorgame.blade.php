<!DOCTYPE html>
<html>
<head>
	<title>Color Game</title>
    <link rel="stylesheet"  type='text/css' href="{{ asset('css/colorgame.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
</head>

<body>
	<h1>{{ "A Lame" }} <br> <span id="colorDisplay">{{ "RGB" }}</span> <br> {{ "Guessing Game" }}</h1>

<div id="stripe">
	<button id="reset">{{ "New Colors" }}</button>
	<span id="message"></span>
	<button class="mode">{{ "Easy" }}</button>
	<button class="mode selected">{{ "Hard" }}</button>
	
</div>



<div id="container">
	<div class="square"></div>
	<div class="square"></div>
	<div class="square"></div>
	<div class="square"></div>
	<div class="square"></div>
	<div class="square"></div>
	<div class="square"></div>
	<div class="square"></div>
	<div class="square"></div>
</div>

<script type="text/javascript" src="{{  asset('js/colorgame.js') }}"></script>
</body>
</html>