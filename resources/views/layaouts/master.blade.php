<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wir finden deine SchlÜ</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
    <!-- Plugin css -->
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/fonts/flaticon.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/animate.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/swiper.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/lightcase.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/jquery.nstSlider.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/flexslider.css" media="all" />

    <!-- own style css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/rtl.css" media="all" />
    <link rel="stylesheet" type="text/css" href="/css/responsive.css" media="all" />
    <link rel="stylesheet" type="text/css" href="{{'css/app.css'}}" media="all" />

</head>

<body class="boxed">

<div class="box-layout">


   @include('layaouts.includes.nav')
    <!-- Start Working  Section -->

    @yield('header')

   @yield('content')


    <!-- End Blog Section -->


@include('layaouts.includes.footer')


    <!-- Start Scrolling -->

    <div class="scroll-img"><i class="fa fa-angle-up" aria-hidden="true"></i></div>


    <!-- End Scrolling -->

</div>

<!-- Start Pre-Loader
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_four"></div>
        </div>
    </div>
</div>
End Pre-Loader -->




<script type="text/javascript" src="/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="/js/swiper.min.js"></script>
<script type="text/javascript" src="/js/plugins.isotope.js"></script>
<script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="/js/lightcase.js"></script>
<script type="text/javascript" src="/js/jquery.nstSlider.js"></script>
<script type="text/javascript" src="/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="/js/custom.isotope.js"></script>
<script type="text/javascript" src="/js/custom.map.js"></script>

<script type="text/javascript" src="/js/custom.js"></script>


</body>

</html>
