@extends('layout.master')

@section('title', '- Area Consesiones')

@section('content')
<section class="news-event-teaser section text-center-xs">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block ">
							<img src="{{ asset('images/areas/proyectos.png') }}" alt="FoodBingo" class="logo img-responsive img-center-xs">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="news-block">
							<h6 class="text-normal text-bold">Proyectos e Infraestructura</h6>
							<p>En el Perú, el Gobierno viene desarrollando una variedad de esquemas de transferencia de servicios y obra pública al sector privado, tales como:</p>
						<article class="news-block">
						<ul class="bullet">
							<li>Privatizaciones</li>
							<li>Concesiones</li>
							<li>Concesiones con Financiamiento público no reembolsable</li>
							<li>Contratos de Administración</li>
							<li>Contratos de operación</li>
						</ul>
						</article>
							<p>A fin de brindar soluciones creativas e integrales, trabajamos conjuntamente con las empresas fiduciarias, bancos de inversión, family offices y asesores financieros privados.</p>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection