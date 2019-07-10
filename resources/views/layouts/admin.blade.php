{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--    <link rel="stylesheet" href="/css/admin.css">--}}
{{--    <link rel="stylesheet" href="/css/style.css">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div class="name-library">--}}
{{--        <div class="logo">--}}
{{--            <img src="img/logo.png" alt="logo">--}}
{{--        </div>--}}
{{--        <h1>Библиотека имени Александра Васильевича Локава</h1>--}}
{{--    </div>--}}
{{--    <div class="box-name-admin">--}}
{{--    <hr class="line-about">--}}
{{--    <h2 class="name-about">Admin</h2>--}}
{{--    </div>--}}
{{--<div class="container-admin-menu">--}}
{{--    <ul>--}}
{{--        <li class="li-menu-admin"><a href="{{ route('admin.home') }}">Home</a></li>--}}
{{--        <li class="li-menu-admin"><a href="{{ route('authors.index') }}">Authors list</a></li>--}}
{{--        <li class="li-menu-admin"><a href="{{ route('authors.create') }}">Create author</a></li>--}}
{{--        <li class="li-menu-admin"><a href="{{ route('genres.index') }}">Genres list</a></li>--}}
{{--        <li class="li-menu-admin"><a href="{{ route('genres.create') }}">Create genre</a></li>--}}
{{--        <li class="li-menu-admin"><a href="{{ route('books.index') }}">Books list</a></li>--}}
{{--        <li class="li-menu-admin"><a href="{{ route('books.create') }}">Create book</a></li>--}}
{{--    </ul>--}}
{{--</div>--}}

{{--@yield('content')--}}

{{--<div class="">--}}
{{--    Footer--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}


    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Dashboard Template · Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
<nav class="navbar navbar-dark  bg-dark flex-md-nowrap p-0 shadow mb-3">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Библиотека им.Локава</a>
    <form action="/logout" method="post">
        {{ csrf_field() }}
        <button class="btn">Logout</button>
    </form>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.home') }}">Главная</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('authors.index') }}">Автор лист</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('authors.create') }}">Создать автора</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('genres.index') }}">Жанр лист</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('genres.create') }}">Создать жанр</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('books.index') }}">Книга лист</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('books.create') }}">Создать книгу</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('reservations.index') }}">Reservations</a></li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

