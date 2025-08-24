<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Suppliers::All();
        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:suppliers,email',
            'phone' => 'required|unique:suppliers,phone',
            'address' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        Suppliers::create($request->all());

        return redirect()->route('suppliers.index')->with('success', 'Added Successfully');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Suppliers $suppliers)
    {
        return view('suppliers.edit', compact('suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Suppliers $suppliers)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:suppliers,email,' . $suppliers->id,
            'phone' => 'required|unique:suppliers,phone,' . $suppliers->id,
            'address' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        $suppliers->update($request->all());

        return redirect()->route('suppliers.index')->with('success', 'Updated Successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suppliers $suppliers)
    {
        $suppliers->delete();
        return redirect()->route('suppliers.index')->with('success', 'Deleted Successfully');
    }
}
