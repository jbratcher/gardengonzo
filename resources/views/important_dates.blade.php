@extends('layout')

@section('title', 'Important Dates')

@section('content')

    <h1>Important Dates</h1>

    <a href="new_date">Add an important date</a>

    <ul>

        @foreach($dates as $date)
            <li>
                <p>{{$date->name}}</p>
                <p>{{$date->description}}</p>
            </li>
        @endforeach

    </ul>

@endsection