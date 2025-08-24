<?php

namespace App\Http\Controllers;

use App\Models\Publishers;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publishers::All();
        return view('publishers.index', compact('publishers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publishers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'email' => 'required|unique:publishers,email',
            'phone' => 'required|unique:publishers,phone',
            'address' => 'required',
            'website' => 'required|unique:publishers,website',
            'status' => 'required|in:active,inactive',
        ]);
        Publishers::create($request->All());
        return redirect()->route('publishers.index')->with('success', 'Added Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publishers $publishers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publishers $publishers)
    {
        return view('publishers.edit', compact('publishers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publishers $publishers)
    {
        $request->validate([
            'name'=> 'required' . $publishers->id,
            'email' => 'required|unique:publishers,email',
            'phone' => 'required|unique:publishers,phone',
            'address' => 'required',
            'website' => 'required|unique',
            'status' => 'required|in:active,inactive',
    ]);
    $publishers->update($request->all());

    return redirect()->route('publishers.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publishers $publishers)
    {
        $publishers->delete();
        return redirect()->route('publishers.index')->with('success', 'Deleted Successfully');
    }
}
