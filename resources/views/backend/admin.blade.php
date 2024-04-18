<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Apaxy - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">

        <!-- slick css -->
        <link href="{{ asset('backend/assets/libs/slick-slider/slick/slick.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/libs/slick-slider/slick/slick-theme.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('backend/assets/libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- jvectormap -->
        <link href="{{ asset('backend/assets/libs/jqvmap/jqvmap.min.css') }}" rel="stylesheet" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />


        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('backend.header')


            @include('backend.rightslider')

            @yield('srodek')


        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <script src="{{ asset('backend/assets/libs/slick-slider/slick/slick.min.js') }}"></script>

        <!-- Jq vector map -->
        <script src="{{ asset('backend/assets/libs/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

        <script src="{{ asset('backend/assets/js/pages/dashboard.init.js') }}"></script>

        <script src="{{ asset('backend/assets/libs/dropzone/min/dropzone.min.js') }}"></script>

        <script src="{{ asset('backend/assets/js/app.js') }}"></script>





        <script src=" {{ asset('backend/assets/libs/tinymce/tinymce.min.js')  }}    "></script>

        <!-- init js -->
        <script src="{{ asset('backend/assets/js/pages/form-editor.init.js')  }}   "></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
               case 'info':
               toastr.info(" {{ Session::get('message') }} ");
               break;
               case 'success':
               toastr.success(" {{ Session::get('message') }} ");
               break;
               case 'warning':
               toastr.warning(" {{ Session::get('message') }} ");
               break;
               case 'error':
               toastr.error(" {{ Session::get('message') }} ");
               break;
            }
            @endif
           </script>


    </body>
</html>
