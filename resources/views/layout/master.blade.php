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
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"> El Estudio</a>
								<ul class="dropdown-menu">
									<li class="#"><a style="border:none;" href="{{ route('estudiopresentacion') }}"></i> Presentación</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Áreas</a>
								<ul class="dropdown-menu">
									<li><a href="{{ route('areafunciones') }}">Fusiones y Adquisiciones</a></li>
									<li><a href="{{ route('areamercado') }}">Mercado de Valores</a></li>
									<li><a href="{{ route('arearestructuracion') }}">Reestructuración e Insolvencias Empresariales</a></li>
									<li><a href="{{ route('arearegulacion') }}">Regulación Financiera</a></li>
									<li><a href="{{ route('areafinanciamientos') }}">Financiamientos</a></li>
									<li><a href="{{ route('areaconseciones') }}">Proyectos e Infraestructura</a></li>
									<li><a href="{{ route('arealitigios') }}">Litigios Corporativos</a></li>
									<li><a href="{{ route('areatributario') }}">Tributario</a></li>
									<li><a href="{{ route('arealaboral') }}">Laboral</a></li>
									<li><a href="{{ route('arealibre') }}">Libre Competencia y Competencia Desleal</a></li>
									<li><a href="{{ route('areapropiedad') }}">Propiedad Intelectual</a></li>
									<li><a href="{{ route('areamineria') }}">Minería</a></li>
									<li><a href="{{ route('areaprivate') }}">Private Clients</a></li>
									<li><a href="{{ route('areacorporativo') }}">Corporativo</a></li>
									<li><a style="border:none;" href="{{ route('areawhitecollarcrime') }}"></i> White Collar Crime</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Abogados </a>
								<ul class="dropdown-menu">
									<li><a href="{{ route('abogadosocios') }}"></i> Socios</a></li>
									<li><a href="{{ route('abogadoasociados') }}"></i> Asociados</a></li>
									<li><a style="border:none;" href="{{ route('abogadoconsultores') }}"></i> Consultores</a></li>
								</ul>
							</li>
							<li><a href="{{ route('reconocimiento') }}">Reconocimientos y Noticias</a></li>
							<li><a href="{{ route('oficinas') }}">Oficinas</a></li>
							<li><a href="{{ route('trabaja') }}">Trabaja con Nosotros</a></li>
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