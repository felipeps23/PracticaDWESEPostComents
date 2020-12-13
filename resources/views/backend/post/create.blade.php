@extends('backend.index')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ url()->previous() }}" class="btn btn-primary">Volver</a>
                <a href="{{ url('backend/post') }}" class="btn btn-primary">Ver Posts</a>
            </div>
        </div>
    </div>
</div>
@if(session()->has('error'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-danger" role="alert">
                <h2>Error ...</h2>
            </div>
        </div>
    </div>
@endif
<div class="card">
    <form role="form" action="{{ url('backend/post') }}" method="post" id="createPostForm">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" maxlength="60" minlength="2" required class="form-control" id="title" placeholder="Introduce el título" name="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="text">Text</label>
                <input type="text" maxlength="100" minlength="2" required class="form-control" id="text" placeholder="Texto" name="text" value="{{ old('text') }}">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" maxlength="30" minlength="2" required class="form-control" id="author" placeholder="Autor" name="author" value="{{ old('author') }}">
            </div>
             <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}">
            </div>
           
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Guardar Post</button>
        </div>
    </form>
</div>
@endsection