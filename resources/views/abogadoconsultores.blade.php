@extends('layout.master')

@section('title', '- Abogados Consultores')

@section('content')
<section class="news-event-teaser section text-center-xs">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3">
						<article class="news-block">
							<img src="images/abogados.jpg" alt="FoodBingo" class="logo img-responsive">
						</article>
					</div>
					<div class="col-sm-9">
						<article class="news-block">
							<h6 class="text-normal text-bold">{{ trans('abogadoConsultores.title') }}</h6>
							<h4 class="text-normal text-bold">
								<a class="abogados" href="{{ route('abogadosocios') }}">{{ trans('abogadoConsultores.title_1') }}</a>
								<a class="abogados" href="{{ route('abogadoasociados') }}">{{ trans('abogadoConsultores.title_2') }}</a>
                                {{ trans('abogadoConsultores.title_3') }}
							</h4>
						</article>
					</div>
					<div class="col-sm-8">
						<article class="news-block">
						    <ul>
								<li>
                                    <a tabindex="-1" href="#carlosaval" data-toggle="modal"></i>Carlos Avalos</a>
                                    <div>carlos.avalos@rebaza-alcazar.com</div>
                                </li>
								<li>
                                    <a tabindex="-1" href="#jorgeroma" data-toggle="modal"></i>Jorge Román</a>
                                    <div>jorge.roman@rebaza-alcazar.com</div>
                                </li>
								<li>
                                    <a tabindex="-1" href="#mariapast" data-toggle="modal"></i>María Isabel Pastor</a>
                                    <div>misabel.pastor@rebaza-alcazar.com
                                </li>
								<li>
                                    <a tabindex="-1" href="#percygarc" data-toggle="modal"></i>Percy García Cavero</a>
                                    <div>percy.garcia@rebaza-alcazar.com</div>
                                </li>
								<li>
                                    <a tabindex="-1" href="#fernandooca" data-toggle="modal"></i>Fernando Ocampo</a>
                                    <div>fernando.ocampo@rebaza-alcazar.com </div>
                                </li>
						    </ul>
						</article>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="carlosaval" tabindex="-1" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content row">
			<div class="modal-header">
				<h6 class="sinespacio pull-left">Carlos Avalos <small>{{ trans('abogadoConsultores.txt') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/consultores/CarlosAvalos.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold">{{ trans('abogadoConsultores.download') }}</p>
                        </article>
                    </div>
                    <div class="col-sm-8">
                        <ul class="accordion">
                            <li class="current"><a href="#">{{ trans('abogadoConsultores.modal_list_1') }}</a>
                                <div class="bloqueMostrar">
                                    <ul>
                                        <li><a href="{{ route('arealitigios') }}">{{ trans('abogadoConsultores.modal_list_1a') }}</a></li>
                                        <li><a href="areawhitecollarcrime">White Collar Crime</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">{{ trans('abogadoConsultores.modal_list_2') }}</a>
                                <div class="bloqueMostrar">
                                    <ul>
                                        <li>{{ trans('abogadoConsultores.modal_list_21') }}</li>
                                        <li>{{ trans('abogadoConsultores.modal_list_22') }}</li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">{{ trans('abogadoConsultores.modal_list_3') }}</a>
                                <div class="bloqueMostrar">
                                    <ul>
                                        {!! trans('abogadoConsultores.modal_list_31') !!}
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">{{ trans('abogadoConsultores.modal_list_4') }}</a>
                                <div class="bloqueMostrar">
                                    <ul>
                                        {!! trans('abogadoConsultores.modal_list_41') !!}
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <div class="col-sm-8">
                        <article class="news-socios">
                            {!! trans('abogadoConsultores.modal_partners') !!}
                        </article>
                    </div>
                    <div class="col-sm-12">
                        <article class="news-socios">
                            {!! trans('abogadoConsultores.modal_partners_1') !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="jorgeroma" tabindex="-1" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content row">
			<div class="modal-header">
				<h6 class="sinespacio pull-left">Jorge Román <small>{{ trans('abogadoConsultores.txt') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/consultores/JorgeRoman.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold">{{ trans('abogadoConsultores.download') }}</p>
                        </article>
                    </div>
                    <div class="col-sm-8">
                        <ul class="accordion">
                            {!! trans('abogadoConsultores.modal_2_list') !!}
                        </ul>
                    </div>
                    <div class="col-sm-8">
                        <article class="news-socios">
                            {!! trans('abogadoConsultores.modal_2_partners') !!}
                        </article>
                    </div>
                    <div class="col-sm-12">
                        <article class="news-socios">
                            {!! trans('abogadoConsultores.modal_2_partners_1') !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="mariapast" tabindex="-1" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content row">
			<div class="modal-header">
				<h6 class="sinespacio pull-left">María Isabel Pastor <small>{{ trans('abogadoConsultores.txt') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/consultores/MIP.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold">{{ trans('abogadoConsultores.download') }}</p>
                        </article>
                    </div>
                    <div class="col-sm-8">
                        <ul class="accordion">
                            {!! trans('abogadoConsultores.modal_3_list') !!}
                        </ul>
                    </div>
                    <div class="col-sm-8">
                        <article class="news-socios">
                            {!! trans('abogadoConsultores.modal_3_partners') !!}
                        </article>
                    </div>
                    <div class="col-sm-12">
                        <article class="news-socios">
                            {!! trans('abogadoConsultores.modal_3_partners_1') !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="percygarc" tabindex="-1" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Percy García Cavero <small>{{ trans('abogadoConsultores.txt') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <article class="news-socios">
                            <img src="images/socios/Percy2.jpg" alt="Image" class="img-responsive">
                            <p class="txtblue text-bold">
                                <a target="_blank" href="../images/cv/">{{ trans('abogadoConsultores.download') }}</a>
                            </p>
                        </article>
                    </div>
                    <div class="col-sm-8">
                        <ul class="accordion">
                            {!! trans('abogadoConsultores.modal_4_list') !!}
                        </ul>
                    </div>
                    <div class="col-sm-8">
                        <article class="news-socios">
                            {!! trans('abogadoConsultores.modal_4_partners') !!}
                        </article>
                    </div>
                    <div class="col-sm-12">
                        <article class="news-socios">
                            {!! trans('abogadoConsultores.modal_4_partners_1') !!}
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="fernandooca" tabindex="-1" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content row">
			<div class="modal-header">
				<h6 class="sinespacio pull-left">Fernando Ocampo <small>{{ trans('abogadoConsultores.txt') }}</small></h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <article class="news-socios">
                                <img src="images/consultores/fernandooca.jpg" alt="Image" class="img-responsive img-center-xs">
                                <p class="txtblue text-bold">{{ trans('abogadoConsultores.download') }}</p>
                            </article>
                        </div>
                        <div class="col-sm-8">
                            <ul class="accordion">
                                {!! trans('abogadoConsultores.modal_5_list') !!}
                            </ul>
                        </div>
                        <div class="col-sm-8">
                            <article class="news-socios">
                                {!! trans('abogadoConsultores.modal_5_partners') !!}
                            </article>
                        </div>
                        <div class="col-sm-12">
                            <article class="news-socios">
                                {!! trans('abogadoConsultores.modal_5_partners_1') !!}
                            </article>
                        </div>
                    </div>
				</div>
			</div>
		</div>

	</div>

@endsection