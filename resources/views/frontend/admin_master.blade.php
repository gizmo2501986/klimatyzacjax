<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>klimatyzacjax.pl</title>

		<meta name="keywords" content="WebSite Template" />



		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('frontend/image/logoshort.png')}}" type="image/x-icon" />


		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('frontend/asset/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/asset/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/asset/vendor/animate/animate.compat.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/asset/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/asset/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/asset/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/asset/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('frontend/asset/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/asset/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/asset/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/asset/css/theme-shop.css')}}">

		<!-- Revolution Slider CSS -->
		<link rel="stylesheet" href="{{asset('frontend/asset/vendor/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/asset/vendor/rs-plugin/css/layers.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/asset/vendor/rs-plugin/css/navigation.css')}}">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('frontend/asset/css/demos/demo-digital-agency.css')}}">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{asset('frontend/asset/css/skins/skin-digital-agency.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('frontend/asset/css/custom.css')}}">



		<link rel="stylesheet" href="{{asset('frontend/asset/DataTables/datatables.min.css')}}">


		<!-- Head Libs -->
		<script src="{{asset('frontend/asset/vendor/modernizr/modernizr.min.js')}}"></script>

	</head>
	<body>

		<div class="body">


            @include('frontend.header')

            @yield('srodek')

            @include('frontend.footer')




		</div>

        <!-- Vendor -->
		<script src="{{asset('frontend/asset/vendor/jquery/jquery.min.js')}}"></script>




		{{-- <script src="{{asset('frontend/asset/vendor/jquery.appear/jquery.appear.min.js')}}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-appear/0.1/jquery.appear.min.js" ></script>


		<script src="{{asset('frontend/asset/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('frontend/asset/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
		<script src="{{asset('frontend/asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('frontend/asset/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
		<script src="{{asset('frontend/asset/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>



		{{-- <script src="{{asset('frontend/asset/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script> --}}

        <script src=" https://cdn.jsdelivr.net/npm/jquery-gmap@2.1.1/dist/jquery.gmap.min.js "></script>


		<script src="{{asset('frontend/asset/vendor/lazysizes/lazysizes.min.js')}}"></script>
		<script src="{{asset('frontend/asset/vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('frontend/asset/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('frontend/asset/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

		{{-- <script src="{{asset('frontend/asset/vendor/vide/jquery.vide.min.js')}}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vide/0.5.1/jquery.vide.min.js" ></script>

		<script src="{{asset('frontend/asset/vendor/vivus/vivus.min.js')}}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('frontend/asset/js/theme.js')}}"></script>

		<!-- Current Page Vendor and Views -->
		<script src="{{asset('frontend/asset/js/views/view.contact.js')}}"></script>

		<!-- Theme Custom -->
		<script src="{{asset('frontend/asset/js/custom.js')}}"></script>


		<!-- Theme Initialization Files -->
		<script src="{{asset('frontend/asset/js/theme.init.js')}}"></script>



        <script src="{{asset('frontend/asset/DataTables/datatables.min.js')}}"></script>

        <script>


            $(document).ready(function() {

                let table = new DataTable('#table_klima');
            })
        </script>





	</body>
</html>
