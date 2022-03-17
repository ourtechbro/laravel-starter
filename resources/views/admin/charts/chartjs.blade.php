@extends('layouts.app')

@section('title')
    ChartsJs
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <h2 class="h5 page-title">Chartjs</h2>
      <p class="text-muted">Simple yet flexible JavaScript charting for designers & developers</p>
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title mb-0">Bar Chart</strong>
              <div class="dropdown float-right">
                <button class="btn btn-sm btn-link text-muted dropdown-toggle p-0" type="button" id="rangeDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 7 days </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="rangeDropdown">
                  <a class="dropdown-item small text-muted" href="#">30 days</a>
                  <a class="dropdown-item small active" href="#">90 days</a>
                  <a class="dropdown-item small text-muted" href="#">All</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <canvas id="barChartjs" width="400" height="300"></canvas>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title mb-0">Line Chart</strong>
              <span class="badge badge-light float-right mr-2">30 days</span>
              <span class="badge badge-light float-right mr-2">7 days</span>
              <span class="badge badge-secondary float-right mr-2">Today</span>
            </div>
            <div class="card-body">
              <canvas id="lineChartjs" width="400" height="300"></canvas>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
      </div> <!-- end section -->
      <div class="row my-4">
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title mb-0">Pie Chart</strong>
            </div>
            <div class="card-body">
              <canvas id="pieChartjs" width="400" height="300"></canvas>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title mb-0">Area Chart</strong>
            </div>
            <div class="card-body">
              <canvas id="areaChartjs" width="400" height="300"></canvas>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
      </div> <!-- end section -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
@endsection
@section('scripts')
    <script src="{{ asset('js/d3.min.js') }}"></script>
    <script src="{{ asset('js/topojson.min.js') }}"></script>
    <script src="{{ asset('js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('js/datamaps.custom.js') }}"></script>

    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{ asset('js/gauge.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.custom.js') }}"></script>


@endsection
