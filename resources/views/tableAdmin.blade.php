@extends('layouts/main');
@section('heading')
<h3>Daftar Admin</h3>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Username</th>
                    </tr>
                    @php $no=0; @endphp
                    @foreach($data_admin as $item)
                    @php $no++; @endphp
                    <tr>
                        <td>{{$item['id']}}</td>
                        <td>{{$item['email']}}</td>
                        <td>{{$item['username']}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection