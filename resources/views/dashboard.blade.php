@extends('layouts.app')
@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header card border-bottom">
                <div class="card-block">
                    <h5 class="m-b-10">Selamat Datang {{ Auth::user()->name }}</h5>
                    <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item">
                            <a class="text-decoration-none" href="/dashboard"> <i class="fa fa-home"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Page-header end -->
        </div>
    </div>
@endsection