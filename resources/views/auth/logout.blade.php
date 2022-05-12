@extends('layouts.app')

@section('content')
<div class=" flex justify-center">
<div class="m-2  max-w-xl rounded overflow-hidden shadow-lg">
  <img class="w-ful" src="{{ URL('storage/images/img3.jpg')}}" alt="abstract black and sky-blue">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">Passion led us here</div>
    <p class="text-gray-700 text-base">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
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