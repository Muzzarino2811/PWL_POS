@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover table-sm" id="table_transaksi">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Penjualan</th>
                        <th>User yang Melayani</th>
                        <th>Pembeli</th>
                        <th>Tanggal Penjualan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            var dataUser = $('#table_transaksi').DataTable({
                serverSide: true,
                ajax: {
                    "url": "{{ url('/transaksi/list') }}",
                    "dataType": "json",
                    "type": "POST"
                },
                columns: [{
                    data: "DT_RowIndex",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                }, {
                    data: "penjualan_kode",
                    className: "",
                    orderable: false,
                    searchable: true
                }, {
                    data: "user.nama",
                    className: "",
                    orderable: false,
                    searchable: true
                }, {
                    data: "pembeli",
                    className: "",
                    orderable: false,
                    searchable: true
                }, {
                    data: "penjualan_tanggal",
                    className: "",
                    orderable: false,
                    searchable: true
                }, {
                    data: "aksi",
                    className: "",
                    orderable: false,
                    searchable: false
                }]
            });
        });
    </script>
@endpush
