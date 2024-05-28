@extends('layouts.app')
@section('content')

<div name="header" class="flex px-20 w-full bg-blue-100 justify-between items-center">
  <div class="px-5 py-3">

    <img src="{{('images/logo.png')}}" alt="">
  </div>

  <div class="px-5 py-3 flex gap-10">
    <a href="/dashboard">Home</a>
    <a href="#track">Tracker</a>
    <a href="#service">Service</a>
    <a href="#review">Reviews</a>
  </div>
  <div class="px-5 py-3">
    <a href="#contact"> <button class="bg-blue-800 rounded-xl px-5 py-2 text-white">Contact</button></a>
  </div>

</div>

<div class="max-w-7xl py-12 mx-auto sm:px-6 lg:px-8  flex flex-col items-center">
  <p class="text-3xl font-bold">Create New Parcel </p>
  <div class="max-w-xl py-12 ">
    <form method="post" action="/add">
      @csrf
      <div class="flex flex-col  gap-5 w-56 text-black">
        <label for="">Parcel_ID</label>
        <input type="text" class="rounded" name="parcel_id" placeholder="Enter Parcel Id">
        <label for="status">Status</label>
        <input type="text" class="rounded" name="status" id="status">
        <label for="" class="">Enter Your Location</label>
        <input type="text" class="rounded" name="address" placeholder="Enter Location">
        <label for="date">Select a date</label>
        <input type="date" class="rounded" name="date" id="date">
        <label for="time" class="">Select Time</label>
        <input type="time" class="rounded" name="time" id="time">

        <label for="" class="">Enter Remarks</label>
        <input type="text" name="remarks" placeholder="Enter Remarks">
        <button type="submit" class="bg-blue-800 rounded  text-white py-2">Create Parcel</button>
      </div>
    </form>
  </div>
</div>
@endsection