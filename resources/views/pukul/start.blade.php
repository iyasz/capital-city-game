@extends('layout.mainlayout')

@section('content')

<div class="container overflow-hidden ">
    <div class="row">
        <div class="col-12">
            <div class="text-center">
                <a href="/pukul/jawir" class="btn btn-primary mx-3">Jawir</a>
                <a href="/pukul/china" class="btn btn-primary mx-3">China</a>
                <a href="/pukul/meler" class="btn btn-primary mx-3">Meler</a>
            </div>
        </div>
      </div>
</div>

@push('javascript')
  <script src="{{asset("js/pukul.js")}}"></script>
@endpush

@endsection
