@extends('layout.master')

@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Supplier</title>
@endsection

@section('content')
<div class="content">
    <!-- <div> -->
        <div class="intro-y flex items-center mt-8 ">
            <h2 class="text-lg font-medium mr-auto">
                <!-- <div class="intro-y box"> -->
                    <div class="p-5 " id="blank-modal">
                        <div class="preview">
                            <div class="text-center"> <a href="javascript:;" id="btn-modal" data-toggle="modal" data-target="#large-modal-size-preview" class="button inline-block bg-theme-1 text-white">Add New</a> </div>
                                <div class="modal supplier_modal" id="large-modal-size-preview">
                                    <div class="modal__content modal__content--lg p-5 ">
                                        <div class="flex items-center px-5 py-5 md:py-3 border-b border-gray-200">
                                            <h2 class="font-medium text-base mr-auto header-supplier">
                                                Add Supplier
                                            </h2>
                                        </div>
                                        <form action="{{route('supplier.store')}}" method="POST" enctype="multipart/form-data" id="form" class="validate-form">
                                            <input type="hidden" name="id" id="id">
                                            @csrf
                                            <div class="p-5 grid grid-cols-12 gap-6 row-gap-6">
                                                <div class="col-span-12 md:col-span-12">
                                                    <label class="font-medium text-base mr-auto">Supplier Name </label>
                                                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Supplier Name" id="supplier_name" name="supplier_name">
                                                </div>
                                                <div class="col-span-12 md:col-span-12">
                                                    <label class="font-medium text-base mr-auto">Email</label>
                                                    <input type="email" class="input w-full border mt-2 flex-1" placeholder="Email" id="email" name="email">
                                                </div>
                                                <div class="col-span-12 md:col-span-12">
                                                    <label class="font-medium text-base mr-auto">Phone Number</label>
                                                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Phone Number" id="phone_number" name="phone_number">
                                                </div>
                                                <div class="col-span-12 md:col-span-12">
                                                    <label class="font-medium text-base mr-auto">Address</label>
                                                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Address" id="address" name="address">
                                                </div>
                                            </div>
                                            <div class="px-5 py-3 text-right border-t border-gray-200">
                                                {{-- <button type="button" data-dismiss="modal" class="button w-20 border text-gray-700 mr-1">Cancel</button> --}}
                                                <button type="submit" id="btn-submit" class="button w-20 bg-theme-1 text-white">Add</button>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </h2>
        </div>
    <!-- </div> -->
    
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display w-full no-footer dtr-inline supplier_tb text-center" id="supplier_tb" role="grid" style="width: 806px;">
            <thead>
                <tr role="row">
                    <th class="border-b-2 whitespace-no-wrap sorting_asc" tabindex="0"  rowspan="1" colspan="1" style="width: 166px;" aria-sort="ascending" >#</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >SUPPLIER NAME</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >EMAIL</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >PHONE NUMBER</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >ADDRESS</th>

                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <tr role="row" class="odd text-center">
                    <!-- <td class="text-center border-b">

                    </td> -->
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/supplier.js"></script>
@endsection
