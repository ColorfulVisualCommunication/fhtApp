@extends('layouts.app')

@section('content')
<div class=" flex justify-center relative">
<div class="absolute top-4 lg:top-9 underline underline-offset-4 decoration-cyan-200 text-xl lg:text-3xl text-sky-300">
Flash Hacks Tech
</div>
<div class="absolute p-4 top-32 border border-l-slate-500 border-t-sky-700 border-r-sky-500 border-b-sky-300 lg:top-64 hover:underline underline-offset-4 decoration-teal-300 text-6xl lg:text-9xl text-white">
	<span class="text-sky-500">W</span> E L C O M E
</div>
<div class="m-2  max-w-lg md:max-w-4xl lg:max-w-5xl rounded overflow-hidden shadow-lg">
  <img class="w-ful" src="{{ URL('storage/images/img3.jpg')}}" alt="abstract black and sky-blue">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">Passion led us here</div>
    <p class="text-gray-700 text-base">
     We are a growing technological company that delivers state of the art, cutting edge innovative solutions through graphics design, software development and network installation.
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
    <span class="inline-block bg-sky-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 shadow">#graphics_design</span>
    <span class="inline-block bg-sky-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 shadow">#software_development</span>
    <span class="inline-block bg-sky-100 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 shadow">#network_installation</span>
  </div>
</div>
</div>

@endsection