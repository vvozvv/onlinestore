@extends('layouts.master')

@section('title', 'Категория');


@section('content')
    <div class="starter-template">
        <h1> {{ $category->name }} {{ $category->products->count() }}</h1>
        <p>{{ $category->description }} </p>

        @foreach($category->products as $prod)
            @include('layouts.card', ['category' => $category])
        @endforeach
    </div>
@endsection


