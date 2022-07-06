@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>Modifica il post</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.posts.update', ['post' => $post->id]) }} " method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Titolo</label>
                <input class="form-control" type="text" id="title" name="title" value="{{ old('title') ? old('title') : $post->title }}">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') ? old('description') : $post->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>

@endsection