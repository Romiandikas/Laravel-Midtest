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
              <h1 class="mt-10">EDIT DATA MATAKULIAH</h1>
              </center>
              <form action="{{ route('matakuliah.update',$matakuliah->id) }}" method="POST">
              @csrf
              @method('PUT')

    <div class="form-group">
        <label for="Matakuliah">Matakuliah</label>
        <input type="text" class="form-control" id="Matakuliah" name="Matakuliah" value="{{$matakuliah->matakuliah}}">
    </div>

    <div class="form-group">
        <label for="SKS">SKS</label>
        <input type="text" class="form-control" id="SKS" name="SKS" value="{{$matakuliah->SKS}}">
    </div>

    <div class="form-group">
        <label for="Semester">Semester</label>
        <input type="text" class="form-control" id="Semester" name="Semester" value="{{$matakuliah->Semester}}">
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">SUBMIT</button>

          </div>
      </div>
  </div>
  </body>
</form>
@endsection
