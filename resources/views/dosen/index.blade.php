@extends('layout/main')

@section('title', 'Daftar Dosen')

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
              <h1 class="mt-10">DAFTAR DOSEN</h1>
              </center>

              <a  href="{{ route('dosen.create') }}" class="btn btn-dark my-2">TAMBAH DATA</a>
              @if (session('status'))
                 <div class="alert alert-success">
                 {{ session('status') }}
                </div>
                    @endif
              <table class="table table-striped table-dark">
                <thead class="thead-warning">
                   <tr>
                   <th scope="col">No</th> 
                   <th scope="col">NIP</th> 
                   <th scope="col">NIDN</th>  
                   <th scope="col">Nama Dosen</th> 
                   <th scope="col">Email</th> 
                   <th scope="col">Aksi</th> 
                   </tr>
                </thead>
                 <tbody>
                  @foreach( $dosen as $dsn)
                 <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $dsn-> NIP }}</td>
                    <td>{{ $dsn-> NIDN }}</td>
                    <td>{{ $dsn-> Nama }}</td>
                    <td>{{ $dsn-> Email }}</td>
                    
                    <td>
                    <a href="{{ route('dosen.edit',$dsn->id) }}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('dosen.destroy',$dsn->id) }}" method="POST" class="d-inline">
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
