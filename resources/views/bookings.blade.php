@extends('layouts.front')

@section('content')
    <div class="content">
        <div class="content-reservation">
            <hr class="line-about">
            @if ($message = Session::get('message'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <h2 class="name-about">Бронирование</h2>
            <form action="{{ route('front.reserveBook') }}" method="post">
                {{ csrf_field() }}
                <p class="name-reservation">Данные книги</p>
                <div class="container-customer">
                    <input type="hidden" name="book_id" value="{{ $book->id }}">
                    <input class="chek-in" type="text" size="40" name="author" placeholder="Автор" value="{{ $book->author->fullName() }}" disabled><br>
                    <input class="chek-in" type="text" size="40" name="book"  value="{{ $book->name }}" disabled placeholder="Заголовок издания"><br>
                </div>
                <p class="name-reservation">Ваши данные</p>
                <input class="chek-in" type="text" size="50" name="name" placeholder="Ваши фамилия, имя, отчество">
                <input class="chek-in" type="email" size="40" name="email" placeholder="Email">
                <p><input class="coment-bottom" type="submit" value="Забронировать"></p>
            </form>
        </div>
    </div>
    <div class="clear"></div>
@endsection
