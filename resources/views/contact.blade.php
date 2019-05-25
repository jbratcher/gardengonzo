@extends('layouts/app')

@section('title', 'Login')

@section('content')

    <h1>Get in touch</h1>

    <form method="post" class="py-5">

        @csrf

        <section class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
        </section>

        <section class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </section>

        <section class="form-group">
            <label for="message">Message: </label>
            <textarea name=message" rows="10" cols="50">
                Write something here
            </textarea>
        </section>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection