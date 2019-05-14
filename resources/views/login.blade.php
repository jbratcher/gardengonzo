@extends('layout')

@section('title', 'Login')

@section('content')

    <form method="post" class="py-5">

        @csrf

        <section class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </section>

        <section class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </section>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection