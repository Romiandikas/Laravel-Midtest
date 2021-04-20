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
              <h1 class="mt-10">EDIT DATA DOSEN</h1>
              </center>
              <form action="{{ route('dosen.update',$dosen->id) }}" method="POST">
              @csrf
              @method('PUT')

    <div class="form-group">
        <label for="NIP">NIP</label>
        <input type="text" class="form-control" id="NIP" name="NIP" value="{{$dosen->NIP}}">
    </div>

    <div class="form-group">
        <label for="NIDN">NIDN</label>
        <input type="text" class="form-control" id="NIDN" name="NIDN" value="{{$dosen->NIDN}}">
    </div>

    <div class="form-group">
        <label for="Nama">Nama Dosen</label>
        <input type="text" class="form-control" id="Nama" name="Nama" value="{{$dosen->Nama}}">
    </div>

    <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" class="form-control" id="Email" name="Email" value="{{$dosen->Email}}">
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">SUBMIT</button>

          </div>
      </div>
  </div>
  </body>
</form>
@endsection
