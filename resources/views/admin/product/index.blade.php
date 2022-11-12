@extends('admin.app')

@section('content')
    <div class="container-fluid mx-2 my-3">
        <div class="row">
            <div class="col-2 col-md-4 border border-2">
                <form action="{{route('products.store')}}" method="Post" enctype="multipart/form-data">
                @csrf
                    <div class="d-flex justify-content-center mt-3">
                        <h2 class="align-self-top">Product Entry Section</h2>
                    </div>
                    <div class="d-flex justify-content-center mb-5 mt-3">
                        <div class="card shadow-lg bg-secondary bg-opacity-50">
                            <div class="card-body">
                                <h2 class="card-title text-center">Insert New Product</h3><hr>
                                <input type="text" class="form-control" name="name" id="newProductInput" placeholder="Name of New Product"><br>
                                <input type="number" class="form-control" name="price" id="newProductPriceInput" placeholder="Enter Product Price">
                                <div class="input-group mt-3">
                                    <span class="input-group-text">Description</span>
                                    <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                                </div>
                                <div class="d-flex my-2">
                                    <label class="fw-bold me-2">Block Status:</label>
                                    <div class="form-check mx-2">
                                        <input class="form-check-input" value="active" type="radio" name="block_status" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Active
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="inactive" type="radio" name="block_status" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Inactive
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex my-3">
                                    <label class="fw-bold me-2">Stock Status:</label>
                                    <div class="form-check mx-2">
                                        <input class="form-check-input" value="in stock" type="radio" name="stock_status" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            In Stock
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" value="out of stock" type="radio" name="stock_status" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Out of Stock
                                        </label>
                                    </div>
                                </div>
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                    <option selected disabled>Select Category for this Product</option>
                                    @foreach($categories as $count=>$category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <select class="form-select mt-3" name="fabric_id" aria-label="Default select example">
                                    <option selected disabled>Select Fabric for this Product</option>
                                    @foreach($fabrics as $count=>$fabric)
                                    <option value="{{$fabric->id}}">{{$fabric->fabric_name}}</option>
                                    @endforeach
                                </select>
                                <div class="form-group my-3">
                                    <label class="fw-bold">Select Product Image</label>
                                    <input type="file" name="image" id="image" class="form-control"  require>
                                </div>
                                <div class="d-grid gap-2 my-4">
                                    <button type="submit" class="btn btn-outline-dark">Submit Product Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-8 border border-2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Product Code</th>
                            <th scope="col">Stock Status</th>
                            <th scope="col">Block Status</th>
                            <th scope="col">Product Description</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $count=>$product)
                        <tr>
                            <td>{{$count+1}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->stock_status}}</td>
                            <td>{{$product->block_status}}</td>
                            <td>{{$product->description}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection