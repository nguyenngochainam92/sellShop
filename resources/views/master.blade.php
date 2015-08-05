<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/app.css') !!}" >
    <link href="{!! asset('css/prettyPhoto.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/animate.css') !!}" rel="stylesheet">
	<link href="{!! asset('css/main.css') !!}" rel="stylesheet">
	<link href="{!! asset('css/responsive.css') !!}" rel="stylesheet">
    @yield('css')
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head><!--/head-->

<body>
	<!--header-->
	@include('common.header')
	<!--/header-->
	
	<!-- content -->
	@yield('content')
	<!-- /content -->

	<!--Footer-->
	@include('common.footer')
	<!--/Footer-->

  
    <script src="{!! asset('js/vendor/jquery-1.11.3.min.js') !!}"></script>
	<script src="{!! asset('js/vendor/bootstrap.min.js') !!}"></script>
    @yield('scripts')
    <script src="{!! asset('js/main.js') !!}"></script>
    <script src="{!! asset('js/jquery.scrollUp.min.js') !!}"></script>
</body>
</html>