@extends('layout/main')

@section('title', 'Daftar Ujian Proposal')

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
              <h1 class="mt-10">DAFTAR UJIAN PROPOSAL</h1>
              </center>

              <a  href="{{ route('ujianproposal.create') }}" class="btn btn-dark my-2">TAMBAH DATA</a>
              @if (session('status'))
                 <div class="alert alert-success">
                 {{ session('status') }}
                </div>
                    @endif
              <table class="table table-striped table-dark">
                <thead class="thead-warning">
                   <tr>
                   <th scope="col">No</th> 
                   <th scope="col">Judul Proposal</th>  
                   <th scope="col">Nama Mahasiswa</th> 
                   <th scope="col">Nama Dosen Penguji</th>
                   <th scope="col">Tanggal</th>
                   <th scope="col">Aksi</th> 
                   </tr>
                </thead>
                 <tbody>
                  @foreach( $ujianproposal as $ujian)
                 <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $ujian-> judulujian }}</td>
                    <td>{{ $ujian-> mahasiswa-> Nama}}</td>
                    <td>{{ $ujian-> dosen-> Nama}}</td>
                    <td>{{ $ujian-> tanggal }}</td>
                    
                    <td>
                    <a href="{{ route('ujianproposal.edit',$ujian->id) }}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('ujianproposal.destroy',$ujian->id) }}" method="POST" class="d-inline">
                      @csrf
                      {{ method_field('DELETE') }}
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                 </tr>
                 @endforeach
                </tbody>
              </table>


          </div>
      </div>
  </div>
  </body>
  </html>
@endsection
