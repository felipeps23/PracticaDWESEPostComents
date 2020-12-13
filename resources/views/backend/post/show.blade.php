@extends('backend.index')

@section('postscript')
<script src="{{ url('assets/backend/js/script.js?r=' . uniqid()) }}"></script>
@endsection

@section('content')
<form id="formDelete" action="{{ url('backend/post/' . $post->id) }}" method="post">
    @method('delete')
    @csrf
</form>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Volver</a>
                <a href="{{ url('backend/post') }}" class="btn btn-primary">Ver Posts</a>
                <a href="{{ url('backend/post/create') }}" class="btn btn-primary">Añadir post</a>
                <a href="#" data-id="{{ $post->id }}" data-name="{{ $post->name }}" class="btn btn-danger" id="enlaceBorrar">Borrar Post</a>
            </div>
        </div>
    </div>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Field</th>
            <th scope="col">Value</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Título</td>
            <td>{{$post->title}}</td>
        </tr>
        <tr>
            <td>Texto</td>
            <td>{{$post->text}}</td>
        </tr>
        <tr>
            <td>Autor</td>
            <td>{{$post->author}}</td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td>{{$post->date}}</td>
        </tr>
    </tbody>
</table>
@endsection