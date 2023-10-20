@extends('layout.master')

@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Brand</title>
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
                                <div class="modal brand_modal" id="large-modal-size-preview">
                                    <div class="modal__content modal__content--lg p-5 ">
                                        <div class="flex items-center px-5 py-5 md:py-3 border-b border-gray-200">
                                            <h2 class="font-medium text-base mr-auto header-brand">
                                                Add Brand
                                            </h2>
                                        </div>
                                        <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data" id="brand_form" class="validate-form">
                                            <input type="hidden" name="id" id="id">
                                            @csrf
                                            <div class="p-5 grid grid-cols-12 gap-6 row-gap-6">
                                                <div class="col-span-12 md:col-span-12">
                                                    <label class="font-medium text-base mr-auto">Brand Name </label>
                                                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="Brand Name" id="brand" name="brand">
                                                </div>
                                                <div class="col-span-12 md:col-span-12">
                                                    <div class="flex flex-col sm:flex-row items-center border-b border-gray-200">
                                                        <h2 class="font-medium text-base mr-auto">
                                                            Brand Images
                                                        </h2>
                                                    </div>
                                                    <div class="p-5" id="file-type-validation">
                                                        <div class="preview">
                                                            {{-- <form data-file-types="image/jpeg|image/png|image/jpg" action="/file-upload" class="dropzone border-gray-200 border-dashed"> --}}
                                                                <div class="fallback">
                                                                    <input name="image" id="image" type="file" />
                                                                </div>
                                                                <div class="dz-message" data-dz-message>
                                                                    <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                                    <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                                                                </div>
                                                            {{-- </form> --}}
                                                        </div>
                                                        <input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-5 py-3 text-right border-t border-gray-200">
                                                <button type="submit" class="button w-20 bg-theme-1 text-white">Add</button>
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
        <table class="ttable table-report table-report--bordered display w-full no-footer dtr-inline brand_tb text-center" id="brand_tb" role="grid" style="width: 806px;">
            <thead>
                <tr role="row">
                    <th class="border-b-2 whitespace-no-wrap sorting_asc" tabindex="0"  rowspan="1" colspan="1" style="width: 166px;" aria-sort="ascending" >#</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >NAME</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >IMAGE</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <tr role="row" class="odd">

                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="js/brand.js"></script>
@endsection
