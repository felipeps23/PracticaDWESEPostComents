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
            <th scope="col">IdPost</th>
            <th scope="col">Texto</th>
            <th scope="col">Fecha</th>
            <th scope="col">Email</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($coments as $coment)
        <tr>
            <td scope="row">{{ $coment->id }}</td>
            <td>{{ $coment->idpost }}</td>
            <td>{{ $coment->text }}</td>
            <td>{{ date('d-m-Y', strtotime($coment->date)) }}</td>
            <td>{{ $coment->email }}</td>

            <td><a href="{{ url('backend/coment/' . $coment->id) }}">Show</a></td>
            <td><a href="{{ url('backend/coment/' . $coment->id . '/edit') }}">Edit</a></td>
            <td><a href="#" data-id="{{ $coment->id }}" class="enlaceBorrar" >Delete</a></td>
        </tr>
    @endforeach
    </tbody>
    <form id="formDelete" action="{{ url('backend/coment') }}" method="post">
        @method('delete')
        @csrf
    </form>
</table>

@endsection