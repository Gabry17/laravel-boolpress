@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Dettagli</h2>
        <h3>Titolo: {{ $post->title }}</h3>
        <p>Descrizione: {{ $post->description }}</p>
    </div>
@endsection