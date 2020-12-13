@extends('backend.index')

@section('postscript')
<script src="{{ url('assets/backend/js/script.js?r=' . uniqid()) }}"></script>
@endsection

@section('content')
<form id="formDelete" action="{{ url('backend/coment/' . $coment->id) }}" method="post">
    @method('delete')
    @csrf
</form>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Volver</a>
                <a href="{{ url('backend/coment') }}" class="btn btn-primary">Ver Coments</a>
                <a href="{{ url('backend/coment/create') }}" class="btn btn-primary">Añadir Coment</a>
                <a href="#" data-id="{{ $coment->id }}" data-name="{{ $coment->idpost }}" class="btn btn-danger" id="enlaceBorrar">Borrar Coment</a>
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
            <td>IdPost</td>
            <td>{{$coment->idpost}}</td>
        </tr>
        <tr>
            <td>Texto</td>
            <td>{{$coment->text}}</td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td>{{$coment->date}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$coment->email}}</td>
        </tr>
    </tbody>
</table>
@endsection