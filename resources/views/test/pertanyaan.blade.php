@extends('layout.mainlayout')

@section('content')
    <div class="container mt-5">
        <div class="row ">
            <div class="col-12 text-center">
                <h3 class="text-muted">{{$pertanyaan->soal}}</h3>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6 col-lg-6 text-center gy-3">
                    <a href="/anime" class="text-decoration-none">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body mt-2 text-center">
                                 <img src="{{asset('img/test/friend.png')}}" class="mb-3" width="250" alt="">
                                <p class="h4 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni aut quos tempora neque.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-6 col-lg-6 text-center gy-3">
                    <a href="/anime" class="text-decoration-none">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body mt-2 text-center">
                                 <img src="{{asset('img/test/friend.png')}}" class="mb-3" width="250" alt="">
                                <p class="h4 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni aut quos tempora neque.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="answer-fixed w-100 d">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h4>72% of people agree with you, 28% disagree (4,105,773 votes) <a href="" class="btn btn-primary ms-3">Next</a></h4>
                </div>
            </div>
        </div>
    </section>
@push('javascript')
  <script src="{{asset("js/test.js")}}"></script>
@endpush

@endsection 