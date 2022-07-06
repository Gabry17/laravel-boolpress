@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tutti i Post</h2>

    <div class="row row-cols-3">
        @foreach ($posts as $item)
            <div class="col">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <a href="{{ route('admin.posts.show', ['post' => $item->id]) }}" class="btn btn-primary">Dettagli Post</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection