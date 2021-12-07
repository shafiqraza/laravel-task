@extends('admin.layouts.app')
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Users</h4>
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
                <a href="#">Employees</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('employees.create') }}" class="btn btn-primary btn-sm">Add Employee</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="basic-datatables"
                                        class="display table table-striped table-hover dataTable" role="grid"
                                        aria-describedby="basic-datatables_info">
                                        <thead>
                                           <tr>
                                               <th>#</th>
                                               <th>First name</th>
                                               <th>Last name</th>
                                               <th>Email</th>
                                               <th>Phone</th>
                                               <th>Salary</th>
                                               <th>Action</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($employees as $employee)
                                                <tr>
                                                    <td>{{ $employee->id }}</td>
                                                    <td>{{ $employee->firstname }}</td>
                                                    <td>{{ $employee->lastname }}</td>
                                                    <td>{{ $employee->email }}</td>
                                                    <td>{{ $employee->phone }}</td>
                                                    <td>{{ $employee->salary }}</td>
                                                    <td>
                                                        <div class="form-button-action">
															<a href="{{ route("employees.edit", ['employee' => $employee->id]) }}" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
																<i class="fa fa-edit"></i>
															</a>
                                                            <form action="{{ route("employees.destroy", ['employee' => $employee->id]) }}" method="post">
                                                                @method("delete")
                                                                @csrf
                                                                <button type="submit" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                                    <i class="fa fa-times"></i>
                                                                </button>
                                                            </form>
														</div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
