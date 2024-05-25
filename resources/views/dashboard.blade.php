@extends('layouts.app')
@section('content')
<div>
    <div name="header" class="bg-white dark:bg-gray-800 shadow max-w-7xl my-5 mx-auto py-6 px-4 sm:px-6 lg:px-8">

        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex gap-5 flex-col">

                    <a class="text-center text-3xl mb-10" href="/add">Add Parcel</a>

                    <p class="font-bold text-center">List of Parcels</p>
                    @if($name == 'admin')
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
                    @foreach($parcel as $p)
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
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection