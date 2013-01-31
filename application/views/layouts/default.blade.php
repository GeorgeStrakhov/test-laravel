<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{{$title}}</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
	{{ HTML::style('laravel/css/mystyle.css') }}
</head>
<body>
	<div class="wrapper">
		<header>
			<h1 class="centered">{{$title}}</h1>
			</p>
		</header>
		<div role="main" class="main">
			<div class="home">
				@yield('content')
			</div>
		</div>
	</div>
</body>
</html>
