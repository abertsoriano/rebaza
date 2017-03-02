@extends('layout.master')

@section('title', '- Regulación Financiera')

@section('content')
<section class="news-event-teaser section">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block ">
							<img src="{{ asset('images/areas/regulacion.jpg') }}" alt="FoodBingo" class="logo img-responsive">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="news-block-mar">
							<h6 class="hh6 text-normal text-bold">{{ trans('areaRegulacion.title') }}</h6>
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<div class="news-block">
							{!! trans('areaRegulacion.text_en_1') !!}
						</div>
						{!! trans('areaRegulacion.list_1') !!}
						<article class="news-block">
							{!! trans('areaRegulacion.text_es_1') !!}
							{!! trans('areaRegulacion.text_es_2') !!}
						</article>

						<article class="news-block">
							<ul class="bullet">
								{!! trans('areaRegulacion.list_2') !!}
							</ul>
							<br>
							{!! trans('areaRegulacion.text_1') !!}
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection