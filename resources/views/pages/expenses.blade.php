@extends('layout.master')

@section('header')
    <title></title>
@endsection

@section('content')
<div class="content">
    <!-- <div> -->
        <div class="intro-y flex items-center mt-8 ">
            <h2 class="text-lg font-medium mr-auto">
                <!-- <div class="intro-y box"> -->
                    <div class="p-5 " id="blank-modal">
                        <div class="preview">
                            <div class="text-center"> <a href="javascript:;" data-toggle="modal" data-target="#large-modal-size-preview" class="button inline-block bg-theme-1 text-white">Add New</a> </div>
                                <div class="modal" id="large-modal-size-preview">
                                    <div class="modal__content modal__content--lg p-2">
                                        <div class="flex items-center px-5 py-5 md:py-3 border-b border-gray-200">
                                            <h2 class="font-medium text-base mr-auto">
                                                Add Expenses
                                            </h2>
                                        </div>
                                        <form action="#">
                                            <div class="p-5 grid grid-cols-12 gap-12 row-gap-12">
                                                <div class="col-span-12 md:col-span-6">
                                                    <label class="font-medium text-base mr-auto">Expenses Titile</label>
                                                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="">
                                                </div>
                                                <div class="col-span-12 md:col-span-6">
                                                    <label class="font-medium text-base mr-auto">Date</label>
                                                    <div class="m-2 w-6" id="input-group-datepicker">
                                                        <div class="preview">
                                                            <div class="relative w-56 mx-auto">
                                                                <div class="absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600"> <i data-feather="calendar" class="w-4 h-4"></i> </div>
                                                                <input type="text" class="datepicker input pl-12 border">
                                                            </div>
                                                        </div>
                                                        <div class="source-code hidden">
                                                            <button data-target="#copy-input-group-datepicker" class="copy-code button button--sm border flex items-center text-gray-700"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                                                            <div class="overflow-y-auto h-64 mt-3">
                                                                <pre class="source-preview" id="copy-input-group-datepicker"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;relative w-56 mx-auto&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;absolute rounded-l w-10 h-full flex items-center justify-center bg-gray-100 border text-gray-600&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;calendar&quot; class=&quot;w-4 h-4&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;datepicker input pl-12 border&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-span-12 md:col-span-6">
                                                    <label class="font-medium text-base mr-auto">Expenses Category</label>
                                                    <select class="input w-full border mt-2 flex-1">
                                                        <option>10</option>
                                                        <option>25</option>
                                                        <option>35</option>
                                                        <option>50</option>
                                                    </select>
                                                </div>
                                                <div class="col-span-12 md:col-span-6">
                                                    <label class="font-medium text-base mr-auto">Amount</label>
                                                    <input type="text" class="input w-full border mt-2 flex-1" placeholder="">
                                                </div>
                                                <div class="col-span-12 md:col-span-12">
                                                    <label class="font-medium text-base mr-auto">Description</label>
                                                    <textarea type="text" class="input w-full border mt-2 flex-1" placeholder="" rows="5" cols="8"></textarea>
                                                </div>
                                               
                                            </div>
                                        </form>
                                        <div class="px-5 py-3 text-right border-t border-gray-200">
                                            <button type="button" data-dismiss="modal" class="button w-20 border text-gray-700 mr-1">Cancel</button>
                                            <button type="button" class="button w-20 bg-theme-1 text-white">Send</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                <!-- </div> -->
            </h2>
        </div>
    <!-- </div> -->
    
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full dataTable no-footer dtr-inline" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 806px;">
            <thead>
                <tr role="row"><th class="border-b-2 whitespace-no-wrap sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 166px;" aria-sort="ascending" aria-label="PRODUCT NAME: activate to sort column descending">PRODUCT NAME</th><th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 80px;" aria-label="IMAGES: activate to sort column ascending">IMAGES</th><th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 124px;" aria-label="REMAINING STOCK: activate to sort column ascending">REMAINING STOCK</th><th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 120px;" aria-label="STATUS: activate to sort column ascending">STATUS</th><th class="border-b-2 text-center whitespace-no-wrap sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 116px;" aria-label="ACTIONS: activate to sort column ascending">ACTIONS</th></tr>
            </thead>
            <tbody>
                <tr role="row" class="odd">
                        <td class="border-b sorting_1" tabindex="0">
                            <div class="font-medium whitespace-no-wrap">Dell XPS 13</div>
                            <div class="text-gray-600 text-xs whitespace-no-wrap">Dell XPS 13</div>
                        </td>
                        <td class="text-center border-b">
                            <div class="flex sm:justify-center">
                                <div class="intro-x w-10 h-10 image-fit">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-9.jpg">
                                </div>
                                <div class="intro-x w-10 h-10 image-fit -ml-5">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-10.jpg">
                                </div>
                                <div class="intro-x w-10 h-10 image-fit -ml-5">
                                    <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                                </div>
                            </div>
                        </td>
                        <td class="text-center border-b">113</td>
                        <td class="w-40 border-b">
                            <div class="flex items-center sm:justify-center text-theme-6"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg> Inactive </div>
                        </td>
                        <td class="border-b w-5">
                            <div class="flex sm:justify-center items-center">
                                <a class="flex items-center mr-3" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-1"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg> Edit </a>
                                <a class="flex items-center text-theme-6" href=""> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 w-4 h-4 mr-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> Delete </a>
                            </div>
                        </td>
                    
                        </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')

@endsection
