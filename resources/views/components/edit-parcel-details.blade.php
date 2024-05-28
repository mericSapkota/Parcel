@extends('layouts.app')
@section('content')
<div class="flex flex-col gap-5">
  <p class="text-5xl text-center">Edit Your Parcel Details</p>
  <form method="post" class="flex flex-col  justify-center gap-5 container mx-auto shadow-xl bg-blue-200 rounded-xl  w-max p-20" action="/edit-conditions/{{$parcel->id}}">
    @csrf
    <div class="flex gap-3 flex-col">

      <label for="">Date</label>
      <input class="rounded-3xl px-2 py-3 w-80" name="date" type="date" value="{{$parcel->date}}">

      <label for="">Time</label>
      <input class="rounded-3xl px-2 py-3 w-80" name="time" type="time" value="{{$parcel->time}}">
    </div>

    <div class="flex gap-3 flex-col">
      <label for="">Status</label>
      <input class="rounded-3xl px-2 py-3 w-80" name="status" type="text" value="{{$parcel->status}}">

      <label for="">Remarks</label>
      <input class="rounded-3xl px-2 py-3 w-80" name="remarks" type="text" value="{{$parcel->remarks}}">
    </div>
    <input class="text-white font-bold bg-blue-800 rounded-3xl py-4" type="submit" value="Submit">
  </form>
</div>
@endsection