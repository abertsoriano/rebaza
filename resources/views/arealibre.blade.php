@extends('layout.master')

@section('title', '- Area Libre')

@section('content')
<section class="news-event-teaser section text-center-xs">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block ">
							<img src="images/areas/librecompetencia.png" alt="FoodBingo" class="logo img-responsive img-center-xs">
						</article>
					</div>
					<div class="col-sm-8 col-xs-12">
						<article class="nes-block">
							<h4 class="text-wnormal text-bold titu">{{ trans('arealibre.title') }}</h4>
						</article>
					</div>
					<div class="col-sm-8 col-xs-12">
						<article class="news-block">
							{!! trans('arealibre.desc') !!}
						</article>
					</div>

					<div class="col-sm-8 col-xs-12">
						<article class="news-block">
							<lu class="bullet">
							{!! trans('arealibre.list') !!}
							</lu>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection