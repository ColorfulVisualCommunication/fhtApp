@extends('layouts.app')

@section('content')
<div class="flex justify-center ">
	
<form action="{{route('register')}}" method="post" class="w-1/2 md:max-w-md lg:max-w-md  bg-white dark:bg-slate-700 dark:text-sky-200 m-2 shadow-md p-6  px-8 pt-6 pb-8 rounded-lg">
	@csrf
	<div class="mb-4">
	<label class="block text-gray-700 text-sm font-bold mb-2" for="name">
	Name
	</label>
	<input value="{{old('name')}}" class="@error('name') border border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" id="name" type="text" placeholder="Your_name" >
	</div>
	@error('name')<div class="text-red-500 text-sm mb-4">{{$message}}</div>@enderror
	
	<div class="mb-4">
	<label class="block text-gray-700 text-sm font-bold mb-2" for="username">
	Username
	</label>
	<input value="{{old('username')}}" class="@error('username') border border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="username" id="username" type="text" placeholder="Username" >
	</div>
	@error('username')<div class="text-red-500 text-sm mb-4">{{$message}}</div>@enderror
	
	<div class="mb-4">
	<label class="block  text-gray-500 text-sm font-bold mt-4 mb-2" for="email">
	Email
	</label>
	<input class="@error('email') border border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" value="{{old('email')}}" id="email" type="text" placeholder="example@abc.com" >
	</div>
	@error('email')<div class="text-red-500 text-sm mb-4">{{$message}}</div>@enderror
	
	<div class="mb-4">
	<label class="block text-gray-500 text-sm font-bold mt-4 mb-2" for="confirmPassword">
	Password
	</label>
	<input class="@error('password') border border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" min="8" name="password" value="" id="password" type="password" placeholder="**********" >
	</div>
	@error('password')<div class="text-red-500 text-sm mb-4">{{$message}}</div>@enderror
	
	
	<div class="mb-4">
	<label class="block text-gray-700 text-sm font-bold mt-4 mb-2" for="confirmPassword">
	Confirm Password
	</label>
	<input class="@error('name') border border-red-500 @enderror shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" id="password_confirmation" type="password" placeholder="**********" >
	</div>
	
	<div class="flex items-center justify-between mt-4">
	<button class="bg-sky-500 hover:bg-sky-800 text-sky-100 font-bold   py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
	Register
	</button>
	<a class="inline-block align-baseline font-bold text-sm text-sky-500 hover:text-sky-800" href="#">
	Forgot Password?
	</a>
	</div>
</form>
</div>

@endsection