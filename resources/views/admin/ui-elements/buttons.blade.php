@extends('layouts.app')

@section('title')
    Buttons
@endsection

@section('content')
  <div class="row justify-content-center">
    <div class="col-12">
      <h2 class="page-title">Buttons</h2>
      <p class="lead text-muted">This primitive is meant to make it easy to display both user-centric or activity-centric actions in your app. Sometimes it makes sense to even blend both in a single timeline, which works perfectly.</p>
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title">Buttons</strong>
            </div>
            <div class="card-body">
              <p class="text-muted">Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
              <div class="mb-2">
                <button type="button" class="btn mb-2 btn-primary">Primary</button>
                <button type="button" class="btn mb-2 btn-secondary">Secondary</button>
                <button type="button" class="btn mb-2 btn-success">Success</button>
                <button type="button" class="btn mb-2 btn-danger">Danger</button>
                <button type="button" class="btn mb-2 btn-warning">Warning</button>
                <button type="button" class="btn mb-2 btn-info">Info</button>
                <button type="button" class="btn mb-2 btn-light">Light</button>
                <button type="button" class="btn mb-2 btn-dark">Dark</button>
                <button type="button" class="btn mb-2 btn-link">Link</button>
              </div>
            </div> <!-- /. card-body -->
          </div> <!-- /. card-body -->
        </div> <!-- /. col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title">Outline buttons</strong>
            </div>
            <div class="card-body">
              <p class="text-muted">Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
              <div class="mb-2">
                <button type="button" class="btn mb-2 btn-outline-primary">Primary</button>
                <button type="button" class="btn mb-2 btn-outline-secondary">Secondary</button>
                <button type="button" class="btn mb-2 btn-outline-success">Success</button>
                <button type="button" class="btn mb-2 btn-outline-danger">Danger</button>
                <button type="button" class="btn mb-2 btn-outline-warning">Warning</button>
                <button type="button" class="btn mb-2 btn-outline-info">Info</button>
                <button type="button" class="btn mb-2 btn-outline-light">Light</button>
                <button type="button" class="btn mb-2 btn-outline-dark">Dark</button>
                <button type="button" class="btn mb-2 btn-outline-link">Link</button>
              </div>
            </div> <!-- /. card-body -->
          </div> <!-- /. card-body -->
        </div> <!-- /. col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title">Buttons sizes</strong>
            </div>
            <div class="card-body">
              <p class="text-muted">Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
              <button type="button" class="btn mb-2 btn-secondary btn-lg">Large button</button>
              <button type="button" class="btn mb-2 btn-secondary ">Default Button</button>
              <button type="button" class="btn mb-2 btn-secondary btn-sm">Small Button</button>
            </div> <!-- /. card-body -->
          </div> <!-- /. card-body -->
        </div> <!-- /. col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title">Buttons State</strong>
            </div>
            <div class="card-body">
              <p class="text-muted">Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
              <div class="mb-2">
                <button type="button" class="btn mb-2 btn-outline-primary active">Active</button>
                <button type="button" class="btn mb-2 btn-outline-primary" disabled>Disabled</button>
              </div>
            </div> <!-- /. card-body -->
          </div> <!-- /. card-body -->
        </div> <!-- /. col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title">Button group</strong>
            </div>
            <div class="card-body">
              <p class="text-muted">Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn mb-2 btn-secondary">Left</button>
                <button type="button" class="btn mb-2 btn-secondary">Middle</button>
                <button type="button" class="btn mb-2 btn-secondary">Right</button>
              </div>
            </div> <!-- /. card-body -->
          </div> <!-- /. card-body -->
        </div> <!-- /. col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title">Button toolbar</strong>
            </div>
            <div class="card-body">
              <p class="text-muted">Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                  <button type="button" class="btn mb-2 btn-secondary">1</button>
                  <button type="button" class="btn mb-2 btn-secondary">2</button>
                  <button type="button" class="btn mb-2 btn-secondary">3</button>
                  <button type="button" class="btn mb-2 btn-secondary">4</button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                  <button type="button" class="btn mb-2 btn-secondary">5</button>
                  <button type="button" class="btn mb-2 btn-secondary">6</button>
                  <button type="button" class="btn mb-2 btn-secondary">7</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                  <button type="button" class="btn mb-2 btn-secondary">8</button>
                </div>
              </div>
            </div> <!-- /. card-body -->
          </div> <!-- /. card-body -->
        </div> <!-- /. col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title">Icon buttons</strong>
            </div>
            <div class="card-body">
              <p class="text-muted">Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
              <div class="mb-2">
                <button type="button" class="btn mb-2 btn-primary"><span class="fe fe-arrow-right fe-16 mr-2"></span>Primary</button>
                <button type="button" class="btn mb-2 btn-success">Success<span class="fe fe-chevron-right fe-16 ml-2"></span></button>
                <button type="button" class="btn mb-2 btn-secondary"><span class="fe fe-download fe-16"><span></button>
              </div>
              <div class="mb-2">
                <button type="button" class="btn mb-2 btn-outline-primary"><span class="fe fe-arrow-right fe-16 mr-2"></span>Primary</button>
                <button type="button" class="btn mb-2 btn-outline-secondary"><span class="fe fe-arrow-down fe-16 mr-2"></span>Secondary</button>
                <button type="button" class="btn mb-2 btn-outline-success"><span class="fe fe-upload-cloud fe-16"></span></button>
              </div>
            </div> <!-- /. card-body -->
          </div> <!-- /. card-body -->
        </div> <!-- /. col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title">Block level buttons</strong>
            </div>
            <div class="card-body">
              <p class="text-muted">Bootstrap includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</p>
              <button type="button" class="btn mb-2 btn-primary btn-lg btn-block">Block level button</button>
              <button type="button" class="btn mb-2 btn-secondary btn-lg btn-block">Block level button</button>
            </div> <!-- /. card-body -->
          </div> <!-- /. card-body -->
        </div> <!-- /. col -->
      </div> <!-- end section -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
@stop
