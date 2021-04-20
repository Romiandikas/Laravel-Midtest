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
              <h1 class="mt-10">EDIT DATA UJIAN PROPOSAL</h1>
              </center>
              <form action="/ujianproposal/edit" method="POST">
              @csrf
              @method('PUT')

    <div class="form-group">
        <label for="ujianproposal">Judul Ujian Proposal</label>
        <input type="text" class="form-control" id="ujianproposal" name="ujianproposal" value="{{$ujianproposal->judulujian}}">
    </div>

    <div class="form-group">
        <label for="mahasiswa_id">Nama Mahasiswa</label>
        <select selected="{{ $ujianproposal->mahasiswa_id }}" class="form-control" id="mahasiswa_id" name="mahasiswa_id">
        @foreach ($mahasiswa as $mhs)
        <option value="{{$mhs->id}}" @if($mhs->id==$ujianproposal->mahasiswa_id)
        SELECTED
        @endif>
        {{$mhs->Nama}}
        </option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="dosen_id">Nama Dosen Penguji</label>
        <select selected="{{ $ujianproposal->dosen_id }}" class="form-control" id="dosen_id" name="dosen_id">
        @foreach ($dosen as $dsn)
        <option value="{{$dsn->id}}" @if($dsn->id==$ujianproposal->dosen_id)
        SELECTED
        @endif>
        {{$dsn->Nama}}
        </option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal Ujian Proposal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$ujianproposal->tanggal}}">
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">SUBMIT</button>

          </div>
      </div>
  </div>
  </body>
</form>
@endsection