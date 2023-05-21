@extends('layout.mainlayout')

@section('content')

<div class="container mt-5 ">
    <div class="row justify-content-center ">
      <div class="col-12 mt-5">
        <div class="text-center mb-4">
          <h1>Choose Your Type</h1>
        </div>
      </div>
      <div class="col-3">
        <a href="/pukul/jawir" class="btn btn-primary btn-pukul border-0 w-100 rounded-0 py-3 mx-3">Jawir</a>
      </div>
      <div class="col-3">
        <a href="/pukul/china" class="btn btn-primary btn-pukul border-0 w-100 rounded-0 py-3 mx-3">John China</a>
      </div>
      <div class="col-3">
        <a href="/pukul/meler" class="btn btn-primary btn-pukul border-0 w-100 rounded-0 py-3 mx-3">Meler</a>
      </div>
        <div class="col-12">
        </div>
      </div>
</div>

@push('javascript')
  <script src="{{asset("js/pukul.js")}}"></script>
@endpush

@endsection
