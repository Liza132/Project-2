@extends('layouts.admin')

@section('content')
    <div class="list">Создать автора:</div>
    <form action="{{ route('authors.store') }}" method="post">
        {{ csrf_field() }}
        <div class="input-group">
            <div class="input-group-prepend mt-3">
                <span class="input-group-text">Имя и Фамилия</span>
            </div>
            <input type="text" aria-label="First name" class="form-control  mt-3" name="name" >
            <input type="text" aria-label="Last name" class="form-control mt-3"  name="surname">
        </div>
        <div class="input-group">
            <button type="submit" class="btn btn-success mt-3">Создать</button>
        </div>
    </form>
@endsection
