@extends('layout.master')

@section('title', '- Area Funciones')

@section('content')
<section class="news-event-teaser section">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block ">
							<img src="{{ asset('images/areas/funcionesyadquisiciones.png') }}" alt="FoodBingo" class="logo img-responsive img-center-xs">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="news-block">
							<h6 class="text-normal text-bold">{{ trans('areaFunciones.title') }}</h6>
							{!! trans('areaFunciones.desc') !!}
							<article class="news-block">
								<ul class="bullet">
									{!! trans('areaFunciones.list') !!}
								</ul>
							</article>
							<p>{{ trans('areaFunciones.message1') }}</p>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection