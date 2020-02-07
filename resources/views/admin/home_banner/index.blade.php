@extends('layout.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">BANNERS &nbsp; | &nbsp; <a href="{{ route('createBannerImages') }}" class="btn btn-primary">Nuevo</a></div>

					<div class="panel-body">
						@if ($banners->isEmpty())
							<div class="alert alert-warning"><strong>No hay imagenes que mostrar</strong></div>
						@else
							<ul class="list-group">
								@foreach($banners as $banner)
								<li class="list-group-item">
									<img src="{{ asset('images/banners/' . $banner->image) }}" alt="{{ $banner->name }}" class="img-responsive">
									<div style="margin-top: 12px;text-align: right;">
										<form action="{{ route('deleteBannerImages', $banner->id) }}" method="post">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<input type="hidden" name="_method" value="DELETE">
											<button class="btn btn-danger" role="button">Eliminar</button>
										</form>
									</div>
								</li>
								@endforeach
							</ul>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
