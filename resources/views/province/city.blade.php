@extends('layout.mainlayout')

@section('content')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css">
@endpush

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="text-center mt-5">
                <h1>{{$province->name}}</h1>
                <input type="text" id="capitalCityName" class="form-control mt-4">
                <button class="btn btn-primary fs-s-sm rounded-1 mt-4" id="btnSearchProvince">Submit</button>
            </div>
        </div>
      </div>
</div>

@push('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src=""></script>
  <script src="{{asset('js/main.js')}}"></script>
@endpush

@endsection
