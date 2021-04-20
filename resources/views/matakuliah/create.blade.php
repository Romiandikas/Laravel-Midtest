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
              <h1 class="mt-10">TAMBAH DATA MATAKULIAH</h1>
              </center>

<form action="{{ route('matakuliah.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="matakuliah">Mata Kuliah</label>
        <input type="text" class="form-control" id="matakuliah" placeholder="Masukkan Matakuliah" name="Nmatakuliah" required>
    </div>

    <div class="form-group">
        <label for="SKS">SKS</label>
        <input type="text" class="form-control" id="SKS" placeholder="Masukkan SKS" name="SKS" required>
    </div>

    <div class="form-group">
        <label for="Semester">Semester</label>
        <input type="text" class="form-control" id="Semester" placeholder="Masukkan Semester" name="Telepon" required>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">SUBMIT</button>

          </div>
      </div>
  </div>
  </body>
</form>
@endsection
