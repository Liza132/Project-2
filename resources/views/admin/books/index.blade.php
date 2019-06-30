@extends('layouts.admin')

@section('content')
    <div class="list">Книга лист:</div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Обложка</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <th scope="row">{{ $book->id }}</th>
                <td>{{ $book->name }} {{ $book->surname }}</td>
                <td><img class="photo" src="{{ $book->getFirstMediaUrl('images', 'thumb') }}"></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
