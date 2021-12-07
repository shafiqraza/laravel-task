@extends('auth.layouts.app')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            @if(session('message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Register</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route("register.post") }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Full Name" value="{{ old('name') }}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Register</button>
                        </div>
                    </form>

                    <p class="mb-0">Already have an account?
                        <a href="{{ route("login.view") }}">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

