@extends('auth.layouts.master')
@section('title', 'Товары')
@section('content')
    <div class="col-md-12">
        <h1>Товары</h1>

        <table class="table">
            <tbody>
            <tr>
                <th>#</th>
                <th>Код</th>
                <th>Название</th>
                <th>Категория</th>
                <th>Цена</th>
                <th>Действия</th>
            </tr>

            @foreach($products as $prod)
                <tr>
                    <td>{{$prod->id}}</td>
                    <td>{{$prod->code}}</td>
                    <td>{{$prod->name}}</td>
                    <td>{{$prod->getCategory()}}</td>
                    <td>{{$prod->price}}</td>
                    <td>
                        <div class="btn-group">
                            <form action="" method="POST">
                                @csrf
                                <a href="{{ route('products.show', $prod) }}" class="btn btn-success">Смотреть</a>
                                <a href="{{ route('products.edit', $prod) }}" class="btn btn-warning">Редактировать</a>
                                <button type="submit" class="btn btn-danger" value="Удалить">Удалить</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('products.create') }}" class="btn btn-success">Добавить товар</a>
    </div>
@endsection
