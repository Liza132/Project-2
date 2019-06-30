<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mr+De+Haviland&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noticia+Text&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<header id="up">
    <div class="name-library">
        <div class="logo">
            <img src="img/logo.png" alt="logo">
        </div>
        <h1>Библиотека имени Александра Васильевича Локава</h1>
    </div>
    <menu>
        <ul>
            <li><a href="{{ route('front.index') }}" class="link-now">Главная</a></li>
            <li><a href="{{ route('front.about') }}">О нас</a></li>
            <li><a href="{{ route('front.books') }}">Книги</a></li>
            <li><a href="{{ route('front.events') }}">События</a></li>
            <li><a href="{{ route('front.bookings') }}">Бронирование</a></li>
            <li><a href="{{ route('front.contacts') }}">Контакты</a></li>
        </ul>
    </menu>
</header>

@yield('content')

<footer>
    <div class="box1-footer">
        <p class="text-footer">Для СМИ, пожалуйста, свяжитесь с агентом Слободенюк Елизоветой</p>
        <p class="contact-footer"> 123-456-7890 | info@my-.com <br> Ул.Целиноградская 40, Харьков</p>
    </div>
    <div class="box2-footer">
        <p class="text-footer">Подпишитесь на новости и обновления от Библиотеке им.Локова</p>
        <p class="contact-footer"> 123-456-7890 | info@my-.com Ул.Целиноградская 40, Харьков</p>
    </div>
    <div class="box3-footer">
        <p class="text-footer">Для более подробной информации о библотеке вы найдете ниже контакты.</p>
        <p class="contact-footer"> Администация | 0994449994 <br> Администация | 0936667775</p>
    </div>

    <hr class="line-footer">
    <p class="deta-create">© 2010 Александр Локов. С гордостью создан с компанией Senar</p>
</footer>
<div class="arrow-up">
    <a href="#up"> <i class="fas fa-chevron-up"></i></a>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/script.js"></script>

</body>
</html>
