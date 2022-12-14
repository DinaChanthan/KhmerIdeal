<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KhmerIdeal | ឧត្តមគតិខ្មែរ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/ticker-style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
</head>

<body>

    <!-- Navigation Bar -->
    @include('layouts.partials.preloading')
	<!-- End Navigation Bar -->

    <!-- Navigation Bar -->
    @include('layouts.partials.navbar')
	<!-- End Navigation Bar -->

    <!-- yield content -->
	@yield('content')
	<!-- End yield content -->


    <!-- Footer -->
    @include('layouts.partials.footer')		
	<!-- End Footer -->


    <!-- JS here -->
    <script src="{{ ('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ ('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ ('assets/js/popper.min.js') }}"></script>
    <script src="{{ ('assets/js/bootstrap.min.js') }}"></script>

    <!-- Jquery Mobile Menu -->
    <script src="{{ ('assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ ('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ ('assets/js/slick.min.js') }}"></script>
    
    <!-- Date Picker -->
    <script src="{{ ('assets/js/gijgo.min.js') }}"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="{{ ('assets/js/wow.min.js') }}"></script>
    <script src="{{ ('assets/js/animated.headline.js') }}"></script>
    <script src="{{ ('assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ ('assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ ('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ ('assets/js/jquery.sticky.js') }}"></script>
    
    <!-- contact js -->
    <script src="{{ ('assets/js/contact.js') }}"></script>
    <script src="{{ ('assets/js/jquery.form.js') }}"></script>
    <script src="{{ ('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ ('assets/js/mail-script.js') }}"></script>
    <script src="{{ ('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{ ('assets/js/plugins.js') }}"></script>
    <script src="{{ ('assets/js/main.js') }}"></script>
    
</body>
</html>