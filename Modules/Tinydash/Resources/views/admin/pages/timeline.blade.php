@extends('layouts.app')

@section('title')
   Orders
@endsection
@section('content')
<div class="row justify-content-center">
  <div class="col-12">
    <div class="card card-fill timeline">
      <div class="card-header">
        <strong class="card-title">Recent Activity</strong>
        <a class="float-right small text-muted" href="#!">View all</a>
      </div>
      <div class="card-body">
        <h6 class="text-uppercase text-muted mb-4">Today</h6>
        <div class="pb-3 timeline-item item-primary">
          <div class="pl-5">
            <div class="mb-1"><strong>@Brown Asher</strong><span class="text-muted small mx-2">Just create new layout Index, form, table</span><strong>Tiny Admin</strong></div>
            <p class="small text-muted">Creative Design <span class="badge badge-light">1h ago</span>
            </p>
          </div>
        </div>
        <div class="pb-3 timeline-item item-warning">
          <div class="pl-5">
            <div class="mb-3"><strong>@Hester Nissim</strong><span class="text-muted small mx-2">has upload new files to</span><strong>Tiny Admin</strong></div>
            <div class="row mb-3">
              <div class="col-1"><img src="{{ asset('assets/products/p1.jpg') }}" alt="..." class="img-fluid rounded"></div>
              <div class="col-1"><img src="{{ asset('assets/products/p2.jpg') }}" alt="..." class="img-fluid rounded"></div>
              <div class="col-1"><img src="{{ asset('assets/products/p3.jpg') }}" alt="..." class="img-fluid rounded"></div>
              <div class="col-1"><img src="{{ asset('assets/products/p4.jpg') }}" alt="..." class="img-fluid rounded"></div>
            </div>
            <p class="small text-muted">Front-End Development <span class="badge badge-light">1h ago</span>
            </p>
          </div>
        </div>
        <div class="pb-3 timeline-item item-success">
          <div class="pl-5">
            <div class="mb-3"><strong>@Kelley Sonya</strong><span class="text-muted small mx-2">has commented on</span><strong>Advanced table</strong></div>
            <div class="card d-inline-flex mb-2">
              <div class="card-body bg-light py-2 px-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim nulla eu quam cursus placerat. Vivamus non odio ullamcorper, lacinia ante nec, blandit leo. </div>
            </div>
            </p>
            <p class="small text-muted">Back-End Development <span class="badge badge-light">1h ago</span>
            </p>
          </div>
        </div>
        <h6 class="text-uppercase text-muted mb-4">Yesterday</h6>
        <div class="pb-3 timeline-item item-warning">
          <div class="pl-5">
            <div class="mb-3"><strong>@Fletcher Everett</strong><span class="text-muted small mx-2">created new group for</span><strong>Tiny Admin</strong></div>
            <ul class="avatars-list mb-3">
              <li>
                <a href="#!" class="avatar avatar-sm">
                  <img alt="..." class="avatar-img rounded-circle" src="{{ asset('assets/avatars/face-1.jpg') }}">
                </a>
              </li>
              <li>
                <a href="#!" class="avatar avatar-sm">
                  <img alt="..." class="avatar-img rounded-circle" src="{{ asset('assets/avatars/face-4.jpg') }}">
                </a>
              </li>
              <li>
                <a href="#!" class="avatar avatar-sm">
                  <img alt="..." class="avatar-img rounded-circle" src="{{ asset('assets/avatars/face-3.jpg') }}">
                </a>
              </li>
            </ul>
            <p class="small text-muted">Front-End Development <span class="badge badge-light">1h ago</span>
            </p>
          </div>
        </div>
        <div class="pb-3 timeline-item item-success">
          <div class="pl-5">
            <div class="mb-3"><strong>@Bertha Ball</strong><span class="text-muted small mx-2">has commented on</span><strong>Advanced table</strong></div>
            <div class="card d-inline-flex mb-2">
              <div class="card-body bg-light py-2 px-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim nulla eu quam cursus placerat. Vivamus non odio ullamcorper, lacinia ante nec, blandit leo. </div>
            </div>
            </p>
            <p class="small text-muted">Back-End Development <span class="badge badge-light">1h ago</span>
            </p>
          </div>
        </div>
        <div class="pb-3 timeline-item item-danger">
          <div class="pl-5">
            <div class="mb-3"><strong>@Lillith Joseph</strong><span class="text-muted small mx-2">has upload new files to</span><strong>Tiny Admin</strong></div>
            <div class="row mb-3">
              <div class="col-1"><img src="{{ asset('assets/products/p4.jpg') }}" alt="..." class="img-fluid rounded"></div>
              <div class="col-1"><img src="{{ asset('assets/products/p1.jpg') }}" alt="..." class="img-fluid rounded"></div>
              <div class="col-1"><img src="{{ asset('assets/products/p2.jpg') }}" alt="..." class="img-fluid rounded"></div>
            </div>
            <p class="small text-muted">Front-End Development <span class="badge badge-light">1h ago</span>
            </p>
          </div>
        </div>
      </div> <!-- / .card-body -->
    </div> <!-- / .card -->
  </div> <!-- .col-12 -->
</div> <!-- .row -->
@endsection
