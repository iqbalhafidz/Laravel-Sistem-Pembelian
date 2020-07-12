<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/images/favicon.png') }}">
    <title>Al Bar Original - Admin</title>
    <!-- Custom CSS -->
    <link href="{{ asset('admin/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/dist/css/style.min.css') }}" rel="stylesheet">
    <link href="{{asset('admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    @yield('css')
    
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        @guest

        @else       
            @include("layouts.section.header");
            @include("layouts.section.sidebar");
            <div class="page-wrapper">
        @endguest
        
            @yield('content')
            <footer class="footer text-center">
                {{-- copyright &copy; 2020. <a href="#" target="_blank"> Iqbal Al hafidz</a>. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>. --}}
                copyright &copy; 2020.
            </footer>
        @guest

        @else  
            </div>
        @endguest
       
    </div>
   
    <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('admin/assets/libs/flot/excanvas.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot/jquery.flot.crosshair.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/pages/chart/chart-page-init.js') }}"></script>

    <script src="{{asset('admin/assets/extra-libs/DataTables/datatables.min.js')}}"></script>
    <script>
        $('#zero_config').DataTable();
    </script>
    @yield('js')
    
    
</body>

</html>