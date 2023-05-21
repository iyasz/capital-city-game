@extends('layout.mainlayout')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="text-center mt-5">
                    <h1 class="mb-1 text-content-index">YASZ.FUN</h1>
                    <p class="fw-300 opacity-75">a tiny website by iyasz</p>
                </div>
            </div>
            <div class="row justify-content-center mt-4">

                <div class="col-12 col-md-6 col-lg-4 gy-4">
                    <a href="/province/start" class="initial-content w-100">
                        <img src="{{ asset('img/lobby/province.png') }}" class="rounded-4" width="100%" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 gy-4">
                    <a href="/domge/run" class="initial-content w-100">
                        <img src="{{ asset('img/lobby/running.png') }}" class="rounded-4" width="100%" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 gy-4">
                    <a href="/pukul" class="initial-content w-100">
                        <img src="{{ asset('img/lobby/bonk.png') }}" class="rounded-4" width="100%" alt="">
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-4 gy-4">
                    <a href="/test/anime" class="initial-content w-100">
                        <img src="{{ asset('img/lobby/province.png') }}" class="rounded-4" width="100%" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
