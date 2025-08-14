<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book=Books::with('category')->get();
        return view('books.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::All();
        return view('books.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author'=> 'required',
            'isbn'=> 'required',
            'publisher'=> 'required',
            'publication-date'=> 'required',
            'price'=> 'required|numeric',
            'quantity'=> 'required|integer',
            'image'=>'',
            'description'=> 'required',
            'category-id'=> 'required|exists:categories,id',

        ]);
        Books::create($request->All());
        return redirect()->route('books.index')->with('success','Added Succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $books)
    {
        $categories=Category::All();
         return view('books.edit', compact('books', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $books)
    {
        $request->validate([
            'title' => 'required',
            'author'=> 'required',
            'isbn'=> 'required',
            'publisher'=> 'required',
            'publication-date'=> 'required',
            'price'=> 'required|numeric',
            'quantity'=> 'required|integer',
            'image'=>'',
            'description'=> 'required',
            'category-id'=> 'required|exists:categories,id',

        ]);
        $books->update($request->All());
        return redirect()->route('books.index')->with('success','Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $books)
    {
        $books->delete();
        return redirect()->route('books.index')->with('success', 'Deleted Successfully');
    }
}
