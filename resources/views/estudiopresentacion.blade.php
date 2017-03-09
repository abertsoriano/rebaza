@extends('layout.master')

@section('title', '- Estudio Presentación')

@section('content')
<section class="news-event-teaser section text-center-xs">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block ">
							<img src="{{ asset('images/estudio.jpg') }}" alt="FoodBingo" class="logo img-responsive">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="news-block">
							<h6 class="text-normal text-bold">{{ trans('estudioPresentacion.title') }}</h6>
							<h4 class="text-normal text-bold">{{ trans('estudioPresentacion.title2') }}</h4>
							{!! trans('estudioPresentacion.info') !!}
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection