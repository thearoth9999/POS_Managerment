@extends('layout.master')

@section('header')
    <title>SHOP1668</title>
@endsection

@section('content')
    <!-- <div class="content"> -->
        <!-- BEGIN: Top Bar -->
       
        <!-- END: Top Bar -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 xxl:col-span-12 grid grid-cols-12 gap-12">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            General Report
                        </h2>
                        <a href="" class="ml-auto flex text-theme-1"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="shopping-cart" class="report-box__icon text-theme-10"></i> 
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="33% Higher than last month"> 33% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">4.510</div>
                                    <div class="text-base text-gray-600 mt-1">Item Sales</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="credit-card" class="report-box__icon text-theme-11"></i> 
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-theme-6 tooltip cursor-pointer" title="2% Lower than last month"> 2% <i data-feather="chevron-down" class="w-4 h-4"></i> </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">3.521</div>
                                    <div class="text-base text-gray-600 mt-1">New Orders</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="monitor" class="report-box__icon text-theme-12"></i> 
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="12% Higher than last month"> 12% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">2.145</div>
                                    <div class="text-base text-gray-600 mt-1">Total Products</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="user" class="report-box__icon text-theme-9"></i> 
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-theme-9 tooltip cursor-pointer" title="22% Higher than last month"> 22% <i data-feather="chevron-up" class="w-4 h-4"></i> </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-bold leading-8 mt-6">152.000</div>
                                    <div class="text-base text-gray-600 mt-1">Unique Visitor</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 lg:col-span-6 mt-8">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Sales Report
                        </h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-gray-700">
                            <i data-feather="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i> 
                            <input type="text" data-daterange="true" class="datepicker input w-full sm:w-56 box pl-10">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="flex flex-col xl:flex-row xl:items-center">
                            <div class="flex">
                                <div>
                                    <div class="text-theme-20 text-lg xl:text-xl font-bold">$15,000</div>
                                    <div class="text-gray-600">This Month</div>
                                </div>
                                <div class="w-px h-12 border border-r border-dashed border-gray-300 mx-4 xl:mx-6"></div>
                                <div>
                                    <div class="text-gray-600 text-lg xl:text-xl font-medium">$10,000</div>
                                    <div class="text-gray-600">Last Month</div>
                                </div>
                            </div>
                            <div class="dropdown relative xl:ml-auto mt-5 xl:mt-0">
                                <button class="dropdown-toggle button font-normal border text-white relative flex items-center text-gray-700"> Filter by Category <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                                <div class="dropdown-box mt-10 absolute w-40 top-0 xl:right-0 z-20">
                                    <div class="dropdown-box__content box p-2 overflow-y-auto h-32"> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">PC & Laptop</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Smartphone</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Electronic</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Photography</a> <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white hover:bg-gray-200 rounded-md">Sport</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="report-chart">
                            <canvas id="report-line-chart" height="160" class="mt-6"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Weekly Top Seller -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Weekly Top Seller
                        </h2>
                        <a href="" class="ml-auto text-theme-1 truncate">See all</a> 
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <canvas class="mt-3" id="report-pie-chart" height="280"></canvas>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                <span class="truncate">17 - 30 Years old</span> 
                                <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                <span class="font-medium xl:ml-auto">62%</span> 
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                <span class="truncate">31 - 50 Years old</span> 
                                <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                <span class="font-medium xl:ml-auto">33%</span> 
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                <span class="truncate">>= 50 Years old</span> 
                                <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                <span class="font-medium xl:ml-auto">10%</span> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Weekly Top Seller -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Sales Report
                        </h2>
                        <a href="" class="ml-auto text-theme-1 truncate">See all</a> 
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <canvas class="mt-3" id="report-donut-chart" height="280"></canvas>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-theme-11 rounded-full mr-3"></div>
                                <span class="truncate">17 - 30 Years old</span> 
                                <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                <span class="font-medium xl:ml-auto">62%</span> 
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                <span class="truncate">31 - 50 Years old</span> 
                                <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                <span class="font-medium xl:ml-auto">33%</span> 
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-theme-12 rounded-full mr-3"></div>
                                <span class="truncate">>= 50 Years old</span> 
                                <div class="h-px flex-1 border border-r border-dashed border-gray-300 mx-3 xl:hidden"></div>
                                <span class="font-medium xl:ml-auto">10%</span> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
            </div>
        </div>
    <!-- </div> -->
@endsection

@section('js')

@endsection
