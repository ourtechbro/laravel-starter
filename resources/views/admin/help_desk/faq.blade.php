@extends('layouts.app')

@section('title')
   Support FAQ
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12 col-lg-10 col-xl-12">
      <div class="row mt-4">
        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3 text-center">
                  <span class="circle circle-md bg-primary">
                    <span class="fe fe-briefcase fe-24 text-white"></span>
                  </span>
                </div>
                <div class="col">
                  <h3 class="h6 mb-0 text-uppercase">General</h3>
                  <p class="small text-muted mb-0">Popular questions</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3 text-center">
                  <span class="circle circle-md bg-success">
                    <span class="fe fe-shopping-bag fe-24 text-white"></span>
                  </span>
                </div>
                <div class="col">
                  <h3 class="h6 mb-0 text-uppercase">Orders</h3>
                  <p class="small text-muted mb-0">Orders proccesing</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3 text-center">
                  <span class="circle circle-md bg-warning">
                    <span class="fe fe-truck fe-24 text-white"></span>
                  </span>
                </div>
                <div class="col">
                  <h3 class="h6 mb-0 text-uppercase">Shipment</h3>
                  <p class="small text-muted mb-0">Shipping problems</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col-3 text-center">
                  <span class="circle circle-md bg-secondary">
                    <span class="fe fe-package fe-24 text-white"></span>
                  </span>
                </div>
                <div class="col">
                  <h3 class="h6 mb-0 text-uppercase">Return</h3>
                  <p class="small text-muted mb-0">Returning item</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end section -->
      <div class="row my-4">
        <div class="col-md-6">
          <div class="accordion w-100" id="accordion1">
            <div class="card shadow">
              <div class="card-header" id="heading1">
                <a role="button" href="#collapse1" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                  <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong>
                </a>
              </div>
              <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion1">
                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="heading2">
                <a role="button" href="#collapse2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                  <strong>Dignissim suspendisse in est ante?</strong>
                </a>
              </div>
              <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion1">
                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="heading3">
                <a role="button" href="#collapse3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                  <strong>Sapien et ligula ullamcorper malesuada proin?</strong>
                </a>
              </div>
              <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion1">
                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </div>
              </div>
            </div>
          </div>
        </div> <!-- /.col -->
        <div class="col-md-6">
          <div class="accordion w-100" id="accordion2">
            <div class="card shadow">
              <div class="card-header" id="heading4">
                <a role="button" href="#collapse4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                  <strong>Massa eget egestas purus viverra accumsan in nisl?</strong>
                </a>
              </div>
              <div id="collapse4" class="collapse show" aria-labelledby="heading4" data-parent="#accordion2">
                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="heading5">
                <a role="button" href="#collapse5" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                  <strong>Augue lacus viverra vitae congue eu?</strong>
                </a>
              </div>
              <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion2">
                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="heading6">
                <a role="button" href="#collapse6" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                  <strong>Pharetra massa massa ultricies mi quis?</strong>
                </a>
              </div>
              <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion2">
                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </div>
              </div>
            </div>
          </div>
        </div> <!-- /.col -->
      </div> <!-- end section -->
      <div class="row my-4">
        <div class="col-md-6">
          <div class="accordion w-100" id="accordion3">
            <div class="card shadow">
              <div class="card-header" id="heading7">
                <a role="button" href="#collapse7" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                  <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</strong>
                </a>
              </div>
              <div id="collapse7" class="collapse show" aria-labelledby="heading7" data-parent="#accordion3">
                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="heading8">
                <a role="button" href="#collapse8" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                  <strong>Dignissim suspendisse in est ante?</strong>
                </a>
              </div>
              <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion3">
                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="heading9">
                <a role="button" href="#collapse9" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                  <strong>Sapien et ligula ullamcorper malesuada proin?</strong>
                </a>
              </div>
              <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion3">
                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </div>
              </div>
            </div>
          </div>
        </div> <!-- /.col -->
        <div class="col-md-6">
          <div class="accordion w-100" id="accordion4">
            <div class="card shadow">
              <div class="card-header" id="heading10">
                <a role="button" href="#collapse10" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                  <strong>Massa eget egestas purus viverra accumsan in nisl?</strong>
                </a>
              </div>
              <div id="collapse10" class="collapse show" aria-labelledby="heading10" data-parent="#accordion4">
                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="heading11">
                <a role="button" href="#collapse11" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                  <strong>Augue lacus viverra vitae congue eu?</strong>
                </a>
              </div>
              <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion4">
                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </div>
              </div>
            </div>
            <div class="card shadow">
              <div class="card-header" id="heading12">
                <a role="button" href="#collapse12" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                  <strong>Pharetra massa massa ultricies mi quis?</strong>
                </a>
              </div>
              <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion4">
                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </div>
              </div>
            </div>
          </div>
        </div> <!-- /.col -->
      </div> <!-- end section -->
    </div> <!-- /.col -->
  </div> <!-- .row -->
@endsection
