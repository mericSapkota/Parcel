@extends('layouts.app')
@section('content')
<div class="max-w-7xl py-12 mx-auto sm:px-6 lg:px-8 text-white flex flex-col items-center">
  <p>Create a Parcel</p>
  <div class="max-w-xl py-12 ">
    <form method="post" action="/add">
      @csrf
      <div class="flex flex-col gap-5 w-56 text-black">
        <label for="" class="text-white">Enter Parcel Number</label>
        <input type="text" name="parcel_id" placeholder="Enter Parcel Number">
        <label for="" class="text-white">Enter Your Location</label>
        <input type="text" name="address" placeholder="Enter Location">
        <label for="date" class="text-white">Select a date</label>
        <input type="date" name="date" id="date">
        <label for="" class="text-white">Enter Remarks</label>
        <input type="text" name="remarks" placeholder="Enter Remarks">
        <button type="submit" class="bg-green-500 rounded py-2">Create Parcel</button>
      </div>
    </form>
  </div>
</div>
@endsection