<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Yajra\Datatables\Datatables;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.supplier');
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
        $supplier = new Supplier();
        if($request->id == "" && $request->id == null){

            $supplier->supplier_name = $request->input('supplier_name');
            $supplier->email = $request->input('email');
            $supplier->phone_number = $request->input('phone_number');
            $supplier->address = $request->input('address');
            $supplier->active = 1;

        }else{

            $update_supplier= Supplier::where('id',$request->id)->update([
                'supplier_name' => $request->input('supplier_name'),
                'email'=> $request->input('email'),
                'phone_number'=> $request->input('phone_number'),
                'address'=> $request->input('address')
            ]);
        }
  
        $supplier->save();
        return redirect()->route('supplier');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        if ($request->ajax()){
            $data = Supplier::where('active',1)->get();
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
        $up_supplier = Supplier::find($request->id);
        return response()->json($up_supplier);
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
        $del_supplier= Supplier::where('id',$request->id)->update([
            'active' => 0
        ]);
        return response()->json(['success'=>'Your Data has been deleted.']);
    }
}
