@extends('layout')

@section('title', 'Login')

@section('content')

    <form method="post" class="py-5">

        @csrf

        <section class="row">
            <section class="form-group col-xs-6">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="first_name" placeholder="First Name" required>
            </section>
            <section class="form-group col-xs-6">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Last Name" required>
            </section>
        </section>

        <section class="row">
            <section class="form-group col-xs-6">
                <label for="street_address">Street Address</label>
                <input type="text" class="form-control" id="streetAddress" name="street_address" placeholder="Street Address" required>
            </section>
            <section class="form-group col-xs-6">
                <label for="city">City</em>:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
            </section>
        </section>

        <section class="row">
            <section class="form-group col-xs-6">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
            </section>
            <section class="form-group col-xs-6">
                <label for="zipCode">Zip Code</label>
                <input type="text" class="form-control" id="zipCode" name="zip_code" placeholder="Zip Code" required>
            </section>
        </section>

        <section class="row">
            <section class="form-group col-xs-6">
                <label for="country">Country</em>:</label>
                <input type="text" class="form-control" id="country" name="country" placeholder="Country" required>
            </section>
            <section class="form-group col-xs-6">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
            </section>
        </section>

        <section class="row">
            <section class="form-group col-xs-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </section>
        </section>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

@endsection