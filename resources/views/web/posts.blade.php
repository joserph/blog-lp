@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>Lista de articulos</h1>

        @foreach ($posts as $item)
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $item->name }}
                </div>
                <div class="panel-body">
                    @if ($item->file)
                        <img src="{{ $item->file }}" alt="" class="img-responsive">
                    @endif
                    {{ $item->excerpt }}
                    <a href="{{ route('post', $item->slug) }}" class="pull right">Leer más</a>
                </div>
            </div>
        @endforeach
        {{ $posts->render() }}
    </div>
</div>

@endsection