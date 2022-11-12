@extends('client.app')

@section('content')

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

@endsection