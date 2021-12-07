@extends('admin.layouts.app')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Employees</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="{{ route("dashboard") }}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="{{ route('employees.index') }}">Employees</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Create Employee</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="firstname">First name <sup class="text-danger">*</sup></label>
                            <input type="text" id="firstname" placeholder="First name" name="firstname" class="form-control" value="{{ old("firstname") }}">
                            @error('firstname')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last name <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" id="lastname" placeholder="Last name" name="lastname" value="{{ old("lastname") }}">
                            @error('lastname')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{ old("email") }}">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone <sup class="text-danger">*</sup></label>
                            <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" value="{{ old("phone") }}">
                            @error('phone')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary <sup class="text-danger">*</sup></label>
                            <input type="number" class="form-control" id="salary" placeholder="Salary" name="salary" value="{{ old("salary") }}">
                            @error('salary')
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
    </div>
</div>
@endsection

