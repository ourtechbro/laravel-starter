@extends('layouts.app')

@section('title')
Apexcharts
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <h2 class="h5 page-title">Apexcharts</h2>
      <p class="text-muted">ApexCharts is a modern charting library that helps developers to create beautiful and interactive visualizations for web pages.</p>
      <div class="row">
        <div class="col-12 col-lg-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title mb-0">Column Chart</strong>
            </div>
            <div class="card-body">
              <div id="columnChart"></div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
        <div class="col-12 col-lg-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title mb-0">Bar Chart</strong>
            </div>
            <div class="card-body">
              <div id="barChart"></div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
        <div class="col-12 col-lg-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title mb-0">Line Chart</strong>
            </div>
            <div class="card-body">
              <div id="lineChart"></div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
        <div class="col-12 col-lg-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title mb-0">Area Chart</strong>
            </div>
            <div class="card-body">
              <div id="areaChart"></div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
        <div class="col-12 col-lg-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title mb-0">Heatmap Chart</strong>
            </div>
            <div class="card-body">
              <div id="heatmapChart"></div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
        <div class="col-12 col-lg-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title mb-0">Bubble Chart</strong>
            </div>
            <div class="card-body">
              <div id="bubbleChart"></div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
        <div class="col-12 col-md-3">
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title mb-0">Donut Chart</strong>
            </div>
            <div class="card-body text-center">
              <div id="donutChart"></div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
        <div class="col-12 col-md-3">
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title mb-0">Radar Chart</strong>
            </div>
            <div class="card-body">
              <div id="radarChart"></div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
        <div class="col-12 col-md-6">
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title mb-0">Candle Stick</strong>
            </div>
            <div class="card-body">
              <div id="candleChart"></div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /. col -->
      </div> <!-- end section -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
@endsection
@section('scripts')
    <script src="{{ asset('js/gauge.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.custom.js') }}"></script>
@endsection
