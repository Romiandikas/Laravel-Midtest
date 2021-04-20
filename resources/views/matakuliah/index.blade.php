@extends('layout/main')

@section('title', 'Daftar Matakuliah')

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
              <h1 class="mt-10">DAFTAR MATAKULIAH</h1>
              </center>

              <a  href="{{ route('matakuliah.create') }}" class="btn btn-dark my-2">TAMBAH DATA</a>
              @if (session('status'))
                 <div class="alert alert-success">
                 {{ session('status') }}
                </div>
                    @endif
              <table class="table table-striped table-dark">
                <thead class="thead-warning">
                   <tr>
                   <th scope="col">No</th> 
                   <th scope="col">Mata Kuliah</th>  
                   <th scope="col">SKS</th> 
                   <th scope="col">Semester</th> 
                   <th scope="col">Aksi</th> 
                   </tr>
                </thead>
                 <tbody>
                  @foreach( $matakuliah as $matkul)
                 <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $matkul-> matakuliah }}</td>
                    <td>{{ $matkul-> SKS }}</td>
                    <td>{{ $matkul-> Semester }}</td>
                    
                    <td>
                    <a href="{{ route('matakuliah.edit',$matkul->id) }}" class="btn btn-warning">Edit</a>

                    <form action="{{ route('matakuliah.destroy',$matkul->id) }}" method="POST" class="d-inline">
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
