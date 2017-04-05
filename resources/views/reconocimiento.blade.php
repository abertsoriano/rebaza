@extends('layout.master')

@section('title', '- Reconocimientos y Noticias')

@section('content')
<section class="wow news-event-teaser section text-center-xs">
	<div class="container small">

		<div class="row wow">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12 ">
						<article class="news-block">
							<img src="images/reconocimiento.jpg" alt="FoodBingo" class="logo img-responsive img-center-xs">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<h6 class="text-bold titu">Reconocimientos y Noticias</h6>
						<div class="row content-articles">
                        @foreach($articles->toArray()['data'] as $article)
                            <div class="col-sm-6">
                                @if ($article['title' . $locale] != '')
                                <h6>{{ $article['title' . $locale] }}</h6>
                                @endif
                                <article>{!! $article['desc' . $locale] !!}</article>
                            </div>
                        @endforeach
						</div>
                        {!! $articles->render() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection