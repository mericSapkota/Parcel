@extends('layouts.app')
@section('content')
<div>
    <div name="header" class="bg-white dark:bg-gray-800 shadow max-w-7xl my-5 mx-auto py-6 px-4 sm:px-6 lg:px-8">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if(Auth::user()->email == 'admin@123.com')
            {{ __('Admin Dashboard') }}
            @else
            {{__('User Dashboard')}}
            @endif
        </h2>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex gap-5 flex-col">


                    @if(Auth::user()->email == 'admin@123.com')
                    <a class="text-center text-3xl mb-10" href="/add">Add Parcel</a>
                    <p class="font-bold text-center">List of Parcels</p>
                    @foreach($parcel as $p)

                    <table class="">
                        <tr class="w-max">
                            <th class="w-1/6">Parcel No.</th>
                            <th class="w-1/6">Location</th>
                            <th class="w-1/6">Date</th>
                            <th class="w-1/6">Remarks</th>
                            <th class="w-1/12">Edit</th>
                            <th class="w-1/12">Delete</th>
                        </tr>
                        <tr class="text-center">
                            <td>{{$p->parcel_id}}</td>
                            <td>{{$p->address}}</td>
                            <td>{{$p->date}}</td>
                            <td>{{$p->remarks}}</td>
                            <td><a href="/edit/{{$p->id}}">Edit</a></td>
                            <td><a href="/delete/{{$p->id}}">Delete</a></td>
                        </tr>
                    </table>
                    @endforeach

                    @else
                    <label for="">Enter Parcel Number here</label>
                    <form method="post" action="/search" class="flex">
                        @csrf

                        <input type="text" name="parcel_id" class="text-black" placeholder="Enter Parcel Number">
                        <button type="submit" class="bg-green-500 rounded">Search</button>
                    </form>

                    <p class="font-bold text-center">List of Parcels</p>
                    @if($parcelUser != null)
                    @foreach($parcelUser as $p)
                    <table class="">
                        <tr>
                            <th>Parcel No.</th>
                            <th>Location</th>
                            <th>Date</th>
                            <th>Remarks</th>

                        </tr>
                        <tr class="text-center">
                            <td>{{$p->parcel_id}}</td>
                            <td>{{$p->address}}</td>
                            <td>{{$p->date}}</td>
                            <td>{{$p->remarks}}</td>

                        </tr>
                    </table>
                    @endforeach
                    @else
                    <div class="text-center">Nothing Here ! Please search your parcel Number</div>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection