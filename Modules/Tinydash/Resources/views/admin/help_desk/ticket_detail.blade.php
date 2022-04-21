@extends('layouts.app')

@section('title')
    Ticket Details
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <div class="row align-items-center mb-4">
        <div class="col">
          <h2 class="h5 page-title"><small class="text-muted text-uppercase">Ticket</small><br />#342</h2>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-secondary">Close</button>
          <button type="button" class="btn btn-primary">Assign</button>
        </div>
      </div> <!-- .row -->
      <div class="row my-4">
        <div class="col-md-9">
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Donec id elit non mi porta gravida at eget metus.</strong>
              <span class="float-right"><i class="fe fe-flag mr-2"></i><span class="badge badge-pill badge-success text-white">Payment</span></span>
            </div>
            <div class="card-body">
              <dl class="row align-items-center mb-0">
                <dt class="col-sm-2 mb-3 text-muted">Reported by</dt>
                <dd class="col-sm-4 mb-3">
                  <strong>Brown Asher</strong>
                </dd>
                <dt class="col-sm-2 mb-3 text-muted">Assigned to</dt>
                <dd class="col-sm-4 mb-3">
                  <strong>Kelley Sonya</strong>
                </dd>
              </dl>
              <dl class="row mb-0">
                <dt class="col-sm-2 mb-3 text-muted">Plan</dt>
                <dd class="col-sm-4 mb-3">Basic</dd>
                <dt class="col-sm-2 mb-3 text-muted">Department</dt>
                <dd class="col-sm-4 mb-3">Support</dd>
                <dt class="col-sm-2 mb-3 text-muted">Priority</dt>
                <dd class="col-sm-4 mb-3">
                  <span class="badge badge-pill badge-danger">High</span>
                  <div class="dropdown d-inline">
                    <button class="btn btn-sm p-0 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only">Change Priority</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">High</a>
                      <a class="dropdown-item" href="#">Meddium</a>
                      <a class="dropdown-item" href="#">Low</a>
                    </div>
                  </div>
                </dd>
                <dt class="col-sm-2 mb-3 text-muted">Status</dt>
                <dd class="col-sm-4 mb-3">
                  <span class="dot dot-md bg-warning mr-2"></span> Open <div class="dropdown d-inline">
                    <button class="btn btn-sm p-0 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only">Change status</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Close</a>
                      <a class="dropdown-item" href="#">Assigned</a>
                      <a class="dropdown-item" href="#">Wait</a>
                    </div>
                  </div>
                </dd>
                <dt class="col-sm-2 mb-3 text-muted">Created On</dt>
                <dd class="col-sm-4 mb-3">2020-04-21 00:38:38</dd>
                <dt class="col-sm-2 mb-3 text-muted">Last Update</dt>
                <dd class="col-sm-4 mb-3">2020-04-21 08:48:18</dd>
                <dt class="col-sm-2 text-muted">Description</dt>
                <dd class="col-sm-10"> Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </dd>
              </dl>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Ticket Thread</strong>
              <span class="float-right"><i class="fe fe-message-circle mr-2"></i>4</span>
            </div>
            <div class="card-body">
              <div class="row align-items-center mb-4">
                <div class="col-auto">
                  <div class="avatar avatar-sm mb-3 mx-4">
                    <img src="./assets/avatars/face-3.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>
                </div>
                <div class="col">
                  <strong>Hester Nissim</strong>
                  <div class="mb-2">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</div>
                  <div class="card mb-3 bg-light w-50">
                    <div class="row no-gutters align-items-center">
                      <div class="col-md-2 text-center">
                        <img src="./assets/products/p1.jpg" alt="..." class="img-fluid rounded m-1">
                      </div>
                      <div class="col-md-10">
                        <div class="card-body py-0">
                          <p class="card-title mb-0">New screenshot-12.png</p>
                          <div class="card-text my-0 text-muted small"><span class="mr-2">1.2M</span><span class="mr-2">SVG</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <small class="text-muted">2020-04-21 08:48:18</small>
                </div>
                <div class="col-auto">
                  <span class="circle circle-sm bg-light">
                    <i class="fe fe-corner-down-left"></i>
                  </span>
                </div>
              </div> <!-- .row-->
              <div class="row align-items-center mb-4">
                <div class="col-auto">
                  <div class="avatar avatar-sm mb-3 mx-4">
                    <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                  </div>
                </div>
                <div class="col">
                  <strong>Kelley Sonya</strong>
                  <div class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sollicitudin luctus pretium. <br />Pellentesque porta massa ac nibh finibus iaculis. Maecenas vel interdum urna. Integer auctor ultrices faucibus. Aliquam consequat et ligula nec sodales.</div>
                  <small class="text-muted">2020-04-21 12:01:22</small>
                </div>
                <div class="col-auto">
                  <span class="circle circle-sm bg-light">
                    <i class="fe fe-corner-down-left"></i>
                  </span>
                </div>
              </div> <!-- .row-->
              <hr class="my-4">
              <h6 class="mb-3">Response</h6>
              <form>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1" class="sr-only">Your Message</label>
                  <textarea class="form-control bg-light" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="form-check form-check-inline ml-1">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Email Notification</label>
                  </div>
                  <div class="flex-fill mr-2 text-right">
                    <a href="#" class="btn"><i class="fe fe-upload"></i></a>
                    <a href="#" class="btn"><i class="fe fe-at-sign"></i></a>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
        </div> <!-- .col-md -->
        <div class="col-md-3">
          <div class="card shadow mb-4">
            <div class="card-body">
              <h3 class="h5 mb-1">Integrations</h3>
              <p class="text-muted mb-4">How to integrate the theme?</p>
              <ul class="list-unstyled">
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Lorem ipsum dolor sit amet</li>
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Consectetur adipiscing elit</li>
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Integer molestie lorem</li>
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Facilisis in pretium</li>
                <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Nulla volutpat aliquam velit</li>
              </ul>
            </div>
          </div>
        </div> <!-- .col-md -->
      </div> <!-- .col-md -->
    </div>
  </div> <!-- .col-12 -->  
@endsection
