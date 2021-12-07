<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

<!-- jQuery UI -->
<script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>


<!-- jQuery Sparkline -->
<script src="{{ asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Chart Circle -->
<script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Bootstrap Notify -->
<script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
<!-- Atlantis JS -->
<script src="{{ asset('assets/js/atlantis.min.js') }}"></script>
<script>
    $('#basic-datatables').DataTable({});
</script>
@if(session('message'))
    <script>
        //Notify
        $.notify(
            {
                icon: "flaticon-alarm-1",
                message: '{{ session("message") }}',
            },
            {
                type: "success",
                placement: {
                    from: "bottom",
                    align: "right",
                },
                time: 1000,
            }
        );
    </script>
@endif

@if(session('error-message'))
    <script>
        //Notify
        $.notify(
            {
                icon: "flaticon-alarm-1",
                message: '{{ session("error-message") }}',
            },
            {
                type: "danger",
                placement: {
                    from: "bottom",
                    align: "right",
                },
                time: 1000,
            }
        );
    </script>
@endif

