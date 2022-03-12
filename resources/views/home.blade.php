@extends('layouts.app')

@section('content')

<div id="mySidenav" class="sidenav">
  <a href="{{route('product.index')}}" id="product">Products</a>
  <a href="{{route('product.create')}}" id="create_product">Add product</a>
  <a href="{{route('product_category.index')}}" id="product_category">Product Category</a>
 <a href="{{route('product_category.create')}}" id="create_product_category">Add Product Category</a>
</div>

<div class="container">

    <div class="container">

                <p><div class="text-center"><img src="https://bit.lt/wp-content/themes/bit/assets/img/_bit-intro.jpg" class="rounded" style="width:400px; height:auto"></div>
            <p>
                <div class="text-center" style="font-size:75px; color:blue">BIT Student project "Products"</div>
                <p>
                <div class="text-center" style="font-size:50px; color:blue">Made by BIT alumni</div>
            </div>
</div>
@endsection
