@extends('layouts.front')

@section('content')

    <div class="content">
        <div class="book-box">
            <div class="way-book">
                <b>Главная / Books / </b>
                <b class="name-book-navigation">{{ $book->name }}</b>
            </div>
            <div class="forward-backwards-book">
                <p><a href="{{ route('front.books') }}">Назад к поиску</a></p>
            </div>
            <div class="blok-book-img">
                <img class="img-book" src="{{ $book->getFirstMediaUrl('images', 'thumb') }}" alt="{{ $book->name }}">
            </div>
            <div class="blok-book-text">
                <h1 class="name-book-text">{{ $book->name }}</h1>
                <p class="author-book-text">Автор: {{ $book->author->fullName() }}</p>
                <p class="year-book-text">Год издания: {{ $book->year }}</p>
                <p class="under-genre-book-text">Жанр: {{ $book->genre->name }}</p>
                <a clas="bottom-book-text" href="{{ route('front.booking', ['id' => $book->id]) }}">Забронировать</a>
                <p class="description-book-text">Описание: {{ $book->description }}</p>
            </div>

        </div>
    </div>
    <div class="clear"></div>

@endsection
