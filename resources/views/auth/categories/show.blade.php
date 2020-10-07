@extends('auth.layouts.master')
@section('title', 'Категория' . $category->name)
@section('content')
    <div class="col-md-12">
        <h1>Редактирование категории "{{ $category->name }}"</h1>
        <div class="container">
            <table class="table">
                <tr>
                    <th>Поле</th>
                    <th>Значение</th>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>{{ $category->id }}</td>
                </tr>
                <tr>
                    <td>Название</td>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr>
                    <td>Код</td>
                    <td>{{ $category->code }}</td>
                </tr>
                <tr>
                    <td>Описание</td>
                    <td>{{ $category->description }}</td>
                </tr>
                <tr>
                    <td>Количество товаров</td>
                    <td>{{ $category->products->count() }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
