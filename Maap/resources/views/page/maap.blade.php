<!doctype html>
<html>
	<head>
		<meta charser="utf-8" />
		<title>Maap</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="maaptl/style.css" />
	</head>
	<body>
		<div class="container-fluid h-100 maap">
			<div class="bg effect"></div>
			<div class="row justify-content-center sticky-top w-100">
				<div class="col-md-8">
					<div class="header ">
						<ul class="menu">
							<li class="items"><a href="{{route('maap')}}">MAAP</a></li>
							<li class="items"><a href="{{route('about')}}">ABOUT</a></li>
							<li class="items"><a href="{{route('planning')}}">PLANNING</a></li>
							<li class="items"><a href="{{route('drafting')}}">DRAFTING</a></li>
							<li class="items"><a href="{{route('loanprop')}}">LOANS & PROPERTY</a></li>
							<li class="items"><a href="{{route('branding')}}">BRANDING</a></li>
							<li class="items"><a href="{{route('getquote')}}">GET QUOTE</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="main">
				<div class="vertical">
					<h1>MAAPING YOUR DREAMS</h1>
					<div class="icons">
						<a href="#" target="_blank"><img src="maaptl/img/icon1.png" /></a>
						<a href="#" target="_blank"><img src="maaptl/img/icon2.png" /></a>
						<a href="#" target="_blank"><img src="maaptl/img/icon3.png" /></a>
						<a href="#" target="_blank"><img src="maaptl/img/icon4.png" /></a>
						<a href="#" target="_blank"><img src="maaptl/img/icon5.png" /></a>
						<a href="#" target="_blank"><img src="maaptl/img/icon6.png" /></a>
					</div>
					<a class="circle" href="{{route('getstart')}}"><strong>GET START</strong></a>
				</div>
			</div>
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