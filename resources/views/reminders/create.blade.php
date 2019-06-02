@extends('layouts/app')

@section('title', 'Add a Reminder')

@section('content')

    <h2>Add a reminder</h2>
    <form method="POST" action="/reminders" class="main-form">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="Title" >
        </div>

        <div class="form-group">
            <label for="time">Time:</label>
            <input type="datetime-local" class="form-control" id="time" name="time">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea type="text" class="form-control" id="description" name="description" rows="5">Enter a description here...</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </form>

@endsection