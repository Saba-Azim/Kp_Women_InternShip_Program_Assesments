<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Books;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $purchases = Purchase::with(['book', 'supplier'])->get();
        return view('purchase.index', compact('purchases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $books = Books::all();
        $suppliers = Suppliers::all();
        return view('purchase.create', compact('books', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric',
            'total' => 'required|numeric',
            'purchase_date' => 'required|date',
        ]);

        $total_price = $request->quantity * $request->price;

        // Create purchase record
        Purchase::create([
            'book_id' => $request->book_id,
            'supplier_id' => $request->supplier_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'total' => $total_price,
            'purchase_date' => $request->purchase_date,
        ]);

        // Increase book stock
        $book = Books::find($request->book_id);
        $book->quantity += $request->quantity;
        $book->save();

        return redirect()->route('purchase.index')->with('success', 'Purchase added successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        $books = Books::all();
        $suppliers = Suppliers::all();
        return view('purchase.edit', compact('purchase', 'books', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'supplier_id' => 'required|exists:suppliers,id',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric',
            'total_price' => 'required|numeric',
            'purchase_date' => 'required|date',
        ]);

        // Restore old stock
        $old_book = Books::find($purchase->book_id);
        if ($old_book) {
            $old_book->quantity -= $purchase->quantity;
            $old_book->save();
        }

        // Update purchase record
        $purchase->book_id = $request->book_id;
        $purchase->supplier_id = $request->supplier_id;
        $purchase->quantity = $request->quantity;
        $purchase->price = $request->price;
        $purchase->total_price = $request->quantity * $request->price;
        $purchase->purchase_date = $request->purchase_date;
        $purchase->save();

        // Add new stock
        $new_book = Books::find($request->book_id);
        if ($new_book) {
            $new_book->quantity += $request->quantity;
            $new_book->save();
        }

        return redirect()->route('purchase.index')->with('success', 'Purchase updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        // Decrease stock when deleting purchase
        $book = Books::find($purchase->book_id);
        if ($book) {
            $book->quantity -= $purchase->quantity;
            $book->save();
        }

        $purchase->delete();

        return redirect()->route('purchase.index')->with('success', 'Purchase deleted successfully!');
    }
}
