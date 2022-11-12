@extends('admin.app')

@section('content')
    <!-- Main Panel Options -->
    <div class="container my-4">
        <div class="row gap-3 my-3">
            <div class="col-12 col-md-5 border border-2">
                <h3 class="text-center mb-3">Insert Data Section</h3>
                <div class="card mb-4">
                    <div class="card-header">
                        Select Item You want to Insert New
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Insert New Admin Data</a></li>
                        <li class="list-group-item"><a href="{{route('products.index')}}" class="text-decoration-none">Insert New Product</a></li>
                        <li class="list-group-item"><a href="{{route('fabrics.index')}}" class="text-decoration-none">Insert New Fabric Type</a></li>
                        <li class="list-group-item"><a href="{{route('categories.index')}}" class="text-decoration-none">Insert New Master Category</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-5 border border-2">
                <h3 class="text-center mb-3">Delete Data Section</h3>
                <div class="card mb-4">
                    <div class="card-header">
                        Select Item You Want to Delete
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Delete Admin Data</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Delete Product</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Delete Fabric Type</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Delete Master Category</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row gap-3 my-3">
            <div class="col-12 col-md-5 border border-2">
                <h3 class="text-center mb-3">Update Data Section</h3>
                <div class="card mb-4">
                    <div class="card-header">
                        Select Item You Want to Update
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Update Admin Data</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Update Product</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Update Fabric Type</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Update Master Category</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-5 border border-2">
                <h3 class="text-center mb-3">Read Data Section</h3>
                <div class="card mb-4">
                    <div class="card-header">
                        Select Item You Want to View
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#" class="text-decoration-none">View Admin Data</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">View Product</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">View Fabric Type</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">View Master Category</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Panel Options -->
@endsection