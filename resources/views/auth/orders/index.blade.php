@extends('auth.layouts.master')
@section('title', 'Заказы')
@section('content')
    <div class="col-md-12">
        <h1>Заказы</h1>
        <table class="table">
            <tbody>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Телефон</th>
                <th>Когда отправлен</th>
                <th>Сумма</th>
                <th>Действия</th>
            </tr>

            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->phone }}</td>
                    <td>{{ $order->created_at->format('H:i s/m/Y') }}</td>
                    <td>{{ $order->getFullPrice() }}</td>
                    <td>
                        <button type="submit" class="btn btn-success">Смотреть</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
