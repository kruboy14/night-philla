@extends('layouts.app_test')

@section('main-info')
    <div id="ex1" class="modal">
        <p>Вхід / Реєстрація</p>
        <form class="modal-form" action="{{ route('custom.auth') }}" method="post">
            @csrf
            @if(!Auth::guard()->check())
                <input class="modal-form-username" placeholder="Юзернейм" type="text" name="username" required>
                <input class="modal-form-password" placeholder="Пароль" type="password" name="password" required>
                <button class="modal-form-login" type="submit" name="authorization" value="1">Увійти</button>
                <button class="modal-form-reg" type="submit" name="registration" value="1">Зареєструватися</button>
            @else
                <button class="modal-form-reg" type="submit" name="logout" value="1">Вийти</button>
            @endif
        </form>
    </div>
    <div class="wrapper">
        @include('parts.header')
            <main class="main">
                <section class="chat">
                    <div class="container">
                        <div class="chat__inner">
                            <div class="chat-title">REVIEWS</div>
                            <div>
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                            <div class="chat-login" ><a href="#ex1" rel="modal:open">ВХІД/РЕЄСТРАЦІЯ</a></div>

                            <div class="chat-content">
                                @foreach($reviews as $review)
                                    <div class="chat-message ">
                                        <div class="chat-author">{{ $review->name }}</div>
                                        <div class="chat-text">{{ $review->body }}</div>
                                    </div>
                                @endforeach
                            </div>
                            @if(Auth::guard()->check())
                                <form class="chat-form" action="{{ route('review.store') }}" method="post">
                                    @csrf
                                    <input placeholder="Ваш відгук..." class="chat-input" type="text" name="review">
                                    <button  class="chat-btn" type="submit"></button>
                                </form>
                            @endif
                        </div>
                    </div>
                </section>
            </main>
    </div>
@endsection
