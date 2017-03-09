@extends('layout.master')

@section('title', '- Galería')

@section('content')
<section class="news-event-teaser">
	<div class="overlay-gallery"></div>
	<img src="images/gallery/01.jpg" alt="" class="bg-gallery">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 col-md-5" style="z-index: 1;">
				<div class="content-legend">
					<h4 id="title"></h4>
					<ul class="list-unstyled small">
						<li><strong>Artista: </strong> <span id="artist"></span></li>
						<li><strong>Tipo de Obra: </strong> <span id="type"></span></li>
						<li><strong>Medidas: </strong> <span id="measure"></span></li>
					</ul>
					<div>
						<button class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#modal-img-gallery">Ver completo</button>
					</div>
				</div>
			</div>
		</div>
		<div class="slick-gallery">
			<div><img src="images/gallery/thumb/01.jpg" alt="" class="img-responsive"></div>
			<div><img src="images/gallery/thumb/02.jpg" alt="" class="img-responsive"></div>
			<div><img src="images/gallery/thumb/03.jpg" alt="" class="img-responsive"></div>
			<div><img src="images/gallery/thumb/04.jpg" alt="" class="img-responsive"></div>
			<div><img src="images/gallery/thumb/07.jpg" alt="" class="img-responsive"></div>
			<div><img src="images/gallery/thumb/08.jpg" alt="" class="img-responsive"></div>
			<div><img src="images/gallery/thumb/09.jpg" alt="" class="img-responsive"></div>
			<div><img src="images/gallery/thumb/10.jpg" alt="" class="img-responsive"></div>
			<div><img src="images/gallery/thumb/11.jpg" alt="" class="img-responsive"></div>
			<div><img src="images/gallery/thumb/12.jpg" alt="" class="img-responsive"></div>
			<div><img src="images/gallery/thumb/13.jpg" alt="" class="img-responsive"></div>
			<div><img src="images/gallery/thumb/14.jpg" alt="" class="img-responsive"></div>
		</div>
	</div>
</section>
<div class="modal fade" tabindex="-1" role="dialog" id="modal-img-gallery">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="row">
					<img src="images/gallery/01.jpg" alt="" class="modal-img-gallery img-responsive center-block">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection