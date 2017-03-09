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
							<h6 class="text-normal text-bold">{{ trans('areaConcesiones.title') }}</h6>
							{!! trans('areaConcesiones.text1') !!}
						<article class="news-block">
						<ul class="bullet">
							{!! trans('areaConcesiones.list') !!}
						</ul>
						</article>
							{!! trans('areaConcesiones.text2') !!}
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection