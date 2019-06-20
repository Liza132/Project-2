@extends('layouts.admin')

@section('content')
    Create author
    <form action="{{ route('authors.store') }}" method="post">
        {{ csrf_field() }}
        <label for="name">
            <input type="text" id="name" name="name">
        </label>

        <label for="surname">
            <input type="text" id="surname" name="surname">
        </label>

        <button>Create author</button>
    </form>
@endsection
