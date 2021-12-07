<div class="sidebar sidebar-style-2" data-background-color="dark2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-primary">
                <li class="nav-item">
                    <a href="{{ route("dashboard") }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#employees">
                        <i class="fas fa-users"></i>
                        <p>Employees</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="employees">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route("employees.create") }}">
                                    <span class="sub-item">Add Employee</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('employees.index') }}">
                                    <span class="sub-item">All Employees</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
