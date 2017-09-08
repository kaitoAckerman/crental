@extends('layouts.app')

@section('title', '| Book Detail')

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

                            <p1>Pickup Location : {{ $books->pickupLocation }}</p1>
                            <br>
                            <p1>Return Location : {{ $books->returnLocation }}</p1>
                            <br>
                            <p1>Pickup Time : {{ $books->pickupTime }}</p1>
                            <br>
                            <p1>Return Time : {{ $books->returnTime }}</p1>
                            <br><br>
                        </div>
                    </div>
                </div>
                

                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">Choose vehicle</div>
                        <div class="panel-body">

                        {{--  @foreach($cars As $car)  --}}

                        
                        <div class="col-md-8">
                            <h4></h4>
                            <h5></h5>
                            <h5></h5>
                            <h5></h5>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <a class="btn btn-success btn-block" href="{{ route('customer.index') }}">Book</a>  
                            </div>

                            @if (Auth::guest())
                                
                            @else
                                <div class="form-group">
                                    <form method="POST" action="{{ route('book.destroy', $book->id) }}">
                                        {{ method_field('DELETE') }}
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-danger btn-block">Delete</button>
                                    </form>
                                </div>

                            @endif
                            
                        </div>

                            
                            
                            
                            <br>
                            <br>

                        {{--  @endforeach  --}}

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection