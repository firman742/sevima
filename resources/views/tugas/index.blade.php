@extends('layouts.app')
@section('content')

<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card border-bottom">
            <div class="card-block">
                <h5 class="m-b-10">Tabel Tugas Santri</h5>
                <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <ul class="breadcrumb-title b-t-default p-t-10">
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none" href="/dashboard"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none"  href="/nilai">Tugas</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page-header end -->

        <!-- Alert Success -->
        @if (session()->has('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"><i class="ti-close"></i></button>
              </div>
        @endif

        <!-- Alert Gagal -->
        @if (session()->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('delete') }}
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"><i class="ti-close"></i></button>
            </div>
        @endif

        <!-- Page-body start -->
        <div class="page-body">
            <!-- Basic table card start -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-1 mt-0">
                            <a href="/tugas/create" class="btn btn-warning rounded"><i class="ti-plus"></i></a>
                        </div>
                        <div class="col-lg-11 mt-0">
                           
                        </div>
                    </div>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa-chevron-left"></i></li>
                            <li><i class="fa fa-window-maximize full-card"></i></li>
                            <li><i class="fa fa-minus minimize-card"></i></li>
                            <li><i class="fa fa-refresh reload-card"></i></li>
                            <li><i class="fa fa-times close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="fs-6 fw-bold">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tugas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Pengajar</th>
                                    <th>Kelas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="border-bottom-2 border-dashed fs-9 fw-light align-middle">
                                @php
                                    $i = 1 ; 
                                @endphp
                                @foreach ($tasks as $task)
                                <tr>
                                    <th scope="row"> {{ $i++ }}</th>
                                    <th>{{ $task->nama_tugas }}</th>
                                    <th>{{ $task->mata_pelajaran }}</th>
                                    <th>{{ $task->pengajar }}</th>
                                    <th>{{ $task->kelas }}</th>
                                    <th>
                                        <a href="/tugas/{{ $task->id }}/edit" class="btn btn-success rounded "><i class="fa fa-edit"></i></a>
                                        <form action="/tugas/{{ $task->id }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger rounded" onclick="return confirm('Yakin mau menghapus data')"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Basic table card end -->
        </div>
        <!-- Page-body end -->
    </div>
</div>
@endsection