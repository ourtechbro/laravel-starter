@extends('layouts.app')

@section('title')
    Datamaps
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-10 col-xl-10">
      <h2 class="page-title">Datamaps</h2>
      <p class="text-muted">Customizable SVG map visualizations for the web in a single Javascript file using D3.js</p>
      <div class="row">
        <div class="col-12 mb-4">
          <div class="card shadow">
            <div class="card-body mt-n3">
              <h6 class="card-title my-3">World Datamap</h6>
              <div id="dataMapWorld" style="position: relative; width: 100%; height: 300px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title">USA Datamap</strong>
            </div>
            <div class="card-body my-n3">
              <div id="dataMapUSA" style="position: relative; width: 100%; height: 200px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title">Europe Datamap</strong>
            </div>
            <div class="card-body my-n3">
              <div id="dataMapEurope" style="position: relative; width: 100%; height: 200px;"></div>
            </div>
          </div>
        </div>
      </div> <!-- end section -->
    </div>
  </div> <!-- .row -->
@endsection
@section('scripts')
    <script src="{{ asset('js/d3.min.js') }}"></script>
    <script src="{{ asset('js/topojson.min.js') }}"></script>
    <script src="{{ asset('js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('js/datamaps.custom.js') }}"></script>
@endsection

