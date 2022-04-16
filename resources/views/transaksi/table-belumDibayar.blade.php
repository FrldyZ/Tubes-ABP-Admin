@extends('/layouts/main')
@section('heading')
<h3>Transaksi : Belum Dibayar</h3>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id="table1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Total Harga</th>
                    <th>Pesanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$id</td>
                    <td>$tanggal</td>
                    <td>$total harga</td>
                    <td><a href="/pemesanan">Detail</a></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
@section('script')
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
@endsection