@extends('layout.master')

@section('title', '- Responsabilidad Social Empresarial')

@section('content')
<div id="cont_contenido" class="container">
	<div class="col-sm-12">
		<div class="col-sm-3">
			<a href="{{ route('galeria') }}">
				<img src="images/responsabilidad/regulacionfinanciera.png" width="205" height="376" class="img-responsive">
			</a>
		</div>
		<div class="col-sm-9">
			<h2>Responsabilidad Social Empresarial</h2>
			<div class="col-sm-12">
				<div class="row mb50">
					<div class="col-sm-4">
						<a href="http://www.eresunico.org/" target="_blank">
							<img src="images/responsabilidad/eres-unico.jpg" class="img-responsive" />
						</a>
					</div>
					<div class="col-sm-4">
						<a href="http://www.mali.pe/" target="_blank">
							<img src="images/responsabilidad/mali.jpg" class="img-responsive" />
						</a>
					</div>
					<div class="col-sm-4">
						<a href="http://www.grameenfoundation.org/" target="_blank">
							<img src="images/responsabilidad/grammen.jpg" class="img-responsive" />
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<a href="http://www.nesst.org/peru/" target="_blank">
							<img src="images/responsabilidad/nesst.jpg" class="img-responsive" />
						</a>
					</div>
					<div class="col-sm-4">
						<a href="http://pe.wayra.org/" target="_blank">
							<img src="images/responsabilidad/wayra-peru.jpg" class="img-responsive" />
						</a>
					</div>
					<div class="col-sm-4">
						<img src="images/responsabilidad/criadores-caballos.jpg" class="img-responsive" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection