<!DOCTYPE html>
<html>
    <head>
    <title>Form</title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
Ukn" crossorigin="anonymous">
    <script src="{{ asset('assets/jquery.js') }}"></script>
    <script
src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.
js"
npF" crossorigin="anonymous"></script>
    </head>
    <body style="width:95%">
    <div class="row justify-content-center" style="margin-top:13%">
    <div class="col-3">
        <h4>Form</h4>
        <form class="border" style="padding:20px" method="POST">
        @csrf
        <input type="hidden" name="_method"/>
        <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control"/>
        </div>
        <div class="form-group">
        <label>Nama</label>
        <input type="text" name="name" class="form-control"/>
        </div>
        <div class="form-group">
        <label>Telpon</label>
        <input type="number" name="telpon" class="form-control"/>
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="text" name="price" class="form-control"/>
        </div>
        <div style="text-align:center">
        <button class="btn btn-success">Simpan</button>
        </div>
        </form>
    </div>
    </div>
    </body>
</html>