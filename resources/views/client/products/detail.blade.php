@extends('client.app')

@section('content')
    <div class="container-fluid shadow-sm">
        <h5 class="text-center py-3 fw-normal">Free Shipping upto PKR 3000</h5>
    </div>
    <div class="container-fluid px-5 border-2 border-bottom pb-3">
        
        <div class="row mt-5">
            <div class="col-12 col-md-4">
                <img src="{{asset('images/products/'.$product->image->name)}}" alt="Image Not Found" class="img-fluid">
            </div>
            <div class="col-12 col-md-8">
                <h4>Product Name: {{$product->name}}</h4>
                <div class="d-flex mb-3">
                    <div class="text-muted text-center pe-4 border-end border-dark border-2">
                        Product Code: {{$product->code}}
                    <!-- <p class="text-muted" style="size: 10px"></p> -->
                    </div>
                    <div class="text-muted text-center text-uppercase ps-3">
                        {{$product->stock_status}}
                    </div>
                </div>
                <h4>Price: PKR {{$product->price}}</h4>
                <div class="d-flex my-3">
                    <label for="quantity" class=" mt-1 me-3 fw-bold fs-5">Qantity:</label>
                    <div class="btn btn-outline rounded-circle p-0 fs-3 border-0 m-0" onclick="changeQuantity(false)"
                    type="button" id="decreaseQuantity">
                        <i class="bi bi-arrow-down-square"></i>
                    </div>

                    <input type="number" value="1" name="quantity" id="quantity"
                    class="mt-2 text-center border-0" readonly style="width: 50px; height:27px">
                    
                    <div class="btn btn-outline rounded-circle p-0 fs-3 border-0 m-0" onclick="changeQuantity(true)"
                    type="button" id="increaseQuantity">
                        <i class="bi bi-arrow-up-square p-0"></i>
                    </div>
                </div>
                <button class="btn btn-lg btn-outline-dark" onclick="addProduct()">
                    Add to Bag
                </button><br>
                <div class="d-flex w-75 pt-3">
                    <label for="disclaimer" class="me-3 text-danger fw-bold" style="font-size: 14px;">Disclaimer:</label>
                    <p style="font-size: 14px;">Product color may vary slightly due to photographic lighting or your device settings.</p>
                </div><hr>
                <div class="d-flex">
                    <div>
                        <label for="description" class="me-3 fw-bold">Description:</label>
                    </div>
                    <div>
                        <p>
                            {{$product->description}}<br>
                            {{$fabric->fabric_name}}<br>
                            {{$fabric->fabric_quality}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection