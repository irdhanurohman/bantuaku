<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('auth_title')</title>
	 <!-- DashForge CSS -->	 
	 {{-- assets/css/dashforge/dashforge.css --}}
	 <link rel="stylesheet" href="{{ asset('css/dashforge/dashforge.css') }}">	 
	 <link rel="stylesheet" href="{{ asset('css/dashforge/dashforge.auth.css') }}">	 
	@yield('auth.head')
</head>
<body>
	<header class="navbar navbar-header navbar-header-fixed">
		<a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
		<div class="navbar-brand">
		  <a href="../../index.html" class="df-logo">Bantu<span>aku</span></a>
		</div><!-- navbar-brand -->
		<div id="navbarMenu" class="navbar-menu-wrapper">
		  <div class="navbar-menu-header">
			<a href="../../index.html" class="df-logo">Bantu<span>aku</span></a>
			<a id="mainMenuClose" href=""><i data-feather="x"></i></a>
		  </div><!-- navbar-menu-header -->
		 
		</div><!-- navbar-menu-wrapper -->
		{{-- <div class="navbar-right">		  
		  <a href="{{ url('/register') }}" class="btn btn-brand-02"><span>Buat akun</span></a>
		</div> --}}
		<!-- navbar-right -->
	  </header><!-- navbar -->
	
	@yield('auth.content')


	@yield('auth.script')
</body>
</html>
