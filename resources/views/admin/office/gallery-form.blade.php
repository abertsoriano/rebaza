@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-default">
					<div class="panel-heading">Galería de Oficinas</div>
					<div class="panel-body">
						<div class="alert alert-warning">* Las foto debe tener 1024px de ancho y de alto 600px a lo mucho, y que sean todas del mismo tamaño.</div>
						<div class="col-sm-8 col-sm-offset-2">
							@include('errors.show-errors')
							<form action="{{ $action }}" class="form-horizontal" enctype="multipart/form-data" method="post">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<div class="form-group">
									<div class="col-sm-12">
										<input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre de la Imagen" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<input type="file" class="form-control" name="image">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<a href="{{ route('officesIndex') }}" class="btn btn-lg btn-danger pull-left">Cancelar</a>
										<button class="btn btn-lg btn-success pull-right">Guardar</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
