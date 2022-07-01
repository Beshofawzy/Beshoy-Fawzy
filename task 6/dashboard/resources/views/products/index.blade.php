@extends('layouts.parent')
@section('title', 'all products')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @elseif(session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
            @endif
        </div>
        <div class="col-12 example1_wrapper">
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Creation Date</th>
                        <th>Operations</th>
                        <a href="{{ route('dashboard.products.edit') }}" class="btn btn-outline-primary btn-xs"> edit </a>

                        @method('DELETE')
                        <button class="btn btn-outline-danger btn-xs"> delete </button>

                    </tr>
                </thead>

            @endsection
            @section('js')
                <!-- DataTables  & Plugins -->
                <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
                <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
                <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
                <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
                <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
                <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
                <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
                <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
                <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
                <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
                <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
                <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
                <!-- Bootstrap Switch -->
                <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
                <script>
                    $(function() {
                        $("#example1").DataTable({
                            "responsive": true,
                            "lengthChange": false,
                            "autoWidth": false,
                            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
                            "initComplete": function(settings, json) {
                                $("input[data-bootstrap-switch]").each(function() {
                                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                                });
                            }
                        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                        $("input[data-bootstrap-switch]").each(function() {
                            $(this).bootstrapSwitch('state', $(this).prop('checked'));
                        });
                        $('input[name="status"]').on('switchChange.bootstrapSwitch', function(event, state) {
                            $(this).parents('.statusForm')[0].submit();
                        });
                    });
                </script>
            @endsection
