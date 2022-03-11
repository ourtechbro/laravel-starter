@extends('layouts.app')

@section('title')
    SaaS Dashboard
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
              <div class="card shadow my-4">
                <div class="card-body">
                  <div class="row align-items-center my-4">
                    <div class="col-md-4">
                      <div class="mx-4">
                        <strong class="mb-0 text-uppercase text-muted">Earning</strong><br />
                        <h3>$2,562.30</h3>
                        <p class="text-muted">Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus...</p>
                      </div>
                      <div class="row align-items-center">
                        <div class="col-6">
                          <div class="p-4">
                            <p class="small text-uppercase text-muted mb-0">Sales</p>
                            <span class="h2 mb-0">$1.2K</span>
                            <p class="small mb-0">
                              <span class="fe fe-arrow-up text-success fe-12"></span>
                              <span class="text-muted ml-1">+1.5%</span>
                            </p>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="p-4">
                            <p class="small text-uppercase text-muted mb-0">Orders</p>
                            <span class="h2 mb-0">1K+</span>
                            <p class="small mb-0">
                              <span class="fe fe-arrow-up text-success fe-12"></span>
                              <span class="text-muted ml-1">+28.5%</span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="row align-items-center">
                        <div class="col-6">
                          <div class="p-4">
                            <p class="small text-uppercase text-muted mb-0">Visitors</p>
                            <span class="h2 mb-0">1626</span>
                            <p class="small mb-0">
                              <span class="text-muted ml-1">+1.5%</span>
                            </p>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="p-4">
                            <p class="small text-uppercase text-muted mb-0">Customers</p>
                            <span class="h2 mb-0">186</span>
                            <p class="small mb-0">
                              <span class="fe fe-arrow-down text-danger fe-12"></span>
                              <span class="text-muted ml-1">-2.5%</span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="mr-4">
                        <div id="areaChart"></div>
                      </div>
                    </div> <!-- .col-md-8 -->
                  </div> <!-- end section -->
                </div> <!-- .card-body -->
              </div> <!-- .card -->
              <div class="row">
                <div class="col-md-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                      <div class="card-title">
                        <strong>Sumerize</strong>
                        <a class="float-right small text-muted" href="#!">View all</a>
                      </div>
                      <div class="row mt-b">
                        <div class="col-6 text-center mb-3 border-right">
                          <p class="text-muted mb-1">Today</p>
                          <h6 class="mb-1">830</h6>
                          <p class="text-muted mb-2">+5.5% <span class="fe fe-arrow-up fe-12 text-success"></span></p>
                        </div>
                        <div class="col-6 text-center mb-3">
                          <p class="text-muted mb-1">Yesterday</p>
                          <h6 class="mb-1">4,830</h6>
                          <p class="text-muted">-5.5%</p>
                        </div>
                        <div class="col-6 text-center border-right">
                          <p class="text-muted mb-1">This Week</p>
                          <h6 class="mb-1">680</h6>
                          <p class="text-muted mb-2">+1.5% <span class="fe fe-arrow-up fe-12 text-warning"></span></p>
                        </div>
                        <div class="col-6 text-center">
                          <p class="text-muted mb-1">Last Week</p>
                          <h6 class="mb-1">430</h6>
                          <p class="text-muted">-5.5%</p>
                        </div>
                      </div>
                      <div class="chart-widget">
                        <div id="columnChartWidget" width="300" height="200"></div>
                      </div>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-4">
                  <div class="card shadow eq-card mb-4">
                    <div class="card-body">
                      <div class="card-title">
                        <strong>Services</strong>
                        <a class="float-right small text-muted" href="#!">View all</a>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row align-items-center my-2">
                            <div class="col">
                              <strong>Cloud Server</strong>
                              <div class="my-0 text-muted small">Global, Services</div>
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
                              <strong>CDN</strong>
                              <div class="my-0 text-muted small">Global, Services</div>
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
                              <strong>Databases</strong>
                              <div class="my-0 text-muted small">Local, DC</div>
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
                        </div> <!-- .col-md-12 -->
                        <div class="col-md-12">
                          <div id="chart-box" class="mt-3">
                            <div id="pieChartWidget"></div>
                          </div>
                        </div>
                      </div> <!-- .row -->
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- .col-md-4 -->
                <!-- Map -->
                <div class="col-md-4">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                      <div class="card-title">
                        <strong>Region</strong>
                        <a class="float-right small text-muted" href="#!">View all</a>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="row align-items-center my-2">
                            <div class="col">
                              <strong>Paris</strong>
                              <div class="my-0 text-muted small">France</div>
                            </div>
                            <div class="col-auto">
                              <strong>+85%</strong>
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
                          </div>
                          <div class="row align-items-center mt-2">
                            <div class="col">
                              <strong>Sydney</strong>
                              <div class="my-0 text-muted small">Australia</div>
                            </div>
                            <div class="col-auto">
                              <strong>+20%</strong>
                            </div>
                          </div>
                        </div> <!-- .col-md-12 -->
                        <div class="col-md-12 mt-4">
                          <div class="map-box" style="position: relative; width: 320px; min-height: 170px; margin:0 auto;">
                            <div id="dataMapUSA"></div>
                          </div>
                        </div>
                      </div> <!-- .row -->
                    </div> <!-- / .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-6 -->
              </div> <!-- / .row -->
              <div class="row">
                <!-- Recent orders -->
                <div class="col-md-8">
                  <div class="card shadow eq-card">
                    <div class="card-header">
                      <strong class="card-title">Recent Orders</strong>
                      <a class="float-right small text-muted" href="#!">View all</a>
                    </div>
                    <div class="card-body">
                      <table class="table table-hover table-borderless table-striped mt-n3 mb-n1">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Date</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>3224</td>
                            <th scope="col">Keith Baird</th>
                            <td>Enim Limited<br /><span class="small text-muted">901-6206 Cras Av.</span></td>
                            <td>Apr 24, 2019</td>
                            <td><span class="dot dot-lg bg-warning mr-2"></span></td>
                          </tr>
                          <tr>
                            <td>3218</td>
                            <th scope="col">Graham Price</th>
                            <td>Nunc Lectus Incorporated<br /><span class="small text-muted">Ap #705-5389 Id St.</span></td>
                            <td>May 23, 2020</td>
                            <td><span class="dot dot-lg bg-success mr-2"></span></td>
                          </tr>
                          <tr>
                            <td>2651</td>
                            <th scope="col">Reuben Orr</th>
                            <td>Nisi Aenean Eget Limited<br />
                              <span class="small text-muted">7425 Malesuada Rd.</span></td>
                            <td>Nov 4, 2019</td>
                            <td><span class="dot dot-lg bg-warning mr-2"></span></td>
                          </tr>
                          <tr>
                            <td>2636</td>
                            <th scope="col">Akeem Holder</th>
                            <td>Pellentesque Associates<br />
                              <span class="small text-muted">896 Sodales St.</span></td>
                            <td>Mar 27, 2020</td>
                            <td><span class="dot dot-lg bg-danger mr-2"></span></td>
                          </tr>
                          <tr>
                            <td>2757</td>
                            <th scope="col">Beau Barrera</th>
                            <td>Augue Incorporated<br />
                              <span class="small text-muted">4583 Id St.</span></td>
                            <td>Jan 13, 2020</td>
                            <td><span class="dot dot-lg bg-success mr-2"></span></td>
                          </tr>
                        </tbody>
                      </table>
                    </div> <!-- .card-body -->
                  </div> <!-- .card -->
                </div> <!-- / .col-md-8 -->
                <!-- Recent Activity -->
                <div class="col-md-4">
                  <div class="card shadow eq-card timeline">
                    <div class="card-header">
                      <strong class="card-title">Recent Activity</strong>
                      <a class="float-right small text-muted" href="#!">View all</a>
                    </div>
                    <div class="card-body" data-simplebar style="height: 360px; overflow-y: auto; overflow-x: hidden;">
                      <div class="pb-3 timeline-item item-primary">
                        <div class="pl-5">
                          <div class="mb-1 small"><strong>@Brown Asher</strong><span class="text-muted mx-2">Just create new layout Index, form, table</span><strong>Tiny Admin</strong></div>
                          <p class="small text-muted">Creative Design <span class="badge badge-light">1h ago</span>
                          </p>
                        </div>
                      </div>
                      <div class="pb-3 timeline-item item-warning">
                        <div class="pl-5">
                          <div class="mb-3 small"><strong>@Fletcher Everett</strong><span class="text-muted mx-2">created new group for</span><strong>Tiny Admin</strong></div>
                          <ul class="avatars-list mb-2">
                            <li>
                              <a href="#!" class="avatar avatar-sm">
                                <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-1.jpg">
                              </a>
                            </li>
                            <li>
                              <a href="#!" class="avatar avatar-sm">
                                <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-4.jpg">
                              </a>
                            </li>
                            <li>
                              <a href="#!" class="avatar avatar-sm">
                                <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-3.jpg">
                              </a>
                            </li>
                          </ul>
                          <p class="small text-muted">Front-End Development <span class="badge badge-light">1h ago</span>
                          </p>
                        </div>
                      </div>
                      <div class="pb-3 timeline-item item-success">
                        <div class="pl-5">
                          <div class="mb-2 small"><strong>@Kelley Sonya</strong><span class="text-muted mx-2">has commented on</span><strong>Advanced table</strong></div>
                          <div class="card d-inline-flex mb-2">
                            <div class="card-body bg-light small py-2 px-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
                          </div>
                          <p class="small text-muted">Back-End Development <span class="badge badge-light">1h ago</span>
                          </p>
                        </div>
                      </div>
                    </div> <!-- / .card-body -->
                  </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
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
<script src="{{ asset('js/gauge.min.js') }}"></script>
<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('js/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/apexcharts.custom.js') }}"></script>
@endsection
