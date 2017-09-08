@extends('layouts.app')

@section('title', '| Create Car Entry')

@section('content')

    <div class="container">
        <div class="col-md-6">
  

        <h1>Create Car Entry</h1>
        <form action="{{ route('car.store') }}" method="POST" role="form">
            {{ csrf_field() }}

            <label for="carName">Car:</label>
            <input type="text" class="form-control" placeholder="Car" name="carName" value="{{ old('carName') }}">
            <br>

            <label for="plateNo">Plate Number:</label>
            <input type="text" class="form-control" placeholder="Plate Number" name="plateNo" value="{{ old('plateNo') }}">
            <br>

            <label for="chargePerDay">Charge Per Day</label>
            <input type="text" class="form-control" placeholder="Charge Per Day" name="chargePerDay" value="{{ old('chargePerDay') }}">
            <br>

            <label for="chargePerHour">Charge Per Hour</label>
            <input type="text" class="form-control" placeholder="Charge Per Hour" name="chargePerHour" value="{{ old('chargePerHour') }}">
            <br>

            <button type="submit" class="btn btn-success">
                Create
            </button>
            
        </form>
        </div>
    </div>

@endsection