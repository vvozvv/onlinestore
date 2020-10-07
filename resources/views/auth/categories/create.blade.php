@extends('auth.layouts.master')

@isset($category)
    @section('title', 'Редактировать категорию'. $category->name)
@else
    @section('title', 'Создать категорию')
@endisset




@section('content')
    <div class="col-md-12">
        @isset($category)
            <h1>Редактировать категорию – <b>{{ $category->name }}</b> </h1>
        @else
            <h1>Создание категории</h1>
        @endisset

        <div class="container">
            <form
                @isset($category)
                    action="{{ route('categories.update', $category) }}"
                @else
                    action="{{ route('categories.store') }}"
                @endisset
                method="POST" enctype="multipart/form-data">

                @isset($category)
                    @method('PUT')
                @endisset
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="code">Код</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Код категории" value="@isset($category){{ $category->code }}@endisset">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Название категории" value="@isset($category){{ $category->name }}@endisset">
                    </div>
                </div>
                <div class="form-group">
                    <label for="desc">Address 2</label>
                    <textarea name="desc" id="desc" cols="20" rows="10" class="form-control" placeholder="Описание">@isset($category){{ $category->description }}@endisset</textarea>
                </div>
                <div class="form-group">
                    <label class="btn btn-default btn-file">
                        Загрузить <input type="file" name="image" id="image">
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>

    </div>
@endsection
