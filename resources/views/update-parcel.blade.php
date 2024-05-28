@extends('layouts.app')
@section('content')
<div>

  <div name="header" class="flex px-20 w-full bg-blue-100 justify-between items-center">
    <div class="px-5 py-3">

      <img src="{{('images/logo.png')}}" alt="">
    </div>

    <div class="px-5 py-3 flex gap-10">
      <a href="#home">Home</a>
      <a href="#track">Tracker</a>
      <a href="#service">Service</a>
      <a href="#review">Reviews</a>
    </div>
    <div class="px-5 py-3">
      <a href="#contact"> <button class="bg-blue-800 rounded-xl px-5 py-2 text-white">Contact</button></a>
    </div>

  </div>

  <div class="container mx-auto px-20 py-15 my-10 " id="add">
    <div class="">

      <a href="/add"> <button class="bg-blue-800 rounded px-4 py-2 text-white">Add Parcel</button> </a>

    </div>
  </div>

  <div class="container mx-auto px-20 py-15 flex flex-col my-10 gap-5" id="track">
    <div class="bg-blue-800 text-white rounded-2xl px-5 py-3">
      <p class="text-2xl">Track Parcels</p>
      <div class=" my-5">
        <form method="post" class="flex gap-5 text-black" action="/dashboard">
          @csrf
          <input type="text" class="w-full rounded" name="parcel_id" placeholder="Parcel ID">
          <button class=" rounded-xl text-blue-500 bg-white px-3 py-2">Submit</button>
        </form>
      </div>


    </div>



    <div class=" flex flex-col  items-center justify-center">

      @include('components.parcel-conditions-update');

    </div>
  </div>


</div>
@endsection