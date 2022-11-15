@extends('templates/master')

@section('title')
    Product Not Found
@endsection

@section('content')
    <h2 test='product-not-found-header'>Product Not Found</h2>
    <p>Sorry we were not able to find the product you were looking for.</p>

    <a href='/products'>&larr; Return to all products</a>
@endsection
