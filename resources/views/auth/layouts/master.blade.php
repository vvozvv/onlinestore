<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') : Админ панель</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
        .collapse:not(.show) {
            display: flex;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('index') }}/">Интернет Магазин</a>
        </div>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('categories.index') }}">Категории</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('products.index') }}">Товары <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Заказаы <span class="sr-only"></span></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                @guest
                    <li><a href="/login">Войти</a></li>
                    <li><a href="/registration">Зарегистрироваться</a></li>
                @endguest
                @auth
                    <li><a href="{{ route('home') }}" class="nav-link">Панель администратора</a></li>
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
    <div class="row justify-content-center">
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
