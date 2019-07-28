<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="target-densitydpi=device-dpi, initial-scale=1.0, user-scalable=no" />
	<meta name="description" content="Responsive One Page Vcard Portfolio or Resume Template" />
	<meta name="author" content="TheThemeLab">
	<title>Home</title>
	<!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('contents/website')}}img/ico-16.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="apple-touch-icon" href="{{asset('contents/website')}}/img/ico-57.png" sizes="57x57">
	<link rel="apple-touch-icon" href="{{asset('contents/website')}}/img/ico-72.png" sizes="72x72">
	<link rel="apple-touch-icon" href="{{asset('contents/website')}}/img/ico-114.png" sizes="114x114">
	<link rel="apple-touch-icon" href="{{asset('contents/website')}}/img/ico-144.png" sizes="144x144">
	<!-- List of Stylesheet -->
	<link type='text/css' href="{{asset('contents/website')}}/css/normalize.css" rel="stylesheet">
	<link type='text/css' href="{{asset('contents/website')}}/css/bootstrap.min.css" rel="stylesheet">
	<link type='text/css' href="{{asset('contents/website')}}/css/font-awesome.min.css" rel="stylesheet">
	<link type='text/css' href="{{asset('contents/website')}}/css/lightbox.min.css" rel="stylesheet">
	<link type='text/css' href="{{asset('contents/website')}}/css/style.css" rel="stylesheet">
	<link type='text/css' href="{{asset('contents/website')}}/css/style-responsive.css" rel="stylesheet">
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{asset('contents/website')}}/rs-plugin/css/settings.css" media="screen" />
	<!-- END SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic,600italic,700italic'
		rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
</head>

<body>
	<!-- Pre-loader -->
	<div class="mask">
		<div id="intro-loader">
		</div>
	</div>
	<!-- End Pre-loader -->
	<!-- Navbar -->
	<div class="navbar navbar-transparent navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                <a class="navbar-brand" href="#"><img class="logo" src="{{asset('uploads')}}/{{$logo->name}}" alt=""></a>
			</div>
			<nav id="my-nav" class="navbar-collapse collapse" role="navigation">
				<ul class="nav navbar-nav">
                    @foreach ($nav as $item)
                        <li>
                            <a class="text-capitalize" href="#{{$item->nid}}">{{$item->name}}</a>
                        </li>
                    @endforeach

				</ul>
			</nav>
			<!--/.navbar-collapse -->
		</div>
	</div>
	<!-- End Navbar -->

    @yield('contents')

	<footer class="text-center">
		<!-- Footer Text -->
		<div class="container text-center item_top">
			<img class="footer-logo" src="{{asset('uploads')}}/{{$logo->name}}" alt="footer logo"><br />
			{{$footer->title}}
		</div>
		<!-- End Footer Text -->
	</footer>
	<!-- Back to top -->
	<a href="#" id="back-top"><i class="fa fa-angle-up fa-2x"></i></a>
	<!-- Js Library -->
	<script type="text/javascript" src="{{asset('contents/website')}}/js/modernizr.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.sticky.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.easing-1.3.pack.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.appear.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.flexslider.min.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/swiper.min.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/waypoints.min.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/jquery-countTo.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/easyPieChart.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/smoothscroll.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/gmap-settings.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script type="text/javascript" src="{{asset('contents/website')}}/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<!-- END SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script type="text/javascript" src="{{asset('contents/website')}}/js/lightbox.min.js"></script>
	<script type="text/javascript" src="{{asset('contents/website')}}/js/script.js"></script>
    <!-- Js Library -->
    <script>

    </script>
</body>

</html>
