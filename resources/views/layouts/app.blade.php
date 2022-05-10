
<!doctype html>
<html class="dark">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>fhtApp</title>
  
  <link  rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-orange-300 dark:bg-grey-900">
	<nav class="p-6 bg-orange-600 dark:bg-grey-900 flex items-center justify-between">
	<ul class="flex items-center list-none">
		<li><a href="" class="p-3">Home</a></li>
		<li><a href="" class="p-3">Dashboard</a></li>
		<li><a href="" class="p-3">fhtApp</a></li>
	</ul>
	<ul class="flex items-center">
		<li><a href="" class="p-3">Stephen Njoroge</a></li>
		<li><a href="" class="p-3">Log in</a></li>
		<li><a href="" class="p-3">Register</a></li>
		<li><a href="" class="p-3">Log out</a></li>
	</ul>
	</nav>
  @yield('content')
</body>
</html>
