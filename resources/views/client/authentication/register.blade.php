@extends('client.app')

@section('content')
<form action="" method="GET">
@csrf
    <div class="d-flex justify-content-center mt-3">
        <h2 class="align-self-top">Register New User</h2>
    </div>
    <div class="d-flex justify-content-center mb-5 mt-3">
        <div class="card shadow-lg bg-secondary bg-opacity-50">
            <div class="card-body">
                <h2 class="card-title text-center">New Customer</h3>
                <h3 class="card-title text-left">Enter your Credentials</h3><hr>
                @if($errors->has('fullName'))
                    <span class="text-danger">{{$errors->first('fullname')}}</span>
                @endif
                <input type="text" class="form-control {{ $errors->has('fullName') ? 'has-error' : ''}}" name="fullName" id="fullName" placeholder="Enter your Full Name"><br>
                
                @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <input type="email" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" 
                name="signInEmailInput" id="signInEmailInput" placeholder="Enter your Email"><br>
                
                @if($errors->has('password'))
                    <span class="text-danger">{{$errors->first('password')}}</span>
                @endif
                <input type="password" class="form-control {{ $errors->has('password') ? ' has-error' : '' }}" name="password" 
                id="signInPasswordInput" placeholder="Enter your Password"><br>
                
                @if($errors->has('confirmPassword'))
                    <span class="text-danger">{{$errors->first('confirmPassword')}}</span>
                @endif
                <input type="password" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" name="confirmPassword" 
                id="confirmPasswordInput" placeholder="Confirm your Password">
                
                <div class="d-grid gap-2 my-4">
                    <button type="submit" class="btn btn-outline-dark">Sign In</button>
                    <button class="btn btn-outline-light">Register New User</button>
                </div>
                <a href="{{URL('/logIn')}}" class="text text-decoration-none">Already a Customer</a>
            </div>
        </div>
    </div>
</form>
@endsection