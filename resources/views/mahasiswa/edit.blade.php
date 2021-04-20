@extends('layout/main')

@section('title', 'Edit Data')

@section('container')
<style>
body {
	background-color: #DAA520;  
}
</style>

<html>
<body>
      <div class="container">
          <div class="centre">
              <div class="col-100">
              <center>
              <h1 class="mt-10">EDIT DATA</h1>
              </center>
              <form action="{{ route('mahasiswa.update',$mahasiswa->id) }}" method="POST">
              @csrf
              @method('PUT')

    <div class="form-group">
        <label for="NIM">NIM</label>
        <input type="text" class="form-control" id="NIM" name="NIM" value="{{$mahasiswa->NIM}}">
    </div>

    <div class="form-group">
        <label for="Nama">Nama Mahasiswa</label>
        <input type="text" class="form-control" id="Nama" name="Nama" value="{{$mahasiswa->Nama}}">
    </div>

    <div class="form-group">
        <label for="Alamat">Alamat</label>
        <input type="text" class="form-control" id="Alamat" name="Alamat" value="{{$mahasiswa->Alamat}}">
    </div>

    <div class="form-group">
        <label for="Telepon">No.Telepon</label>
        <input type="text" class="form-control" id="Telepon" name="Telepon" value="{{$mahasiswa->Telepon}}">
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">SUBMIT</button>

          </div>
      </div>
  </div>
  </body>
</form>
@endsection
