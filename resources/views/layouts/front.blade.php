<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
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
            <li><a href="{{ route('front.home') }}" class="link-now">Главная</a></li>
            <li><a href="{{ route('front.about') }}">О нас</a></li>
            <li><a href="#">Книги</a></li>
            <li><a href="#">События</a></li>
            <li><a href="#">Бронирование</a></li>
            <li><a href="#">Контакты</a></li>
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
<script>
    $(document).ready(function () {
        $(".arrow-up").on("click", "a", goUp);
        $(".menu").on("click", "a", goUp);
    });

    function goUp(event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();

        //забираем идентификатор бока с атрибута href
        var id = $(this).attr('href'),

            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;

        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 1500);
    }

</script>


</body>
</html>
