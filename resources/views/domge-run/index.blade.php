@extends('layout.mainlayout')

@section('content')

<div class="container  ">
    <div class="row">
        <div class="col-12">
            
        </div>
      </div>
</div>

@push('css')
  <link rel="stylesheet" href="/jqvmap/dist/jqvmap.min.css">
@endpush

@push('javascript')
  <script src="{{asset("js/domge.js")}}"></script>
@endpush

@endsection
