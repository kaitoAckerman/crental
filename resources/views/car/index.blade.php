@extends('layouts.app') 

@section('title', '| Car List') 

@section('content')

<div class="container">
    <div class="col-md-6">


    </div>

    <div class="row">
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
                            <br><br>
                        </div>
                </div>
            </div>


            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Choose vehicle</div>
                    <div class="panel-body">

                        @foreach($cars As $car)


                        <div class="col-md-8">
                            <h4>{{ $car->carName }}<h4>
                            <h5>{{ $car->plateNo }}</h5>
                            <h5>{{ $car->chargePerDay }}/Per Day</h5>
                            <h5>{{ $car->chargePerHour }}/Per Day</h5>

                            <body>
                                 <img src="img/myvi2.jpg" height="180px" width="280px">
                            </body>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                {{--
                                <input class="btn btn-success btn-block" type="submit" name="2" value="Book" style=""
                                /> --}}
                                <a class="btn btn-success btn-block" href="{{ route('customer.store', compact('book', 'car') ) }}">Book</a>
                            </div>


                            @if (Auth::guest()) 
                            
                            
                            @else

                            <div class="form-group">
                                <form method="POST" action="{{ route('car.destroy', $car->id) }}">
                                    {{ method_field('DELETE') }}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger btn-block">Delete</button>
                                </form>
                            </div>

                            @endif

                        </div>


                        <br>
                        <br> @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection