<!DOCTYPE html>
<html lang="en">

@include('admin.inc.head')

<body data-background-color="dark">
    <div class="wrapper">
        @include('admin.inc.nav')
        <!-- Sidebar -->
        @include('admin.inc.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
    @include('admin.inc.scripts')
</body>

</html>
