<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>SIAM | Home</title>

<!-- STYLES -->
<link href="{{ asset('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;800;900&display=swap') }}" rel="stylesheet">
<link href="{{ asset('https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap') }}" rel="stylesheet">
<link href="{{ asset('https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap') }}" rel="stylesheet">
<link href="{{ asset('https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap') }}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dark.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/modalboxes.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}" />
<!--[if lt IE 9]> <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script> <![endif]-->
<!-- /STYLES -->

</head>

<body class="dark">

	<!-- PRELOADER -->
	{{-- <div id="preloader">
		<div class="loader_line"></div>
	</div> --}}
	<!-- /PRELOADER -->

	<!-- WRAPPER ALL -->

	<div class="orido_tm_all_wrap w-full float-left clear-both h-auto relative" data-magic-cursor="show">

		@include('Layout.Header')


        @yield('content')


        @include('Layout.Footer')

	</div>
	<!-- / WRAPPER ALL -->

<!-- SCRIPTS -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="{{ asset('js/ie8.js') }}"></script> <![endif]-->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/init.js') }}"></script>
<!-- /SCRIPTS -->

</body>
</html>
