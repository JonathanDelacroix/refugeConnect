@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $animal->name }}</h1>
        <div class="card-animal">
            <img src="{{ asset('images/' .$animal->photo) }}" alt="{{ $animal->name }}" class="img-animal">
            <div class="content-animal">
                <p>Espèce : {{ $animal->species }}</p>
                <p>Âge : {{ $animal->age }} ans</p>
                <p>{{ $animal->description }}</p>
        </div>
    </div>
@endsection