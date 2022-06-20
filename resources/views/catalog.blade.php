@extends('catalog_type')
@section('category_name')
<p>Все {{$products->count()}}</p>
@endsection
@section('items_content')
<div class = "items__content">
  @foreach($products as $product)
    @include('card', compact('product'))
  @endforeach
</div>
@endsection