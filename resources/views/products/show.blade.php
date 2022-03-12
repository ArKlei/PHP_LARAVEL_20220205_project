@extends('../layouts.app')

@section ('content')

<div id="mySidenav" class="sidenav">
  <a href="{{route('home')}}" id="home">Main</a>
  <a href="{{route('product.index')}}" id="product">Products</a>
  <a href="{{route('product.create')}}" id="create_product">Add product</a>
  <a href="{{route('product_category.index')}}" id="product_category">Product Category</a>
 <a href="{{route('product_category.create')}}" id="create_product_category">Add Product Category</a>
</div>

<div class="row justify-content-center">

<div class="col-md-8">    

  <div class="card">

      <div class="container-fluid">

        <div class="card-header" style="margin-top:21px; background-color:blue">
        
            <p><h4 style="text-align:center; color:yellow">Data of {{$product->title}}</h4><p>

        </div>

        <div class="card-body">

            <div class="row mb-3">
        
                <p>Id – {{$product->id}}</p>
                <p>Title – {{$product->title}}</p>
                <p>Description – {{$product->description}}</p>
                <p>Category Title – {{$product->productProductCategory->title}}</p>
                <p>Image :<p><img src="{{$product->image_url}}" style="width:150px; height:auto" alt="{{$product->name}}">{{$product->image_url}}</p>
                
                <p>
                <form method="post" action='{{route('product.destroy', [$product])}}'>
                    @csrf
                    <button class="btn" style="width:100px; color:blue; background-color:yellow" type="submit">Delete</button>
                
                <a class="btn" style="width:100px; color:yellow; background-color:blue" href="{{route('product.index')}}">Back</a></form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @endsection


