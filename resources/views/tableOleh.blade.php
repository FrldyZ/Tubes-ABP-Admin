@extends('layouts/main');
@section('heading')
<h3>Daftar Oleh-Oleh</h3>
@endsection
@section('content')

<!-- Create -->
<div class="card">
    <div class="card-content mx-3 my-3">
        <div class="table-responsive">
            <!-- button -->
            <a href="" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahOleh">Tambah</a>

            <!-- modal -->
            <div class="modal fade text-left" id="tambahOleh" tabindex="-1" role="dialog" aria-labelledby="tambahOlehLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="tambahOlehLabel">Tambah Oleh </h4>
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
                        <th>TERJUAL</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-bold-500">$nama</td>
                        <td class="text-bold-500">$terjual</td>
                        <td>
                            <!-- View -->
                            <!-- Button -->
                            <a class="badge bg-info" data-bs-toggle="modal" data-bs-target="#viewOleh"><i data-feather="eye"></i></a>

                            <!-- Modal -->
                            <div class="modal fade text-left" id="viewOleh" tabindex="-1" role="dialog" aria-labelledby="viewOlehLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewOlehLabel">$nama</h5>
                                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="https://1.bp.blogspot.com/-tjxThEa2wZk/XT5Fea1JqaI/AAAAAAAAC2U/qh03Mzu1dxAzXeGAtxLlR4f8EJoaFZsLQCLcBGAs/w1200-h630-p-k-no-nu/Gambar%2BIlustrasi%2BMalam.jpg" class="img-thumbnail" alt="img">
                                            <p>
                                                $deskripsi
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- edit -->
                            <!-- button -->
                            <a class="badge bg-warning" data-bs-toggle="modal" data-bs-target="#editOleh"><i data-feather="edit"></i></a>
                            <!-- modal -->
                            <div class="modal fade text-left" id="editOleh" tabindex="-1" role="dialog" aria-labelledby="editOlehLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="editOlehLabel">Edit Oleh </h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="#">
                                            <div class="modal-body">
                                                <label>Nama: </label>
                                                <div class="form-group">
                                                    <input type="text" placeholder="Nama Oleh-Oleh" class="form-control" name="nama" value="$nama" disabled>
                                                </div>
                                                <label>Deskripsi: </label>
                                                <div class="form-group">
                                                    <textarea rows="3" class="form-control" name="deskripsi">$deskripsi</textarea>
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

                            <!-- delete -->
                            <!-- button -->
                            <a class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#deleteOleh"><i data-feather="x-circle"></i></a>
                            <!-- modal -->
                            <div class="modal fade text-left" id="deleteOleh" tabindex="-1" role="dialog" aria-labelledby="deleteOlehLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteOlehLabel">Hapus</h5>
                                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>
                                                Hapus $nama?
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Iya</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection