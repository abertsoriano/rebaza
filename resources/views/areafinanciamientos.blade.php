@extends('layout.master')

@section('title', '- Area Financiamiento')

@section('content')
<section class="news-event-teaser section text-center-xs">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block ">
							<img src="{{ asset('images/areas/financiamientos.png') }}" alt="FoodBingo" class="logo img-responsive img-center-xs">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="news-block-mar">
							<h6 class="hh6 text-normal text-bold">{{ trans('areaFinanciamiento.title') }}</h6>
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="news-block">
							<ul class="bullet">
								{!! trans('areaFinanciamiento.list') !!}
							</ul>

							{!! trans('areaFinanciamiento.text') !!}
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection