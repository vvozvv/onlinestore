@extends('auth.layouts.master')

@isset($product)
    @section('title', 'Редактировать товар'. $product->name)
@else
    @section('title', 'Добавить товар')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($product)
            <h1>Редактировать товар – <b>{{ $product->name }}</b> </h1>
        @else
            <h1>Добавить товар</h1>
        @endisset

        <div class="container">
            <form @isset($product)
                  action="{{ route('products.update', $product) }}"
                  @else
                  action="{{ route('products.store') }}"
                  @endisset
                  method="POST" enctype="multipart/form-data">

                @isset($product)
                    @method('PUT')
                @endisset

                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="code">Код</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Код категории" value="@isset($product){{$product->code}}@endisset">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="name">Название</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Название товара" value="@isset($product){{$product->name}}@endisset">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="name">Категория</label>
                        <select type="text" class="form-control" id="category_id" name="category_id">
                            @foreach($category as $cat)
                                <option value="{{$cat->id}}"
                                        @isset($product)
                                            @if($cat->id == $product->id)
                                                selected
                                            @endif
                                        @endisset
                                >{{$cat->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="desc">Address 2</label>
                    <textarea name="desc" id="desc" cols="20" rows="10" class="form-control" placeholder="Описание"></textarea>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file" name="file">
                    <label class="custom-file-label" for="validatedCustomFile">Выберите файл</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>

                <div class="form-group">
                    <label for="name">Цена</label>
                    <input type="number" class="form-control" name="price" value="@isset($product){{$product->price}}@endisset">
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
