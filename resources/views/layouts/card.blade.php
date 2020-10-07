<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg" alt="iPhone X 256GB">
        <div class="caption">

            <h3>{{ $prod->name }}</h3>
            <p>{{ $prod->price }}</p>
{{--            {{ $prod->category->name }}--}}
            <form action="{{ route('basket-add', $prod) }}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="{{ route('product', [$prod->category->code, $prod->code]) }}" class="btn btn-default" role="button">Подробнее</a>
                @csrf
            </form>

        </div>
    </div>
</div>
