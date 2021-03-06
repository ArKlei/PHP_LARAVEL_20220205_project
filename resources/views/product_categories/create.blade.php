@extends('../layouts.app')


@section ('content')
<div id="mySidenav" class="sidenav">
  <a href="{{route('home')}}" id="home">Main</a>
  <a href="{{route('product.index')}}" id="product">Products</a>
  <a href="{{route('product.create')}}" id="create_product">Add product</a>
  <a href="{{route('product_category.index')}}" id="product_category">Product Categories</a>
 <a href="{{route('product_category.create')}}" id="create_product_category">Add Product Category</a>
</div>

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card">

            <div class="container-fluid">

                <div class="card-header" style="margin-top:20px; background-color:blue">
                    
                    <p><h4 style="text-align:center; color:yellow">Add product category</h4><p>

                    </div>

                <div class="card-body">

            <div class="row mb-3">

                <form method='POST' enctype="multipart/form-data" action='{{route('product.store')}}'>
                    
                    <div class="row mb-3">
                        
                        <label for="text" class="col-md-4 col-form-label text-md-end">Product category title</label>
                                          
                        <div class="col-md-6"> 
                            
                            <input class="form-control" type='text' name="title" />
                            
                        </div>
            
                    </div>
          
                    <div class="row mb-3">
                        
                        <label for="text" class="col-md-4 col-form-label text-md-end">Product category description</label>
                                          
                        <div class="col-md-6"> 

                            <input  class="form-control" type='text' name="description" />
                            
                                
                                @csrf
                                <p><p>
                                <button class="btn" style="width:100px; color:yellow; background-color:blue" type='submit'>Add</button>
                            
                                <a class="btn" style="width:100px; color:blue; background-color:yellow" href="{{route('product.index')}}">Back</a>
                </form>
            </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
           

@endsection