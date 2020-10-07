@extends('layouts.master')
@section('title', 'Все категории')
@section('content')
    <div class="starter-template">
        @foreach($categories as $cat)
            <div class="panel">
                <a href="{{ route('category', $cat->code) }}">
                    <img src="http://internet-shop.tmweb.ru/storage/categories/mobile.jpg">
                    <h2>{{ $cat->name }}</h2>
                </a>
                <p>{{ $cat->description }}</p>
            </div>
        @endforeach
    </div>
@endsection


