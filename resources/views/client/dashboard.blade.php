@extends('client.app')

@section('categoryHeader')
    @include('client.partials.categoryHeader')
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid mt-2">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/carousel/slideImage1.jpg')}}" class="d-block img-fluid" alt="Image Not Found">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/carousel/slideImage2.jpg')}}" class="d-block img-fluid" alt="Image Not Found">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/carousel/slideImage4.jpg')}}" class="d-block img-fluid" alt="Image Not Found">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Body Start -->
    <div class="container mt-4 mb-4 productsIndex">
        <div class="row">
            <div class="col-12 col-md-8">
                <div class="row">
                    @foreach($categories as $count=>$category)
                    @if($count>=0 && $count < 6)
                    <div class="col-12 col-md-4 my-3 card">
                        <a href="{{route('categories.show', $category->id)}}">
                            <div class="card.$count">
                                <img src="{{asset('images/categories/'.$category->image->name.'')}}" class="card-img-top img-fluid" alt="Image not Found">
                                <div class="card-body">
                                    <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">{{$category->name}}</a></h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-4 align-items-center d-flex">
                @foreach($categories as $count=>$category)
                @if($count==6)
                <a href="{{route('categories.show', $category->id)}}">
                    <div class="card align-self-center">
                        <img src="{{asset('images/categories/'.$category->image->name.'')}}" class="card-img-top img-fluid" alt="Image Not Found">
                        <div class="card-body">
                            <h3 class="card-title"><a href="#" class="text-decoration-none text-dark">{{$category->name}}</a></h3>
                        </div>
                    </div>
                </a>
                @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Body End -->
@endsection