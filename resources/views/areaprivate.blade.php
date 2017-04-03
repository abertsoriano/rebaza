@extends('layout.master')

@section('title', '- Private Clients')

@section('content')
<section class="news-event-teaser section">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block ">
							<img src="images/areas/privateclients1.png" alt="FoodBingo" class="logo img-responsive">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="news-block">
							<h6 class="text-normal text-bold">{{ trans('areaprivate.title') }}</h6>
							{!! trans('areaprivate.desc') !!}
							<article class="news-block">
								<ul class="bullet">
							{!! trans('areaprivate.list') !!}
								</ul>
							</article>
							{!! trans('areaprivate.desc2') !!}
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection