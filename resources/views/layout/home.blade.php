<!DOCTYPE html>
<html lang="zh-TW">
	<!-- Start Head -->
	<head>	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="text" content="">
		<meta name="author" content="Min Hsieh">
		<!-- description -->
        <meta name="description" content="你好，我是Min，目前工作室Web Developer，有PHP開發6年以上經驗。第一次開發網站時，看到正有人使用它時的成就感，至今一直是我的動力，喜歡有「創造性」、「挑戰性」的工作，也喜歡優雅、易閱讀的程式，最喜歡Laravel框架。同時也是一名童軍團長、消防隊救護義消、重度遊戲玩家。">
		
		<!--Start Title -->
		<title>@yield('title')</title>
		<!--End Title -->
		
		<!-- Start Favicon -->
		<link rel="shortcut icon" href="{{asset('favicon.ico')}}">
		<link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{asset('assets2/images/apple-touch-icon-57x57.png')}}')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets2/images/apple-touch-icon-72x72.png')}}')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets2/images/apple-touch-icon-114x114.png')}}')}}">
		<!-- END Favicon -->
		
		<link rel="stylesheet" href="{{asset('assets2/css/uikit.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets2/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('assets2/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets2/css/style.css')}}" />
		<link rel="stylesheet" href="{{asset('assets2/css/responsive.css')}}">
		
		<!--[if lt IE 9]>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<!-- End Head -->

	<!-- Main Body -->
	<body>		
		@section('container')
        @show
		<script src="{{asset('assets2/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets2/js/uikit.min.js')}}"></script>
		<script src="{{asset('assets2/js/uikit-icons.min.js')}}"></script>
		<script src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets2/js/modernizr.js')}}"></script>
		<script src="{{asset('assets2/js/jquery.easing.1.3.js')}}"></script>
		<script src="{{asset('assets2/js/font-awesome.min.js')}}"></script>
		<script src="{{asset('assets2/js/jquery.easypiechart.min.js')}}"></script>
		<script src="{{asset('assets2/js/contact.js')}}"></script>
		<script src="{{asset('assets2/js/jquery.countTo.js')}}"></script>
		<script src="{{asset('assets2/js/jquery.appear.js')}}"></script>
		<script src="{{asset('assets2/js/retina.min.js')}}"></script>
		<script src="{{asset('assets2/js/custom.js')}}"></script>

		@section('page-js')
		@show
	</body>

</html>