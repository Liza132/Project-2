@extends('layouts.front')

@section('content')
    <div class="content">
        <hr class="line-about">
        <h2 class="name-about">События</h2>
        <div class="event-content">
            <div class="blok-event">
                <div class="blok-img-event">
                    <img class="img-event" src="img/event1.jpg" alt="event">
                </div>
                <div class="box-text-event">
                    <p class="date-event">Пт, 12 мая &nbsp | &nbsp Книжный магазин «Соседство»</p>
                    <p class="name-event">Подписание книги</p>
                    <p class="share-event">Подилится</p>
                    <div class="social-network-event">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>
            <div class="blok-event">
                <div class="left-event">
                    <div class="blok-img-event">
                        <img class="img-event" src="img/event2.jpg" alt="event">
                    </div>
                    <div class="box-text-event">
                        <p class="date-event">Сб, 1 июля &nbsp | &nbsp Библиотека им.Локова 1 корп.</p>
                        <p class="name-event">Читать и обсуждать | Бесконечность истек</p>
                        <p class="share-event">Подилится</p>
                        <div class="social-network-event">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blok-event">
                <div class="blok-img-event">
                    <img class="img-event" src="img/event3.jpg" alt="event">
                </div>
                <div class="box-text-event">
                    <p class="date-event">Пт, 4 августа &nbsp | &nbsp Башенный корпус Библиотеки им.Локова</p>
                    <p class="name-event">Чтение и Подписание | Жизнь в аренду</p>
                    <p class="share-event">Подилится</p>
                    <div class="social-network-event">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clear"></div>
@endsection
