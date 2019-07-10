@extends('layouts.admin')

@section('content')
    <div class="list">Создать жанр:</div>
    <form action="{{ route('genres.store') }}" method="post">
        {{ csrf_field() }}
        <div class="input-group">
            <div class="input-group-prepend mt-3">
                <span class="input-group-text">Жанр</span>
            </div>
            <input type="text" id="name" aria-label="First name" class="form-control col-md-4  mt-3" name="name">


            <div class="input-group">
                <div class="input-group-prepend mt-3">
                    <label class="input-group-text" for="inputGroupSelect01">Под жанр</label>
                </div>
                <select class="custom-select col-md-4 mt-3" name="parent_id" id="inputGroupSelect01">
                    @foreach($genres as $id => $name)
                    <option selected></option>
                    <option value="{{ $id }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="input-group">
            <button type="submit" class="btn btn-success mt-3">Создать</button>
        </div>
    </form>
@endsection
