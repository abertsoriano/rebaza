@extends('layout.master')

@section('title', '- Formulario')

@section('content')
<section class="news-event-teaser section text-center-xs">
	<div class="container small">

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 col-xs-12">
						<article class="news-block ">
							<img src="images/trabajaconnosotros.png" alt="FoodBingo" class="logo img-responsive img-center-xs">
						</article>
					</div>
					<div class="col-sm-9 col-xs-12">
						<div id="contenido_int">
						<article class="nes-block">
							<h2 class="text-wnormal text-bold titu">Formulario</h2>
							<p>
								<form method="post" enctype="multipart/form-data" action="enviar.php?idi=1">
									<table width="700" border="0" cellspacing="2" cellpadding="2">
										<tr>
											<td colspan="3">&nbsp;</td>
										</tr>
										<tr>
											<td width="86" class="titulo">Nombre :</td>
											<td width="250"><input class="campo" name="nombre" id="nombre" type="text" /></td>
											<td width="344"></td>
										</tr>
										<tr>
											<td class="titulo">Correo :</td>
											<td><input class="campo" name="correo" id="correo" type="text" /></td>
											<td>&nbsp;</td>
										</tr>
										<tr>
											<td class="titulo">CV :</td>
											<td><input type="file" id="cv" name="cv" /></td>
											<td><span class="nota">Sólo podrán subir archivos pdf</span></td>
										</tr>
										<tr>
											<td class="titulo">Mensaje :</td>
											<td><label for="textfield"></label>
												<textarea class="areadetexto" name="mensaje" id="mensaje"></textarea></td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td>&nbsp;</td>
												<td></td>
												<td>&nbsp;</td>
											</tr>
											<tr>
												<td>&nbsp;</td>
												<td><input type="submit" id="btnEnviar" name="btnEnviar" value="Enviar" /></td>
												<td>&nbsp;</td>
											</tr>
										</table>
									</form>
								</p>
							</article>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="dowload-app text-center-sm text-center-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-xs-12">
						<div class="content">
							<h5></h5>
						</div>
					</div>
				</div>
			</div>
		</section>
@endsection