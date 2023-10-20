<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currencies;
use Yajra\Datatables\Datatables;

class CurrencyController extends Controller
{
    //
    public function index()
    {
        return view('pages.currency');
    }

    public function store(Request $request)
    {

        $currency = new Currencies();
        if($request->id == "" && $request->id == null){
            $currency->currency_name = $request->input('currency_name');
            $currency->currency_code = $request->input('currency_code');
            $currency->symbol = $request->input('symbol');
            $currency->active = 1;
            
            $currency->save();
        }else{
            $update_currency= Currencies::where('id',$request->id)->update([
                'currency_name' => $request->input('currency_name'),
                'currency_code'=> $request->input('currency_code'),
                'symbol'=> $request->input('symbol'),

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
        return redirect()->route('currency');
    }


    public function show(Request $request)
    {

        if ($request->ajax()){
            $data = Currencies::where('active',1)->get();
            return Datatables::of($data)
                        ->addIndexColumn()
                        ->rawColumns(['action'])
                        ->make(true);
                        
        }
        
    }

    public function edit(Request $request)
    {
        $up_currency = Currencies::find($request->id);
        return response()->json($up_currency);
    }

    public function destroy(Request $request)
    {
        $del_currency= Currencies::where('id',$request->id)->update([
            'active' => 0
        ]);
        return response()->json(['success'=>'Your Data has been deleted.']);
        // dd($del_category);

    }
}
