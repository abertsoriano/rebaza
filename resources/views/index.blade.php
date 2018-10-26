@extends('layout.master')

@section('content')

<section class="news-event-teaser section">
	<div class="container small">
		<div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <article class="news-block">
                            <h6 class="text-normal text-bold sinespacioti">{{ $homeData['name_' . $locale] }}</h6>
                            <div class="content-text">
                                <div class="sinespacio">{!! $homeData['text_' . $locale] !!}</div>
                            </div>
                        </article>
                    </div>
                    <div class="navbarbarra col-sm-6 col-xs-12">
                        <article class="news-block">
                            <h6 class="text-normal text-bold sinespacioti">{{ trans('index.title2') }}</h6>
                            @foreach($articles as $article)
                                <div class="seccion-row">
                                    @if (trim($article['title_' . $locale]) != '')
                                        <h6>{{ $article['title_' . $locale] }}</h6>
                                    @endif
                                    <div class="content-text">
                                        {!! $article['desc_' . $locale] !!}
                                    </div>
                                </div>
                            @endforeach
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="lema" id="columna_quota">
                        @foreach($quotes as $quote)
                        <div class="item">
                            <article class="news-block col-sm-12">
                                <h5 class="text-justify">
                                    {!! $quote['message_' . $locale] !!}
                                    <div>{{ $quote['name'] }} <span>{{ $quote['rol_' . $locale] }}</span></div>
                                </h5>
                            </article>
                        </div>
                        @endforeach
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
                    @foreach($sidebarImages as $image)
                        <article class="news-block">
                            <img src="images/{{ $image->image }}" alt="{{ $image->image }}" class="img-responsive" alt="{{ $image->image }}">
                        </article>
                    @endforeach
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

<div class="modal fade" id="modal_mudanza" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-body" style="padding-top: 0;padding-bottom: 0;border: 3px solid #000000;">
                <div class="row">
                    <div class="col-md-5" style="padding: 0;">
                        <img src="{{ asset('images/popup_mudanza.jpg') }}" alt="Mudanza" style="width: 100%;border-right: 3px solid #000000">
                    </div>
                    <div class="col-md-7" style="padding: 0;">
                        <img src="{{ asset('images/titulo_mudanza.jpg') }}" alt="Titulo mudanza" style="width: 100%">
                        <div style="padding: 20px">
                            <h2 class="text-center" id="titulo_mudanza">¡NOS MUDAMOS!</h2>
                            <p>A partir del 14 de mayo, estaremos atendiendo en nuestras nuevas oficinas en el Edificio Real 2: el primer edificio del Perú diseñado por Jean Nouvel, galardonado con el premio Pritzker de arquitectura.</p>
                            <p>El Real 2 ha sido considerado como uno de los mejores diseños para oficinas a nivel mundial y tiene los más altos estándares de calidad, alineándose perfectamente con nuestras expectativas, ambiciones y manera de proyectarnos hacia nuestros clientes.</p>
                            <p>Estamos convencidos de que estas nuevas oficinas nos traerán mucha alegría y renovarán nuestro compromiso con la excelencia de nuestro servicio</p>
                            <br><br>
                            <p class="text-center" style="padding: 0 45px;">Gracias por ser parte de nuestro crecimiento y por acompañarnos en esta nueva etapa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

@endsection