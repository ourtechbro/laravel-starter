@extends('layouts.app')

@section('title')
    Inline Charts
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-10 mx-auto">
      <h2 class="h5 page-title" id="task-section">Sparkline Charts</h2>
      <p class="text-muted">A jQuery plugin generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript </p>
      <div class="row">
        <div class="col-md-4 my-4">
          <div class="card shadow">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <strong class="card-title">Sparkline Bar</strong>
                  <p class="small mb-0"><span class="fe fe-12 fe-arrow-up text-success"></span><span class="text-muted">37.7%</span></p>
                </div>
                <div class="col-4 text-right">
                  <span class="sparkline inlinebar"></span>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
        <div class="col-md-4 my-4">
          <div class="card shadow">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <strong class="card-title">Sparkline line</strong>
                  <p class="small mb-0"><span class="fe fe-12 fe-arrow-down text-danger"></span><span class="text-muted">-6.8%</span></p>
                </div>
                <div class="col-4 text-right">
                  <span class="sparkline inlineline"></span>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
        <div class="col-md-4 my-4">
          <div class="card shadow">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <strong class="card-title">Sparkline line</strong>
                  <p class="small mb-0"><span class="fe fe-12 fe-arrow-up text-success"></span><span class="text-muted">32.7%</span></p>
                </div>
                <div class="col-4 text-right">
                  <span class="sparkline inlinepie"></span>
                </div>
              </div> <!-- /. row -->
            </div> <!-- /. card-body -->
          </div> <!-- /. card -->
        </div> <!-- /. col -->
      </div> <!-- end section -->
      <h2 class="h5" id="task-section">SVG gauge</h2>
      <p class="text-muted">Minmalistic, configurable, animated SVG gauge. Zero dependencies </p>
      <div class="row">
        <div class="col-md-3 my-4">
          <div class="card shadow">
            <div class="card-body text-center">
              <p class="small mb-3"><strong>CPU</strong></p>
              <div id="gauge1" class="gauge-container mx-auto">
              </div>
            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
        </div> <!-- /. col -->
        <div class="col-md-3 my-4">
          <div class="card shadow">
            <div class="card-body text-center">
              <p class="small mb-3"><strong>RAM</strong></p>
              <div id="gauge2" class="gauge-container mx-auto">
              </div>
            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
        </div> <!-- /. col -->
        <div class="col-md-3 my-4">
          <div class="card shadow">
            <div class="card-body text-center">
              <p class="small mb-3"><strong>Disk</strong></p>
              <div id="gauge3" class="gauge-container g3 mx-auto">
              </div>
            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
        </div> <!-- /. col -->
        <div class="col-md-3 my-4">
          <div class="card shadow">
            <div class="card-body text-center">
              <p class="small mb-3"><strong>Network</strong></p>
              <div id="gauge4" class="gauge-container g4 mx-auto">
                <span class="value-text text-muted small">MB/s</span>
              </div>
            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
        </div> <!-- /. col -->
      </div> <!-- end section -->
      <!-- Apex Radialbar Charts -->
      <h2 class="h5" id="task-section">ApexCharts Radialbars</h2>
      <p class="text-muted">Data can be represented on a radial bar chart in the various formats such as multiple radial bar charts, radial bar with an image, and even in semi-circular gauge forms
      <div class="row">
        <div class="col-md-4 my-4">
          <div class="card shadow">
            <div class="card-body text-center">
              <div id="radialbar"></div>
            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
        </div> <!-- /. col -->
        <div class="col-md-4 my-4">
          <div class="card shadow">
            <div class="card-body text-center">
              <div id="multiRadialbar"></div>
            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
        </div> <!-- /. col -->
        <div class="col-md-4 my-4">
          <div class="card shadow">
            <div class="card-body text-center">
              <div id="customAngle"></div>
            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
        </div> <!-- /. col -->
        <div class="col-md-4 my-4">
          <div class="card shadow">
            <div class="card-body text-center">
              <div id="gradientRadial"></div>
            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
        </div> <!-- /. col -->
        <div class="col-md-4 my-4">
          <div class="card shadow">
            <div class="card-body text-center">
              <div id="strokeRadial"></div>
            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
        </div> <!-- /. col -->
        <div class="col-md-4 my-4">
          <div class="card shadow">
            <div class="card-body text-center">
              <div id="semiRadial"></div>
            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
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
    <script src="{{ asset('js/Chart.min.js') }}"></script>

    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{ asset('js/gauge.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.custom.js') }}"></script>
@endsection