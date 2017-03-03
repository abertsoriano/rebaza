<?php
$locale = 'en';
$linkTxt = 'English Version';

if (Cache::has('locale')) {

	if (Cache::get('locale') === 'es') {
		$locale = 'en';
		$linkTxt = 'English Version';
	} else {
		$locale = 'es';
		$linkTxt = 'Versión Español';
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Rebaza @yield('title', '')</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <![endif]-->
	<link rel="shortcut icon" type="images/ico" href="images/favicon.ico">
	</head>
	<body>
		<header class="main-header header-overlay">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-xs-12">
						<ul class="list-unstyled list-inline top-links">
							<li data-scroll-reveal="enter left and move 50px over 1.8s" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true"><a href="{{ route('changeLocale') }}?locale={{ $locale }}">{{ $linkTxt }}</a></li>
						</ul>
					</div>
					<div class="col-sm-12 col-xs-12 text-center center-block">
						<a href="{{ route('index') }}">
							<img src="{{ asset('images/logo.png') }}" alt="Rebaza, Alcázar &amp; De Las Casas" class="img-responsive img-center-sm img-center-xs">
						</a>
					</div>

				</div>
			</div>
			<nav id="nav" class="main-menu navbar flat">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="btn btn-navbar navbar-toggle flat animation" data-toggle="collapse" data-target=".navbar-cat-collapse">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse navbar-cat-collapse">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">{{ trans('links.nav_1') }}</a>
								<ul class="dropdown-menu">
									<li class="#">
										<a style="border:none;" href="{{ route('estudiopresentacion') }}">{{ trans('links.sub_1') }}</a>
									</li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">{{ trans('links.nav_2') }}</a>
								<ul class="dropdown-menu">
									<li><a href="{{ route('areafunciones') }}">{{ trans('links.sub_2_1') }}</a></li>
									<li><a href="{{ route('areamercado') }}">{{ trans('links.sub_2_2') }}</a></li>
									<li><a href="{{ route('arearestructuracion') }}">{{ trans('links.sub_2_3') }}</a></li>
									<li><a href="{{ route('arearegulacion') }}">{{ trans('links.sub_2_4') }}</a></li>
									<li><a href="{{ route('areafinanciamientos') }}">{{ trans('links.sub_2_5') }}</a></li>
									<li><a href="{{ route('areaconseciones') }}">{{ trans('links.sub_2_6') }}</a></li>
									<li><a href="{{ route('arealitigios') }}">{{ trans('links.sub_2_7') }}</a></li>
									<li><a href="{{ route('areatributario') }}">{{ trans('links.sub_2_8') }}</a></li>
									<li><a href="{{ route('arealaboral') }}">{{ trans('links.sub_2_9') }}</a></li>
									<li><a href="{{ route('arealibre') }}">{{ trans('links.sub_2_10') }}</a></li>
									<li><a href="{{ route('areapropiedad') }}">{{ trans('links.sub_2_11') }}</a></li>
									<li><a href="{{ route('areamineria') }}">{{ trans('links.sub_2_12') }}</a></li>
									<li><a href="{{ route('areaprivate') }}">{{ trans('links.sub_2_13') }}</a></li>
									<li><a href="{{ route('areacorporativo') }}">{{ trans('links.sub_2_14') }}</a></li>
									<li><a style="border:none;" href="{{ route('areawhitecollarcrime') }}">{{ trans('links.sub_2_15') }}</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">{{ trans('links.nav_3') }}</a>
								<ul class="dropdown-menu">
									<li><a href="{{ route('abogadosocios') }}">{{ trans('links.sub_3_1') }}</a></li>
									<li><a href="{{ route('abogadoasociados') }}">{{ trans('links.sub_3_2') }}</a></li>
									<li><a style="border:none;" href="{{ route('abogadoconsultores') }}">{{ trans('links.sub_3_3') }}</a></li>
								</ul>
							</li>
							<li><a href="{{ route('reconocimiento') }}">{{ trans('links.nav_4') }}</a></li>
							<li><a href="{{ route('oficinas') }}">{{ trans('links.nav_5') }}</a></li>
							<li><a href="{{ route('trabaja') }}">{{ trans('links.nav_6') }}</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<section class="search-area fix-bg">
			<div class="banners bg-uno"></div>
			<div class="banners bg-dos"></div>
		</section>
		@section('content')

		@show
		<footer class="news-event-teaser">
			<div class="container">
				<div class="col-sm-12" id="pie">
					<div id="pie_izq" class="col-sm-6">
						<span>
							&copy; Copyright Todos los Derechos Reservados &nbsp;
							<a href="https://www.linkedin.com/company/rebaza-alcazar-&-de-las-casas-abogados-financieros?trk=biz-companies-cym" target="_blank">
								<img src="{{ asset('images/logo_linkedin.png') }}" style="width: 20px;height: 20px;">
							</a>
						</span>
					</div>
					<div id="pie_der" class="col-sm-6">
						<span>Diseñado por <a href="http://www.agenciacranium.com/" target="_blank">Agencia Cranium</a></span>
					</div>
				</div>
			</div>
		</footer>
		<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/plugins/owl-carousel/owl.carousel.js') }}"></script>
		<script src="{{ asset('js/plugins/slick/slick.min.js') }}"></script>
		<script src="{{ asset('js/wow.js') }}"></script>
		<script>
			new WOW().init();
		</script>
		<script src="{{ asset('js/acordeon/jquery.accordion.js') }}"></script>
		<script src="{{ asset('js/acordeon/jquery.accordion.source.js') }}"></script>
		<script src="{{ asset('js/custom.js') }}"></script>
	</body>
</html>