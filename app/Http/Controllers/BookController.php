<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookDetails;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        $books = BookDetails::orderBy('id', 'desc')->get();

        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = BookDetails::orderBy('id', 'desc')->get();
        
        return view('create.index', compact('books'));
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

            'pickupLocation'=>'required|max:30',
            'returnLocation'=>'required|max:30',
            'pickupTime'=>'required|max:30',
            'returnTime'=>'required|max:30',
        
        ]);

        $book = new BookDetails;

        $book->pickupLocation = $request->pickupLocation;
        $book->returnLocation = $request->returnLocation;
        $book->pickupTime = $request->pickupTime;    
        $book->returnTime = $request->returnTime;

        $book->save();

        $books = BookDetails::where('id', $book->id)->get()->first();


        return redirect()->route('car.index', compact('books'));
        
        
        
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
        $book = BookDetails::find($id);
        
        $book->delete();
        
        return redirect()->route('book.index');

    }
}
