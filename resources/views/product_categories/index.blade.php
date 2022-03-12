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
                    
                    <p><h4 style="text-align:center; color:yellow">Present categories</h4><p>
                    

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

                </div>

                <div class="card-body">

                    <div class="row mb-3">

                        @if (count($product_categories) == 0)
                            <p>There is no product categorties in the database yet</p>
                        @endif

                        {{-- create forma - mums reikia nuorodos ar mygtuko --}}
                        <a class="btn btn-primary" style="background-color:blue; color:yellow; font-weight:bold" href="{{route('product_category.create')}}">Include new product categorie's data into database</a>
                        <p>


                        <table class="table table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>

                        @foreach ($product_categories as $product_category)
                            <tr>
                                <td>{{$product_category->id}}</td>
                                <td>{{$product_category->title}}</td>
                                <td>{{$product_category->description}}</td>
                                <td>
                                    <a class="btn" style="width:100px; color:yellow; background-color:blue" href="{{route('product_category.edit', [$product_category])}}">Edit</a><p>
                                    <p><a class="btn" style="width:100px; color:blue; background-color:yellow" href="{{route('product_category.show', [$product_category])}}">Show</a>
                                    <p>
                                    <form method="post" action='{{route('product_category.destroy', [$product_category])}}'>
                                        @csrf
                                        <button class="btn btn-danger" style="width:100px" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
