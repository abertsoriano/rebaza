@extends('layout.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">OFICINAS &nbsp; | &nbsp; <a href="{{ route('addOffice') }}" class="btn
				btn-primary">Nueva	Oficina</a></div>

				<div class="panel-body list-offices">
					<div class="row">
					@foreach($offices as $office)
						<div class="col-sm-4">
							<div class="thumbnail">
								<div class="info-content">
									{!! nl2br($office->info_es) !!}
								</div>
								<div class="caption">
									<hr>
									<h4>{{ $office->place }}</h4>
									<div>
										<a href="{{ route('editOffice', $office->id) }}" class="btn btn-primary" role="button">Editar</a>
										<a href="{{ route('deleteOffice', $office->id) }}" class="btn btn-danger confirm-delete" role="button">Eliminar</a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					</div>
					<div class="row">
						<div class="col-sm-12">
							<hr>
							<h2>Galería | <a href="{{ route('addGalleryOffice') }}" class="btn btn-primary">Agregar Imagen</a></h2>
						</div>
						@foreach($galleryOffices as $galleryOffice)
						<div class="col-sm-3">
							<div class="thumbnail">
								<form action="{{ route('deleteGalleryOffice', $galleryOffice->id) }}" method="post">
									<input type="hidden" name="_method" value="DELETE">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="image-content gallery-height" style="background-image: url('{{ asset('images/oficinas/' . $galleryOffice->image)  }}');"></div>
									<div class="caption">
										<button class="btn btn-danger" role="button">Eliminar</button>
									</div>
								</form>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
