@extends('layouts.app')

@section('title')
    Notifications
@endsection

@section('content')
  <div class="row justify-content-center">
        <div class="col-12 mb-4">
          <h2 class="page-title">Alerts</h2>
          <p class="lead text-muted">This primitive is meant to make it easy to display both user-centric or activity-centric actions in your app. Sometimes it makes sense to even blend both in a single timeline, which works perfectly.</p>
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="card shadow">
                <div class="card-header">
                  <strong class="card-title mb-0">Notifications</strong>
                </div>
                <div class="card-body">
                  <div class="alert alert-primary" role="alert"> A simple primary alert—check it out! </div>
                  <div class="alert alert-secondary" role="alert"> A simple secondary alert—check it out! </div>
                  <div class="alert alert-success" role="alert"> A simple success alert—check it out! </div>
                  <div class="alert alert-danger" role="alert"> A simple danger alert—check it out! </div>
                  <div class="alert alert-warning" role="alert"> A simple warning alert—check it out! </div>
                  <div class="alert alert-info" role="alert"> A simple info alert—check it out! </div>
                  <div class="alert alert-light" role="alert"> A simple light alert—check it out! </div>
                  <div class="alert alert-dark" role="alert"> A simple dark alert—check it out! </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="card shadow">
                <div class="card-header">
                  <strong class="card-title mb-0">Notifications with icons</strong>
                </div>
                <div class="card-body">
                  <div class="alert alert-primary" role="alert">
                    <span class="fe fe-alert-circle fe-16 mr-2"></span> A simple primary alert—check it out! </div>
                  <div class="alert alert-secondary" role="alert">
                    <span class="fe fe-alert-octagon fe-16 mr-2"></span> A simple secondary alert—check it out! </div>
                  <div class="alert alert-success" role="alert">
                    <span class="fe fe-help-circle fe-16 mr-2"></span> A simple success alert—check it out! </div>
                  <div class="alert alert-danger" role="alert">
                    <span class="fe fe-minus-circle fe-16 mr-2"></span> A simple danger alert—check it out! </div>
                  <div class="alert alert-warning" role="alert">
                    <span class="fe fe-alert-triangle fe-16 mr-2"></span> A simple warning alert—check it out! </div>
                  <div class="alert alert-info" role="alert">
                    <span class="fe fe-cpu fe-16 mr-2"></span> A simple info alert—check it out! </div>
                  <div class="alert alert-light" role="alert">
                    <span class="fe fe-link fe-16 mr-2"></span> A simple light alert—check it out! </div>
                  <div class="alert alert-dark" role="alert">
                    <span class="fe fe-meh fe-16 mr-2"></span> A simple dark alert—check it out! </div>
                </div>
              </div>
            </div>
            <div class="col-12 mb-4">
              <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Well done!</h4>
                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
              </div>
            </div>
            <div class="col-12 mb-4">
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </div> <!-- /. col -->
          </div> <!-- end section -->
          <h2>Toasts</h2>
          <p class="lead text-muted"> Push notifications to your visitors with a toast, a lightweight and easily customizable alert message. </p>
          <div class="row">
            <div class="col-md-6 mb-4">
              <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                  <strong class="mr-auto">New update</strong>
                  <small>11 mins ago</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="toast-body"> Hello, world! This is a toast message. </div>
              </div>
            </div>
          </div> <!-- end section -->
        </div> <!-- .row -->
  </div> <!-- .container-fluid -->
@stop
