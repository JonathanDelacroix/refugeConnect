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
            @include('partials.buttons')
        </div>
    </div>
</div>