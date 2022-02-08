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
    <p><h1 style="text-align:center; font-size:50px; color:gold">Edit data of </h1><h1 style="text-align:center; font-size:50px; color:black">{{$product->title}}</h1><p>

    <form method='POST' action='{{route('product.update', [$product])}}' >
        <p>
        Title: <input class="form-control" type='text' name="product_title" value='{{$product->title}}'/>
        <p>
        Description: <input class="form-control" type='text' name="product_description" value='{{$product->description}}'/>
        <p>
        Price: <input class="form-control" type='text' name="product_price" value='{{$product->price}}'/>
        <p>
        Category title: 
         <select class="form-control" name="category_id" value=''>
                  @foreach ($product_categories as $value)
                      @if ($value->id == $product->category_id)
                        <option value="{{$value->id}}" selected>{{$value->title}}</option>
                      @else
                        <option value="{{$value->id}}">{{$value->title}}</option>
                      @endif
                  @endforeach   
                     
        </select>
        
        <p>          
        Image address (url): 
        <input class="form-control" type='text' name="product_image_url" value='{{$product->image_url}}'/>
        @csrf
        <p>
        <button class="btn btn-primary" style="width:100px" type='submit'>Update</button>
        <a class="btn btn-secondary" style="width:100px"  href="{{route('product.index')}}">Back</a>
    </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @endsection


