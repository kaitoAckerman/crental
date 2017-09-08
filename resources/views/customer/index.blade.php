@extends('layouts.app') 

@section('title', '| Customer Details')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="col-md-4" style="height:100%">
            <div class="panel panel-default">
                <div class="panel-heading">Booking Details</div>
                <div class="panel-body">


                    <p1>Pickup Location : {{ $book->pickupLocation }}</p1>
                    <br>
                    <p1>Return Location : {{ $book->returnLocation }}</p1>
                    <br>
                    <p1>Pickup Time : {{ $book->pickupTime }}</p1>
                    <br>
                    <p1>Return Time : {{ $book->returnTime }}</p1>
                    <br>
                    <br>
                    <p1>Car Name : {{ $car->carName }}</p1><br>
                    <p1>Car Plate : {{ $car->plateNo }}</p1><br>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Payment</div>
                <div class="panel-body">

                <?php

                    $start_date = "pickupTime"; 
                    $end_date = "returnTime";

                    $start_time = strtotime($start_date);
                    $end_time = strtotime($end_date);


                    $hours = $end_time - $start_time;


                    echo sprintf("%02d%s%02d%s%02d", floor($hours/3600), ':', ($hours/60)%60, ':', $hours%60);

                ?>

                    <h5>Rental Duration : {{ $hours }}</h5>
                    <h5>Price per days : {{ $car->chargePerDay }}</h5>
                    <h5>Price per hours : {{ $car->chargePerHour }}</h5>
                    <h5>Total price : </h5>
                    {{--  <h5>Required deposit : </h5>  --}}

                    {{-- @foreach($customers As $customer)

                    <h5>Name: {{ $customer->name }}</h5>
                    <h5>Phone No: {{ $customer->phone }}</h5>
                    <h5>Student ID: {{ $customer->studentId }}</h5>
                    <h5>Car Booked: {{ $customer->car }}</h5>

                    <br> @if (Auth::guest()) @else

                    <div class="form-group">
                        <form method="POST" action="{{ route('customer.destroy', $customer->id) }}">
                            {{ method_field('DELETE') }}
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger btn-block">Delete</button>
                        </form>
                    </div>

                    @endif @endforeach --}}

                </div>
            </div>
        </div>

        <div class="col-md-offset-4 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Customer Information</div>
                <div class="panel-body">


                    <form class="form-horizontal" action="{{ route('customer.store') }}" method="POST" role="form">
                        {{ csrf_field() }}

                        <label for="name">Name:</label>
                        <input type="text" class="form-control" placeholder="name" name="name" value="{{ old('name') }}">
                        <br>

                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" placeholder="phone" name="phone" value="{{ old('phone') }}">
                        <br>

                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="email" name="email" value="{{ old('email') }}">
                        <br>

                        <label for="studentId">studentId</label>
                        <input type="text" class="form-control" placeholder="studentId" name="studentId" value="{{ old('studentId') }}">
                        <br> ** you should bring your indentification card and license copy
                        <br>
                        <br>

                        <button type="submit" class="btn btn-success">
                            Submit
                        </button>


                </div>
            </div>
        </div>


        <div class="col-md-offset-4 col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Payment Method</div>
                <div class="panel-body">



                    <p1>Cash ONLY</p1>
                    <br>
                    <p1>Visit us in</p1>
                    <br>
                    <p1>p3-306-b3</p1>

                </div>
            </div>
        </div>




    </div>





</div>
</div>

@endsection