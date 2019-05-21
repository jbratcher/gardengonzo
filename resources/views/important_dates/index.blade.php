@extends('layout')

@section('title', 'Important Dates')

@section('content')

    <h1>Important Dates</h1>

    <p><a href="/important_dates/create">Add an important date</a></p>

    <ul class="importantDateList">

        @foreach($dates as $date)
            <li>
                <section class="card">
                    <section class="card-header">
                        <h5 class="card-title">{{$date->name}}</h5>
                    </section>
                    <section class="card-body">
                        <p class="card-text">{{$date->description}}</p>
                    </section>
                </section>
            </li>
        @endforeach

    </ul>

@endsection