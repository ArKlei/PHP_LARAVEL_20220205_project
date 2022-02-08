@extends('../layouts.app')


@section ('content')

<div id="mySidenav" class="sidenav">
  <a href="{{route('home')}}" id="home">Main</a>
  <a href="{{route('product.index')}}" id="product">Products</a>
  <a href="{{route('product.create')}}" id="create_product">Add product</a>
  <a href="{{route('product_category.index')}}" id="product_category">Product Category</a>
 <a href="{{route('product_category.create')}}" id="create_product_category">Add Product Category</a>
</div>

<div class="container">
    <p><h1 style="text-align:center; font-size:50px; color:gold">Present products in all categories</h1><p>

@if (session()->has('error_message'))
        <div class="alert alert-danger">
            {{session()->get('error_message')}}
        </div>   
@endif

@if (session()->has('success_message'))
        <div class="alert alert-success">
            {{session()->get('success_message')}}
        </div>   
@endif

@if (count($products) == 0)
    <p>There is no products in the database yet</p>
@endif

{{-- create forma - mums reikia nuorodos ar mygtuko --}}
<a class="btn btn-primary" href="{{route('product.create')}}">Include new product's data into database</a>
<p>


<table class="table table-striped">
<tr>
    <th>Id</th>
    <th>Title</th>
    <th>Description</th>
    <th>Price, eur</th>
    <th>Category</th>
    <th>Image address (url)</th>
    <th>Actions</th>
</tr>

@foreach ($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->title}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->productProductCategory->title}}</td>
        <td>{{$product->image_url}}</td>
        <td>
            <a class="btn btn-primary" style="width:100px" href="{{route('product.edit', [$product])}}">Edit</a><p>
            <p><a class="btn btn-secondary" style="width:100px" href="{{route('product.show', [$product])}}">Show</a>
            <p>
            <form method="post" action='{{route('product.destroy', [$product])}}'>
                @csrf
                <button class="btn btn-danger" style="width:100px" type="submit">Delete</button>
            </form>
        </td>
    </tr>
@endforeach

</table>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
