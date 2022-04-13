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
          <h4>Cart
            <span class="price" style="color:black">
              <i class="fa fa-shopping-cart"></i>
              <b>4</b>
            </span>
          </h4>
          <table class="center">
            <thead>
              <tr>
                <th scope="col">ID Pemesana</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Status Pemesanan</th>
                <th scope="col">Status Pembayaran</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-bold-500">ID</td>
                <td class="text-bold-500">nambar</td>
                <td class="text-bold-500">harga</td>
                <td><div class="subcontainer">status</div></td>
                <td><a href="form.html" scope="row"><button type="button" class="btn btn-primary">Status Pembayaran</button></a></td>
              </tr>
            </tbody>
          </table>
          <hr>
          <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
        </div>
      </div>
  </div>
  </body>
@endsection