@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">INICIO &nbsp; | &nbsp; <a href="{{ route('addLawyer') }}" class="btn btn-primary">Nuevo Abogado</a></div>

                    <div class="col-sm-12">
                        {!! $lawyers->render() !!}
                    </div>
                    <div class="panel-body list-articles">
                        @foreach($lawyers as $lawyer)
                            <div class="row">
                                <div class="col-sm-12">
                                    {{ $lawyer->name }} - <strong>{{ $lawyer->job_es }}</strong>
                                    <div class="pull-right">
                                        <small>Ultima actualización: {{ $lawyer->updated_at }}</small>
                                    </div>
                                    <div>
                                        <a href="{{ route('showLawyer', $lawyer->id) }}" class="btn btn-success btn-sm">Editar</a>
                                        <a href="{{ route('deleteLawyer', $lawyer->id) }}" class="btn btn-danger btn-sm confirm-delete">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {!! $lawyers->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
