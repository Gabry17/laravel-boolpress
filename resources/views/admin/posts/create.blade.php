@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crea un Post</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form action="{{ route('admin.posts.store') }}" method="POST">
            @method('POST')
            @csrf
    
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea type="text" class="form-control" name="description" id="description"> {{ old('description') }} </textarea>
            </div>
            <div class="form-group">
                <label for="categories">Categoria:</label>
                <select class="form-control" name="categories" id="categories">
                    <option value="">Nessuna</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>

@endsection