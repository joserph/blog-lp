@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lista de Eiquetas
                        <a href="{{ route('tags.create') }}" class="btn btn-xs btn-primary pull-right">Crear</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th width="10px">ID</th>
                                    <th>Nombre</th>
                                    <th colspan="3">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tags as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td width="10px">
                                            <a href="{{ route('tags.show', $item->id) }}" class="btn btn-xs btn-default">
                                                Ver
                                            </a>
                                        </td>
                                        <td width="10px">
                                            <a href="{{ route('tags.edit', $item->id) }}" class="btn btn-xs btn-warning">
                                                Editar
                                            </a>
                                        </td>
                                        <td width="10px">
                                            {!! Form::open(['route' => ['tags.destroy', $item->id],
                                            'method' => 'DELETE']) !!}
                                                 <button class="btn btn-xs btn-danger">
                                                     Eliminar
                                                 </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $tags->render() }}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection