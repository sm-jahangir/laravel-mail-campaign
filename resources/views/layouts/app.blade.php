<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	{!! NoCaptcha::renderJs() !!}
	@php
		$posts = DB::table('analytics')
		    ->where('id', 1)
		    ->first();
		if ($posts) {
		    echo $posts->code;
		}
	@endphp
</head>

<body>
	<div id="app">
		<nav class="navbar navbar-expand-lg bg-light">
			<div class="container">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<a class="navbar-brand" href="{{ route('main.home') }}" style="font-weight: bolder">Maildoll Campaign</a>
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" href="{{ route('main.home') }}">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('campaign.index') }}">Mail Campaign</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('message.index') }}">Message Campaign</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Pages
							</a>
							<ul class="dropdown-menu">
								<li class="nav-item">
									<a class="nav-link" href="/page/about">About Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/page/contact-us">Contact Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="/page/privacy-policy">Privacy Policy</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route('page.index') }}">Pages List</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route('analytic.create') }}">Google Analytics</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route('paytm') }}">Pay with PayTM</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<main class="py-4">
			@yield('content')
		</main>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
