@extends('layouts.app')

@section('content')
<div class="flex justify-center">
	
	<form class="bg-white dark:bg-slate-700 dark:text-sky-200 m-2 shadow-md p-6  px-8 pt-6 pb-8 rounded-lg">
		
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">

      <label class="block text-gray-700 text-sm font-bold mt-4 mb-2" for="email">
		Email
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="example@abc.com">
    
      <label class="block text-gray-700 text-sm font-bold mt-4 mb-2" for="password">
        Password
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
      <p class="text-red-500 text-xs italic">Please choose a password.</p>
   
    <div class="flex items-center justify-between mt-4">
      <button class="bg-sky-500 hover:bg-sky-800 text-sky-100 font-bold   py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
        Register
      </button>
      <a class="inline-block align-baseline font-bold text-sm text-sky-500 hover:text-sky-800" href="#">
        Forgot Password?
      </a>
	  </div>
	  </form>
</div>

@endsection