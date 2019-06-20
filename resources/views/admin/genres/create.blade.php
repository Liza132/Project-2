@extends('layouts.admin')

@section('content')
    Create genre
    <form action="{{ route('genres.store') }}" method="post">
        {{ csrf_field() }}
        <label for="name">
            <input type="text" id="name" name="name">
        </label>

        <button>Create genre</button>
    </form>
@endsection
