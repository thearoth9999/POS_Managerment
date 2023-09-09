<html>
    <header>
        @yield('header')
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities."> -->
        <!-- <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app"> -->
        <meta name="author" content="LEFT4CODE">



        <title>SHOP1668</title>
        
        <link rel="stylesheet" href="dist/css/app.css" />
        
    </header>
    <body>
        <div class="app">
            <div class="flex">
                <!-- BEGIN: Side Menu -->
                <nav class="side-nav">
                    <a href="" class="intro-x flex items-center pl-5 pt-4">
                        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                        <span class="hidden xl:block text-white text-lg ml-3"> Shop<span class="font-medium">1668</span> </span>
                    </a>
                    <div class="side-nav__devider my-6"></div>
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}" class="side-menu side-menu--{{ (request()->is('dashboard'))? 'active' : ''  }}">
                                <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                                <div class="side-menu__title"> Dashboard </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" class="side-menu">
                                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                                <div class="side-menu__title"> Product <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
                            </a>
                            <!-- <a href="javascript:;" class="side-menu">
                            <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                            <div class="side-menu__title"> Menu Layout <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div> -->
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('product') }}" class="side-menu side-menu--{{ (request()->is('product'))? 'active' : ''  }}">
                                    <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                                    <div class="side-menu__title"> Product</div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('category') }}" class="side-menu side-menu--{{ (request()->is('category'))? 'active' : ''  }}">
                                    <div class="side-menu__icon"> <i data-feather="archive"></i> </div>
                                    <div class="side-menu__title"> Category </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('brand') }}" class="side-menu side-menu--{{ (request()->is('brand'))? 'active' : ''  }}">
                                    <div class="side-menu__icon"> <i data-feather="book"></i> </div>
                                    <div class="side-menu__title"> Brand </div>
                                </a>
                            </li>
                        </ul>
                        </li>
                       
                        <li>
                            <a href="{{ route('supplier') }}" class="side-menu side-menu--{{ (request()->is('supplier'))? 'active' : ''  }}">
                                <div class="side-menu__icon"> <i data-feather="users"></i> </div>
                                <div class="side-menu__title"> Supplier </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('purchase') }}" class="side-menu side-menu--{{ (request()->is('purchase'))? 'active' : ''  }}">
                                <div class="side-menu__icon"> <i data-feather="shopping-bag"></i> </div>
                                <div class="side-menu__title"> Purchase </div>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('sale') }}" class="side-menu side-menu--{{ (request()->is('sale'))? 'active' : ''  }}">
                                <div class="side-menu__icon"> <i data-feather="shopping-cart"></i> </div>
                                <div class="side-menu__title"> Sale </div>
                            </a>
                        </li>
                       
                        <li>
                            <a href="{{ route('adjustment') }}" class="side-menu side-menu--{{ (request()->is('adjustment'))? 'active' : ''  }}">
                                <div class="side-menu__icon"> <i data-feather="database"></i> </div>
                                <div class="side-menu__title"> Adjustment </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('quotation') }}" class="side-menu side-menu--{{ (request()->is('quotation'))? 'active' : ''  }}">
                                <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                                <div class="side-menu__title"> Quotation </div>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('expenses') }}" class="side-menu side-menu--{{ (request()->is('expenses'))? 'active' : ''  }}">
                                <div class="side-menu__icon"> <i data-feather="credit-card"></i> </div>
                                <div class="side-menu__title"> Expenses </div>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('warehouse') }}" class="side-menu side-menu--{{ (request()->is('warehouse'))? 'active' : ''  }}">
                                <div class="side-menu__icon"> <i data-feather="box"></i> </div>
                                <div class="side-menu__title"> Warehouse </div>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('user') }}" class="side-menu side-menu--{{ (request()->is('user'))? 'active' : ''  }}">
                                <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                                <div class="side-menu__title"> User </div>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('currency') }}" class="side-menu side-menu--{{ (request()->is('currency'))? 'active' : ''  }}">
                                <div class="side-menu__icon"> <i data-feather="dollar-sign"></i> </div>
                                <div class="side-menu__title"> Currecies </div>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('report') }}" class="side-menu side-menu--{{ (request()->is('report'))? 'active' : ''  }}">
                                <div class="side-menu__icon"> <i data-feather="file"></i> </div>
                                <div class="side-menu__title"> Report </div>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('setting') }}" class="side-menu side-menu--{{ (request()->is('setting'))? 'active' : ''  }}">
                                <div class="side-menu__icon"> <i data-feather="settings"></i> </div>
                                <div class="side-menu__title"> Setting </div>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="content">
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <div class="-intro-x breadcrumb mr-auto hidden sm:flex"> <a href="" class="">Application</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Dashboard</a> </div>
                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x relative mr-3 sm:mr-6">
                        <a href="{{ route('pos') }}" target="_blank" class="button w-24 shadow-md mr-1 mb-2 bg-theme-1 text-white" role="button" aria-pressed="true">POS</a>
                    </div>
                    <!-- END: Search -->
                    <!-- BEGIN: Notifications -->
                    <!-- <div class="intro-x dropdown relative mr-auto sm:mr-6">
                        <div class="dropdown-toggle notification notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon"></i> </div>
                        <div class="notification-content dropdown-box mt-8 absolute top-0 left-0 sm:left-auto sm:right-0 z-20 -ml-10 sm:ml-0">
                            <div class="notification-content__box dropdown-box__content box">
                                <div class="notification-content__title">Notifications</div>
                                <div class="cursor-pointer relative flex items-center ">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-13.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-2.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-14.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">05:09 AM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                    </div>
                                </div>
                                <div class="cursor-pointer relative flex items-center mt-5">
                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                        <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                                        <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                    </div>
                                    <div class="ml-2 overflow-hidden">
                                        <div class="flex items-center">
                                            <a href="javascript:;" class="font-medium truncate mr-5">Edward Norton</a> 
                                            <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                                        </div>
                                        <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8 relative">
                        <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in">
                            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-12.jpg">
                        </div>
                        <div class="dropdown-box mt-10 absolute w-56 top-0 right-0 z-20">
                            <div class="dropdown-box__content box bg-theme-38 text-white">
                                <div class="p-4 border-b border-theme-40">
                                    <div class="font-medium">Angelina Jolie</div>
                                    <div class="text-xs text-theme-41">Software Engineer</div>
                                </div>
                                <div class="p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user w-4 h-4 mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile </a>
                                </div>
                                <div class="p-2 border-t border-theme-40">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 rounded-md"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-toggle-right w-4 h-4 mr-2"><rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect><circle cx="16" cy="12" r="3"></circle></svg> Logout </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
        @yield('js')
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script>
        
    </body>
</html>