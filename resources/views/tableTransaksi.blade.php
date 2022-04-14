@extends('layouts/main');
@section('heading')
<h3>Transaksi</h3>
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
  
  @media (max-width: 800px) {
    .row {
      flex-direction: column-reverse;
    }
    .col-25 {
      margin-bottom: 20px;
    }
  }

  table, th, td {
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
          <table class="center">
            <thead>
              <tr>
                <th scope="col">Tanggal Pemesanan</th>
                <th scope="col">Tanggal Pembayaran</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Status Pemesanan</th>
                <th scope="col">Status Pembayaran</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-bold-500"><a href="/pemesanan">tgl pemesanan</a></td>
                <td class="text-bold-500">tgl pembayaran</td>
                <td class="text-bold-500">Total Harga</td>
                <td><a scope="row"><button type="button" class="btn btn-danger">Status Pesanan</button></a></td>
                <td><a scope="row"><button type="button" class="btn btn-primary">Status Pembayaran</button></a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
  </body>
@endsection