<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\BookDetails;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $cars = Car::orderBy('id', 'desc')->get();
        $id = request()->books;
        $book = BookDetails::where('id', $id)->get()->first();
        // return $cars;
        return view('car.index', compact('cars','book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::orderBy('id', 'desc')->get();

        return view('car.create', compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'carName' => 'required|max:20',
            'plateNo' => 'required|max:20',
            'chargePerDay' => 'required|max:30',
            'chargePerHour' => 'required|max:30',
        ]);

        $car = new Car; // This is model declaration

        $car->carName = $request->carName; 
        $car->plateNo = $request->plateNo;
        $car->chargePerDay = $request->chargePerDay;
        $car->chargePerHour = $request->chargePerHour;

        $car->save(); // Save to database 

        return redirect()->route('car.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //declare id
    {
        $car = Car::find($id);

        return redirect()->route('car.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::find($id);

        $car->delete();

        return redirect()->route('car.index');

    }
}
