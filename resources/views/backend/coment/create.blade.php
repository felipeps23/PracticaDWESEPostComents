@extends('backend.index') 

@section('content')


<div class="col-lg-4">
    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Volver</a>
            <a href="{{ url('backend/coment') }}" class="btn btn-secondary">Coments</a>

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


<br>

<div class="col-lg-12">
    <div class="card">

       <form role="form" action="{{ url('backend/coment') }}" method="post" id="createpostForm">
    @csrf
    <div class="card-body">


        <div class="form-group">
            <label for="idpost">Post</label>

            @if(isset($posts))
            <select name="idpost" id="idpost" required class="form-control">
                <option value="" disabled selected>Select posts</option>
                @foreach($posts as $post)

                <option value="{{ $post->id }}">{{ $post->title }}</option>

                @endforeach
            </select>
            @else
                <input type="text" value="{{ $post->title }}" readonly class="form-control">
                <input type="hidden" id="idpost" name="idpost" value="{{ $post->id }}">
            @endif

        </div>

        <div class="form-group">
             <label for="text">Text</label>
             <input type="text" maxlength="45" minlength="1" required class="form-control" id="text" placeholder="texto" name="text" value="{{ old('text') }}">
        </div>
        <div class="form-group">
             <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
                <input type="text" maxlength="80" minlength="2" required class="form-control" id="email" placeholder="email" name="email" value="{{ old('email') }}">
        </div>
    </div>
    <div class="card-footer">
     <button type="submit" class="btn btn-primary">Guardar Coment</button>
    </div>
</form>
    </div>
</div>



@endsection