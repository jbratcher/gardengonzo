@extends('layout')

@section('title', 'Edit Date')

@section('content')

    <h2>Edit date</h2>
    <form method="POST" action="/important_dates/{{ $date->id }}" class="mainForm">
        {{ method_field("PATCH") }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $date->name }}">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="5">{{ $date->description }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-outline-secondary">Update Date</button>
        </div>

    </form>

    <form method="POST" action="/important_dates/{{ $date->id }}">
        {{ method_field("DELETE") }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-outline-danger">
            Delete Date
        </button>
    </form>



@endsection