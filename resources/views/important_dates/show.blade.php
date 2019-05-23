@extends('layout')

@section('title', 'Important Dates')

@section('content')

    <section class="card showDate">
        <section class="card-header">
            <h5 class="card-title">{{$date->name}}</h5>
        </section>
        <section class="card-body">
            <p class="card-text">{{$date->description}}</p>
        </section>

        <section class="card-footer">

            <button class="btn btn-outline-secondary">
                <a href="{{$date->id}}/edit">
                    Edit Date
                </a>
            </button>

            <form method="POST" action="/important_dates/{{ $date->id }}">
                {{ method_field("DELETE") }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-outline-danger">
                    Delete Date
                </button>
            </form>

        </section>
    </section>

@endsection