@extends('layout.master')

@section('title', '- Tributario')

@section('content')
<section class="news-event-teaser section text-center-xs">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block ">
							<img src="images/areas/tributarios.png" alt="FoodBingo" class="logo img-responsive img-center-xs">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="news-block">
							<h6 class="text-normal text-bold">{{ trans('areatributario.title') }}</h6>
							{!! trans('areatributario.desc') !!}
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection