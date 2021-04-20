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
              <h1 class="mt-10">TAMBAH DATA UJIAN PROPOSAL</h1>
              </center>

<form action="{{ route('ujianproposal.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="judulujian">Judul Ujian Proposal</label>
        <input type="text" class="form-control" id="judulujian" placeholder="Masukkan Judul Ujian Proposal" name="judulujian" required>
    </div>

    <div class="form-group">
        <label for="mahasiswa_id">Nama Mahasiswa</label>
        <select class="form-control" id="mahasiswa_id" name="mahasiswa_id">
        <option value="selected disable">Pilih Mahasiswa</option>
        @foreach ($mahasiswa as $mhs)
        <option value= "{{$mhs->id}}">
        {{$mhs->Nama}}
        </option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="dosen_id">Nama Dosen Penguji</label>
        <select class="form-control" id="dosen_id" name="dosen_id">
        <option value="selected disable">Pilih Dosen Penguji</option>
        @foreach ($dosen as $dsn)
        <option value= "{{$dsn->id}}">
        {{$dsn->Nama}}
        </option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="tanggal">Tanggal Ujian Proposal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
    </div>

    <button type="submit" class="btn btn-success btn-lg btn-block">SUBMIT</button>

          </div>
      </div>
  </div>
  </body>
</form>
@endsection