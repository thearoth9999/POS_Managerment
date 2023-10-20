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
        if($request->id == "" && $request->id == null){
            $category->name = $request->input('category');
            $category->description = $request->input('description');
            $category->active = 1;
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
                $new_image = time() . '.' . $image->extension();
                $image->move(public_path('img'), $new_image);
                
            }
            $update_category= Category::where('id',$request->id)->update([
                'name' => $request->input('category'),
                'description'=> $request->input('description'),
                'image'=> $request->file('image')

            ]);
      
        }
        
       
        // $validate = Validator::make($request->all(), [
        //     // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        //     'name' => 'required|string',
        //     'description' => 'required|string',
        // ],[
        //     'name.required' => 'Name field is required.',
        //     'description.required'=> 'Name field is required.'
        // ]);
        // if($validate->fails()){
        //     return response()->json(['errors'=>$validate->getMessageBag()->toArray()]);
        // }
        // return response()->json(['success' => 'Category create is successfully.']);
        return redirect()->route('category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {

        if ($request->ajax()){
            $data = Category::where('active',1)->get();
            return Datatables::of($data)
                        ->addIndexColumn()
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
    public function destroy(Request $request)
    {
        $del_category= Category::where('id',$request->id)->update([
            'active' => 0
        ]);
        return response()->json(['success'=>'Your Data has been deleted.']);
        // dd($del_category);

    }
}
