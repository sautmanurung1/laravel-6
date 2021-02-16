<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- META UNTUK GOOGLE MAX:100-140 -->
	<meta name="description" content=""/> 

	<!-- META UNTUK FACEBOOK -->
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:image" content="">
	<meta property="og:url" content="">

	<!-- META UNTUK TWITTER -->
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="">
	<meta name="twitter:card" content="">

	<title>@yield('title')</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('public/frontend/css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					<ul class="nav-social">
						<li><a href="https://wa.wizard.id/4842dc"><i class="fa fa-whatsapp"></i></a></li>
						<li><a href="https://twitter.com/smanurung3601"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://github.com/sautmanurung1"><i class="fa fa-github"></i></a></li>
						<li><a href="https://www.instagram.com/sautmanurung/"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /social -->
					<link rel="icon" href="{{ asset('public/frontend/img/icon.png')}}">
					<!-- logo -->
					<div class="nav-logo">
						<a href="{{ url('') }}" class="logo"><img src="{{ asset('public/frontend/img/judul.png')}}" alt=""></a>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<form action="{{route('blog.cari')}}" method="get">
								<input class="input" name="cari" placeholder="Enter your search...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
						<li><a href="{{ url('') }}">Beranda</a></li>
						<li class="has-dropdown">
							<a href="#">CATEGORY</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
									@foreach($category_widget as $result1)
									<li><a href="{{ route('blog.category', $result1->slug) }}">{{ $result1->name }}</a></li>
									@endforeach
									</ul>
								</div>
							</div>
						</li>
				
						<li><a href="{{ route('blog.list') }}">List Post</a></li>
						<li><a href="{{ route('blog.about') }}">About Us</a></li>
					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->

			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu" class="active">
					<li><a href="{{ url('') }}">Home</a></li>
					<li class="has-dropdown">
							<a href="#">CATEGORY</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
									@foreach($category_widget as $result1)
									<li><a href="{{ route('blog.category', $result1->slug) }}">{{ $result1->name }}</a></li>
									@endforeach
									</ul>
								</div>
							</div>
					</li>
					<li><a href="{{ route('blog.about') }}">About Us</a></li>
					<li><a href="{{ route('blog.list') }}">List Post</a></li>
					<li><a href="http://zona-nyaman.ml">Advertise</a></li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->
