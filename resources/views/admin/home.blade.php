@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h2>Benvenuto {{ ucfirst($user->name) }}</h2>
    </div>
@endsection