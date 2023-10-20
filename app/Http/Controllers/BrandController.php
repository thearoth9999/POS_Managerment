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
        $brand = new Brand();
        if($request->id == "" && $request->id == null){
            $brand->name = $request->input('brand');
            $brand->active = 1;
            if ($request->file('image')) {
                $image = $request->file('image');
                $filename = time() . '.' . $image->extension();
                $image->move(public_path('img'), $filename);
                $brand->image = $filename;

            }
        $brand->save();
        }else{
            if ($request->file('image')) {
                $image = $request->file('image');
                $new_image = time() . '.' . $image->extension();
                $image->move(public_path('img'), $new_image);
                
            }
            $update_brand= Brand::where('id',$request->id)->update([
                'name' => $request->input('brand'),
                // 'image'=> $request->file('image'),
            ]);
        }
        
        // Validator::make($request->all(), [
        //     'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        //     'name' => 'required|string',
        //     'description' => 'required|string',
        // ],[
        //     'name.required' => 'Name field is required.',
        //     'description.required'=> 'Name field is required.'
        // ])->validate();
        return redirect()->route('brand');
        // dd([$request->name,$request->image]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        if ($request->ajax()){
            $data = Brand::where('active',1)->get();
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
        $up_brand = Brand::find($request->id);
        return response()->json($up_brand);
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
        $del_brand= Brand::where('id',$request->id)->update([
            'active' => 0
        ]);
        return response()->json(['success'=>'Your data has beed deleted']);
        // dd($del_category);

    }
}
