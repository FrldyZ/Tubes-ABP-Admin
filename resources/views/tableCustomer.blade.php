@extends('layouts/main');
@section('heading')
<h3>Daftar Customer</h3>
@endsection
@section('content')

<!-- Create -->
<div class="card">
    <div class="card-content mx-3 my-3">
        <div class="table-responsive">
            <!-- button -->
            <a class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahCustomer">Tambah Customer</a>

            <!-- modal -->
            <div class="modal fade text-left" id="tambahOleh" tabindex="-1" role="dialog" aria-labelledby="tambahCustomerLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="tambahCustomerLabel">Tambah Customer </h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <form action="/customer/tambah" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <label>Nama User: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Nama Customer" class="form-control @error('nama') is-invalid @enderror" name="nama" required>
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <label>Email: </label>
                                <div class="form-group">
                                    <textarea rows="3" class="form-control @error('deskripsi') is-invalid @enderror" name="email" required></textarea>
                                    @error('Email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <label>Username: </label>
                                <div class="form-group">
                                    <textarea rows="3" class="form-control @error('deskripsi') is-invalid @enderror" name="username" required></textarea>
                                    @error('Username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button class="btn btn-primary ml-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Simpan</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @if (session()->has('Success'))
            <div class="alert alert-success" role="alert">{{ session('Success') }}</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <table class="table table-bordered mb-0">
                <thead>
                    <tr>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>USERNAME</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td class="text-bold-500">{{$customer->nama}}</td>
                        <td class="text-bold-500">{{$customer->email}}</td>
                        <td class="text-bold-500">{{$customer->username}}</td>
                        <td>
                            <!-- View -->
                            <!-- Button -->
                            <a class="badge bg-info" data-bs-toggle="modal" data-bs-target="{{ '#view'.$customer->id }}"><i data-feather="eye"></i></a>

                            <!-- Modal -->
                            <div class="modal fade text-left" id="{{ 'view'.$customer->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ 'Label'.$customer->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewcustomerLabel">{{$customer->nama}}</h5>
                                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('storage/'.$customer->gambar) }}" class="img-thumbnail mb-3 mx-auto d-block" width="400" height="500" alt="img">
                                            <p>
                                                {{$customer->deskripsi}}
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
                            <a class="badge bg-warning" data-bs-toggle="modal" data-bs-target="{{ '#editcustomer'.$customer->id }}"><i data-feather="edit"></i></a>
                            <!-- modal -->
                            <div class="modal fade text-left" id="{{ 'editcustomer'.$customer->id }}" tabindex="-1" role="dialog" aria-labelledby="{{ 'editcustomerLabel'.$oleh->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="{{ 'editcustomerLabel'.$customer->id }}">Edit</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="/customer/edit/{{ $customer->id }}" method="post" enctype="multipart/form-data">
                                            <div class="modal-body">
                                                @csrf
                                                <label>Nama: </label>
                                                <div class="form-group">
                                                    <label>{{$customer->nama}}</label>
                                                </div>
                                                <label>Email: </label>
                                                <div class="form-group">
                                                    <label>{{$customer->nama}}</label>
                                                </div>
                                                <label>Username: </label>
                                                <div class="form-group">
                                                    <label>{{$customer->nama}}</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                                <button class="btn btn-primary ml-1">
                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Simpan</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- delete -->
                            <!-- button -->
                            <a class="badge bg-danger" data-bs-toggle="modal" data-bs-target="#deletecustomer"><i data-feather="x-circle"></i></a>
                            <!-- modal -->
                            <div class="modal fade text-left" id="deletecustomer" tabindex="-1" role="dialog" aria-labelledby="deletecustomerLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deletecustomerLabel">Hapus</h5>
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
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
