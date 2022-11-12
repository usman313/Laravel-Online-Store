@extends('admin.app')

@section('content')
    <div class="container my-3">
        <div class="row gap-1">
            <div class="col-2 col-md-4 border border-2">
                <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="d-flex justify-content-center mt-3">
                        <h2 class="align-self-top">Category Entry Section</h2>
                    </div>
                    <div class="d-flex justify-content-center mb-5 mt-3">
                        <div class="card shadow-lg bg-secondary bg-opacity-50">
                            <div class="card-body">
                                <h2 class="card-title text-center">Insert Category</h2><hr>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Cateogry Name"><br>
                                <!-- <input type="text" class="form-control" name="newFabricQualityInput" id="newFabricQualityInput" placeholder="Enter Quality of New Fabric"> -->
                                <div class="d-flex my-2">
                                    <label class="fw-bold me-2">Select Status:</label>
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
                                <div class="form-group my-3">
                                    <label class="fw-bold">Select Category Image</label>
                                    <input type="file" name="image" id="image" class="form-control"  require>
                                </div>
                                <div class="d-grid gap-2 my-1">
                                    <button type="submit" class="btn btn-outline-dark">Submit Category</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-7 border border-2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Block Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($retrievedData as $key=>$category)
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$category->name}}</td>
                            <td>{{$category->block_status}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="container">
    </div>
@endsection