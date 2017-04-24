@extends('layout.master')

@section('content')

<section class="news-event-teaser section text-center-xs">
	<div class="container small">
		<div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <article class="news-block">
                            <h6 class="text-normal text-bold sinespacioti">{{ $homeData['name_' . $locale] }}</h6>
                            <div class="sinespacio">{!! $homeData['text_' . $locale] !!}</div>
                        </article>
                    </div>
                    <div class="navbarbarra col-sm-6 col-xs-12">
                        <article class="news-block">
                            <h6 class="text-normal text-bold sinespacioti">{{ trans('index.title2') }}</h6>
                            @foreach($articles as $article)
                                <div class="seccion-row">
                                    <h6>{{ $article['title' . $locale] }}</h6>
                                    <div class="content-text">
                                        <p class="sinespacio">{!! strip_tags($article['desc' . $locale]) !!}</p>
                                    </div>
                                </div>
                            @endforeach
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="lema" id="columna_quota">
                        <div class="item">
                            <article class="news-block col-sm-12">
                                <h5 class="text-justify">
                                    {{ trans('index.quota1.message') }}
                                    <br>{{ trans('index.quota1.name') }} <span>{{ trans('index.quota1.alter') }}</span>
                                </h5>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-block col-sm-12">
                                <h5 class="text-justify">
                                    {{ trans('index.quota2.message') }}
                                    <br>{{ trans('index.quota2.name') }} <span>{{ trans('index.quota2.alter') }}</span>
                                </h5>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-block col-sm-12">
                                <h5 class="text-justify">
                                    {{ trans('index.quota3.message') }}
                                    <br>{{ trans('index.quota3.name') }} <span>{{ trans('index.quota3.alter') }}</span>
                                </h5>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-block col-sm-12">
                                <h5 class="text-justify">
                                    {{ trans('index.quota4.message') }}
                                    <br>{{ trans('index.quota4.name') }} <span>{{ trans('index.quota4.alter') }}</span>
                                </h5>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-block col-sm-12">
                                <h5 class="text-justify">
                                    {{ trans('index.quota5.message') }}
                                    <br>{{ trans('index.quota5.name') }} <span>{{ trans('index.quota5.alter') }}</span>
                                </h5>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-block col-sm-12">
                                <h5 class="text-justify">
                                    {{ trans('index.quota6.message') }}
                                    <br>{{ trans('index.quota6.name') }} <span>{{ trans('index.quota6.alter') }}</span>
                                </h5>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-block col-sm-12">
                                <h5 class="text-justify">
                                    {{ trans('index.quota7.message') }}
                                    <br>{{ trans('index.quota7.name') }} <span>{{ trans('index.quota7.alter') }}</span>
                                </h5>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-block col-sm-12">
                                <h5 class="text-justify">
                                    {{ trans('index.quota8.message') }}
                                    <br>{{ trans('index.quota8.name') }} <span>{{ trans('index.quota8.alter') }}</span>
                                </h5>
                            </article>
                        </div>
                        <div class="item">
                            <article class="news-block col-sm-12">
                                <h5 class="text-justify">
                                    {{ trans('index.quota9.message') }}
                                    <br>{{ trans('index.quota9.name') }} <span>{{ trans('index.quota9.alter') }}</span>
                                </h5>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-sm-offset-1">
                <div class="col-sm-12" >
                    <h2 class="text-center small text-bold">
                      <a href="{{ url('galeria') }}">{{ trans('index.galery') }}</a>
                      <br><a href="{{ url('responsabilidadsocial') }}">RSE</a>
                      <br><a target="_blank" href="https://aplicaciones.rebaza-alcazar.com/Citrix/XenApp/auth/login.aspx">RAD Login</a>
                    </h2>
                    <article class="news-block">
                      <img src="images/premios/chambers2016.png" alt="FoodBingo" class="img-responsive">
                    </article>
                    <article class="news-block">
                      <img src="images/latin.png" alt="FoodBingo" class="img-responsive">
                    </article>
                    <article class="news-block">
                      <img src="images/iflr.jpg" alt="FoodBingo" class="img-responsive">
                    </article>
                    <article class="news-block">
                      <img src="images/1000.jpg" alt="FoodBingo" class="img-responsive">
                    </article>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                      <div id="columna_premios">
                        <div class="item">
                          <a target="_blank" class="active img-responsive" href="http://www.chambersandpartners.com/Latin-America/Firms/103699-71778">
                            <img src="images/premios/premio_chambers.jpg" class="img-responsive">
                          </a>
                        </div>
                        <div class="item">
                          <a target="_blank" href="http://www.latinlawyer.com/firms/1181/ll250/rebaza-alcazar-de-las-casas-abogados-financieros/#pp7">
                            <img src="images/premios/premio_ll.jpg" class="img-responsive">
                          </a>
                        </div>
                        <div class="item">
                          <a target="_blank" href="http://whichlawyer.practicallaw.com/which/reference.do?ref=4-105-0841">
                            <img src="images/premios/premio_plc.jpg" class="img-responsive">
                          </a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
	    </div>
    </div>
</section>

@endsection