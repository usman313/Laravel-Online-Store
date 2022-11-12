@extends('client.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="d-flex justify-content-center mt-3">
                    <h2 class="align-self-top">Sign In</h2>
                </div>
                <div class="d-flex justify-content-center mb-5 mt-3">
                    <div class="card shadow-lg bg-secondary bg-opacity-50">
                        <div class="card-body">
                            <h2 class="card-title text-center">Welcome Back</h3>
                            <h3 class="card-title text-left">Enter you Credentials</h3><hr>
                            <form action="{{ route('login.store') }}" method="POST">
                                @csrf
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <input type="email" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" name="email" id="signInEmailInput" placeholder="Enter your Email"><br>
                                
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                                <input type="password" class="form-control" name="password" id="signInPasswordInput" placeholder="Enter your Password">
                                <div class="d-grid gap-2 my-4">
                                    <button type="submit" class="btn btn-outline-dark">Sign In</button>
                                    <a href="{{URL('/register')}}" class="btn btn-outline-light">Register New User</a>
                                </div>
                                <a href="#" class="text text-decoration-none">Forgot Your Password</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-5">
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="d-flex mt-3 justify-content-center">
                            <h2 class="align-self-top">Guest Checkout</h2>
                        </div>
                        <div class="justify-content-center mb-5 mt-3">
                            <div class="card shadow-lg bg-secondary bg-opacity-50">
                                <div class="card-body">
                                    <p class="text-center">
                                        You can proceed to checkout without creating an account. 
                                        You’ll have the option to create one later.
                                    </p>
                                    <div>
                                        <a href="{{route('bag.index')}}" class="btn btn-outline-dark w-100">
                                            Proceed To Checkout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-7">
                        <div class="d-flex mt-3 justify-content-center">
                            <h2 class="align-self-top">For Information</h2>
                        </div>
                        <div class="card bg-secondary shadow-lg bg-opacity-50 mt-3">
                            <div class="card-body">
                                <a class="btn btn-outline-dark w-100" href="{{URL('/')}}">Continue To Shop</a>
                                <label for="query" class="mt-3">For any Query:</label>
                                <a href="tel:+923214099914" class="text-decoration-none">0900-78901</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection