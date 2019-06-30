@extends('layouts.admin')

@section('content')
    <div class="list">Жанр лист:</div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Жанр</th>
            <th scope="col">Под жанр</th>
        </tr>
        </thead>
        <tbody>
        @foreach($genres as $genre)
            <tr>
                <td scope="row">{{ $genre->id }}</td>
                <td>{{ $genre->name }}</td>
                <td>
                @if($genre->children)
                    <ul>
                    @foreach($genre->children as $subGenre)
                        <li>- {{ $subGenre->name }}</li>
                    @endforeach
                    </ul>
                @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
