@extends('layouts.app')

@section('title', '| Customer Details')

@section('content')

    <div class="container">
        <div class="col-md-6">


        <h1>Customer Details</h1>
        <form action="{{ route('customer.store') }}" method="POST" role="form">
            {{ csrf_field() }}

            <label for="carName">Name:</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            <br>

            <label for="plateNo">Phone No:</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
            <br>

            <label for="chargePerDay">Student ID</label>
            <input type="text" class="form-control" name="studentId" value="{{ old('studentId') }}">
            <br>

            <button type="submit" class="btn btn-success">
                Submit
            </button>
            
        </form>
        </div>
    </div>

@endsection