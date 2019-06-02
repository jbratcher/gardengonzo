@extends('layouts/app')

@section('title', 'Edit Date')

@section('content')

    <h2>Edit date</h2>
    <form method="POST" action="/reminders/{{ $reminder->id }}" class="main-form">
        {{ method_field("PATCH") }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $reminder->name }} required">
        </div>

        <div class="form-group">
            <label for="time">Time:</label>
            <input type="datetime-local" class="form-control" id="time" name="time" value="{{ $reminder->time }} required">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="5" required>{{ $reminder->description }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-outline-secondary">Update Date</button>
        </div>

    </form>

    <form method="POST" action="/reminders/{{ $reminder->id }}">
        {{ method_field("DELETE") }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-outline-danger">
            Delete Date
        </button>
    </form>



@endsection