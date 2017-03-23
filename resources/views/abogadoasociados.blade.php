@extends('layout.master')

@section('title', '- Abogados Asociados')

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
							<h6 class="text-normal text-bold">{{ trans('abogadoAsociados.title') }}</h6>
							<h4 class="text-normal text-bold">
                                {!! trans('abogadoAsociados.sub_title') !!}
                            </h4>
						</article>
					</div>
					<div class="col-sm-4">
						<article class="news-block">
							<ul>
								<li>
									<a href="#alejandrag" data-toggle="modal"></i>Alejandra Galvez</a>
                                    <div>alejandra.galvez@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#almajime" data-toggle="modal"></i>Alma Jimenez</a>
                                    <div>alma.jimenez@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#alvarocast" data-toggle="modal"></i>Álvaro Castro</a>
                                    <div>alvaro.castro@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#andrearie" data-toggle="modal"></i>Andrea  Rieckhof</a>
                                    <div>andrea.rieckhof@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#andresgjur" data-toggle="modal"></i>Andres Gjurinovic</a>
                                    <div>Andres.Gjurinovic@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#bettinagorr" data-toggle="modal"></i>Bettina  Gorra</a>
                                    <div>bettina.gorra@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#carlosnoza" data-toggle="modal"></i>Carlos Espinoza</a>
                                    <div>carlos.espinoza@rebaza-alcazar.com </div>
                                </li>
								<li>
									<a href="#cesarpant" data-toggle="modal"></i>César Pantoja Carrera</a>
                                    <div>cesar.pantoja@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#cinthiacane" data-toggle="modal"></i>Cinthia Cánepa</a>
                                    <div>cinthia.canepa@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#claudiaause" data-toggle="modal"></i>Claudia Ausejo</a>
                                    <div>claudia.ausejo@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#cynthiareba" data-toggle="modal"></i>Cynthia Rebaza</a>
                                    <div>cynthia.rebaza@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#danielgonz" data-toggle="modal"></i>Daniel Gonzales</a>
                                    <div>daniel.gonzales@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#danielchanca" data-toggle="modal"></i>Daniel Chancafe</a>
                                    <div>daniel.chancafe@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#danielaurqu" data-toggle="modal"></i>Daniela Urquiza</a>
                                    <div>daniela.urquiza@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#dianatass" data-toggle="modal"></i>Diana Tassara</a>
                                    <div>diana.tassara@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#dianagara" data-toggle="modal"></i>Diana Gárate</a>
                                    <div>diana.garate@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#elizenevasq" data-toggle="modal"></i>Elizene Vasquez de Velasco</a>
                                    <div>elizene.vasquezdevelasco@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#fiorellaatoc" data-toggle="modal"></i>Fiorella Atoche</a>
                                    <div>fiorella.atoche@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#gonzalosori" data-toggle="modal"></i>Gonzalo Soriano</a>
                                    <div>gonzalo.soriano@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#gustavotara" data-toggle="modal"></i>Gustavo Tarazona</a>
                                    <div>gustavo.tarazona@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#hugomart" data-toggle="modal"></i>Hugo Marticorena</a>
                                    <div>hugo.marticorena@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#janettburg" data-toggle="modal"></i>Janett Burga</a>
                                    <div>janett.burga@rebaza-alcazar.com</div>
                                </li>
							</ul>
						</article>
					</div>
					<div class="col-sm-4">
						<article class="news-block">
						    <ul>
								<li>
									<a href="#juanasto" data-toggle="modal"></i>Juan Astocondor</a>
                                    <div>juan.astocondor@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#juliomora" data-toggle="modal"></i>Julio Morales</a>
                                    <div>julio.morales@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#maitecolm" data-toggle="modal"></i>Maite Colmenter</a>
                                    <div>maite.colmenter@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#manuelferr" data-toggle="modal"></i>Manuel Ferreyros</a>
                                    <div>manuel.ferreyros@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#marciaarel" data-toggle="modal"></i>Marcia Arellano </a>
                                    <div>marcia.arellano@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#mariabedo" data-toggle="modal"></i>María del Carmen Bedoya</a>
                                    <div>mariadelcarmen.bedoya@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#mariasanc" data-toggle="modal"></i>María del Pilar Sanchez</a>
                                    <div>mariadelpilar.sanchez@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#mariagade" data-toggle="modal"></i>María Fernanda Gadea</a>
                                    <div>mariafernanda.gadea@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#martinlaros" data-toggle="modal"></i>Martín La Rosa</a>
                                    <div>martin.larosa@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#melisabush" data-toggle="modal"></i>Melisa Bush</a>
                                    <div>melisa.bush@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#mirkomedi" data-toggle="modal"></i>Mirko Medic</a>
                                    <div>mirko.medic@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#nataliagall" data-toggle="modal"></i>Natalia Gallardo</a>
                                    <div>natalia.gallardo@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#omardiaz" data-toggle="modal"></i>Omar Díaz</a>
                                    <div>omar.diaz@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#pamelaarce" data-toggle="modal"></i>Pamela Arce</a>
                                    <div>pamela.arce@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#pedrodiaz" data-toggle="modal"></i>Pedro Díaz Medina</a>
                                    <div>pedro.diaz@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#pilarhuam" data-toggle="modal"></i>Pilar Huamán De Los Heros</a>
                                    <div>pilar.huamandelosheros@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#rafaelrull" data-toggle="modal"></i>Rafael  Lulli</a>
                                    <div>Rafael.lulli@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#ricardocarr" data-toggle="modal"></i>Ricardo Carrillo</a>
                                    <div>ricardo.carrillo@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#ricardocard" data-toggle="modal"></i>Ricardo Cárdenas</a>
                                    <div>ricardo.cardenas@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#sebastiandela" data-toggle="modal"></i>Sebastian De La Puente</a>
                                    <div>sebastian.delapuente@rebaza-alcazar.com</div>
                                </li>
								<li>
									<a href="#sofiabrice" data-toggle="modal"></i>Sofía Briceño</a>
                                    <div>sofia.briceño@rebaza-alcazar.com</div>
                                </li>
						    </ul>
						</article>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>


<div class="modal fade" id="alejandrag" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Alejandra Galvez <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/AlejandraGalvez.jpg" alt="Image" class="img-responsive">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_1') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="alejandrochin" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Alejandro Chinguel <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/alejandrochinguel.jpg" alt="Image" class="img-responsive">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_2') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="almajime" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Alma Jimenez <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Alma.jpg" alt="Image" class="img-responsive">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_3') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="alvarocast" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Álvaro&nbsp;Castro <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Alvaro-Castro.jpg" alt="Image" class="img-responsive">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_4') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="andrearie" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Andrea  Rieckhof <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/andrearieckhof.jpg" alt="Image" class="img-responsive">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_5') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="andresgjur" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Andres Gjurinovic <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Andres.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_6') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="bettinagorr" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Bettina  Gorra <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Bettina.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_7') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="carlosnoza" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Carlos Espinoza <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/CarlosEspinoza.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_8') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="cesarpant" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">César Pantoja Carrera <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/CesarPantoja2.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_9') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="cinthiacane" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Cinthia&nbsp;Cánepa <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/cinthiacanepa.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_10') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="claudiaause" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Claudia&nbsp;Ausejo <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/ClaudiaA1.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_11') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="cristinaflor" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Cristina&nbsp;Florindez <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Cristina2.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_12') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="cynthiareba" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Cynthia&nbsp;Rebaza <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Cynthia2.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_13') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="danielgonz" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Daniel&nbsp;Gonzales <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Daniel.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_14') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="danielchanca" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Daniel  Chancafe <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/DanielChancafe.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_15') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="danielaurqu" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Daniela&nbsp;Urquiza <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Daniela.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_16') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="dianagara" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Diana&nbsp;Gárate <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/DianaGarate.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_17') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="dianatass" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Diana&nbsp;Tassara <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/DianaT1.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_18') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="elizenevasq" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Elizene&nbsp;Vasquez de Velasco <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Elizene.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_19') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="fiorellaatoc" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Fiorella&nbsp;Atoche <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Fiorella.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_20') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="gonzalosori" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Gonzalo&nbsp;Soriano <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Gonzalo1.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_21') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="gustavotara" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Gustavo&nbsp;Tarazona <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Gustavo.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_22') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="hugomart" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Hugo Marticorena <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/HM.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_23') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="ingridmedi" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Ingrid Medina <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Alvaro-Castro.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_24') !!}
				</div>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="janettburg" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Janett Burga <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Janett.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_25') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="juanasto" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Juan Astocondor <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/JuanAstocondor.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_26') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="juliomora" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Julio Morales <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/JulioCesarMorales.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_27') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="maitecolm" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Maite Colmenter <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/MayteColmenter.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_28') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="manuelferr" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Manuel Ferreyros <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/manuelferre.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_29') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="marciaarel" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Marcia Arellano <small>Asociad</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Marcia.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_30') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="mariabedo" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">María del Carmen Bedoya <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Marita.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_31') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="mariasanc" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">María del Pilar Sanchez <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/MariadelPilar.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_32') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="mariagade" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">María Fernanda Gadea <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/mafer.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_33') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="melisabush" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Melisa Bush <small>Asociada Senior</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/melisabush.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_34') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="mirkomedi" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Mirko Medic <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Mirko2.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_35') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="martinlaros" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Martín La Rosa <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/MartinLaRosa.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_36') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="nataliagall" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Natalia Gallardo <small>Asociada Senior</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/nataliagalla.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_37') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="omardiaz" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Omar Díaz <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/omar.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_38') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="pamelaarce" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Pamela Arce <small>Asociada Senior</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/PamelaArce.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_39') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="pedrodiaz" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Pedro Díaz Medina <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Pedro2.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_40') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="pilarhuam" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Pilar Huamán De Los Heros <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Pilar1.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_41') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="rafaelrull" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Rafael  Lulli <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/rafaellulli.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_42') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="ricardocarr" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Ricardo Carrillo <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/RicardoCa2.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_43') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="ricardocard" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Ricardo Cárdenas <small>{{ trans('abogadoAsociados.modal_title_2') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/RicardoCardenas.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_44') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="sebastiandela" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content row">
		<div class="modal-header">
			<h6 class="sinespacio pull-left">Sebastian De La Puente <small>{{ trans('abogadoAsociados.modal_title') }}</small></h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/Sebas2.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_45') !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="sofiabrice" role="dialog" aria-labelledby="terminosCondiciones" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content row">
            <div class="modal-header">
                <h6 class="sinespacio pull-left">Sofía Briceño <small>Asociada Senior</small></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<div class="row">
					<div class="col-sm-4">
						<article class="news-socios">
							<img src="images/asociados/SofiaBriceño.jpg" alt="Image" class="img-responsive img-center-xs">
							<p class="txtblue text-bold">{{ trans('abogadoAsociados.download_bio') }}</p>
						</article>
					</div>
					{!! trans('abogadoAsociados.modal_46') !!}
				</div>
            </div>
        </div>
    </div>
</div>
@endsection