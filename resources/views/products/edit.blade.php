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
              
              <p><h4 style="text-align:center; color:yellow">Edit data of {{$product->title}}</h1><p>

            </div>

            <div class="card-body">

              <div class="row mb-3">
                
                <form method='POST' enctype="multipart/form-data" action='{{route('product.update', [$product])}}' >
                
                  <div class="row mb-3">
                        
                    <label for="text" class="col-md-4 col-form-label text-md-end">Product Title</label>
                                          
                    <div class="col-md-6"> 
        
                      <input class="form-control" type='text' name="title" value='{{$product->title}}'/>
                      
                    </div>
            
                  </div>
  
                  <div class="row mb-3">
                
                    <label for="text" class="col-md-4 col-form-label text-md-end">Product Description</label>
                                  
                    <div class="col-md-6">

                      <input class="form-control" type='text' name="description" value='{{$product->description}}'/>
                      
                    </div>
            
                  </div>
  
                  <div class="row mb-3">
                
                    <label for="number" class="col-md-4 col-form-label text-md-end">Product Price</label>
                                  
                    <div class="col-md-6">
        
                      <input class="form-control" type='text' name="price" value='{{$product->price}}'/>
                    
                    </div>
            
                  </div>
  
                  <div class="row mb-3">
                
                    <label for="text" class="col-md-4 col-form-label text-md-end">Category Title</label>
                                  
                    <div class="col-md-6">
         
                      <select class="form-control" name="category_id" value=''>
                                @foreach ($product_categories as $value)
                                    @if ($value->id == $product->category_id)
                                      <option value="{{$value->id}}" selected>{{$value->title}}</option>
                                    @else
                                      <option value="{{$value->id}}">{{$value->title}}</option>
                                    @endif
                                @endforeach   
                                  
                      </select>
        
                    </div>
            
                  </div>

                  <div class="row mb-3">
          
                    <label for="file" class="col-md-4 col-form-label text-md-end">Update an image</label>
                            
                    <div class="col-md-6">
        
                      <input class="form-control" type='file' name="image_url" value='{{$product->image_url}}'/>
                        @csrf
                        <p><p>
                        <button class="btn" style="width:100px; color:yellow; background-color:blue" type='submit'>Update</button>
                        <a class="btn" style="width:100px; color:blue; background-color:yellow"  href="{{route('product.index')}}">Back</a>
                    </div>

                  </div>
                
                </form> 
              
              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    @endsection


