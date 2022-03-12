@extends('layouts.app')

@section('title')
    System
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <div class="row align-items-center mb-2">
        <div class="col">
          <h2 class="h5 page-title">Welcome!</h2>
        </div>
        <div class="col-auto">
          <form class="form-inline">
            <div class="form-group d-none d-lg-inline">
              <label for="reportrange" class="sr-only">Date Ranges</label>
              <div id="reportrange" class="px-2 py-2 text-muted">
                <span class="small"></span>
              </div>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
              <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="py-5 text-center">
                <p class="text-muted mb-2">Real time</p>
                <h2 class="mb-1">1,254</h2>
                <span class="small text-success">+2%</span>
              </div>
              <div class="row align-items-center mb-1">
                <div class="col-auto">
                  <div class="my-2 text-center">
                    <small class="text-danger pr-2 mr-2">High</small>
                    <span class="text-warning px-2 mx-2">Medium</span>
                    <span class="text-success px-2 mx-2">Low</span>
                  </div>
                </div>
                <div class="col">
                  <small class="h6 mb-0 text-muted">Statistics</small>
                </div>
              </div>
              <div class="progress rounded mb-3" style="height:14px">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
              </div>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div class="chart-box">
                <div id="gradientRadial"></div>
              </div>
              <div class="row items-align-center">
                <div class="col-4 text-center">
                  <p class="text-muted mb-1">Cost</p>
                  <h6 class="mb-1">$1,823</h6>
                  <p class="text-muted mb-0">+12%</p>
                </div>
                <div class="col-4 text-center">
                  <p class="text-muted mb-1">Revenue</p>
                  <h6 class="mb-1">$6,830</h6>
                  <p class="text-muted mb-0">+8%</p>
                </div>
                <div class="col-4 text-center">
                  <p class="text-muted mb-1">Earning</p>
                  <h6 class="mb-1">$4,830</h6>
                  <p class="text-muted mb-0">+8%</p>
                </div>
              </div>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <div id="radialbar"></div>
              <div class="row">
                <div class="col-6 text-center">
                  <p class="small text-uppercase text-muted mb-0">Yesterday</p>
                  <strong class="text-uppercase">126</strong>
                  <p class="small text-muted mb-2">+5.5%</p>
                </div>
                <div class="col-6 text-center">
                  <p class="small text-uppercase text-muted mb-0">Today</p>
                  <strong class="text-uppercase">89</strong>
                  <p class="small text-muted mb-2">-5.5%</p>
                </div>
              </div>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title mb-0">Status</strong>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 text-center">
                  <p class="small text-muted mb-0">Maximum</p>
                  <strong class="text-uppercase">126</strong>
                  <p class="small text-muted mb-0">+5.5%</p>
                </div>
                <div class="col-6 text-center">
                  <p class="small text-muted mb-0">Minimum</p>
                  <strong class="text-uppercase">89</strong>
                  <p class="small text-muted mb-0">-5.5%</p>
                </div>
              </div>
              <div class="chart-box">
                <div id="heatmapChartWidget"></div>
              </div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong class="card-title">Notification List</strong>
              <a class="float-right small text-muted" href="#!">View all</a>
            </div>
            <div class="card-body scrollable">
              <div class="list-group list-group-flush my-n3">
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-link fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Link was attached to menu</strong></small>
                      <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                    </div>
                    <div class="col-auto">
                      <small class="badge badge-pill badge-light text-muted">1h ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-box fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Package has uploaded successfull</strong></small>
                      <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                    </div>
                    <div class="col-auto">
                      <small class="badge badge-pill badge-light text-muted">1m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-download fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Widgets are updated successfull</strong></small>
                      <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                    </div>
                    <div class="col-auto">
                      <small class="badge badge-pill badge-light text-muted">2m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item mb-2">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-inbox fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Notifications have been sent</strong></small>
                      <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                    </div>
                    <div class="col-auto">
                      <small class="badge badge-pill badge-light text-muted">30m ago</small>
                    </div>
                  </div> <!-- / .row -->
                </div>
              </div> <!-- / .list-group -->
            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
        </div> <!-- ./col -->
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4 mb-4">
              <div class="card shadow">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col">
                      <h4 class="mb-0">15%</h4>
                      <p class="small text-muted mb-0">Cpu Usage</p>
                    </div>
                    <div class="col-5">
                      <div id="gauge1" class="gauge-container"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card shadow">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col">
                      <h4 class="mb-0">65%</h4>
                      <p class="small text-muted mb-0">Ram Usage</p>
                    </div>
                    <div class="col-5">
                      <div id="gauge2" class="gauge-container"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card shadow">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col">
                      <p class="small text-muted mb-0">Network</p>
                      <h4 class="mb-0">20%</h4>
                    </div>
                    <div class="col-5">
                      <div id="gauge3" class="gauge-container"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- end section -->
          <div class="mb-4 align-items-center" style="position: relative;">
            <div class="map-box" style="height:450px; overflow:hidden">
              <div id="dataMapWorld" style="min-height:450px;"></div>
            </div>
          </div> <!-- .col-md -->
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="h6 mb-0">Regions</h3>
                    </div>
                    <div class="col-auto">
                      <a class="small text-muted" href="#!">View all</a>
                    </div>
                  </div>
                </div>
                <div class="card-body my-n2">
                  <div class="row align-items-center my-2">
                    <div class="col">
                      <strong>Paris</strong>
                      <div class="my-0 text-muted small">France</div>
                    </div>
                    <div class="col-auto">
                      <strong>+85%</strong>
                    </div>
                    <div class="col-3">
                      <div class="progress" style="height: 4px;">
                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center my-2">
                    <div class="col">
                      <strong>Amsterdam</strong>
                      <div class="my-0 text-muted small">Netherlands</div>
                    </div>
                    <div class="col-auto">
                      <strong>+75%</strong>
                    </div>
                    <div class="col-3">
                      <div class="progress" style="height: 4px;">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center my-2">
                    <div class="col">
                      <strong>Venice</strong>
                      <div class="my-0 text-muted small">Italy</div>
                    </div>
                    <div class="col-auto">
                      <strong>+62%</strong>
                    </div>
                    <div class="col-3">
                      <div class="progress" style="height: 4px;">
                        <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center my-2">
                    <div class="col">
                      <strong>Barcelona</strong>
                      <div class="my-0 text-muted small">Spain</div>
                    </div>
                    <div class="col-auto">
                      <strong>+24%</strong>
                    </div>
                    <div class="col-3">
                      <div class="progress" style="height: 4px;">
                        <div class="progress-bar" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center my-2">
                    <div class="col">
                      <strong>Sydney</strong>
                      <div class="my-0 text-muted small">Australia</div>
                    </div>
                    <div class="col-auto">
                      <strong>+20%</strong>
                    </div>
                    <div class="col-3">
                      <div class="progress" style="height: 4px;">
                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- .card -->
            </div> <!-- .col-md -->
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">
                      <h3 class="h6 mb-0">Users</h3>
                    </div>
                    <div class="col-auto">
                      <a class="small text-muted" href="#!">View all</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex mb-2">
                    <div class="flex-fill pt-2">
                      <p class="mb-0 text-muted">Total</p>
                      <h4 class="mb-0">108</h4>
                      <span class="small text-muted">+37.7%</span>
                    </div>
                    <div class="flex-fill chart-box mb-n1">
                      <div id="barChartWidget"></div>
                    </div>
                  </div> <!-- .d-flex -->
                  <div class="row border-top">
                    <div class="col-md-6 pt-4">
                      <h6 class="mb-0">108 <span class="small text-muted">+37.7%</span></h6>
                      <p class="mb-0 text-muted">Cost</p>
                    </div>
                    <div class="col-md-6 pt-4">
                      <h6 class="mb-0">1168 <span class="small text-muted">-18.9%</span></h6>
                      <p class="mb-0 text-muted">Revenue</p>
                    </div>
                  </div> <!-- .row -->
                </div> <!-- .card-body -->
              </div> <!-- .card -->
            </div> <!-- .col-md -->
            <div class="col-md-12">
              <div class="d-flex align-items-center mx-3 mb-3">
                <div class="flex-fill">
                  <h3 class="h6 mb-0">Data Centers</h3>
                </div>
                <div class="flex-fill text-right">
                  <a class="small text-muted" href="#!">View all</a>
                </div>
              </div>
              <table class="table table-striped table-borderless mb-4">
                <thead class="thead-white d-none">
                  <tr>
                    <th colspan="2">Data</th>
                    <th>Center</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-muted text-center w-25">
                      <span class="fe fe-database fe-24"></span><br /> 3218 </td>
                    <th scope="row" class="w-50"> Nunc Lectus Incorporated<br />
                      <small class="text-muted">Barcelona, Spain</small>
                    </th>
                    <td class="text-muted w-25">
                      <div class="progress mt-3 mb-1" style="height:4px">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>May 23, 2020</small>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-muted text-center w-25">
                      <span class="fe fe-cpu fe-24"></span><br /> 2651 </td>
                    <th scope="row" class="w-50"> Nisi Aenean Eget Limited<br />
                      <small class="text-muted">Sydney, Australia</small>
                    </th>
                    <td class="text-muted w-25">
                      <div class="progress mt-3 mb-1" style="height:4px">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Nov 4, 2019</small>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-muted text-center w-25">
                      <span class="fe fe-globe fe-24"></span><br /> 2651 </td>
                    <th scope="row" class="w-50"> Pellentesque Associates<br />
                      <small class="text-muted">Amsterdam, Netherlands</small>
                    </th>
                    <td class="text-muted w-25">
                      <div class="progress mt-3 mb-1" style="height:4px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mar 27, 2020</small>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-muted text-center w-25">
                      <span class="fe fe-database fe-24"></span><br /> 2757 </td>
                    <th scope="row" class="w-50"> Augue Incorporated<br />
                      <small class="text-muted">Paris, France</small>
                    </th>
                    <td class="text-muted w-25">
                      <div class="progress mt-3 mb-1" style="height:4px">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Jan 13, 2020</small>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-muted text-center w-25">
                      <span class="fe fe-cpu fe-24"></span><br /> 2816 </td>
                    <th scope="row" class="w-50"> Enim Limited<br />
                      <small class="text-muted">London, United Kingdom</small>
                    </th>
                    <td class="text-muted w-25">
                      <div class="progress mt-3 mb-1" style="height:4px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Jan 01, 2020</small>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- Log -->
              <div class="card shadow">
                <div class="card-header">
                  <strong class="card-title">Logging</strong>
                  <a class="float-right small text-muted" href="#!">View all</a>
                </div>
                <div class="card-body">
                  <div class="list-group list-group-flush my-n3">
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="circle circle-sm bg-warning"><i class="fe fe-shield-off fe-16 text-white"></i></span>
                        </div>
                        <div class="col">
                          <small><strong>11:00 April 16, 2020</strong></small>
                          <div class="mb-2 text-muted small">Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. Integer dignissim nulla eu quam cursus placerat. Vivamus non odio ullamcorper, lacinia ante nec, blandit leo. </div>
                          <span class="badge badge-pill badge-warning">Security</span>
                        </div>
                        <div class="col-auto pr-0">
                          <small class="fe fe-more-vertical fe-16 text-muted"></small>
                        </div>
                      </div> <!-- / .row -->
                    </div><!-- / .list-group-item -->
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="circle circle-sm bg-success"><i class="fe fe-database fe-16 text-white"></i></span>
                        </div>
                        <div class="col">
                          <small><strong>17:00 April 15, 2020</strong></small>
                          <div class="mb-2 text-muted small">Proin porta vel erat suscipit luctus. Cras rhoncus felis sed magna commodo, in <a href="#!">pretium</a> mauris faucibus. Cras rhoncus felis sed magna commodo, in pretium mauris faucibus.</div>
                          <span class="badge badge-pill badge-success">System Update</span>
                        </div>
                        <div class="col-auto pr-0">
                          <small class="fe fe-more-vertical fe-16 text-muted"></small>
                        </div>
                      </div> <!-- / .row -->
                    </div><!-- / .list-group-item -->
                    <div class="list-group-item">
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <span class="circle circle-sm bg-secondary"><i class="fe fe-user-plus fe-16 text-white"></i></span>
                        </div>
                        <div class="col">
                          <small><strong>17:00 April 10, 2020</strong></small>
                          <div class="mb-2 text-muted small"> Morbi id arcu convallis, eleifend justo tristique, tincidunt nisl. Morbi euismod fermentum quam, at fringilla elit posuere a. <strong>Aliquam</strong> accumsan mi venenatis risus fermentum, at sagittis velit fermentum.</div>
                          <span class="badge badge-pill badge-secondary">Users</span>
                        </div>
                        <div class="col-auto pr-0">
                          <small class="fe fe-more-vertical fe-16 text-muted"></small>
                        </div>
                      </div> <!-- / .row -->
                    </div><!-- / .list-group-item -->
                  </div> <!-- / .list-group -->
                </div> <!-- / .card-body -->
              </div> <!-- / .card -->
            </div>
          </div> <!-- /. row -->
        </div> <!-- /. col -->
      </div> <!-- end section -->
    </div>
  </div> <!-- .row -->
@endsection
@section('scripts')
<script src="{{ asset('js/d3.min.js') }}"></script>
<script src="{{ asset('js/topojson.min.js') }}"></script>
<script src="{{ asset('js/datamaps.all.min.js') }}"></script>
<script src="{{ asset('js/datamaps-zoomto.js') }}"></script>
<script src="{{ asset('js/datamaps.custom.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>


<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('js/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/apexcharts.custom.js') }}"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
@endsection
