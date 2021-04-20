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
              <h1 class="mt-10">TAMBAH DATA</h1>
              </center>

<form action="{{ route('mahasiswa.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">NIM</label>
        <input type="text" class="form-control" id="NIM" placeholder="Masukkan NIM" name="NIM" required>
    </div>

    <div class="form-group">
        <label for="alamat">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama Lengkap" name="Nama" required>
    </div>

    <div class="form-group">
        <label for="telepon">Alamat</label>
        <input type="text" class="form-control" id="Alamat" placeholder="Masukkan Alamat Rumah" name="Alamat" required>
    </div>

    <div class="form-group">
        <label for="iddarah">Telepon</label>
        <input type="text" class="form-control" id="Telepon" placeholder="Masukkan No.Telepon" name="Telepon" required>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">SUBMIT</button>

          </div>
      </div>
  </div>
  </body>
</form>
@endsection
