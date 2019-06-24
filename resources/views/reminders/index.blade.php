@extends('layouts/app')

@section('title', 'Reminders')

@section('content')

    <section class="reminders-container">

        <h1>Reminders</h1>

        <reminders-form
                :reminders = "{{ $reminders }}"
        ></reminders-form>

    </section>

@endsection