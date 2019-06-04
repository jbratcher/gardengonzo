@extends('layouts/app')

@section('title', 'Reminders')

@section('content')

    <section class="reminders-container">

        <h1>Reminders</h1>

        <p><a href="/reminders/create"><i class="fas fa-plus-circle"></i></a>
        <a href="/reminders/create">Add a reminder</a></p>

        <ul class="reminders-list">

            @forelse($reminders as $reminder)
                <li>
                    <section class="card">
                        <section class="card-header {{ $reminder->completed ? 'reminder-completed-header' : 'reminder-header' }} " >
                            <h5 class="card-title">
                                <a href="reminders/{{ $reminder->id }}">
                                    {{ $reminder->title }}
                                </a>
                            </h5>
                            <span class="card-text">
                                <form method="POST" action="/reminders/{{ $reminder->id }}">
                                    {{ method_field("PATCH") }}
                                    {{ csrf_field() }}
                                    <label for="completed">Completed</label>
                                    <input type="checkbox" id="completed" name="completed" onChange="this.form.submit()" {{ $reminder->completed ? 'checked' : '' }}>
                                </form>
                            </span>
                        </section>
                        <section class="card-body">
                            <p class="card-text">{{ $reminder->time }}</p>
                            <p class="card-text">{{ $reminder->description }}</p>
                        </section>
                    </section>
                </li>
            @empty
                <li>
                    <section class="card">
                        <section class="card-header">
                            <h5 class="card-title">
                                <a href="/reminders">
                                    Reminder Title
                                </a>
                            </h5>
                            <span class="card-text">
                                <input type="checkbox">
                            </span>
                        </section>
                        <section class="card-body">
                            <p class="card-text">A short description of the reminder.</p>
                        </section>
                    </section>
                </li>
            @endforelse

        </ul>

    </section>

@endsection