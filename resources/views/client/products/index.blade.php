@extends('client.app')

@section('content')
    <div class="container my-3">
            <div class="row">
                @foreach($category->products as $count => $categoryProducts)
                    <div class="col-12 col-md-4 py-3">
                        
                            <div class="card" id="cardDiv"  onmouseover="viewBagButton(true,'btn{{$count}}')" 
                            onmouseout="viewBagButton(false, 'btn{{$count}}')" id="card{{$count}}">
                                <div>
                                    <button class="smallBagBtn btn btn-outline-dark float-end rounded-circle z-index-2"
                                    id="btn{{$count}}">
                                        <i class="bi bi-bag-plus-fill"></i>
                                    </button>
                                    <a href="{{route('products.show', $categoryProducts->id)}}" class="text-decoration-none">
                                        <img src="{{asset('images/products/'.$categoryProducts->image->name.'')}}" alt="Image Not Found" class="card-img-top img-fluid z-index-1">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title text-dark">{{$categoryProducts->name}}</h3>
                                    <div class="d-flex justify-content-end mt-2 gap-3 ">
                                        <button class="btn btn-outline-dark">Add to Cart</button>
                                        <h4 class="text-end text-dark">PKR.{{$categoryProducts->price}}</h4>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                @endforeach
            </div>
        
    </div>
@endsection