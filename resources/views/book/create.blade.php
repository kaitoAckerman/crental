@extends('layouts.app')

@section('title', '| Booking pages')

@section('content')

    <div class="container">
        <div class="col-md-6">


        <h1>Booking pages</h1>
        <form action="{{ route('book.store') }}" method="POST" role="form">
            {{ csrf_field() }}

            <label for="carName">Car:</label>
            <input type="text" class="form-control" placeholder="Car" name="carName" value="{{ old('carName') }}">
            <br>

            <label for="plateNo">Plate Number:</label>
            <input type="text" class="form-control" placeholder="Plate Number" name="plateNo" value="{{ old('plateNo') }}">
            <br>

            <label for="chargePerDay">Charge Per Day</label>
            <input type="text" class="form-control" placeholder="Plate Number" name="chargePerDay" value="{{ old('chargePerDay') }}">
            <br>

            <label for="chargePerHour">Charge Per Hour</label>
            <input type="text" class="form-control" placeholder="Plate Number" name="chargePerHour" value="{{ old('chargePerHour') }}">
            <br>

            <button type="submit" class="btn btn-success">
                Create
            </button>
            
        </form>
        </div>
    </div>

@endsection