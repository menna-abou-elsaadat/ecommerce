<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ecommerce</title>
        <link rel="stylesheet" href="/assets/cssbundle/dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/avio-style.css">
        <link href="/assets/general_css.css" rel="stylesheet" />
        <link rel="stylesheet" href="/assets/plugins/fancy-file-uploader/fancy_fileupload.css" type="text/css" media="all" />
        <!-- Theme included stylesheets -->
        @yield('style')
        @livewireStyles
    </head>
    <body data-avio="theme-indigo">
        <div class="avio">
            <!-- header start-->
            <div class="body-header">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <ul class="navbar-left d-flex align-items-center mb-0 list-unstyled">
                            <li>
                                <a href="/register" class="btn bg-secondary text-light text-uppercase w-100">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header end -->
            <div class="page-body page-layout-1">
                <div class="container-fluid">
                    <script src="/assets/js/plugins.js"></script>
                    <script src="/assets/js/theme.js"></script>
                    <script src="/assets/js/bundle/apexcharts.bundle.js"></script>
                    <script src="/assets/js/bundle/dataTables.bundle.js"></script>
                    <script src="/assets/scripts.js"></script>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script type="text/javascript" src="/assets/plugins/fancy-file-uploader/jquery.ui.widget.js"></script>
                    <script type="text/javascript" src="/assets/plugins/fancy-file-uploader/jquery.fileupload.js"></script>
                    <script type="text/javascript" src="/assets/plugins/fancy-file-uploader/jquery.iframe-transport.js"></script>
                    <script type="text/javascript" src="/assets/plugins/fancy-file-uploader/jquery.fancy-fileupload.js"></script>
                    @yield('script')
                    <!--  -->
                    <div class="">
                        <div class="d-flex flex-nowrap align-items-start">
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