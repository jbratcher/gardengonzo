@extends('layout')

@section('title', 'Add an Important Date')

@section('content')

    <h2>Add an important date</h2>
    <form method="POST" action="">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>

        <div class="form-group">
            <button  type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

@endsection