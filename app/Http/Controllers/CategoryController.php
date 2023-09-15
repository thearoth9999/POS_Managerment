<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use Yajra\Datatables\Datatables;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

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

        $category = new Category();
        if($request->id == " "){
            $category->name = $request->input('category');
            $category->description = $request->input('description');
            if ($request->file('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->extension();
                $image->move(public_path('img'), $filename);
                $category->image = $filename;
    
            }
            $category->save();
        }else{
            if ($request->file('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->extension();
                $image->move(public_path('img'), $filename);
                $category->image = $filename;
    
            }
            $category= Category::where('id',$request->id)->update([
                'name' => $request->input('category'),
                'description'=> $request->input('description'),
                'image'=> $filename

            ]);
            
        }
        
        // $category->status = 1;
       
        // Validator::make($request->all(), [
        //     'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        //     'name' => 'required|string',
        //     'description' => 'required|string',
        // ],[
        //     'name.required' => 'Name field is required.',
        //     'description.required'=> 'Name field is required.'
        // ])->validate();
        return redirect()->route('category')->with('success','Successful uploaded image');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

        if ($request->ajax()){
            $data = Category::get();
            return Datatables::of($data)
                        ->addIndexColumn()
                        // ->addColumn('action', function($row){
           
                        //         $btn = '<button  data-rowid="'.$row->id.'" id="edit-btn" class="btn-edit button inline-block bg-theme-12 text-white">Edit</button>'.' '.
                        //                 '<button   data-rowid="'.$row->id.'" id="btn_delete"class="btn-delete button inline-block bg-theme-6 text-white">Delete</button>';
                        //         return $btn;
                        // })
                        ->rawColumns(['action'])
                        ->make(true);
                        
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $up_category = Category::find($request->id);
        return response()->json($up_category);
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
        // $de_category = Category::find($id);

        // if ($de_category) {
        //     $de_category->status = 0;
        //     $de_category->save();
        // }

    }
}
