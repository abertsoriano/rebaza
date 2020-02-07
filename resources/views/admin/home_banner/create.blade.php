@extends('layout.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Nuevo Banner</div>

				<div class="panel-body">
					@include('errors.show-errors')
					<form action="{{ route('storeBannerImages') }}" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label for="image">Imagen</label>
							<div class="controls">
								<input type="file" name="image" class="form-control" id="image">
							</div>
						</div>
						<div class="form-group">
							<a href="{{ route('bannerImages') }}" class="btn btn-danger">Cancelar</a>
							<button class="btn btn-primary">Agregar</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
