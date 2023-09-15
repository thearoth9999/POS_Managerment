<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use Yajra\Datatables\Datatables;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.brand');
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
        // $category = new Category();
        // $category->name = $request->input('category');
        // $category->description = $request->input('description');
        // // $category->status = 1;
        // if ($request->file('image')) {
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->extension();
        //     $image->move(public_path('img'), $filename);
        //     $category->image = $filename;

        // }
        // Validator::make($request->all(), [
        //     'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        //     'name' => 'required|string',
        //     'description' => 'required|string',
        // ],[
        //     'name.required' => 'Name field is required.',
        //     'description.required'=> 'Name field is required.'
        // ])->validate();
        // $category->save();
        // return redirect()->route('category')->with('success','Successful uploaded image');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        // if ($request->ajax()){
        //     $data = Category::get();
        //     return Datatables::of($data)
        //                 ->addIndexColumn()
        //                 // ->addColumn('action', function($row){
           
        //                 //         $btn = '<button  data-rowid="'.$row->id.'" id="edit-btn" class="btn-edit button inline-block bg-theme-12 text-white">Edit</button>'.' '.
        //                 //                 '<button   data-rowid="'.$row->id.'" id="btn_delete"class="btn-delete button inline-block bg-theme-6 text-white">Delete</button>';
        //                 //         return $btn;
        //                 // })
        //                 ->rawColumns(['action'])
        //                 ->make(true);
                        
        // }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
