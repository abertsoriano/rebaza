@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">INICIO &nbsp; | &nbsp; <a href="{{ route('addLawyer') }}" class="btn btn-primary">Nuevo Abogado</a></div>

                    <div class="panel-body list-articles">
                        @foreach($lawyers as $lawyer)
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            {{ $lawyer->name_es }} - {{ $lawyer->job_es }}
                                            <div>
                                                <a href="{{ route('showLawyer', $lawyer->id) }}" class="btn btn-success btn-sm">Editar</a>
                                                {{--<a href="{{ '' }}" class="btn btn-danger btn-sm">Eliminar</a>--}}
                                            </div>
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
