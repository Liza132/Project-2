@extends('layouts.admin')

@section('content')
    Create author
    <form action="{{ route('authors.store') }}" method="post">
        {{ csrf_field() }}
        <label for="name">
            <input type="text" id="name" name="name">
        </label>
        <label for="genre">Genre</label>
        <select name="genre_id" id="genre">
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>

        <label for="surname">
            <input type="text" id="surname" name="surname">
        </label>

        <button>Create author</button>
    </form>
@endsection
