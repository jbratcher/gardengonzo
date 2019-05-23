@extends('layout')

@section('title', 'Add an Important Date')

@section('content')

    <h2>Add an important date</h2>
    <form method="POST" action="/important_dates" class="mainForm">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="Name">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea type="text" class="form-control" id="description" name="description" rows="5">Enter a description here...</textarea>
        </div>

        <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" class="form-control" id="time" name="time">
        </div>

        <div class="form-group">
            <button  type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

@endsection