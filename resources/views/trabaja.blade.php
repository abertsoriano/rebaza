@extends('layout.master')

@section('title', '- Trabaja con Nosotros')

@section('content')
<section class="news-event-teaser section text-center-xs">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="row">
					<div class="col-sm-3">
						<article class="news-block">
							<img src="images/trabajaconnosotros.png" alt="FoodBingo" class="logo img-responsive img-center-xs">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="nes-block">
							<h4 class="text-wnormal text-bold titu">{{ trans('trabaja.title') }}</h4>
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="news-block">
							{!! trans('trabaja.text') !!}
							<br/>
							<a class="btn_mediano" href="trabajaformulario.html">{{ trans('trabaja.button') }}</a>

						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection