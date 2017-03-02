@extends('layout.master')

@section('title', '- Reestructuración e Insolvencias Empresariales')

@section('content')
<section class="news-event-teaser section">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block ">
							<img src="{{ asset('images/areas/restructuracion.jpg') }}" alt="FoodBingo" class="logo img-responsive">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="news-block">
							<h6 class="text-normal text-bold">{{ trans('areaEstructuracion.title') }}</h6>
							{!! trans('areaEstructuracion.text') !!}
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection