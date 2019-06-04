@extends('layouts/app')

@section('title', 'Reminders')

@section('content')

    <section class="reminders-container">

        <h1>Reminders</h1>

        <p><a href="/reminders/create"><i class="fas fa-plus-circle"></i></a>
        <a href="/reminders/create">Add a reminder</a></p>

        <ul class="reminders-list">

            @foreach($reminders as $reminder)
                <li>
                    <section class="card">
                        <section class="card-header">
                            <h5 class="card-title">
                                <a href="reminders/{{$reminder->id}}">
                                    {{$reminder->title}}
                                </a>
                            </h5>
                            <span class="card-text">
                                {{$reminder->time}}
                            </span>
                        </section>
                        <section class="card-body">
                            <p class="card-text">{{$reminder->description}}</p>
                        </section>
                    </section>
                </li>
            @endforeach

        </ul>

    </section>

    <reminders-list
        :reminders = "{{ $reminders }}"
    ></reminders-list>


@endsection