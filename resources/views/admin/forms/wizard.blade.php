@extends('layouts.app')

@section('title')
    Wizard
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/select2.css') }}">
<link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
<link rel="stylesheet" href="{{ asset('css/uppy.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.steps.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
<link rel="stylesheet" href="{{ asset('css/quill.snow.css') }}">
@endsection
@section('content')
<div class="row justify-content-center">
  <div class="col-12 col-lg-10">
    <h2 class="page-title">Form Wizard</h2>
    <p>Using jQuery Steps as default wizard plugin. That is an extremely flexible, compact and feature-rich plugin.</p>
    <div class="card my-4">
      <div class="card-header">
        <strong>Basic</strong>
      </div>
      <div class="card-body">
        <div id="example-basic">
          <h3>Keyboard</h3>
          <section>
            <p>Try the keyboard navigation by clicking arrow left or right!</p>
          </section>
          <h3>Effects</h3>
          <section>
            <p>Wonderful transition effects.</p>
          </section>
          <h3>Pager</h3>
          <section>
            <p>The next and previous buttons help you to navigate through your content.</p>
          </section>
        </div>
      </div> <!-- .card-body -->
    </div> <!-- .card -->
    <div class="card my-4">
      <div class="card-header">
        <strong>Vertical</strong>
      </div>
      <div class="card-body">
        <div id="example-vertical">
          <h3>Keyboard</h3>
          <section>
            <p>Try the keyboard navigation by clicking arrow left or right!</p>
          </section>
          <h3>Effects</h3>
          <section>
            <p>Wonderful transition effects.</p>
          </section>
          <h3>Pager</h3>
          <section>
            <p>The next and previous buttons help you to navigate through your content.</p>
          </section>
        </div>
      </div> <!-- .card-body -->
    </div> <!-- .card -->
    <div class="card my-4">
      <div class="card-header">
        <strong>Validation</strong>
      </div>
      <div class="card-body">
        <form id="example-form" action="#">
          <div>
            <h3>Account</h3>
            <section>
              <div class="form-group">
                <label for="userName">User name *</label>
                <input id="userName" name="userName" type="text" class="form-control required">
              </div>
              <div class="form-group">
                <label for="password">Password *</label>
                <input id="password" name="password" type="text" class="form-control required">
              </div>
              <div class="form-group">
                <label for="confirm">Confirm Password *</label>
                <input id="confirm" name="confirm" type="text" class="form-control required">
              </div>
              <div class="help-text text-muted">(*) Mandatory</div>
            </section>
            <h3>Profile</h3>
            <section>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">First name *</label>
                  <input id="name" name="name" type="text" class="form-control required">
                </div>
                <div class="form-group col-md-6">
                  <label for="surname">Last name *</label>
                  <input id="surname" name="surname" type="text" class="form-control required">
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input id="email" name="email" type="text" class="form-control required email">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input id="address" name="address" class="form-control" type="text">
              </div>
              <div class="help-text text-muted">(*) Mandatory</div>
            </section>
            <h3>Hints</h3>
            <section>
              <ul class="ml-5">
                <li>Foo</li>
                <li>Bar</li>
                <li>Foobar</li>
              </ul>
            </section>
            <h3>Finish</h3>
            <section>
              <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
            </section>
          </div>
        </form>
      </div> <!-- .card-body -->
    </div> <!-- .card -->
  </div> <!-- .col-12 -->
</div> <!-- .row -->
@endsection
@section('scripts')
<script src="{{ asset('js/jquery.steps.min.js') }}"></script>
@endsection