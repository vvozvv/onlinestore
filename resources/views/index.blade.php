@extends('layouts.master')

@section('title', 'Главная')
@section('content')
        <h1>Все товары</h1>

        <div class="row">

            @foreach($products as $prod)
                @include('layouts.card', compact($prod))
            @endforeach

        </div>

@endsection

