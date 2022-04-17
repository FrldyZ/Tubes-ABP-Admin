@extends('layouts/main');
@section('heading')
<h3>Pemesanan</h3>
@endsection

@section('content')
<style>
    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 0 -16px;
    }

    .col-25 {
        -ms-flex: 25%;
        flex: 25%;
        padding: 0 16px;
    }

    .container {
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
    }

    .subcontainer {
        background-color: #fc0000;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgrey;
        border-radius: 3px;
    }

    span.price {
        float: right;
        color: grey;
    }

    @media (max-width: 800px) {
        .row {
            flex-direction: column-reverse;
        }

        .col-25 {
            margin-bottom: 20px;
        }
    }

    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: separate;
    }

    table {
        width: 100%;

    }

    table.center {
        margin-left: auto;
        margin-right: auto;
    }
</style>

<body>
    <div class="row">
        <div class="col-25">
            <div class="container">
                <h4>Cart
                    <span class="price" style="color:black">
                        <i class="fa fa-shopping-cart"></i>
                        <b>{{ $countPesanans }}</b>
                    </span>
                </h4>
                <table class="center">
                    <thead>
                        <tr>
                            <th scope="col" style=" width: 50%;">ID Pemesanan</th>
                            <th scope="col" style=" width: 25%;">Nama Barang</th>
                            <th scope="col" style=" width: 25%;">Harga(Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pesanans as $pesanan)
                        <tr>
                            <td class="text-bold-500">{{ $pesanan->id }}</td>
                            <td class="text-bold-500">{{ $pesanan->nama }}</td>
                            <td class="text-bold-500">{{ $pesanan->harga." (".$pesanan->jumlah_item."x)"}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
                <p>Total <span class="price" style="color:black"><b>{{ "Rp".$transaksi->total_harga }}</b></span></p>
            </div>
        </div>
    </div>
</body>
@endsection