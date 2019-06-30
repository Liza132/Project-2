@extends('layouts.admin')

@section('content')
    <div class="list">Автор лист:</div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <tr>
                <th scope="row">{{ $author->id }}</th>
                <td>{{ $author->name }}</td>
                <td>{{ $author->surname }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
