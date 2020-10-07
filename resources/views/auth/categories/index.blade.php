@extends('auth.layouts.master')
@section('title', 'Категории')
@section('content')
    <div class="col-md-12">
        <h1>Категории</h1>

        <table class="table">
            <tbody>
            <tr>
                <th>#</th>
                <th>Код</th>
                <th>Название</th>
                <th>Действия</th>
            </tr>

            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{ $category->code }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="btn-group">
                            <form action="{{ route('categories.destroy', $category) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('categories.show', $category) }}" class="btn btn-success">Смотреть</a>
                                <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Редактировать</a>
                                <button type="submit" class="btn btn-danger" value="Удалить">Удалить</button>
                            </form>
                        </div>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('categories.create') }}" class="btn btn-success">Добавить категорию</a>
    </div>
@endsection
