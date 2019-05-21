@extends('layout')

@section('title', 'Edit Date')

@section('content')

    <h2>Edit date</h2>
    <form method="POST" action="/important_dates/{{ $date->id }}">
        {{ csrf_field() }}
        {{ method_field("PATCH") }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $date->name }}">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input class="form-control" id="description" name="description" value="{{ $date->description }}">
        </div>

        <div class="form-group">
            <button  type="submit" class="btn btn-primary">Update Date</button>
        </div>

    </form>

@endsection