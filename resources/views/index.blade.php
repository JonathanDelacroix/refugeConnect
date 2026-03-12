@extends('layouts.app')

@section('content')
    <h1>Nos animaux</h1>
    <div class="cards-container">
        @foreach ($animals as $animal)
            <div class="card">
                <a href="{{ route('animal.show', $animal->id) }}">
                    <img src="{{ asset('images/' . $animal->photo) }}" alt="{{ $animal->name }}">
                </a>
                <div class="card-content">
                    <h2 class="title-card">{{ $animal->name }}</h2>
                    <p>Espèce : {{ $animal->species }}</p>
                    <p>Âge : {{ $animal->age }} ans</p>
                    <p>{{ $animal->description }}</p>
                    <div class="card-buttons">
                        <a href="{{ route('animal.update', $animal->id) }}" class="edit-btn">Modifier</a>
                        <a href="{{ route('animal.delete', $animal->id) }}" class="delete-btn">Supprimer</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection