@extends('layouts.front')

@section('content')
    <div class="content">
        <div class="main-box">
            <div class="box1">
                <div class="container-box1">
                    <h2 class="name-box1">Библиотека им. А.В. Локава</h2>
                    <p class="text-box1">Библиотека международного уровня, поможет вам найти книгу именно для вас.</p>
                </div>
            </div>
            <div class="box2">
                <div class="container-box2">
                    <img src="img/lokav.webp" alt="lokov">
                    <p class="name-lokov-box2">Александра Васильевича Локава</p>
                    <p class="painting-lokov">Lokov</p>
                </div>
            </div>
        </div>
        <div class="conteiner-week">

        </div>
        <div class="conteiner-regulations">
            <h2 class="name-regulations">Правила брони книги</h2>
            <div class="regulations-box">
                <div class="regulations-box1">
                    <div class="regulations-text-line-1">
                        <p class="regulations-text1">1. Найдите в поиске понравившуюся книгу или же в категориях.</p>
                        <hr class="regulations-line1">
                    </div>
                </div>
                <div class="regulations-box2">
                    <div class="regulations-text-line-2">
                        <p class="regulations-text2">2. Нажмите на книгу и после нажмите на кнопку забронировать.</p>
                        <hr class="regulations-line2">
                    </div>
                </div>
                <div class="regulations-box3">
                    <div class="regulations-text-line-3">
                        <p class="regulations-text3">3. В форме брони заполните все поля и после вы получите номер
                            брони.
                             </p>
                        <hr class="regulations-line3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
@endsection
