@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">PAGINAS - <a href="{{ route('areaCreate') }}"
                                                            class="btn btn-sm btn-default">Nuevo</a></div>
                    <div class="panel-body">
                    @foreach($pages as $page)
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <img src="{{ asset('images/areas/' . $page->image) }}" alt="{{ $page->type }} {{ $page->name }}"
                                     class="img-responsive">
                                <div class="caption">
                                    <h4>{{ $page->name }}</h4>
                                    <div>
                                        <a href="{{ route('areaShow', $page->id) }}" class="btn btn-primary" role="button">Editar</a>
                                        <a href="#" class="btn btn-danger" role="button">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection