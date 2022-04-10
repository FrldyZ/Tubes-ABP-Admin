@extends('layouts/main');
@section('heading')
<h3>Daftar Oleh-Oleh</h3>
@endsection
@section('content')

<div class="table-responsive">
    <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#inlineForm">Tambah</a>

    <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Tambah Oleh </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="#">
                    <div class="modal-body">
                        <label>Nama: </label>
                        <div class="form-group">
                            <input type="text" placeholder="Nama Oleh-Oleh" class="form-control" name="nama">
                        </div>
                        <label>Deskripsi: </label>
                        <div class="form-group">
                            <textarea rows="3" class="form-control" name="deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tambah</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <table class="table table-bordered mb-0">
        <thead>
            <tr>
                <th>NAMA</th>
                <th>JUMLAH</th>
                <th>TERJUAL</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-bold-500">$nama</td>
                <td>$jumlah</td>
                <td class="text-bold-500">$terjual</td>
                <td>
                    <a href="" class="badge bg-info"><i data-feather="eye"></i></a>
                    <a href="" class="badge bg-warning"><i data-feather="edit"></i></a>
                    <a href="" class="badge bg-danger"><i data-feather="x-circle"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection