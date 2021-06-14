<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>

	<meta name="robots" content="@yield('robots', 'index,follow')" />
	<meta property="og:url" content="{{ url()->current() }}" />
	<meta property="og:type" content="@yield('og:type', 'website')" />
	<meta property="og:title" content="@yield('title')" />
	<meta property="og:description" content="@yield('og:description', 'Texto descriptivo de la página.')" />
	<meta property="og:image" content="@yield('og:image', asset('/web/img/logo.png'))" />
	<meta property="og:site_name" content="Bitthrem" />
	<meta name="keywords" content="@yield('keywords', 'en que invertir, inversiones rentables, invertir dinero, invertir, negocios, para invertir, negocios rentables, negocios mas rentables, como ganar dinero facil, como ganar dinero por internet, bitthrem')"/>
	<meta name="description" content="@yield('og:description', 'Texto descriptivo de la página.')">
	<meta name="twitter:card" content="@yield('twitter:card', 'summary')" />
	<meta property="fb:admins" content="https://www.facebook.com/Bitthrem">

	<link rel="icon" href="{{ asset('favicon.png') }}" type="image/x-icon" />

	<!-- Font Awesome -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/web/css/fontawesome/all.min.css') }}">
	<!-- Bootstrap core CSS -->
	<link href="{{ asset('/web/css/bootstrap.css') }}" rel="stylesheet">
	
	@yield('links')

	<!-- Style CSS -->
	<link href="{{ asset('/web/css/style.css') }}" rel="stylesheet">
	<!-- Style CSS -->
</head>
<body class="bg-white">

	@include('web.partials.navbar')

	@yield('content')

	@include('web.partials.footer')
	
	@include('web.partials.loader')

	<!-- JQuery -->
	<script type="text/javascript" src="{{ asset('/web/js/jquery-3.4.1.min.js') }}"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="{{ asset('/web/js/popper.min.js') }}"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="{{ asset('/web/js/bootstrap.min.js') }}"></script>

	@yield('scripts')

	<!-- Scripts -->
	<script type="text/javascript" src="{{ asset('/web/js/script.js') }}"></script>
	@include('web.partials.notifications')
</body>
</html>