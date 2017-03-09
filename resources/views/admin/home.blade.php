@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">INICIO &nbsp; | &nbsp; <a href="{{ route('addArticle') }}" class="btn btn-primary">Nuevo Articulo</a></div>

                <div class="panel-body list-articles">
                    @foreach($articles as $article)
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="{{ asset('images/articles/' . $article->imagen) }}" alt="{{ $article->imagen }}" class="img-responsive">
                        </div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>{{ $article->title }}</h3>
                                </div>
                                <div class="col-sm-12">
                                    {!! $article->desc !!}
                                    <div>
                                        <a href="{{ route('editArticle', $article->id) }}" class="btn btn-success btn-sm">Editar</a>
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
