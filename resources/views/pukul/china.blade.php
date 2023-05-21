@extends('layout.mainlayout')


@section('content')

    <div class="container btn-game" id="btn-game">
        <div class="row">
            <div class="col-12">
                <div class="text-center wrapper-all-doge">
                    <h1>Click to Bonk!</h1>
                    <h3 id="point">0</h3> 
                    <div class="d-flex justify-content-center mt-3 position-relative">
                        <img src="https://i.ibb.co/GFPLz3w/pukul1.png" width="300" class="domge" alt="">
                        <img src="https://i.ibb.co/GVZZdjQ/hit-china.png" class="main-character" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('javascript')
    <script src="{{asset("js/pukul.js")}}"></script>
@endpush