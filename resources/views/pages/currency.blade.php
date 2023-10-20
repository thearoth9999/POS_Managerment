@extends('layout.master')

@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Currency</title>
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
                                <div class="modal currency_modal" id="large-modal-size-preview">
                                    <div class="modal__content modal__content--lg p-5 ">
                                        <div class="flex items-center px-5 py-5 md:py-3 border-b border-gray-200">
                                            <h2 class="font-medium text-base mr-auto header-currency">
                                                Add Currency
                                            </h2>
                                        </div>
                                        <form action="{{route('currency.store')}}" method="POST" enctype="multipart/form-data" id="form" class="validate-form">
                                            <input type="hidden" name="id" id="id">
                                            @csrf
                                            <div class="p-5 grid grid-cols-12 gap-12 row-gap-12">
                                                <div class="col-span-12 md:col-span-12">
                                                    <label class="font-medium text-base mr-auto">Currency Name</label>
                                                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Currency Name " id="currency_name" name="currency_name">
                                                </div>
                                                <div class="col-span-12 md:col-span-12">
                                                    <label class="font-medium text-base mr-auto">Currency Code</label>
                                                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Currency Code" id="currency_code" name="currency_code">
                                                </div>
                                                <div class="col-span-12 md:col-span-12">
                                                    <label class="font-medium text-base mr-auto">Symbol</label>
                                                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Symbol" id="symbol" name="symbol">
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
        <table class="table table-report table-report--bordered display w-full no-footer dtr-inline currency_tb text-center" id="currency_tb" role="grid" style="width: 806px;">
            <thead>
                <tr role="row">
                    <th class="border-b-2 whitespace-no-wrap sorting_asc" tabindex="0"  rowspan="1" colspan="1" style="width: 166px;" aria-sort="ascending" >#</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >NAME</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >CODE</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >SYMBOL</th>
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
    <script src="js/currency.js"></script>
@endsection
