@extends('layouts.app')
@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-header card">
                <div class="card-block">
                    <h5 class="m-b-10">Edit Tugas Santri</h5>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item">
                            <a href="/"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none" href="index">Tugas</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none" href="">Edit Tugas</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-body">
                <div class="card">
                    <div class="card-block">
                        <form action="/tugas/{{ $task->id }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="mb-3 row">
                                <label for="inputJudul" class="col-sm-2 col-form-label">Nama Tugas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('nama_tugas') is-invalid @enderror" id="inputJudul" name="nama_tugas" required autofocus value="{{ old('nama_tugas', $task->nama_tugas) }}">
                                    
                                    @error('nama_tugas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputIsi" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('mata_pelajaran') is-invalid @enderror" id="inputJudul" name="mata_pelajaran" required autofocus value="{{ old('mata_pelajaran', $task->mata_pelajaran) }}">
                                    
                                    @error('mata_pelajaran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputIsi" class="col-sm-2 col-form-label">Pengajar</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control @error('pengajar') is-invalid @enderror" id="inputJudul" name="pengajar" required autofocus value="{{ old('pengajar', $task->pengajar) }}">
                                    
                                    @error('pengajar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="inputPenulis" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control @error('kelas') is-invalid @enderror" id="inputJudul" name="kelas" required autofocus value="{{ old('kelas', $task->kelas) }}">
                                    
                                    @error('kelas')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                           
                           
                            <div class="mb-2 text-end">
                                <button class="btn btn-warning" type="submit">Update</button>
                            </div>
                        </form>    
                    </div>    
                </div>
            </div>
        </div>
    </div>
@endsection