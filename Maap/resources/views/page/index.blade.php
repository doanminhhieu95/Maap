<!doctype html>
<html>
	<head>
		<meta charser="utf-8" />
        <title>Maap</title>
        <base href="{{asset('')}}">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="maaptl/style.css" />
	</head>
	<body>
		<div class="container-fluid h-100 intro">
			<!--
			<div id="bt_page_loading">
				<div class="loader"></div>
			</div>
			-->
			<div id="bt_page_loading">
			<div class="spinner"></div>
			</div>
			<div class="main">
				<div class="vertical">
					<a href="{{route('mel')}}">
						<img src="maaptl/img/logo.png" />
					</a>
				</div>
			</div>
			<audio controls autoplay>
				<source src="music.mp3" type="audio/mpeg">
				Your browser does not support the audio element.
			</audio>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="maaptl/js/jquery.scrollbox.min.js"></script>
		<script src="maaptl/js/jquery.waypoints.min.js"></script>
		<script src="maaptl/js/jquery.counterup.min.js"></script>
		<script src="maaptl/js/script.js"></script>
	</body>
</html>