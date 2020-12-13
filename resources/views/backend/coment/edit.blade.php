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
                <a href="{{ url('backend/coment') }}" class="btn btn-primary">Ver Posts</a>
                <a href="#" data-id="{{ $coment->id }}" data-name="{{ $coment->name }}" class="btn btn-danger" id="enlaceBorrar">Borrar Post</a>
            </div>
        </div>
    </div>
</div>
<form role="form" action="{{ url('backend/coment/' . $coment->id) }}" method="post" id="editPostForm" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="text">Text</label>
        <input type="text" maxlength="100" required class="form-control" id="text" placeholder="Texto del coment" name="text" value="{{ old('text', $coment->text) }}">
    </div>
    <div class="form-group">
        <label for="date">Fecha de coment</label>
        <input type="date" required class="form-control" id="date" name="date" value="{{ old('date', $coment->date) }}">
    </div>
    <div class="form-group">
        <label for="author">Email</label>
        <input type="email" maxlength="30" minlength="2" required class="form-control" id="email" placeholder="Email del coment" name="email" value="{{ old('email', $coment->email) }}">
    </div>
    </div>
    
    <!-- /.card-body -->
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </div>
</form>
@endsection