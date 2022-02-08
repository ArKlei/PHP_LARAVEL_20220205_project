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
        <p><h1 style="text-align:center; font-size:50px; color:gold">Add product</h1><p>

        <form method='POST' action='{{route('product.store')}}'>
            <p>
            <input class="form-control" type='text' name="product_title" placeholder="Product Title"/>
            <p>
            <input  class="form-control" type='text' name="product_description" placeholder=" Product Desciption"/>
            <p>
            <input  class="form-control" type='text' name="product_price" placeholder=" Product Price"/>
<p>
            <select class="form-control" name="category_id" value=''>
                    @foreach ($product_categories as $value)
                      <option value="{{$value->id}}">{{$value->productProductCategory->title}}: {{$value->}}</option>
                    @endforeach   
                     
        </select>
            <p>
            <input  class="form-control" type='text' name="product_image_url" placeholder="Image address (url)"/>
            @csrf
            <p>
            <button class="btn btn-primary" style="width:100px" type='submit'>Add</button>
        
            <a class="btn btn-secondary" style="width:100px" href="{{route('product.index')}}">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           

@endsection