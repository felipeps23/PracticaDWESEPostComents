@extends('backend.index')

@section('postscript')
<script src="{{ url('assets/backend/js/script.js?r=' . uniqid()) }}"></script>
@endsection

@section('content')

<!--<div class="row">-->
<!--    <div class="col-lg-12">-->
<!--        <div class="card">-->
<!--            <div class="card-body">-->
<!--                <a href="{{ url('backend/moneda/create') }}" class="btn btn-primary">Añadir moneda</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
@if(session()->has('op'))
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success" role="alert">
            Operation: {{ session()->get('op') }}. Id: {{ session()->get('id') }}. Result: {{ session()->get('r') }}
        </div>
    </div>
</div>
@endif

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Texto</th>
            <th scope="col">Autor</th>
            <th scope="col">Fecha</th>
            <th scope="col">Añadir Coment</th>
            <th scope="col">Ver Coments</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($posts as $post)
        <tr>
            <td scope="row">{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->text }}</td>
            <td>{{ $post->author }}</td>
            <td>{{ date('d-m-Y', strtotime($post->date)) }}</td>

            <td><a href="{{ url('backend/coment/create/' . $post->id) }}">Add Coment</a></td>
            <td><a href="{{ url('backend/coment/' . $post->id . '/coment') }}">Show Coments</a></td>
            <td><a href="{{ url('backend/post/' . $post->id) }}">Show</a></td>
            <td><a href="{{ url('backend/post/' . $post->id . '/edit') }}">Edit</a></td>
            <td><a href="#" data-id="{{ $post->id }}" class="enlaceBorrar" >Delete</a></td>
        </tr>
    @endforeach
    </tbody>
    <form id="formDelete" action="{{ url('backend/post') }}" method="post">
        @method('delete')
        @csrf
    </form>
</table>

@endsection