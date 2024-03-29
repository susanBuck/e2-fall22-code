@extends('templates/master')

@section('title')
    All Products
@endsection

@section('content')
    <h2 test='all-products-header'>All Products</h2>

    <a href='/products/new'>Add a new product</a>

    <div id='product-index'>
        @foreach ($products as $product)
            <a class='product-link' href='/product?sku={{ $product['sku'] }}'>
                <div>
                    <div class='product-name'>{{ $product['name'] }}</div>
                    <img class='product-thumb' src="/images/products/{{ $product['sku'] }}.jpg">
                </div>
            </a>
        @endforeach
    </div>
@endsection
