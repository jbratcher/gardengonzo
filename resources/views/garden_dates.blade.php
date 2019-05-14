@extends('layout')

@section('title', 'Garden Dates')

@section('content')

    <h1>Garden Dates</h1>

    <ul>

        @foreach($dates as $date)
            <li>{{$date->name}}</li>
        @endforeach

    </ul>

@endsection