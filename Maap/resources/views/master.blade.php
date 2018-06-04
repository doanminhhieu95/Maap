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
		<div class="bg-greycs h-100 w-100">
        @include('header')
        @yield('content')
		</div>
		@include('script')
	</body>
</html>