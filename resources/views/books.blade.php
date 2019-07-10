@extends('layouts.front')

@section('content')
    <div class="content">
        <div class="box-books">
            <hr class="line-about">
            <h2 class="name-about">Книги</h2>
            <div class="panel-group" id="accordion">
                @foreach($genres as $genre)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion"
                                   href="#collapse-{{ $genre->id }}">{{ $genre->name }}</a>
                            </h4>
                        </div>
                        <div id="collapse-{{ $genre->id }}" class="panel-collapse collapse in">
                            <div class="panel-body">
                                @if($genre->children)
                                    <ul>
                                        @foreach($genre->children as $subGenre)
                                            <li class="panel-ganre"><a
                                                    href="{{ route('front.books', ['genre' => $subGenre->id]) }}">{{ $subGenre->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <form action="{{ route('front.books') }}" method="get">
                <div class="container-customer">
                    <select name="author" id="">
                        <option value=""></option>
                        @foreach($authors as $authorId => $authorName) {
                        <option value="{{ $authorId }}">{{ $authorName }}</option>
                        @endforeach
                    </select>
                    <input class="chek-in" type="text" size="40" name="name" placeholder="Заголовок издания">
                    <input class="chek-in" type="text" size="40" name="year" placeholder="Год издания">
                    <button>Поиск</button>
                </div>

            </form>
            <div class="blok-books-three">
                @foreach($books as $book)
                    <div class="one-book-books">
                        <a href="{{ route('front.book', ['id' => $book->id]) }}">
                        <img class="img-book" src="{{ $book->getFirstMediaUrl('images', 'thumb') }}" alt="book">
                        </a>
                        <h3 class="name-book"><a
                                href="{{ route('front.book', ['id' => $book->id]) }}">{{ $book->name }}</a>
                        </h3>
                        <hr class="line-book-name">
                        <div class="button-book-week">
                            <a href="{{ route('front.booking', ['id' => $book->id]) }}">Забронировать</a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $books->links() }}

        </div>
    </div>
    <div class="clear"></div>
@endsection
