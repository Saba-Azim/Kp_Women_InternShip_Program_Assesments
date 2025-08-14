<?php

namespace App\Http\Controllers;

use App\Models\Vendors;
use Illuminate\Http\Request;

class VendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = Vendors::All();
        return view('vendors.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name'=> 'required',
            'email' => 'required|unique',
            'phone' => 'required|unique',
            'address' => 'required',
            'status' => 'required|in:acitve,inactive',
        ]);
        Vendors::create($request->All());
        return redirect()->route('vendors.index')->with('success', 'Added Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vendors $vendors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendors $vendors)
    {
         return view('vendors.edit', compact('authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendors $vendors)
    {
        $request->validate([
            'name'=> 'required' . $vendors->id,
            'email' => 'required|unique',
            'phone' => 'required|unique',
            'address' => 'required',
            'status' => 'required|in:acitve,inactive',
    ]);
    $vendors->update($request->all());

    return redirect()->route('vendors.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendors $vendors)
    {
        $vendors->delete();
        return redirect()->route('vendors.index')->with('success', 'Deleted Successfully');
    }
}
