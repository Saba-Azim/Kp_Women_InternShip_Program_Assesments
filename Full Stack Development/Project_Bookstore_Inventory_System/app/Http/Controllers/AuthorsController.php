<?php

namespace App\Http\Controllers;

use App\Models\Authors;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Authors::All();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name'=> 'required',
            'email' => 'required|unique:authors,email',
            'phone' => 'required|unique:authors,phone',
            'address' => 'required',
            'status' => 'required|in:active,inactive',
        ]);
        Authors::create($request->All());
        return redirect()->route('authors.index')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Authors $authors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Authors $authors)
    {
         return view('authors.edit', compact('authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Authors $authors)
    {
         $request->validate([
            'name'=> 'required' . $authors->id,
            'email' => 'required|unique:authors,email',
            'phone' => 'required|unique:authors,phone',
            'address' => 'required',
            'status' => 'required|in:active,inactive',
    ]);
    $authors->update($request->all());

    return redirect()->route('authors.index')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Authors $authors)
    {
         $authors->delete();
        return redirect()->route('authors.index')->with('success', 'Deleted Successfully');
    }
}
