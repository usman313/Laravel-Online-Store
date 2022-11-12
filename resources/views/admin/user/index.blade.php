@extends('admin.app')

@section('content')
    <div class="container my-3">
        <div class="row gap-1">
            <div class="col-2 col-md-4 border border-2">
                <form action="{{route('fabrics.store')}}" method="POST">
                @csrf
                    <div class="d-flex justify-content-center mt-3">
                        <h2 class="align-self-top">Add New Admin</h2>
                    </div>
                    <div class="d-flex justify-content-center mb-5 mt-3">
                        <div class="card shadow-lg bg-secondary bg-opacity-50">
                            <div class="card-body">
                                <h2 class="card-title text-center">User Credentials</h2><hr>
                                <input type="text" class="form-control" name="adminName" id="adminName" placeholder="Name of User"><br>
                                <input type="email" class="form-control" name="adminEmail" id="adminEmail" placeholder="Eail of User"><br>
                                <input type="password" class="form-control" name="adminPassword" id="adminPassword" placeholder="Password"><br>
                                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
                                <div class="d-grid gap-2 my-4">
                                    <button type="submit" class="btn btn-outline-dark">Submit fabric Data</button>
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
                            <th scope="col">Fabric Name</th>
                            <th scope="col">Fabric Quality</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($retrievedData as $key=>$fabricType)
                        <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td>{{$fabricType->fabric_name}}</td>
                            <td>{{$fabricType->fabric_quality}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection