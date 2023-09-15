@extends('layout.master')

@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Category</title>

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
                                <div class="modal category-modal" id="large-modal-size-preview">
                                    <div class="modal__content modal__content--lg p-5">
                                        <div class="flex items-center px-5 py-5 md:py-3 border-b border-gray-200">
                                            <h2 class="font-medium text-base mr-auto header-category">
                                                Add Category
                                            </h2>
                                        </div>
                                        @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                            @php
                                                Session::forget('success');
                                            @endphp
                                        </div>
                                        @endif
                                        
                                        <form action="{{ Route('category.store')}}" method="POST" enctype="multipart/form-data" id="form">
                                            <input type="hidden" name="id" id="id">
                                            @csrf
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                                <div class="p-5 grid grid-cols-12 gap-6 row-gap-6">
                                                    <div class="col-span-12 md:col-span-12">
                                                        <label class="font-medium text-base mr-auto">Category Name</label>
                                                        <input type="text"  class="input w-full border mt-2 @error('name') is-invalid @enderror" placeholder="Category Name" name="category" id="category" required>
                                                        @error('name')
                                                            <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">{{ $$error->name }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-span-12 md:col-span-12">
                                                        <div class="intro-y col-span-12 lg:col-span-6">
                                                            <!-- BEGIN: File Type Validation -->
                                                            <div class="intro-y box">
                                                                <div class="p-5" id="file-type-validation">
                                                                    <div class="preview">
                                                                        <!-- <form data-file-types="image/jpeg|image/png|image/jpg" action="/file-upload" class="dropzone border-gray-200 border-dashed"> -->
                                                                            <div class="fallback">
                                                                                <input id="image" name="image" type="file" />
                                                                            </div>
                                                                            <div class="dz-message" data-dz-message>
                                                                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                                                                <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                                                                            </div>
                                                                        <!-- </form> -->
                                                                    </div>
                                                                    
                                                                    <div class="source-code hidden">
                                                                        <button data-target="#copy-file-type-validation" class="copy-code button button--sm border flex items-center text-gray-700"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                                                        <div class="overflow-y-auto h-64 mt-3">
                                                                            <pre class="source-preview" id="copy-file-type-validation"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagform data-file-types=&quot;image/jpeg|image/png|image/jpg&quot; action=&quot;/file-upload&quot; class=&quot;dropzone border-gray-200 border-dashed&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;fallback&quot;HTMLCloseTag HTMLOpenTaginput name=&quot;file&quot; type=&quot;file&quot; /HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;dz-message&quot; data-dz-messageHTMLCloseTag HTMLOpenTagdiv class=&quot;text-lg font-medium&quot;HTMLCloseTagDrop files here or click to upload.HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-gray-600&quot;HTMLCloseTag This is just a demo dropzone. Selected files are HTMLOpenTagspan class=&quot;font-medium&quot;HTMLCloseTagnotHTMLOpenTag/spanHTMLCloseTag actually uploaded. HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/formHTMLCloseTag </code> </pre>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END: File Type Validation -->
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-span-12 md:col-span-12">
                                                        <label class="font-medium text-base mr-auto">Description</label>
                                                        <input type="text"   class="input w-full border mt-2 @error('description') is-invalid @enderror" placeholder="Description" name="description" id="description" required>
                                                    </div>
                                                    @error('description')
                                                        <!-- <span class="text-danger">{{ $message }}</span> -->
                                                        <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">{{ $error->description }}</span>
                                                    @enderror
                                                </div>
                                            <div class="px-5 py-3 text-right border-t border-gray-200">
                                                <!-- <button type="button" data-dismiss="modal" class="button w-20 border text-gray-700 mr-1">Cancel</button> -->
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
        <table class="table table-report table-report--bordered display w-full no-footer dtr-inline category_tb" id="category_tb" role="grid" style="width: 806px;">
            <thead>
                <tr role="row">
                    <th class="border-b-2 whitespace-no-wrap sorting_asc" tabindex="0"  rowspan="1" colspan="1" style="width: 166px;" aria-sort="ascending" >#</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >NAME</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >IMAGE</th>
                    <th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0"  rowspan="1" colspan="1" style="width: 50px;" >DESCRIPTION</th>
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
    <script src="js/category.js"></script>
@endsection
