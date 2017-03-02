@extends('layout.master')

@section('title', '- Area Mercado')

@section('content')
<section class="news-event-teaser section">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block ">
							<img src="{{ asset('images/areas/mercado.jpg') }}" alt="FoodBingo" class="logo img-responsive img-center-xs">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="news-block">
							<h6 class="text-normal text-bold">{{ trans('areaMercado.title') }}</h6>
							<p class="text-bold">{{ trans('areaMercado.title2') }}</p>
						</article>
						{!! trans('areaMercado.text_en') !!}
						{!! trans('areaMercado.list_en') !!}
						{!! trans('areaMercado.title_en') !!}
						<article class="news-block">
							<ul class="bullet">
								{!! trans('areaMercado.list') !!}
							</ul>

							{!! trans('areaMercado.text') !!}
							<p class="text-bold">{{ trans('areaMercado.title3') }}</p>
						</article>
						<article class="news-block">
							<ul class="bullet">
								{!! trans('areaMercado.list2') !!}
							</ul>
							{!! trans('areaMercado.text2') !!}
							<br>
							<p class="text-bold">{{ trans('areaMercado.title_text3') }}</p>
							{!! trans('areaMercado.text3') !!}
							<br>
							<p class="text-bold">{{ trans('areaMercado.title_text4') }}</p>
							{!! trans('areaMercado.text4') !!}
							<br>
							<p class="text-bold">{{ trans('areaMercado.title_text5') }}</p>
							{!! trans('areaMercado.text5') !!}
						</article>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection