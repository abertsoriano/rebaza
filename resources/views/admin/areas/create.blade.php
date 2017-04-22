@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">PAGINAS</div>
                <div class="panel-body">
                    @include('errors.show-errors')
                    <form action="{{ $action }}" class="form-horizontal" enctype="multipart/form-data" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if (isset($area->id))
                            <input type="hidden" name="id" value="{{ $area->id }}">
                        @endif
                        <input type="hidden" value="AREAS" name="type">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="col-sm-2 control-label">Imagen</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image">
                                        @if ($area->image)
                                            <img src="{{ asset('images/' . strtolower($area->type) . '/' . $area->image) }}" alt="Imagen - {{ $area->name }}" class="img-responsive">
                                        @else
                                            <img src="{{ asset('images/nopicture.jpg') }}" alt="Imagen - nopicture.jpg" class="img-responsive center-block">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <label class="col-sm-2 control-label">Titulo</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="name" value="{{ old('name', $area->name) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <hr>
                                <h3>Contenido en Español</h3>
                                <textarea name="text_es" id="text_es" class="paq_descripcion">{{ old('text_es', $area->text_es) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <hr>
                                <h3>Contenido en Inglés</h3>
                                <textarea name="text_en" id="text_en" class="paq_descripcion">{{ old('text_en', $area->text_en) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <a href="{{ route('areaIndex', 'areas') }}" class="btn btn-lg btn-danger pull-left">Cancelar</a>
                                <button class="btn btn-lg btn-success pull-right">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection