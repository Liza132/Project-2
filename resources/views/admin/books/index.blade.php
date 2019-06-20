@extends('layouts.admin')

@section('content')
    <div class="">Books list:</div>
    <div class="books">
        @foreach($books as $book)
            <div class="book">
                <div class="name">{{ $book->name }} {{ $book->surname }}</div>
            </div>
        @endforeach
    </div>
@endsection
