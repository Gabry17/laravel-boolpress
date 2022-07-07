@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dettagli</h2>
        <h3>Titolo: {{ $post->title }}</h3>
        <p>Descrizione: {{ $post->description }}</p>
        <p>Categoria: {{ $post->category ? $post->category->name : 'Nessuna categoria' }}</p>
        <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger">Elimina</button>
        </form>
    </div>
@endsection