<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::All();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.add_category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category-name' => 'required|unique:categories,category-name',
            'status' => 'required|in:active,inactive',
        ]);
        Category::create($request->All());
        return redirect()->route('categories.index')->with('success','Added Succesfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
{
    $request->validate([
        'category-name' => 'required|unique:categories,category-name,' . $category->id,
        'status' => 'required|in:active,inactive',
    ]);

    // Update using the instance, not statically
    $category->update($request->all());

    return redirect()->route('categories.index')->with('success', 'Updated Successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Deleted Successfully');
    }
}
