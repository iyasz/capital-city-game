@extends('layout.mainlayout')

@section('content')
<section id="start">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="header-hero">
                    <h1 class="h1-header-hero">Guess the Province <br> of <span>Indonesia <img src="https://quizizz.com/wf/assets/62fa6419161d3ab145681ca9_Red_420px_Line.svg" width="300"></span></h1>
                    <p class="mt-4 opacity-75">In the Indonesian province guessing game, players can <br> practice the ability to recognize the name and location of the province. </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                <div class="hero-header-button">
                    <a href="/province" class="btn btn-primary w-100 start-button-header py-3 rounded-1 border-0">MULAI <i class="bi bi-caret-right"></i></a>
                    <div class="back-shadow-button w-100 py-3 rounded-1 border-0"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection