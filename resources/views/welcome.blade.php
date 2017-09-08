@extends('layouts.app') 

@section('title', '| Welcome to KUIS CRental') 

@section('content')


<div cldiv class="container">
    <div class="col-md-12">
        <div class="well">
            <div class="row">
                <form action="{{ route('book.store') }}" method="POST" role="form">
                    {{ csrf_field() }}


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-datetime-local-input" class="col-2 col-form-label">PickUp Location</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="pickupLocation" placeholder="Enter pickup location">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">    
                            <label for="example-datetime-local-input" class="col-2 col-form-label">Return Location</label>
                            <div class="col-10">
                                <input class="form-control" type="text" name="returnLocation" placeholder="Enter return location">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="time" class="col-2 col-form-label">Pickup Time</label>
                            <div class="col-10">
                                <input class="form-control" type="time" value="13:45:00" name="pickupTime">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-datetime-local-input" class="col-2 col-form-label">Return Time</label>
                            <div class="col-10">
                                <input class="form-control" type="time" value="13:45:00" name="returnTime">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Grab your car NOW</button>
                                <button class="btn btn-danger">Cancel Reservation</button>
                            </div>
                        </div>
                    </div>

                    ** Available for per-hour reservation only **
                      
                </form>

            </div>
            <br>

        </div>
    </div>

</div>


@endsection