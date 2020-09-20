@extends('layout/main')

@section('title-page', 'Ubah Data  Mahasiswa')

@section('container')
  <div class="container">
      <div class="row">
      <div class="col-6">
          <h1 class="mt-4">Form Ubah Data Mahasiswa</h1>
          <form method="post" action="/students/{{$student->id}}">
          @method('patch');
          @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="formGroupExampleInput" placeholder="Masukkan Nama" name="nama" value="{{$student->nama}}">
                @error('nama')
                <div class="invalid-feedback">
                    {{$message}} 
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control @error('NIM ') is-invalid @enderror" id="formGroupExampleInput" placeholder="Masukkan NIM" name="NIM" value="{{$student->NIM}}">
                @error('NIM')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="formGroupExampleInput" placeholder="Masukkan Email" name="email" value="{{$student->email}}">
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="formGroupExampleInput" placeholder="Masukkan Jurusan" name="jurusan" value="{{$student->jurusan}}">
                @error('jurusan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <button class="btn btn-primary mt-3">Ubah Data</button>
          </form>
           </div>
      </div>
  </div>
@endsection

