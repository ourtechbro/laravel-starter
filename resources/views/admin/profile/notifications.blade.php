@extends('layouts.app')

@section('title')
    Notifications Settings
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-10 col-xl-8">
      <h2 class="h3 mb-4 page-title">Settings</h2>
      <div class="my-4">
        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Security</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Notifications</a>
          </li>
        </ul>
        <h5 class="mb-0 mt-5">Notifications Settings</h5>
        <p>Select notification you want to receive</p>
        <hr class="my-4">
        <strong class="mb-0">Security</strong>
        <p>Control security alert you will be notified.</p>
        <div class="list-group mb-5 shadow">
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col">
                <strong class="mb-0">Unusual activity notifications</strong>
                <p class="text-muted mb-0">Donec in quam sed urna bibendum tincidunt quis mollis mauris.</p>
              </div> <!-- .col -->
              <div class="col-auto">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="alert1" checked>
                  <span class="custom-control-label"></span>
                </div>
              </div> <!-- .col -->
            </div> <!-- .row -->
          </div> <!-- .list-group-item -->
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col">
                <strong class="mb-0">Unauthorized financial activity</strong>
                <p class="text-muted mb-0">Fusce lacinia elementum eros, sed vulputate urna eleifend nec.</p>
              </div> <!-- .col -->
              <div class="col-auto">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="alert2">
                  <span class="custom-control-label"></span>
                </div>
              </div> <!-- .col -->
            </div> <!-- .row -->
          </div> <!-- .list-group-item -->
        </div> <!-- .list-group -->
        <hr class="my-4">
        <strong class="mb-0">System</strong>
        <p>Please enable system alert you will get.</p>
        <div class="list-group mb-5 shadow">
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col">
                <strong class="mb-0">Notify me about new features and updates</strong>
                <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div> <!-- .col -->
              <div class="col-auto">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="alert3" checked>
                  <span class="custom-control-label"></span>
                </div>
              </div> <!-- .col -->
            </div> <!-- .row -->
          </div> <!-- .list-group-item -->
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col">
                <strong class="mb-0">Notify me by email for latest news</strong>
                <p class="text-muted mb-0">Nulla et tincidunt sapien. Sed eleifend volutpat elementum.</p>
              </div> <!-- .col -->
              <div class="col-auto">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="alert4" checked>
                  <span class="custom-control-label"></span>
                </div>
              </div> <!-- .col -->
            </div> <!-- .row -->
          </div> <!-- .list-group-item -->
          <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col">
                <strong class="mb-0">Notify me about tips on using account</strong>
                <p class="text-muted mb-0">Donec in quam sed urna bibendum tincidunt quis mollis mauris.</p>
              </div> <!-- .col -->
              <div class="col-auto">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="alert5">
                  <span class="custom-control-label"></span>
                </div>
              </div> <!-- .col -->
            </div> <!-- .row -->
          </div> <!-- .list-group-item -->
        </div> <!-- .list-group -->
      </div> <!-- /.card-body -->
    </div> <!-- /.col-12 -->
</div> <!-- .row -->
@endsection
