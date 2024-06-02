@extends('layouts.app')
@section('content')
<div>

    <div name="header" class="flex px-20 w-full bg-blue-100 justify-between items-center">
        <div class="w-14 flex items-center m-2 h-16">

            <img class="rounded-full" src="{{('images/logo.jpg')}}" alt="">
        </div>

        <div class="px-5 py-3 text-xl font-bold flex gap-10">
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




        @if($pid!=null)
        <div class="text-center text-xl font-bold">Showing result of parcel id {{$pid}}</div>
        <div class="flex justify-start">

            <a href="/update/{{$pid}}"><button class="bg-blue-800 rounded px-4 py-2 text-white">Add more details to this Parcel</button></a>
        </div>
        @endif



        <div class=" flex flex-col  items-center justify-center">

            @if(Auth::check())




            @if($parcel!= null && sizeof($parcel))
            @foreach($parcel as $parc)


            @php
            $pa=[
            [
            'date'=>$parc->date,
            'time'=>$parc->time,
            'remarks'=>$parc->remarks,
            'status'=>$parc->status,
            'id'=>$parc->id,
            ],
            ]
            @endphp
            @each('components.parcel-conditions',$pa,'p')
            @endforeach
            @else
            <div class="font-bold text-xl text-red-500">Note: Please Enter Valid Parcel Number </div>

            @endif
            @endif
        </div>
    </div>


</div>
@endsection