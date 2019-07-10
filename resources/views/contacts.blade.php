@extends('layouts.front')

@section('content')
    <div class="content">
        <hr class="line-about">
        <h2 class="name-about">Контакты</h2>
        <div class="box-contact-agent">
            <div class="blok-agent">
                <h3>Марк Дин</h3>
                <p>Публицист</p>
                <hr>
                <p>123-456-7890</p>
                <p>info@my-.com</p>
            </div>

            <div class="blok-agent">
                <div class="blok-agent-border">
                    <h3>Донна Кларк</h3>
                    <p>Агент</p>
                    <hr>
                    <p>123-456-7890</p>
                    <p>info@my-.com</p>
                </div>
            </div>
            <div class="forma-contact">
                <h2>Комментарии и предложения</h2>
                @if ($message = Session::get('message'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <form action="{{ route('front.sendMessage') }}" method="post">
                    {{ csrf_field() }}
                    <input class="chek-in" type="text" size="40" name="name" placeholder="Имя...">
                    <input class="chek-in" type="email" size="40" name="email" placeholder="Email...">
                    <p><textarea class="coment" rows="7" cols="55" name="text"
                                 placeholder="Пишите ваше сообщение здесь..."></textarea></p>
                    <p><input class="coment-bottom" type="submit" value="Отправить"></p>
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>
@endsection
