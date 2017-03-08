@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="panel-heading">Nuevo Articulo</div>

                <div class="panel-body">
                    <form action="{{ route('storeArticle') }}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" value="1" name="status">
                        <div class="form-group">
                            <label for="title" class="control-label">Titulo</label>
                            <div class="controls">
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="imagen" class="control-label">Imagen</label>
                            <div class="controls">
                                <input type="file" name="imagen" id="imagem" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="controls">
                            	<textarea name="desc" id="paq_descripcion"></textarea>
							</div>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('home') }}" class="btn btn-danger">Cancelar</a>
                        	<button class="btn btn-primary">Agregar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
