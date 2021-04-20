@extends('layout/main')

@section('title', 'Tambah Data')

@section('container')
<style>
body {
	background-color: #DAA520;  
}
</style>

<body>
      <div class="container">
          <div class="centre">
              <div class="col-100">
              <center>
              <h1 class="mt-10">TAMBAH DATA DOSEN</h1>
              </center>

<form action="{{ route('dosen.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="NIP">NIP</label>
        <input type="text" class="form-control" id="NIP" placeholder="Masukkan NIP" name="NIP" required>
    </div>

    <div class="form-group">
        <label for="NIDN">NIDN</label>
        <input type="text" class="form-control" id="NIDN" placeholder="Masukkan NIDN" name="NIDN" required>
    </div>

    <div class="form-group">
        <label for="Nama">Nama Dosen</label>
        <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama Dosen" name="Nama" required>
    </div>

    <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" class="form-control" id="Email" placeholder="Masukkan Email" name="Email" required>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">SUBMIT</button>

          </div>
      </div>
  </div>
  </body>
</form>
@endsection
