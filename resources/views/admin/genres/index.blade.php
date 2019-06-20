@extends('layouts.admin')

@section('content')
    <div class="">Genres list:</div>
    <div class="genres">
        @foreach($genres as $genre)
            <div class="genre">
                <div class="name">{{ $genre->name }}</div>
            </div>
        @endforeach
    </div>
@endsection
