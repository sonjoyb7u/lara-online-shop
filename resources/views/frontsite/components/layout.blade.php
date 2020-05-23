<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>@yield('title', 'LARA ONLINE SHOP')</title>
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontsite/css/bootstrap.min.css') }}">
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="{{ asset('assets/frontsite/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontsite/css/blue.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontsite/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontsite/css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontsite/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontsite/css/rateit.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontsite/css/bootstrap-select.min.css') }}">
    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="{{ asset('assets/frontsite/css/font-awesome.css') }}">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

</head>
<body class="cnt-home">
<!-- =================== HEADER ===================== -->
@includeIf('frontsite.components.partials.header')
<!-- =================== HEADER : END ==================== -->

<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ===================== SIDEBAR ==================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                @yield('sidebar')

                <div class="home-banner">
                    <img src="{{ asset('assets/frontsite/images/banners/LHS-banner.jpg') }}" alt="Image">
                </div>

            </div>
            <!-- /.sidemenu-holder -->
            <!-- ====================== SIDEBAR : END ======================= -->

            <!-- =================== CONTENT ======================= -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                @yield('content')

            </div>
            <!-- /.homebanner-holder -->
            <!-- ===================== CONTENT : END ====================== -->

        </div>
        <!-- /.row -->

        <!-- ==================== BRANDS CAROUSEL ===================== -->
        @includeIf('frontsite.components.partials.brands')
        <!-- ===================== BRANDS CAROUSEL : END ====================== -->

    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->




<!-- ========================= FOOTER ======================== -->
@includeIf('frontsite.components.partials.footer')
<!-- ======================== FOOTER : END =========================== -->


<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/frontsite/js/jquery-1.11.1.min.js') }}"></script>

<script src="{{ asset('assets/frontsite/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/frontsite/js/bootstrap-hover-dropdown.min.js') }}"></script>
<script src="{{ asset('assets/frontsite/js/owl.carousel.min.js') }}"></script>

<script src="{{ asset('assets/frontsite/js/echo.min.js') }}"></script>
<script src="{{ asset('assets/frontsite/js/jquery.easing-1.3.min.js') }}"></script>
<script src="{{ asset('assets/frontsite/js/bootstrap-slider.min.js') }}"></script>
<script src="{{ asset('assets/frontsite/js/jquery.rateit.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/frontsite/js/lightbox.min.js') }}"></script>
<script src="{{ asset('assets/frontsite/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/frontsite/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/frontsite/js/scripts.js') }}"></script>

</body>
</html>
