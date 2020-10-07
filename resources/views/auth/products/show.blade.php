@extends('auth.layouts.master')
@section('title', 'Добавить товар')
@section('content')
    <div class="col-md-12">
        <h1>Добавить товар</h1>
        <div class="container">
            <table class="table">
                <tr>
                    <th>Поле</th>
                    <th>Значение</th>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>{{ $product->id }}</td>
                </tr>
                <tr>
                    <td>Название</td>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <td>Код</td>
                    <td>{{ $product->code }}</td>
                </tr>
                <tr>
                    <td>Описание</td>
                    <td>{{ $product->description }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
