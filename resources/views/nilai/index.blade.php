@extends('layouts.app')
@section('content')

<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card border-bottom">
            <div class="card-block">
                <h5 class="m-b-10">Tabel Nilai Santri</h5>
                <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <ul class="breadcrumb-title b-t-default p-t-10">
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none" href="/dashboard"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a class="text-decoration-none"  href="/nilai">nilai</a>
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
                        @can('admin')
                            <div class="col-lg-1 mt-0">
                                <a href="/nilai/create" class="btn btn-warning rounded"><i class="ti-plus"></i></a>
                            </div>
                        @endcan
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
                <div class=" card-block table-border-style">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="fs-6 fw-bold">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Santri</th>
                                    <th>Kelas</th>
                                    <th>Mata Pelajaran</th>
                                    <th>Nilai</th>
                                    <th>Pengajar</th>
                                    @can('admin')
                                    <th>Action</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody class="border-bottom-2 border-dashed fs-9 fw-light align-middle">
                                @php
                                    $i = 1 ; 
                                @endphp
                                @foreach ($values as $value)
                                <tr>
                                    <th scope="row"> {{ $i++ }}</th>
                                    <th>{{ $value->nama_santri }}</th>
                                    <th>{{ $value->kelas }}</th>
                                    <th>{{ $value->mata_pelajaran }}</th>
                                    <th>{{ $value->nilai }}</th>
                                    <th>{{ $value->pengajar }}</th>
                                    <th>
                                        @can('admin')
                                            <a href="/nilai/{{ $value->id }}/edit" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                            <form action="/nilai/{{ $value->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger" onclick="return confirm('Yakin mau menghapus data')"><i class="fa fa-trash"></i></button>
                                            </form>
                                        @endcan
                                    </th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example  ">
                        <ul class="pagination pt-3">
                            {{-- <li class="page-item ">
                                <a class="page-link" href="{{ $madidas->previousPageUrl() }}"> Previous</a>
                                <a href="{{ $madidas->previousPageUrl() }}"></a>
                            </li>
                            @for($i=1;$i<= $madidas->lastPage();$i++)
                            <li class="page-item {{ Request::input('page') == $i ? 'active' : '' }}">
                                <a class="page-link" href="{{$madidas->url($i)}}">{{$i}}</a>
                            </li>
                            @endfor
                            <li class="page-item">
                                <a class="page-link" href="{{$madidas->nextPageUrl()}}">Next</a>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Basic table card end -->
        </div>
        <!-- Page-body end -->
    </div>
</div>
@endsection