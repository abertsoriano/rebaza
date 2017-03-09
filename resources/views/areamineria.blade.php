@extends('layout.master')

@section('title', '- Area Minería')

@section('content')
<section class="news-event-teaser section text-center-xs">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block">
							<img src="images/areas/areamineria.png" alt="FoodBingo" class="logo img-responsive img-center-xs">
						</article>
					</div>
					<div class="col-sm-8 col-xs-12">
						<article class="nes-block">
							<h4 class="text-wnormal text-bold titu">{{ trans('areamineria.title') }}</h4>
						</article>
					</div>
					<div class="col-sm-8 col-xs-12">
						<article class="news-block">
							{!! trans('areamineria.desc') !!}
						</article>
					</div>

					<div class="col-sm-4 col-xs-12">
						<article class="news-block">
							<lu class="bullet">
							{!! trans('areamineria.list1') !!}
							</lu>
						</article>
					</div>
					<div class="col-sm-4 col-xs-12">
						<article class="news-block">
							<lu>
							{!! trans('areamineria.list2') !!}
							</lu>
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection