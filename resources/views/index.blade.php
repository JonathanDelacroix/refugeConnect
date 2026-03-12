@extends('layouts.app')

@section('content')
     <h1>{{ $title }}</h1>
    <div class="cards-container">
        @foreach($animals as $animal)
            <x-card :animal="$animal" />
        @endforeach
    </div>
@endsection