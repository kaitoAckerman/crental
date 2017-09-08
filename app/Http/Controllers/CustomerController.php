<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\BookDetails;
use App\Car;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idBook = request()->book;
        $idCar = request()->car;
        $book = BookDetails::where('id', $idBook)->get()->first();
        $customers = Customer::orderBy('id', 'desc')->get();
        $car = Car::where('id', $idCar)->get()->first();
        
        return view('customer.index', compact('book', 'car'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::orderBy('id', 'desc')->get();

        return view('customer.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idBook = request()->book;
        $idCar = request()->car;

        // $this -> validate($request, [
        //         'name' => 'required|max:50',
        //         'phone' => 'required|max:50',
        //         'studentId' => 'required|max:50',
        //         'car' => 'max:50'
        // ]);

        // $customer = new Customer;

        // $customer->name = $request->name;
        // $customer->phone = $request->phone;
        // $customer->studentId = $request->studentId;
        // $customer->email = $request->email;
        // $customer->car = $request->car;
        
        // $customer->save();
        $book = BookDetails::where('id', $idBook)->get()->first();
        $car = Car::where('id', $idCar)->get()->first();
        
        return redirect()->route('customer.index', compact('book', 'car'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $customer = Customer::find($id);

        $customer->delete();

        return redirect()->route('customer.index');
    }
}
