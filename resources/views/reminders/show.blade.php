@extends('layouts/app')

@section('title', 'Reminder')

@section('content')

    <section class="card show-date">
        <section class="card-header">
            <h5 class="card-title">{{$reminder->title}}</h5>
            <span class="card-text">{{$reminder->time}}</span>
        </section>
        <section class="card-body">
            <p class="card-text">{{$reminder->description}}</p>
        </section>

        <section class="card-footer">

            <button class="btn btn-outline-secondary">
                <a href="{{$reminder->id}}/edit">
                    Edit Date
                </a>
            </button>

            <form method="POST" action="/reminders/{{ $reminder->id }}">
                {{ method_field("DELETE") }}
                {{ csrf_field() }}
                <button type="submit" class="btn btn-outline-danger">
                    Delete Date
                </button>
            </form>

        </section>
    </section>

@endsection