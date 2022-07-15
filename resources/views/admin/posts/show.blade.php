@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dettagli</h2>
        @if ($post->cover)
            <img src="{{ asset('storage/' . $post->cover) }}" alt="{{ $post->title }}">
        @endif
        <h3>Titolo: {{ $post->title }}</h3>
        <p>Descrizione: {{ $post->description }}</p>
        <p>Categoria: {{ $post->category ? $category->name : 'Nessuna categoria' }}</p>
        <p>Tag: @forelse ($tag as $item)
            {{$item->name}} {{$loop->last ? '' : ','}}
        @empty
            'nessun tag'
        @endforelse</p>
        <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger">Elimina</button>
        </form>
    </div>
@endsection