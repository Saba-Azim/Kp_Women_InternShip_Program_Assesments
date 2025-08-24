<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sale = Sales::with('book')->get();
        return view('sales.index', compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $book = Books::All();
        return view('sales.create', compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required',
            'customer_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'quantity' => 'required|integer|min:1',
            'price' => 'required',
            'total_price' => 'required',
            'sale_date' => 'required',

        ]);

        $total_price=$request->quantity*$request->price; //calculate total price

        Sales::create([
            'book_id' => $request-> book_id ,
            'customer_name' => $request-> customer_name,
            'email' => $request-> email,
            'phone' => $request-> phone,
            'address' => $request-> address,
            'quantity' => $request-> quantity,
            'price' => $request-> price,
            'total_price' => $total_price,
            'sale_date' => $request-> sale_date,

        ]);
        //Decrease the book quantity after sale
        $book=Books::find($request->book_id);
        $book->quantity -= $request->quantity;
        $book->save();

        return redirect()->route('sales.index')->with('success', 'Added Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sales $sales)
    {
        $book=Books::All();
         return view('sales.edit', compact('sales', 'book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sales $sales)
{
    $request->validate([
        'book_id' => 'required',
        'customer_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',
        'quantity' => 'required|integer|min:1',
        'price' => 'required|numeric',
        'sale_date' => 'required|date',
    ]);

    // Restore old book quantity
    $old_book = Books::find($sales->book_id);
    if ($old_book) {
        $old_book->quantity += $sales->quantity;
        $old_book->save();
    }

    // Update sale record
    $sales->book_id = $request->book_id;
    $sales->customer_name = $request->customer_name;
    $sales->email = $request->email;
    $sales->phone = $request->phone;
    $sales->address = $request->address;
    $sales->quantity = $request->quantity;
    $sales->price = $request->price;
    $sales->total_price = $request->quantity * $request->price; // recalculate
    $sales->sale_date = $request->sale_date;
    $sales->save();

    // Decrease new book stock
    $new_book = Books::find($request->book_id);
    if ($new_book) {
        $new_book->quantity -= $request->quantity;
        $new_book->save();
    }

    return redirect()->route('sales.index')->with('success','Updated Successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sales)
{
    $book = Books::find($sales->book_id);
    if ($book) {
        $book->quantity += $sales->quantity;
        $book->save();
    }
    $sales->delete();
    return redirect()->route('sales.index')->with('success', 'Deleted Successfully');
}

}
