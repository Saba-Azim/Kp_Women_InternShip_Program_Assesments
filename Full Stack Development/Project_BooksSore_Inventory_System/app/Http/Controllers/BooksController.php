<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Category;
use App\Models\Authors;
use App\Models\Publishers;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::with(['category', 'author', 'publisher', 'supplier'])->get();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $authors = Authors::all();
        $publishers = Publishers::all();
        $suppliers = Suppliers::all();

        return view('books.create', compact('categories', 'authors', 'publishers', 'suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'author_id'      => 'required|exists:authors,id',
            'isbn'           => 'required|string|unique:books,isbn',
            'publisher_id'   => 'required|exists:publishers,id',
            'publication-date'=> 'required|date',
            'price'          => 'required|numeric|min:0',
            'quantity'       => 'required|integer|min:1',
            'image'          => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'description'    => 'required|string',
            'status'         => 'required',
            'category-id'    => 'required|exists:categories,id',
            'supplier_id'    => 'required|exists:suppliers,id',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('books', 'public');
            $validated['image'] = $path;
        }

        Books::create($validated);

        return redirect()->route('books.index')->with('success', 'Book added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $book)
    {
        $categories = Category::all();
        $authors = Authors::all();
        $publishers = Publishers::all();
        $suppliers = Suppliers::all();

        return view('books.edit', compact('book','categories','authors','publishers','suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $book)
    {
        $validated = $request->validate([
            'title'          => 'required|string|max:255',
            'author_id'      => 'required|exists:authors,id',
            'isbn'           => 'required|string|unique:books,isbn,' . $book->id,
            'publisher_id'   => 'required|exists:publishers,id',
            'publication-date'=> 'required|date',
            'price'          => 'required|numeric|min:0',
            'quantity'       => 'required|integer|min:1',
            'image'          => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'description'    => 'required|string',
            'status'          => 'required',
            'category-id'    => 'required|exists:categories,id',
            'supplier_id'    => 'required|exists:suppliers,id',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('books', 'public');
            $validated['image'] = $path;
        }

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }
}
