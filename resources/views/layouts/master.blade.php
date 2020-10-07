<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: @yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/startaper-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}/">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="{{ route('index') }}">Все товары</a></li>
                <li class="active"><a href="{{ route('categories') }}">Категории</a>
                </li>
                <li ><a href="{{ route('basket') }}">В корзину</a></li>
                <li><a href="{{ route('index') }}">Сбросить проект в начальное состояние</a></li>
                <li><a href="/locale/en">en</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/currency/RUB">₽</a></li>
                        <li><a href="/currency/USD">$</a></li>
                        <li><a href="/currency/EUR">€</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right row-a">

                @guest
                    <li><a href="/login">Войти</a></li>
                    <li><a href="{{ route('register') }}">Зарегистрироваться</a></li>
                @endguest
                @auth
                    <li class="user-front">
                        <a href="{{ route('home') }}">Панель администратора</a>
                        <span>{{  Auth::user()->email }}</span>
                    </li>
                    <form action="{{ route('logout') }}" method="POST">
                         @csrf
                         <button type="submit" class="btn btn-secondary nav-link">Выйти</button>
                    </form>
                @endauth

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
        @endif

        @if(session()->has('warning'))
           <p class="alert alert-warning">{{ session()->get('warning') }}</p>
        @endif

        @yield('content')
    <div>
</div>
</body>
</html>
