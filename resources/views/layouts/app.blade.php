
<!doctype html>
<html class="">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>fhtApp</title>
  
  <link  rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-sky-100 dark:bg-slate-900">
	<nav class="mb-2 p-6 bg-sky-200 text-slate-900 dark:bg-slate-800 dark:text-sky-200 shadow-md flex items-center justify-between">
	<ul class="flex items-center">
		<li><a href="http://localhost/fhtApp/public/" class="p-3">Home</a></li>
		<li><a href="" class="p-3">Dashboard</a></li>
		<li><a href="" class="p-3">fhtApp</a></li>
	</ul>
	<ul class="flex items-center">
		<li><a href="" class="p-3">Stephen Njoroge</a></li>
		<li><a href="{{route('login')}}" class="p-3">Log in</a></li>
		<li><a href="{{route('register')}}" class="p-3">Register</a></li>
		<li><a href="{{route('logout')}}" class="p-3">Log out</a></li>
	</ul>
	</nav>
	<main class="">
  @yield('content')
	</main>
</body>
</html>
