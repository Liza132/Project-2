@extends('layouts.admin')

@section('content')
    <div class="list">Reservations:</div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Email</th>
            <th scope="col">Book</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <th scope="row">{{ $reservation->id }}</th>
                <td>{{ $reservation->name }}</td>
                <td>{{ $reservation->email }}</td>
                <td>{{ $reservation->book->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
