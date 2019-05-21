@extends('layout')

@section('title', 'Important Dates')

@section('content')

    <section class="card">
        <section class="card-header">
            <h5 class="card-title">{{$date->name}}</h5>
        </section>
        <section class="card-body">
            <p class="card-text">{{$date->description}}</p>
        </section>
    </section>

@endsection