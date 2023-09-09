<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $category = Category::get();
        return view('pages.category');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            'name' => 'required|string',
            'description' => 'required|string',
        ],[
            'name.required' => 'Name field is required.',
            'description.required'=> 'Name field is required.'
        ]);
        $category = new Category();
        $category->name = $request->input('category');
        $category->description = $request->input('description');
        

        if ($request->file('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->extension();
            $image->move(public_path('img'), $filename);
            $category->image = $filename;

        }
    
        $category->save();
        return back()->with('success','Successful uploaded image');
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $category = Category::get();
        return response($category);
        // return view('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
