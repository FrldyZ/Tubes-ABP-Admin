@extends('layouts/main');
@section('heading')
<h3>Daftar Pengguna</h3>
@endsection

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="card">
      <div class="card-header">DATA PENGGUNA</div>

      <div class="card-body">
        <table class="table table-striped">
          <tr>
            <th>NO</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Password</th>
          </tr>
            @php $no=0; @endphp
            @foreach($data_pengguna as $item)
            @php $no++; @endphp
              <tr>
                <td>{{$no}}</td>
                <td>{{$item['username']}}</td>
                <td>{{$item['nama']}}</td>
                <td>{{$item['telepon']}}</td>
                <td>{{$item['password']}}</td>
              </tr>
            @endforeach
        </table>
      </div>
    </div>
  </div>
</div>
@endsection