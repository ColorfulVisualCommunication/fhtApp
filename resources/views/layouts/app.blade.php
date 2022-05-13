
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
	<nav class="mb-2 p-6 bg-sky-200 text-slate-500 dark:bg-slate-800 dark:text-sky-200 shadow-md flex items-center justify-between">
	<ul class="flex items-center">
	@auth
		<li><a href="" class="p-3 ">fhtApp</a></li>	
	@endauth
	@guest
		<li><a href="{{route('index')}}" class="p-3 active:text-black">Home</a></li>
		<li><a href="{{route('dashboard')}}" class="p-3 active:text-black">Dashboard</a></li>
	@endguest
	</ul>
	<ul class="flex items-center">
		@auth
			<li><a href="" class="p-3">Stephen Njoroge</a></li>
			<li>
				<form action="{{route('logout')}}" method="post"class="p-3 inline">
				@csrf
				<button type="submit" >Log out</button>
				</form>
			</li>
		@endauth
		@guest
			<li><a href="{{route('register')}}" class="p-3">Register</a></li>
			<li><a href="{{route('login')}}" class="p-3">Log in</a></li>
		@endguest
	</ul>
	</nav>
	<main class="">
  @yield('content')
	</main>
</body>
</html>
