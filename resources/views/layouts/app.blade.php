<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ecommerce</title>
        <link rel="stylesheet" type="text/css" href="/assets/css/avio-style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        
        @yield('style')
        @livewireStyles
    </head>
    <body data-avio="theme-indigo">
        <div class="avio">
            <!-- header start-->
            <div class="body-header sticky-md-top">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <a class="navbar-brand d-flex align-items-center color-900" href="index.html">
                            <span class="title_head h4 mb-0 fw-bold ps-2">ecommerce</span>
                        </a>
                        <ul class="navbar-right d-flex align-items-center mb-0 list-unstyled">
                            <li>
                                <a href="/logout" class="btn bg-secondary text-light text-uppercase w-100">logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header end -->
            <!--  -->
            <div class="page-header pattern-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <div class="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="page-body page-layout-1">
                <div class="container-fluid">
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
                    @yield('script')
                    <!--  -->
                    <div class="">
                        <div>
                            
                        </div>
                        <div class="project-list d-flex flex-nowrap align-items-start">
                            <div class="order-2 flex-grow-1 ps-lg-3 ps-0">
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                @yield('content')
                                @livewireScripts
                            </div>
                        </div>
                        
                    </div>
                    
                    <!--  -->
                    
                </div>
            </div>
        </div>
    </body>
</html>