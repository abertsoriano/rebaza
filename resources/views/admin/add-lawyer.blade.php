@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Abogado</div>

                <div class="panel-body list-articles">
                    <form action="{{ $action }}" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if (isset($lawyer->id))
                            <input type="hidden" name="id" value="{{ $lawyer->id }}">
                        @endif
                        <div class="form-group">
                            <div class="row">
                                <label for="type" class="col-sm-1 control-label"><strong>Seccion</strong></label>
                                <div class="col-sm-3">
                                    <select name="type" id="type" class="form-control">
                                        <?php $typeOld = old('type', $lawyer->type) ?>
                                        @foreach($types as $type)
                                            <option value="{{ $type['id'] }}" {{ $typeOld == $type['id'] ? 'selected' : '' }}>{{ $type['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label for="name" class="col-sm-1 control-label"><strong>Nombre</strong></label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $lawyer->name) }}" placeholder="Nombre">
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs">
                            <li role="presentation" class="active">
                                <a href="#tab_es" aria-controls="tab_es" role="tab" data-toggle="tab">Español</a>
                            </li>
                            <li role="presentation">
                                <a href="#tab_en" aria-controls="tab_en" role="tab" data-toggle="tab">Inglés</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab_es">
                                <div class="form-group">
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="job_es" value="{{ old('job_es', $lawyer->job_es) }}" placeholder="Cargo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" data-lang="es">
                                    <div class="content-data_es hidden">
                                        @if ($lawyer->list_es != '')
                                        <?php $i_es = 1 ?>
                                        @foreach (json_decode($lawyer->list_es, true) as $list)
                                            <input type="hidden" name="test_es[list_{{ $i_es  }}]" value="{{ $list['list'] }}" id="list_es{{ $i_es }}">

                                            @if (!empty($list['items_es']))
                                                @foreach($list['items_es'] as $item)
                                                    <input type="hidden" name="items_es[list_{{ $i_es }}][]" value="{{ $item }}" id="item_es{{ $i_es }}">
                                                @endforeach
                                            @endif
                                            <?php $i_es++ ?>
                                        @endforeach
                                        @endif
                                    </div>
                                    <ul class="list-test_es">
                                    @if ($lawyer->list_es != '')
                                        <?php $id_es = 1 ?>
                                        @foreach (json_decode($lawyer->list_es, true) as $list)
                                        <li id="li_title_es{{ $id_es }}" data-id="{{ $id_es }}">
                                            {{ $list['list'] }}
                                            <input type="button" class="btn btn-sm btn-primary btn-add-item" data-id="{{ $id_es }}" value="Agregar Item">
                                            <input type="button" class="btn btn-sm btn-danger btn-del-title {{ count($list['items_es']) > 0 ? 'hidden' : '' }}" data-id="{{ $id_es }}" value="Elminar">
                                            <ul class="content-items">
                                                @if (!empty($list['items_es']))
                                                    @foreach($list['items_es'] as $item)
                                                        <li>
                                                            <div class="col-sm-6">{{ $item }}</div>
                                                            <div class="col-sm-2">
                                                                <a href="#" class="btn-delete-item-created" data-id="{{ $id_es }}">Elminar</a>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                            <ul class="hidden form-group-sm">
                                                <li>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <input type="button" class="btn btn-sm btn-success btn-create-item" value="Agregar">
                                                    <input type="button" class="btn btn-sm btn-del-item" value="Cancelar">
                                                </li>
                                            </ul>
                                        </li>
                                        <?php $id_es++ ?>
                                        @endforeach
                                    @endif
                                    </ul>
                                    <div class="form-group-sm form-add-list_es">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="btn btn-sm btn-add-one" type="button" value="Agregar">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <h3>Información Contacto</h3>
                                    <textarea name="info_es" id="info_es" class="form-control txt-lawyers">{{ old('info_es', $lawyer->info_es) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <hr>
                                    <h3>Detalle</h3>
                                    <textarea name="text_es" id="text_es" class="form-control txt-lawyers">{{ old('text_es', $lawyer->text_es) }}</textarea>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_en">
                                <div class="form-group">
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="job_en" value="{{ old('job_en', $lawyer->job_en) }}" placeholder="Job">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" data-lang="en">
                                    <div class="content-data_en hidden">
                                        @if ($lawyer->list_en != '')
                                            <?php $i_en = 1 ?>
                                            @foreach (json_decode($lawyer->list_en, true) as $list)
                                                <input type="hidden" name="test_en[list_{{ $i_en  }}]" value="{{ $list['list'] }}" id="list_en{{ $i_en }}">

                                                @if (!empty($list['items_en']))
                                                    @foreach($list['items_en'] as $item)
                                                        <input type="hidden" name="items_en[list_{{ $i_en }}][]" value="{{ $item }}" id="item_en{{ $i_en }}">
                                                    @endforeach
                                                @endif
                                                <?php $i_en++ ?>
                                            @endforeach
                                        @endif
                                    </div>
                                    <ul class="list-test_en">
                                    @if ($lawyer->list_en != '')
                                        <?php $id_en = 1 ?>
                                        @foreach (json_decode($lawyer->list_en, true) as $list)
                                            <li id="li_title_en{{ $id_en }}" data-id="{{ $id_en }}">
                                                {{ $list['list'] }}
                                                <input type="button" class="btn btn-sm btn-primary btn-add-item" data-id="{{ $id_en }}" value="Agregar Item">
                                                <input type="button" class="btn btn-sm btn-danger btn-del-title {{ count($list['items_en']) > 0 ? 'hidden' : '' }}" data-id="{{ $id_en }}" value="Elminar">
                                                <ul class="content-items">
                                                    @if (!empty($list['items_en']))
                                                        @foreach($list['items_en'] as $item)
                                                            <li>
                                                                <div class="col-sm-6">{{ $item }}</div>
                                                                <div class="col-sm-2">
                                                                    <a href="#" class="btn-delete-item-created" data-id="{{ $id_en }}">Elminar</a>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                                <ul class="hidden form-group-sm">
                                                    <li>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <input type="button" class="btn btn-sm btn-success btn-create-item" value="Agregar">
                                                        <input type="button" class="btn btn-sm btn-del-item" value="Cancelar">
                                                    </li>
                                                </ul>
                                            </li>
                                            <?php $id_en++ ?>
                                        @endforeach
                                    @endif
                                    </ul>
                                    <div class="form-group-sm">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-sm-2">
                                            <input class="btn btn-sm btn-add-one" type="button" value="Add">
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <h3>Info Contact</h3>
                                    <textarea name="info_en" id="info_en" class="form-control txt-lawyers">{{ old('info_en', $lawyer->info_en) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <hr>
                                    <h3>Details</h3>
                                    <textarea name="text_en" id="text_en" class="form-control txt-lawyers">{{ old('text_en', $lawyer->text_en) }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('lawyers') }}" class="btn btn-danger pull-left btn-lg">Cancelar</a>
                            <button class="btn btn-primary btn-lg pull-right">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('lawyers_js')
    <script>
        $('.btn-add-one').on('click', function (e) {
            e.preventDefault();
            var $input = $(e.currentTarget).closest('.form-group-sm').find(':text');
            var lang = $(e.currentTarget).closest('.form-group').data('lang');
            if ($input.val().length >= 2) {
                var $content = $('.content-data_' + lang);
                var nValues = $content.children('.title_val').length;
                var total = (nValues + 1);
                var hiddenInput = '<input type="hidden" name="test_' + lang + '[list_' + total +']" value="' + $input.val() + '" id="list_' + lang + total + '" class="title_val">';
                var listItem = '<li id="li_title_' + lang + total + '" data-id="' + total + '">' + $input.val() +
                    '<input type="button" class="btn btn-sm btn-primary btn-add-item" data-id="'+ total + '" value="Agregar Item">' +
                    '<input type="button" class="btn btn-sm btn-danger btn-del-title" data-id="'+ total + '" value="Elminar">' +
                    '<ul class="content-items"></ul>' +
                    '<ul class="hidden form-group-sm"><li><div class="col-sm-6"><input type="text" class="form-control"></div>' +
                    '<input type="button" value="Agregar" class="btn btn-sm btn-success btn-create-item">' +
                    '<input type="button" class="btn btn-sm btn-del-item" value="Cancelar"></li></ul></li>';

                $('.list-test_' + lang).append(listItem);
                $content.append(hiddenInput);
                $input.val('');
            }
        });

        $('.list-test_es, .list-test_en').on('click', '.btn-del-title', function (e) {
            e.preventDefault();
            var id = $(e.currentTarget).data('id');
            var lang = $(e.currentTarget).closest('.form-group').data('lang');

            $('#list_' + lang+ id).remove();
            $(e.currentTarget).closest('li').remove();
        });

        $('.list-test_es, .list-test_en').on('click', '.btn-add-item', function (e) {
            e.preventDefault();
            var $button = $(e.currentTarget);
            $button.addClass('hidden');

            $button.parent().find('ul').removeClass('hidden');
        });

        $('.list-test_es, .list-test_en').on('click', '.btn-del-item', function (e) {
            e.preventDefault();
            var $li = $(e.currentTarget).parent();
            $li.children(':text').val('');

            $li.closest('ul').addClass('hidden').parent().children('.btn-add-item').removeClass('hidden');
        });

        $('.list-test_es, .list-test_en').on('click', '.btn-create-item', function (e) {
            e.preventDefault();
            var $input = $(e.currentTarget).closest('ul').find(':text');
            var id = $(e.currentTarget).closest('ul').closest('li').data('id');
            var lang = $(e.currentTarget).closest('.form-group').data('lang');

            if ($input.val().length >= 2) {
                var $content = $('.content-data_' + lang);
                var nValues = $content.children('.item_val').length;
                var total = (nValues + 1);
                var hiddenInput = '<input type="hidden" name="items_' + lang + '[list_' + id +'][]" value="' + $input.val() + '" id="item_' + lang + total + '" class="item_val">';
                var listItem = '<li><div class="col-sm-6">' + $input.val() + '</div>' +
                    '<div class="col-sm-2"><a href="#" class="btn-delete-item-created" data-id="'+ total + '">Elminar</a></div></li>';

                $input.closest('ul').prev('.content-items').append(listItem);
                $('#li_title_' + lang + id + ' .btn-del-title').addClass('hidden');
                $content.append(hiddenInput);
                $input.val('');
            }
        });

        $('.list-test_es, .list-test_en').on('click', '.btn-delete-item-created', function (e) {
            e.preventDefault();
            var id = $(e.currentTarget).data('id');
            var lang = $(e.currentTarget).closest('.form-group').data('lang');
            var ul = $(e.currentTarget).closest('ul');
            $('#item_' + lang + id).remove();
            $(e.currentTarget).closest('li').remove();

            // Revisa si hay un item mas de la lista, asi muestra el boton de eliminar lista
            if (ul.children('li').length === 0) {
                $('#li_title_' + lang + id + ' .btn-del-title').removeClass('hidden');
            }
        });
    </script>
@endsection