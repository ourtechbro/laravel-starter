@extends('layouts.app')

@section('title')
   Support Tickets
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <h2 class="h3 mb-0 page-title">Tickets</h2>
      <div class="row align-items-center my-4">
        <div class="col-md-6">
          <div id="chart-box">
            <div id="donutChartWidget"></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row align-items-center my-2">
            <div class="col">
              <strong>Completed</strong><br / />
              <span class="my-0 text-muted small">+85%</span>
            </div>
            <div class="col-auto">
              <strong class="my-0">1200</strong>
            </div>
            <div class="col-3">
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="row align-items-center my-2">
            <div class="col">
              <strong>Processing</strong><br / />
              <span class="my-0 text-muted small">+60%</span>
            </div>
            <div class="col-auto">
              <strong>80</strong>
            </div>
            <div class="col-3">
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="row align-items-center my-2">
            <div class="col">
              <strong>Assigned</strong>
              <div class="my-0 text-muted small">+2%</div>
            </div>
            <div class="col-auto">
              <strong>262</strong>
            </div>
            <div class="col-3">
              <div class="progress" style="height: 4px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
          <div class="row align-items-center my-2">
            <div class="col">
              <strong>Pending</strong>
              <div class="my-0 text-muted small">+6%</div>
            </div>
            <div class="col-auto">
              <strong>26</strong>
            </div>
            <div class="col-3">
              <div class="progress" style="height: 4px;">
                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div> <!-- .col-md-12 -->
      </div> <!-- .row -->
      <div class="row items-align-center my-4  d-none d-lg-flex">
        <div class="col-md">
          <ul class="nav nav-pills justify-content-start">
            <li class="nav-item">
              <a class="nav-link active bg-transparent pr-2 pl-0 text-primary" href="#">All <span class="badge badge-pill bg-primary text-white ml-2">164</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted px-2" href="#">Pending <span class="badge badge-pill bg-white border text-muted ml-2">64</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted px-2" href="#">Processing <span class="badge badge-pill bg-white border text-muted ml-2">48</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-muted px-2" href="#">Completed <span class="badge badge-pill bg-white border text-muted ml-2">52</span></a>
            </li>
          </ul>
        </div>
        <div class="col-md-auto ml-auto text-right">
          <span class="small bg-white border py-1 px-2 rounded mr-2">
            <a href="#" class="text-muted"><i class="fe fe-x mx-1"></i></a>
            <span class="text-muted">Status : <strong>Pending</strong></span>
          </span>
          <span class="small bg-white border py-1 px-2 rounded mr-2">
            <a href="#" class="text-muted"><i class="fe fe-x mx-1"></i></a>
            <span class="text-muted">April 14, 2020 - May 13, 2020</span>
          </span>
          <button type="button" class="btn" data-toggle="modal" data-target=".modal-slide"><span class="fe fe-filter fe-16 text-muted"></span></button>
          <button type="button" class="btn"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- table -->
          <table class="table table-borderless table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th></th>
                <th>Subject</th>
                <th>Create At</th>
                <th>Status</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-muted small">2007</td>
                <td class="text-center"><span class="dot dot-lg bg-secondary mr-2"></span></td>
                <th scope="col">sed, sapien. Nunc pulvinar arcu et pede. Nunc sed</th>
                <td class="text-muted small">Apr 29, 2020</td>
                <td>
                  <span class="small text-muted">Completed</span>
                  <div class="progress mt-2" style="height: 3px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class="text-muted small">May 9, 2020</td>
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Remove</a>
                    <a class="dropdown-item" href="#">Assign</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-muted small">2053</td>
                <td class="text-center"><span class="dot dot-lg bg-success mr-2"></span></td>
                <th scope="col">lorem eu metus. In lorem. Donec elementum, lorem ut</th>
                <td class="text-muted small">May 4, 2020</td>
                <td>
                  <span class="small text-muted">Completed</span>
                  <div class="progress mt-2" style="height: 3px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class="text-muted small">May 2, 2020</td>
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Remove</a>
                    <a class="dropdown-item" href="#">Assign</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-muted small">2569</td>
                <td class="text-center"><span class="dot dot-lg bg-secondary mr-2"></span></td>
                <th scope="col">sagittis. Duis gravida. Praesent eu</th>
                <td class="text-muted small">May 7, 2020</td>
                <td>
                  <span class="small text-muted">Pending</span>
                  <div class="progress mt-2" style="height: 3px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class="text-muted small">May 9, 2020</td>
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Remove</a>
                    <a class="dropdown-item" href="#">Assign</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-muted small">2192</td>
                <td class="text-center"><span class="dot dot-lg bg-primary mr-2"></span></td>
                <th scope="col">mattis semper, dui lectus rutrum urna, nec luctus</th>
                <td class="text-muted small">May 5, 2020</td>
                <td>
                  <span class="small text-muted">Processing</span>
                  <div class="progress mt-2" style="height: 3px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class="text-muted small">Apr 27, 2020</td>
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Remove</a>
                    <a class="dropdown-item" href="#">Assign</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-muted small">2028</td>
                <td class="text-center"><span class="dot dot-lg bg-success mr-2"></span></td>
                <th scope="col">at arcu. Vestibulum ante ipsum</th>
                <td class="text-muted small">May 2, 2020</td>
                <td>
                  <span class="small text-muted">Assigned</span>
                  <div class="progress mt-2" style="height: 3px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class="text-muted small">May 4, 2020</td>
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Remove</a>
                    <a class="dropdown-item" href="#">Assign</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-muted small">2673</td>
                <td class="text-center"><span class="dot dot-lg bg-primary mr-2"></span></td>
                <th scope="col">dui nec urna suscipit nonummy. Fusce fermentum fermentum</th>
                <td class="text-muted small">May 13, 2020</td>
                <td>
                  <span class="small text-muted">Processing</span>
                  <div class="progress mt-2" style="height: 3px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class="text-muted small">May 3, 2020</td>
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Remove</a>
                    <a class="dropdown-item" href="#">Assign</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-muted small">2698</td>
                <td class="text-center"><span class="dot dot-lg bg-primary mr-2"></span></td>
                <td>habitant morbi tristique senectus et</td>
                <td class="text-muted small">May 7, 2020</td>
                <td>
                  <span class="small text-muted">Completed</span>
                  <div class="progress mt-2" style="height: 3px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class="text-muted small">May 8, 2020</td>
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Remove</a>
                    <a class="dropdown-item" href="#">Assign</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-muted small">2382</td>
                <td class="text-center"><span class="dot dot-lg bg-secondary mr-2"></span></td>
                <td>arcu. Vestibulum ut eros non enim</td>
                <td class="text-muted small">May 2, 2020</td>
                <td>
                  <span class="small text-muted">Assigned</span>
                  <div class="progress mt-2" style="height: 3px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class="text-muted small">Apr 30, 2020</td>
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Remove</a>
                    <a class="dropdown-item" href="#">Assign</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-muted small">2582</td>
                <td class="text-center"><span class="dot dot-lg bg-success mr-2"></span></td>
                <th scope="col">ipsum sodales purus, in molestie tortor nibh</th>
                <td class="text-muted small">May 2, 2020</td>
                <td>
                  <span class="small text-muted">Completed</span>
                  <div class="progress mt-2" style="height: 3px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class="text-muted small">May 6, 2020</td>
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Remove</a>
                    <a class="dropdown-item" href="#">Assign</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="text-muted small">2811</td>
                <td class="text-center"><span class="dot dot-lg bg-secondary mr-2"></span></td>
                <th scope="col">non, bibendum sed, est. Nunc laoreet lectus quis</th>
                <td class="text-muted small">Apr 5, 2020</td>
                <td>
                  <span class="small text-muted">Processing</span>
                  <div class="progress mt-2" style="height: 3px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class="text-muted small">May 14, 2020</td>
                <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="text-muted sr-only">Action</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Remove</a>
                    <a class="dropdown-item" href="#">Assign</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <nav aria-label="Table Paging" class="my-3">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item"><a class="page-link" href="#">Previous</a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div> <!-- .col -->
      </div> <!-- .row -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
@endsection
@section('scripts')
    <script src="{{ asset('js/d3.min.js') }}"></script>
    <script src="{{ asset('js/topojson.min.js') }}"></script>
    <script src="{{ asset('js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('js/datamaps.custom.js') }}"></script>

    <script>
        /* defind global options */
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{ asset('js/gauge.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/apexcharts.custom.js') }}"></script>
@endsection

