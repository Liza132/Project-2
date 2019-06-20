@extends('layouts.admin')

@section('content')
    <div class="">Authors list:</div>
    <div class="authors">
        @foreach($authors as $author)
            <div class="author">
                <div class="name">{{ $author->name }} {{ $author->surname }}</div>
            </div>
        @endforeach
    </div>
@endsection
