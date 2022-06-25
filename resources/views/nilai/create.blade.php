@extends('layouts.app')
@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header card">
                <div class="card-block">
                    <h5 class="m-b-10">Tambah Nilai Santri</h5>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item">
                            <a href="/"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none" href="index">Nilai</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none" href="">Tambah Nilai</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-body">
                <div class="card">
                    <div class="card-block">
                        <div class="border border-dashed p-10">
                            <form action="/nilai" method="post" enctype="multipart/form-data ">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="inputJudul" class="col-sm-2 col-form-label">Nama Santri</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('nama_santri') is-invalid @enderror" id="inputJudul" name="nama_santri" required autofocus value="{{ old('nama_santri') }}">
                                        
                                        @error('nama_santri')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputPenulis" class="col-sm-2 col-form-label">Kelas</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control @error('kelas') is-invalid @enderror" id="inputJudul" name="kelas" required autofocus value="{{ old('kelas') }}">
                                        
                                        @error('kelas')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="image" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('mata_pelajaran') is-invalid @enderror" id="inputJudul" name="mata_pelajaran" required autofocus value="{{ old('mata_pelajaran') }}">
                                        
                                        @error('mata_pelajaran')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            
                                <div class="mb-3 row">
                                    <label for="inputKategori" class="col-sm-2 col-form-label">Nilai</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control @error('nilai') is-invalid @enderror" id="inputJudul" name="nilai" required autofocus value="{{ old('nilai') }}">
                                        
                                        @error('nilai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputIsi" class="col-sm-2 col-form-label">Pengajar</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('pengajar') is-invalid @enderror" id="inputJudul" name="pengajar" required autofocus value="{{ old('pengajar') }}">
                                        
                                        @error('pengajar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="mb-2 text-end">
                                    <button class="btn btn-warning" type="submit">kirim</button>
                                </div>
                            </form>     
                        </div>   
                    </div>    
                </div>
            </div>
        </div>
    </div>
@endsection