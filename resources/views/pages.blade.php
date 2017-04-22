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
                            <img src="{{ asset('images/' . $page->type . '/' . $page->image) }}" alt="FoodBingo" class="logo img-responsive">
                        </article>
                    </div>
                    <div class="col-sm-9 col-xs-12">
                        <article class="news-block">
                            <h6 class="text-normal text-bold">{{ $page['name_' . $locale] }}</h6>
                            <article class="news-block">
                                {!! $page['text_' . $locale] !!}
                            </article>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection