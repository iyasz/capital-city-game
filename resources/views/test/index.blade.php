@extends('layout.mainlayout')

@section('content')
<section id="start">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="header-hero test pt-0">
                    <img src="{{asset('img/test/friend.png')}}" class="mb-3" width="420" alt="">
                    <h1 class="h1-header-hero">Do You Think The Same?</h1>
                    <p class="mt-4 mb-0 opacity-75">Every human being has different thoughts, whether <br> it's in terms of individuals or groups.</p>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center text-space-main">
                    <p class="opacity-50">Click Space Untuk Memulai Permainan</p>
                </div>
            </div>
        </div>
    </div>
</section>
@push('javascript')
  <script src="{{asset("js/test.js")}}"></script>
@endpush

@endsection