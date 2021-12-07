@extends('admin.layouts.app')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">User Profile</h4>

    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('profile.update') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="firstname">Name <sup class="text-danger">*</sup></label>
                            <input type="text" id="name" placeholder="Name" name="name" class="form-control" value="{{ old('name') ?? $user->name }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') ?? $user->email }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('profile.password.update') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="oldPassword">Old Password <sup class="text-danger">*</sup></label>
                            <input type="password" id="oldPassword" placeholder="Old Password" name="oldPassword" class="form-control">
                            @error('oldPassword')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="newPassword">New Password</label> <sup class="text-danger">*</sup></label>
                            <input type="password" class="form-control" id="password" placeholder="New Password" name="password">
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="newPassword">Confirm Password</label> <sup class="text-danger">*</sup></label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="password_confirmation">

                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

