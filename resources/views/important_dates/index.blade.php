@extends('layouts/app')

@section('title', 'Important Dates')

@section('content')

    <section class="important-dates-container">

        <h1>Important Dates</h1>

        <p><a href="/important_dates/create"><i class="fas fa-plus-circle"></i></a>
        <a href="/important_dates/create">Add an important date</a></p>

        <ul class="importantDateList">

            @foreach($dates as $date)
                <li>
                    <section class="card">
                        <section class="card-header">
                            <h5 class="card-title">
                                <a href="important_dates/{{$date->id}}">
                                    {{$date->name}}
                                </a>
                            </h5>
                            <span class="card-text">
                                {{$date->time}}
                            </span>
                        </section>
                        <section class="card-body">
                            <p class="card-text">{{$date->description}}</p>
                        </section>
                    </section>
                </li>
            @endforeach

        </ul>

    </section>

@endsection