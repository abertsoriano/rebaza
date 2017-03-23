@extends('layout.master')

@section('title', '- Abogados Socios')

@section('content')
<section class="news-event-teaser section text-center-xs">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block">
							<img src="images/abogados.jpg" alt="FoodBingo" class="logo img-responsive">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<article class="news-block">
							<h6 class="text-normal text-bold">{{ trans('abogadoSocios.title') }}</h6>
							<h4 class="text-normal text-bold">
								{!! trans('abogadoSocios.sub_title') !!}
							</h4>
						</article>
					</div>
					<div class="col-sm-4">
						<article class="news-block">
							<ul>
                                {!! trans('abogadoSocios.list_1') !!}
							</ul>
						</article>
					</div>
					<div class="col-sm-4">
						<article class="news-block">
                            <ul>
                                {!! trans('abogadoSocios.list_2') !!}
                            </ul>
						</article>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="alexandraorbe" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content row">
			<div class="modal-header">
				<h6 class="sinespacio pull-left">Alexandra&nbsp;Orbezo <small>{{ trans('abogadoSocios.type') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/socios/Ale2.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold">
                                <a target="_blank" href="../images/cv/">{{ trans('abogadoSocios.download') }}</a>
                            </p>
                        </article>
                    </div>
                    {!! trans('abogadoSocios.modal_1') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="augustololi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Augusto Loli <small>{{ trans('abogadoSocios.type') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/socios/AugustoLoli2.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold"><a target="_blank" href="../images/cv/">{{ trans('abogadoSocios.download') }}</a></p><br>
                        </article>
                    </div>
                    {!! trans('abogadoSocios.modal_2') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="camilomaru" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Camilo&nbsp;Maruy <small>{{ trans('abogadoSocios.type') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/socios/camilo.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold"><a target="_blank" href="../images/cv/">{{ trans('abogadoSocios.download') }}</a></p><br>
                        </article>
                    </div>
                    {!! trans('abogadoSocios.modal_3') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="felipebois" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Felipe Boisset <small>{{ trans('abogadoSocios.type') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/socios/Felipe-Boisset.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold"><a target="_blank" href="../images/cv/">{{ trans('abogadoSocios.download') }}</a></p><br>
                        </article>
                    </div>
                    {!! trans('abogadoSocios.modal_4') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="gonzalodela" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Gonzalo De Las Casas <small>{{ trans('abogadoSocios.type_alter') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/socios/GDC.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold"><a target="_blank" href="../images/cv/"></a></p><br>
                        </article>
                    </div>
                    {!! trans('abogadoSocios.modal_5') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="joseanto" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Jos&eacute; Antonio Jim&eacute;nez <small>{{ trans('abogadoSocios.type') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/socios/nuevaJJCHfoto.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold"><a target="_blank" href="../images/cv/">{{ trans('abogadoSocios.download') }}</a></p><br>
                        </article>
                    </div>
                    {!! trans('abogadoSocios.modal_6') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="josefran" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">José Francisco Zaragozá <small>{{ trans('abogadoSocios.type') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <article class="news-socios">
                                <img src="images/socios/JFZ.jpg" alt="Image" class="img-responsive">
                                <p class="txtblue text-bold"><a target="_blank" href="../images/cv/">{{ trans('abogadoSocios.download') }}</a></p><br>
                            </article>
                        </div>
                        {!! trans('abogadoSocios.modal_7') !!}
                    </div>
                </div>
        </div>
        </div>
    </div>

<div class="modal fade" id="juancard" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Juan José Cárdenas <small>{{ trans('abogadoSocios.type_alter') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/socios/Juanjo.JPG" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold"><a target="_blank" href="../images/cv/">{{ trans('abogadoSocios.download') }}</a></p>
                        </article>
                    </div>
                    {!! trans('abogadoSocios.modal_8') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="luiselia" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Luis Miguel Elías <small>{{ trans('abogadoSocios.type') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/socios/LEM.JPG" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold"><a target="_blank" href="../images/cv/">{{ trans('abogadoSocios.download') }}</a></p><br>
                        </article>
                    </div>
                    {!! trans('abogadoSocios.modal_9') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mariazega" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">María Haydée Zegarra <small>{{ trans('abogadoSocios.type') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/socios/MariaHaydee.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold"><a target="_blank" href="../images/cv/">{{ trans('abogadoSocios.download') }}</a></p><br>
                        </article>
                    </div>
                    {!! trans('abogadoSocios.modal_10') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mariapena" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">María Luisa Peña <small>{{ trans('abogadoSocios.type') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/socios/Malu.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold"><a target="_blank" href="../images/cv/">{{ trans('abogadoSocios.download') }}</a></p><br>
                        </article>
                    </div>
                    {!! trans('abogadoSocios.modal_11') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="rafaelalca" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Rafael Alcázar <small>{{ trans('abogadoSocios.type_alter') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/socios/Rafael-Alcazar.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold"><a target="_blank" href="../images/cv/">{{ trans('abogadoSocios.download') }}</a></p><br>
                        </article>
                    </div>
                    {!! trans('abogadoSocios.modal_12') !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="terminos" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Alberto Rebaza <small>{{ trans('abogadoSocios.type_alter') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="news-socios">
                            <img src="images/socios/alberto.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold"><a target="_blank" href="../images/cv/">{{ trans('abogadoSocios.download') }}</a></p><br>
                        </div>
                    </div>
                    {!! trans('abogadoSocios.modal_13') !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection