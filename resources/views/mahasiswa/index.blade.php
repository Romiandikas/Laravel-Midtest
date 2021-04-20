@extends('layout/main')

@section('title', 'Daftar Mahasiswa')

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
              <h1 class="mt-10">DAFTAR MAHASISWA</h1>
              </center>

              <a  href="{{ route('mahasiswa.create') }}" class="btn btn-dark my-2">TAMBAH DATA</a>
              @if (session('status'))
                 <div class="alert alert-success">
                 {{ session('status') }}
                </div>
                    @endif
              <table class="table table-striped table-dark">
                <thead class="thead-warning">
                   <tr>
                   <th scope="col">No</th> 
                   <th scope="col">NIM</th> 
                   <th scope="col">Nama Mahasiswa</th>  
                   <th scope="col">Alamat</th> 
                   <th scope="col">Telepon</th> 
                   <th scope="col">Aksi</th> 
                   </tr>
                </thead>
                 <tbody>
                  @foreach( $mahasiswa as $mhs)
                 <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $mhs-> NIM }}</td>
                    <td>{{ $mhs-> Nama }}</td>
                    <td>{{ $mhs-> Alamat }}</td>
                    <td>{{ $mhs-> Telepon }}</td>
                    
                    <td>
                    <a href="{{ route('mahasiswa.edit',$mhs->id) }}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('mahasiswa.destroy',$mhs->id) }}" method="POST" class="d-inline">
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
