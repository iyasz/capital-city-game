@extends('layout.mainlayout')

@section('content')

<div class="container overflow-hidden ">
    <div class="row">
        <div class="col-12">
          <div style="height: 100vh; width: 100%" id="visitorMap3"></div>
        </div>
      </div>
</div>

@push('css')
  <link rel="stylesheet" href="/jqvmap/dist/jqvmap.min.css">
@endpush

@push('javascript')
  <script src="/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script>
@endpush

@endsection
