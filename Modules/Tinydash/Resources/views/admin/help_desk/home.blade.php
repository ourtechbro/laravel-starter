@extends('layouts.app')

@section('title')
   Home
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <div class="w-50 mx-auto text-center justify-content-center py-5 my-5">
        <h2 class="page-title mb-0">How can we help?</h2>
        <p class="lead text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <form class="searchform searchform-lg">
          <input class="form-control form-control-lg bg-white rounded-pill pl-5" type="search" placeholder="Search" aria-label="Search">
          <p class="help-text mt-2 text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </form>
      </div>
      <div class="row my-4">
        <div class="col-6 col-lg-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <i class="fe fe-info fe-32 text-primary"></i>
              <a href="#">
                <h3 class="h5 mt-4 mb-1">Getting start</h3>
              </a>
              <p class="text-muted">Start working with theme</p>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
        </div> <!-- .col-md-->
        <div class="col-6 col-lg-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <i class="fe fe-help-circle fe-32 text-success"></i>
              <a href="./page-faqs.html">
                <h3 class="h5 mt-4 mb-1">FAQs</h3>
              </a>
              <p class="text-muted">Frequently asked questions</p>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
        </div> <!-- .col-md-->
        <div class="col-6 col-lg-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <i class="fe fe-globe fe-32 text-warning"></i>
              <a href="#">
                <h3 class="h5 mt-4 mb-1">Knowledge Base</h3>
              </a>
              <p class="text-muted">Learn more about products?</p>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
        </div> <!-- .col-md-->
        <div class="col-6 col-lg-3">
          <div class="card shadow">
            <div class="card-body">
              <i class="fe fe-alert-triangle fe-32 text-danger"></i>
              <a href="#">
                <h3 class="h5 mt-4 mb-1">Reporting</h3>
              </a>
              <p class="text-muted">Report a bug</p>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
        </div> <!-- .col-md-->
      </div> <!-- .row -->
      <div class="my-5 p-5">
        <div class="text-center">
          <h2 class="mb-0">Knowledge Base</h2>
          <p class="lead text-muted mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row my-5">
          <div class="col-md-4">
            <h3 class="h5 mt-4 mb-1">Getting start</h3>
            <p class="text-muted mb-4">Start working with theme</p>
            <ul class="list-unstyled">
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Lorem ipsum dolor sit amet</li>
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Consectetur adipiscing elit</li>
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Integer molestie lorem at massa</li>
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Facilisis in pretium nisl aliquet</li>
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Nulla volutpat aliquam velit</li>
            </ul>
          </div> <!-- .col-md-->
          <div class="col-md-4">
            <h3 class="h5 mt-4 mb-1">Integrations</h3>
            <p class="text-muted mb-4">How to integrate the theme?</p>
            <ul class="list-unstyled">
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Lorem ipsum dolor sit amet</li>
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Consectetur adipiscing elit</li>
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Integer molestie lorem at massa</li>
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Facilisis in pretium nisl aliquet</li>
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Nulla volutpat aliquam velit</li>
            </ul>
          </div> <!-- .col-md-->
          <div class="col-md-4">
            <h3 class="h5 mt-4 mb-1">Reporting</h3>
            <p class="text-muted mb-4">Report a bug or request a feature</p>
            <ul class="list-unstyled">
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Lorem ipsum dolor sit amet</li>
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Consectetur adipiscing elit</li>
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Integer molestie lorem at massa</li>
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Facilisis in pretium nisl aliquet</li>
              <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Nulla volutpat aliquam velit</li>
            </ul>
          </div> <!-- .col-md-->
        </div> <!-- .row -->
      </div>
      <div class="row my-4">
        <div class="col-md-6">
          <div class="card shadow bg-primary text-center mb-4">
            <div class="card-body p-5">
              <span class="circle circle-md bg-primary-light">
                <i class="fe fe-navigation fe-24 text-white"></i>
              </span>
              <h3 class="h4 mt-4 mb-1 text-white">Sumit a ticket</h3>
              <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              <a href="#" class="btn btn-lg bg-primary-light text-white">New Ticket<i class="fe fe-arrow-right fe-16 ml-2"></i></a>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
        </div> <!-- .col-md-->
        <div class="col-md-6">
          <div class="card shadow bg-success text-center mb-4">
            <div class="card-body p-5">
              <span class="circle circle-md bg-success-light">
                <i class="fe fe-message-circle fe-24 text-white"></i>
              </span>
              <h3 class="h4 mt-4 mb-1 text-white">Live chart</h3>
              <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
              <a href="#" class="btn btn-lg bg-success-light text-white">Let chat<i class="fe fe-arrow-right fe-16 ml-2"></i></a>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
        </div> <!-- .col-md-->
      </div> <!-- .row -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
@endsection
