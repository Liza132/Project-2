@extends('layouts.admin')

@section('content')
    Add book
    <form action="{{ route('books.store') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="input-group-prepend">
            <span class="input-group-text  mt-3">Название</span>
            <input type="text" id="name" aria-label="First name" class="form-control col-md-4  mt-3" name="name">
        </div>


        <div class="form-group  mt-3">
            <label for="photo">Photo
                <input type="file" id="photo" name="photo">
            </label>
        </div>

        <div class="input-group-prepend">
            <span class="input-group-text  mt-3">Год издания</span>
            <input type="number"  id="year" aria-label="First name" class="form-control col-md-4  mt-3" name="year">
        </div>

        <div class="mt-3">
            <label for="validationTextarea">Описание книги</label>
            <textarea class="form-control" id="validationTextarea" name="description" required></textarea>
        </div>

        <div class="input-group-prepend mt-3">
            <label class="input-group-text mt-3" for="inputGroupSelect01">Автор</label>
            <select name="author_id" class="custom-select col-md-4 mt-3" id="inputGroupSelect01">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->surname }}</option>
                @endforeach
            </select>
        </div>

        <div class="input-group-prepend mt-3">
            <label class="input-group-text mt-3" for="inputGroupSelect01">Жанр</label>
            <select name="genre_id" class="custom-select col-md-4 mt-3" id="inputGroupSelect01">
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>


        <div class="input-group">
            <button type="submit" class="btn btn-success mt-3">Создать</button>
        </div>
    </form>
@endsection
