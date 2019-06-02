@extends('layouts/app')

@section('title', 'Home')

@section('content')

    <section class="jumbotron-fluid">
        <h1 class="display-4">Gardengonzo</h1>
        <p>Schedule your garden time</p>
    </section>

    <section class="features-list">

        <p>Get daily reminders on what you should be doing in your garden based on time of year down to the week/day.</p>
        <img src="images/home_header.jpg" alt="garden tools" class="featuresListImage" />

        <img src="images/watering.jpg" alt="garden tools" class="featuresListImage" />
        <p>Get information on your growing zone.</p>

        <p>Get information on native plants based on your location.</p>
        <img src="images/native_plants.jpg" alt="garden tools" class="featuresListImage" />
    </section>

@endsection