@extends('layouts.app')

@section('title')
    Widgets
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <!-- <h2>Section title</h2> -->
            <h2 class="h5 page-title">Info Widgets</h2>
            <p class="text-muted">This primitive is meant to make it easy to display both user-centric or activity-centric actions in your app. Sometimes it makes sense to even blend both in a single timeline, which works perfectly.</p>
            <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow bg-primary text-white">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary-light">
                            <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                          </span>
                                </div>
                                <div class="col pr-0">
                                    <p class="small text-light mb-0">Monthly Sales</p>
                                    <span class="h3 mb-0 text-white">$1250</span>
                                    <span class="small text-muted">+5.5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                          </span>
                                </div>
                                <div class="col pr-0">
                                    <p class="small text-muted mb-0">Orders</p>
                                    <span class="h3 mb-0">1,869</span>
                                    <span class="small text-success">+16.5%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-filter text-white mb-0"></i>
                          </span>
                                </div>
                                <div class="col">
                                    <p class="small text-muted mb-0">Conversion</p>
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto">
                                            <span class="h3 mr-2 mb-0"> 86.6% </span>
                                        </div>
                                        <div class="col-md-12 col-lg">
                                            <div class="progress progress-sm mt-2" style="height:3px">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-activity text-white mb-0"></i>
                          </span>
                                </div>
                                <div class="col">
                                    <p class="small text-muted mb-0">AVG Orders</p>
                                    <span class="h3 mb-0">$80</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end section -->
            <!-- info small box -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <span class="h2 mb-0">$1.2K</span>
                                    <p class="small text-muted mb-0">Monthly Sales</p>
                                    <span class="badge badge-pill badge-success">+15.5%</span>
                                </div>
                                <div class="col-auto">
                                    <span class="fe fe-32 fe-shopping-bag text-muted mb-0"></span>
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
                                    <span class="h2 mb-0">1K+</span>
                                    <p class="small text-muted mb-0">Orders</p>
                                    <span class="badge badge-pill badge-success">+16.5%</span>
                                </div>
                                <div class="col-auto">
                                    <span class="fe fe-32 fe-clipboard text-muted mb-0"></span>
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
                                    <span class="h2 mb-0">186</span>
                                    <p class="small text-muted mb-0">Customers</p>
                                    <span class="badge badge-pill badge-warning">+1.5%</span>
                                </div>
                                <div class="col-auto">
                                    <span class="fe fe-32 fe-users text-muted mb-0"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end section -->
            <!-- widgets -->
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <small class="text-muted mb-1">Visitors</small>
                                    <h3 class="card-title mb-0">108</h3>
                                    <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-success"></span><span>37.7% Last week</span></p>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="inlinebar"></span>
                                </div>
                            </div> <!-- /. row -->
                        </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <small class="text-muted mb-1">Page Views</small>
                                    <h3 class="card-title mb-0">1168</h3>
                                    <p class="small text-muted mb-0"><span class="fe fe-arrow-down fe-12 text-danger"></span><span>-18.9% Last week</span></p>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="inlineline"></span>
                                </div>
                            </div> <!-- /. row -->
                        </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <small class="text-muted mb-1">Conversion</small>
                                    <h3 class="card-title mb-0">68</h3>
                                    <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-warning"></span><span>+1.9% Last week</span></p>
                                </div>
                                <div class="col-4 text-right">
                                    <span class="inlinepie"></span>
                                </div>
                            </div> <!-- /. row -->
                        </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
            </div> <!-- end section -->
            <div class="row">
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <span class="card-title">Today</span>
                            <a class="float-right small text-muted" href="#!"><i class="fe fe-more-vertical fe-12"></i></a>
                        </div>
                        <div class="card-body my-n2">
                            <div class="d-flex">
                                <div class="flex-fill">
                                    <h4 class="mb-0">120</h4>
                                </div>
                                <div class="flex-fill text-right">
                                    <p class="mb-0 small">+20%</p>
                                    <p class="text-muted mb-0 small">last week</p>
                                </div>
                            </div>
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <span class="card-title">Yesterday</span>
                            <a class="float-right small text-muted" href="#!"><span>+1.8%</span></a>
                        </div>
                        <div class="card-body my-n1">
                            <div class="d-flex">
                                <div class="flex-fill">
                                    <h4 class="mb-0">2068</h4>
                                </div>
                                <div class="flex-fill text-right">
                          <span class="sparkline inlinebar"></p>
                                </div>
                            </div>
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center my-1">
                                <div class="col">
                                    <h4 class="mb-0">15%</h4>
                                    <p class="small text-muted mb-0">Cpu Usage</p>
                                </div>
                                <div class="col-5">
                                    <div id="gauge1" class="gauge-container"></div>
                                </div>
                            </div>
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div> <!-- .col -->
                <div class="col-md-6 col-xl-3 mb-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center my-1">
                                <div class="col">
                                    <h4 class="mb-0">65%</h4>
                                    <p class="small text-muted mb-0">Ram Usage</p>
                                </div>
                                <div class="col-5">
                                    <div id="gauge2" class="gauge-container"></div>
                                </div>
                            </div>
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div> <!-- .col -->
            </div>
            <!-- Widget card -->
            <h2 class="h5">Cards</h2>
            <p class="text-muted">This primitive is meant to make it easy to display both user-centric or activity-centric actions in your app. Sometimes it makes sense to even blend both in a single timeline, which works perfectly.</p>
            <div class="card-columns">
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="py-5 text-center">
                            <p class="text-muted mb-2">Real time</p>
                            <h2 class="mb-1">1,254</h2>
                            <span class="small text-success">+2%</span>
                        </div>
                        <div class="row align-items-center mb-1">
                            <div class="col-auto">
                                <div class="my-2 text-left">
                                    <small class="text-danger mr-2">High</small>
                                    <small class="text-warning mx-2">Medium</small>
                                    <small class="text-success mx-2">Low</small>
                                </div>
                            </div>
                            <div class="col text-right">
                                <small class="mb-0 text-muted">Statistics</small>
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
                        <div class="chart-widget">
                            <div id="gradientRadial"></div>
                        </div>
                        <div class="row">
                            <div class="col-6 text-center">
                                <p class="text-muted mb-0">Yesterday</p>
                                <h4 class="mb-1">126</h4>
                                <p class="text-muted mb-2">+5.5%</p>
                            </div>
                            <div class="col-6 text-center">
                                <p class="text-muted mb-0">Today</p>
                                <h4 class="mb-1">86</h4>
                                <p class="text-muted mb-2">-5.5%</p>
                            </div>
                        </div>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="chart-widget mb-2">
                            <div id="radialbar"></div>
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
                        <div class="row items-align-center">
                            <div class="col-md-6 my-4">
                                <p class="mb-0"><strong class="mb-0 text-uppercase text-muted">Earning</strong></p>
                                <h3>$2,562</h3>
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="col-md-6 my-4 text-center">
                                <div lass="chart-box mx-4">
                                    <div id="radialbarWidget"></div>
                                </div>
                            </div>
                            <div class="col-md-6 border-top pt-3">
                                <p class="mb-1"><strong class="text-muted">Cost</strong></p>
                                <h4 class="mb-0">108</h4>
                                <p class="small text-muted mb-0"><span>37.7% Last week</span></p>
                            </div> <!-- .col -->
                            <div class="col-md-6 border-top pt-3">
                                <p class="mb-1"><strong class="text-muted">Revenue</strong></p>
                                <h4 class="mb-0">1168</h4>
                                <p class="small text-muted mb-0"><span>-18.9% Last week</span></p>
                            </div> <!-- .col -->
                        </div>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row border-bottom">
                            <div class="col-6 text-center border-right mb-3">
                                <p class="text-uppercase text-muted mb-1">Total</p>
                                <h4 class="mb-1">$6,830</h4>
                                <p class="text-muted mb-0">+5.5%</p>
                            </div>
                            <div class="col-6 text-center mb-3">
                                <p class="text-uppercase text-muted mb-1">Target</p>
                                <h4 class="mb-1">$4,830</h4>
                                <p class="text-muted mb-0">-5.5%</p>
                            </div>
                        </div>
                    </div> <!-- .card-body -->
                    <div class="chart-widget mb-n3">
                        <div id="areaChartWidget"></div>
                    </div>
                </div> <!-- .card -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <p class="mb-0"><strong class="mb-0 text-uppercase text-muted">Today</strong></p>
                        <h3 class="mb-0">$2,562.30</h3>
                        <p class="text-muted">+18.9% Last week</p>
                        <div class="chart-box mt-n5">
                            <div id="lineChartWidget"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 text-center mt-3">
                                <p class="mb-1 text-muted">Completions</p>
                                <h6 class="mb-0">26</h6>
                                <span class="small text-muted">+20%</span>
                                <span class="fe fe-arrow-up text-success fe-12"></span>
                            </div>
                            <div class="col-md-4 text-center mt-3">
                                <p class="mb-1 text-muted">Goal Value</p>
                                <h6 class="mb-0">$260</h6>
                                <span class="small text-muted">+6%</span>
                                <span class="fe fe-arrow-up text-success fe-12"></span>
                            </div>
                            <div class="col-md-4 text-center mt-3">
                                <p class="mb-1 text-muted">Conversion</p>
                                <h6 class="mb-0">6%</h6>
                                <span class="small text-muted">-2%</span>
                                <span class="fe fe-arrow-down text-danger fe-12"></span>
                            </div>
                        </div>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="d-flex mb-2">
                            <div class="flex-fill pt-2">
                                <p class="mb-0 text-muted">Total</p>
                                <h4 class="mb-0">108</h4>
                                <span class="small text-muted">+37.7%</span>
                            </div>
                            <div class="flex-fill chart-box mt-n2">
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
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="chart-box mb-3">
                            <div id="customAngle"></div>
                        </div> <!-- .col -->
                        <div class="w-70 mx-auto">
                            <div class="row align-items-center mb-2">
                                <div class="col">
                                    <p class="mb-0">Direct</p>
                                    <span class="my-0 text-muted small">+10%</span>
                                </div>
                                <div class="col-auto text-right">
                                    <p class="mb-0">218</p>
                                    <span class="dot dot-md bg-success"></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col">
                                    <p class="mb-0">Organic Search</p>
                                    <span class="my-0 text-muted small">+0.6%</span>
                                </div>
                                <div class="col-auto text-right">
                                    <p class="mb-0">1002</p>
                                    <span class="dot dot-md bg-warning"></span>
                                </div>
                            </div>
                            <div class="row align-items-center mb-2">
                                <div class="col">
                                    <p class="mb-0">Referral</p>
                                    <span class="my-0 text-muted small">+1.6%</span>
                                </div>
                                <div class="col-auto text-right">
                                    <p class="mb-0">67</p>
                                    <span class="dot dot-md bg-primary"></span>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <p class="mb-0">Social</p>
                                    <span class="my-0 text-muted small">+118%</span>
                                </div>
                                <div class="col-auto text-right">
                                    <p class="mb-0">386</p>
                                    <span class="dot dot-md bg-secondary"></span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong>Browsers</strong>
                    </div>
                    <div class="card-body">
                        <div class="chart-box mb-3">
                            <div id="radarChartWidget"></div>
                        </div> <!-- .col -->
                        <div class="mx-auto">
                            <div class="row align-items-center my-2">
                                <div class="col-6 col-xl-3 my-3">
                                    <span class="small mb-0">Safari</span>
                                    <div class="progress my-2" style="height: 4px;">
                                        <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6 col-xl-3 my-3 text-right">
                                    <span>118</span><br />
                                    <span class="my-0 text-muted small">+10%</span>
                                </div>
                                <div class="col-6 col-xl-3 my-3">
                                    <span class="small mb-0">Chrome</span>
                                    <div class="progress my-2" style="height: 4px;">
                                        <div class="progress-bar" role="progressbar" style="width: 36%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6 col-xl-3 my-3 text-right">
                                    <span>1008</span><br />
                                    <span class="my-0 text-muted small">+36%</span>
                                </div>
                                <div class="col-6 col-xl-3 my-3">
                                    <span class="mb-0">Opera</span>
                                    <div class="progress my-2" style="height: 4px;">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6 col-xl-3 my-3 text-right">
                                    <span>67</span><br />
                                    <span class="my-0 text-muted small">+1.6%</span>
                                </div>
                                <div class="col-6 col-xl-3 my-3">
                                    <span class="mb-0">Edge</span>
                                    <div class="progress my-2" style="height: 4px;">
                                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-6 col-xl-3 my-3 text-right">
                                    <span>186</span><br />
                                    <span class="my-0 text-muted small">+118%</span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="">
                            <strong class="card-title">Services</strong>
                            <a class="float-right small text-muted" href="#!">View all</a>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="chart-box">
                                    <div id="donutChartWidget"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row align-items-center my-3">
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
                                <div class="row align-items-center my-3">
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
                                <div class="row align-items-center my-3">
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
                        </div> <!-- .row -->
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="chart-widget">
                            <div id="columnChartWidget" width="300" height="200"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6 text-center mb-3 border-right">
                                <p class="text-muted mb-1">Total</p>
                                <h6 class="mb-1">830</h6>
                                <p class="text-muted mb-2">+5.5%</p>
                            </div>
                            <div class="col-6 text-center mb-3">
                                <p class="text-muted mb-1">Target</p>
                                <h6 class="mb-1">4,830</h6>
                                <p class="text-muted">-5.5%</p>
                            </div>
                            <div class="col-6 text-center border-right">
                                <p class="text-muted mb-1">Total</p>
                                <h6 class="mb-1">680</h6>
                                <p class="text-muted mb-2">+5.5%</p>
                            </div>
                            <div class="col-6 text-center">
                                <p class="text-muted mb-1">Target</p>
                                <h6 class="mb-1">430</h6>
                                <p class="text-muted">-5.5%</p>
                            </div>
                        </div>
                    </div> <!-- .card-body -->
                </div> <!-- .card -->
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong>Region</strong>
                    </div>
                    <div class="card-body">
                        <div class="map-box" style="position: relative; width: 320px; min-height: 130px;">
                            <div id="dataMapUSA"></div>
                        </div>
                        <div class="row align-items-center h-100 my-2">
                            <div class="col">
                                <p class="mb-0">France</p>
                                <span class="my-0 text-muted small">+10%</span>
                            </div>
                            <div class="col-auto text-right">
                                <span>118</span><br />
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col">
                                <p class="mb-0">Netherlands</p>
                                <span class="my-0 text-muted small">+0.6%</span>
                            </div>
                            <div class="col-auto text-right">
                                <span>1008</span><br />
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col">
                                <p class="mb-0">Italy</p>
                                <span class="my-0 text-muted small">+1.6%</span>
                            </div>
                            <div class="col-auto text-right">
                                <span>67</span><br />
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center my-2">
                            <div class="col">
                                <p class="mb-0">Spain</p>
                                <span class="my-0 text-muted small">+118%</span>
                            </div>
                            <div class="col-auto text-right">
                                <span>186</span><br />
                                <div class="progress mt-2" style="height: 4px;">
                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong>Devices</strong>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <div id="pieChartWidget"></div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 text-center">
                                <div class="circle circle-md bg-light">
                                    <span class="fe fe-monitor fe-24 text-muted"></span>
                                </div>
                                <div class="mt-2">
                                    <strong>1086</strong><br />
                                    <span class="my-0 text-muted small">+68%</span>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="circle circle-md bg-light">
                                    <span class="fe fe-smartphone fe-24 text-muted"></span>
                                </div>
                                <div class="mt-2">
                                    <strong>175</strong><br />
                                    <span class="my-0 text-muted small">+18%</span>
                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <div class="circle circle-md bg-light">
                                    <span class="fe fe-tablet fe-24 text-muted"></span>
                                </div>
                                <div class="mt-2">
                                    <strong>126</strong><br />
                                    <span class="my-0 text-muted small">-8%</span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- card-body -->
                </div> <!-- .card -->
            </div> <!-- .row -->
            <h2 class="h5">Timeline & Activity</h2>
            <p class="text-muted">This primitive is meant to make it easy to display both user-centric or activity-centric actions in your app. Sometimes it makes sense to even blend both in a single timeline, which works perfectly.</p>
            <div class="row">
                <!-- Recent Activity -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title float-left">Recent Activity</strong>
                            <a class="float-right small text-muted" href="#!">View all</a>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush my-n3">
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-sm mt-2">
                                                <img src="{{ asset('assets/avatars/face-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <small><strong>Brown, Asher</strong></small>
                                            <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                                            <small class="badge badge-light text-muted">1h ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-sm mt-2">
                                                <img src="{{ asset('assets/avatars/face-2.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <small><strong>Hester, Nissim</strong></small>
                                            <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                            <small class="badge badge-light text-muted">2h ago</small>
                                        </div>
                                    </div> <!-- / .row -->
                                </div>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-sm mt-2">
                                                <img src="{{ asset('assets/avatars/face-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <small><strong>Kelley, Sonya</strong></small>
                                            <div class="my-0 text-muted small">Created new layout for widgets</div>
                                            <small class="badge badge-light text-muted">4h ago</small>
                                        </div>
                                    </div>
                                </div> <!-- / .row -->
                            </div> <!-- / .list-group -->
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
                <!-- Product List -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Recent Orders</strong>
                            <a class="float-right small text-muted" href="#!">View all</a>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush my-n3">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-3 col-md-2">
                                            <img src="{{ asset('assets/products/p1.jpg') }}" alt="..." class="thumbnail-sm">
                                        </div>
                                        <div class="col">
                                            <strong>Fusion Backpack</strong>
                                            <div class="my-0 text-muted small">Gear, Bags</div>
                                        </div>
                                        <div class="col-auto">
                                            <strong>+85%</strong>
                                            <div class="progress mt-2" style="height: 4px;">
                                                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-3 col-md-2">
                                            <img src="{{ asset('assets/products/p2.jpg') }}" alt="..." class="thumbnail-sm">
                                        </div>
                                        <div class="col">
                                            <strong>Luma hoodies</strong>
                                            <div class="my-0 text-muted small">Jackets, Men</div>
                                        </div>
                                        <div class="col-auto">
                                            <strong>+75%</strong>
                                            <div class="progress mt-2" style="height: 4px;">
                                                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-3 col-md-2">
                                            <img src="{{ asset('assets/products/p3.jpg') }}" alt="..." class="thumbnail-sm">
                                        </div>
                                        <div class="col">
                                            <strong>Luma shorts</strong>
                                            <div class="my-0 text-muted small">Shorts, Men</div>
                                        </div>
                                        <div class="col-auto">
                                            <strong>+62%</strong>
                                            <div class="progress mt-2" style="height: 4px;">
                                                <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-3 col-md-2">
                                            <img src="{{ asset('assets/products/p4.jpg') }}" alt="..." class="thumbnail-sm">
                                        </div>
                                        <div class="col">
                                            <strong>Brown Trousers</strong>
                                            <div class="my-0 text-muted small">Trousers, Women</div>
                                        </div>
                                        <div class="col-auto">
                                            <strong>+24%</strong>
                                            <div class="progress mt-2" style="height: 4px;">
                                                <div class="progress-bar" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- / .list-group -->
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
                <!-- Notification List -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Notification List</strong>
                            <a class="float-right small text-muted" href="#!">View all</a>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush my-n3">
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
                                <div class="list-group-item">
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
                                </div> <!-- / .row -->
                            </div> <!-- / .list-group -->
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
                <!-- Recent Activity -->
                <div class="col-md-6 mb-4">
                    <div class="card timeline">
                        <div class="card-header">
                            <strong class="card-title">Recent Activity</strong>
                            <a class="float-right small text-muted" href="#!">View all</a>
                        </div>
                        <div class="card-body">
                            <div class="pb-3 timeline-item item-primary">
                                <div class="pl-5">
                                    <div class="mb-1"><strong>@Brown Asher</strong><span class="text-muted small mx-2">Just create new layout Index, form, table</span><strong>Tiny Admin</strong></div>
                                    <p class="small text-muted">Creative Design <span class="badge badge-light">1h ago</span>
                                    </p>
                                </div>
                            </div>
                            <div class="pb-3 timeline-item item-warning">
                                <div class="pl-5">
                                    <div class="mb-3"><strong>@Fletcher Everett</strong><span class="text-muted small mx-2">created new group for</span><strong>Tiny Admin</strong></div>
                                    <ul class="avatars-list mb-2">
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
                                    <div class="mb-2"><strong>@Kelley Sonya</strong><span class="text-muted small mx-2">has commented on</span><strong>Advanced table</strong></div>
                                    <div class="card d-inline-flex mb-2">
                                        <div class="card-body bg-light py-2 px-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
                                    </div>
                                    <p class="small text-muted">Back-End Development <span class="badge badge-light">1h ago</span>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                </div> <!-- / .col-md-6 -->
            </div> <!-- / .row -->
            <div class="row">
                <!-- Files List -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Recent Files</strong>
                            <a class="float-right small text-muted" href="#!">View all</a>
                        </div>
                        <div class="card-body">
                            <div class="list-group list-group-flush my-n3">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="fe fe-image fe-24 text-muted"></span>
                                        </div>
                                        <div class="col">
                                            <small><strong>Main logo</strong></small>
                                            <div class="my-0 text-muted small"><span class="badge badge-light text-muted mr-2">1.2M</span><span class="badge badge-pill badge-light text-muted">SVG</span></div>
                                        </div>
                                        <div class="col-auto pr-0">
                                            <small class="fe fe-more-vertical fe-16 text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="fe fe-24 fe-folder text-muted"></span>
                                        </div>
                                        <div class="col">
                                            <small><strong>Tiny Admin</strong></small>
                                            <div class="my-0 text-muted small"><span class="badge badge-pill badge-light text-muted">Folder</span></div>
                                        </div>
                                        <div class="col-auto pr-0">
                                            <small class="fe fe-more-vertical fe-16 text-muted"></small>
                                        </div>
                                    </div> <!-- / .row -->
                                </div> <!-- / .list-group -->
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="fe fe-24 fe-file text-muted"></span>
                                        </div>
                                        <div class="col">
                                            <small><strong>Advanced Table</strong></small>
                                            <div class="my-0 text-muted small"><span class="badge badge-light text-muted">120K</span> <span class="badge badge-pill badge-light text-muted">HTML</span></div>
                                        </div>
                                        <div class="col-auto pr-0">
                                            <small class="fe fe-more-vertical fe-16 text-muted"></small>
                                        </div>
                                    </div> <!-- / .row -->
                                </div> <!-- / .list-group-item -->
                            </div> <!-- / .list-group -->
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                </div> <!-- / .col-md-3 -->
                <!-- Files List Full -->
                <div class="col-md-8 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title">Files</strong>
                            <a class="float-right small text-muted" href="#!">View all</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless my-n3">
                                <thead class="d-none">
                                <tr>
                                    <th>Icon</th>
                                    <th class="w-50">File</th>
                                    <th>Owner</th>
                                    <th>Last Update</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span class="fe fe-24 fe-folder mx-2 text-muted"></span></td>
                                    <th scope="row">
                                        <small><strong>Bootstrap</strong><small><br />
                                                <span class="badge badge-light text-muted mr-2">Folder</span>
                                    </th>
                                    <td>
                                        <small>Lionel Carney</small><br />
                                        <small class="text-muted">Jan 20, 2021</small>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm dropdown-toggle more-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><small>Move</small></a>
                                                <a class="dropdown-item" href="#"><small>Share</small></a>
                                                <a class="dropdown-item" href="#"><small>Delete</small></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="fe fe-24 fe-image mx-2 text-muted"></span></td>
                                    <th scope="row">
                                        <small><strong>Tiny Admin Homepagge UI</strong><small><br />
                                                <span class="badge badge-light text-muted mr-2">PSD</span>
                                                <span class="badge badge-light text-muted mr-2">5.1M</span>
                                    </th>
                                    <td>
                                        <small>Leilani Larson</small><br />
                                        <small class="text-muted">Feb 5, 2020</small>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm dropdown-toggle more-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><small>Move</small></a>
                                                <a class="dropdown-item" href="#"><small>Share</small></a>
                                                <a class="dropdown-item" href="#"><small>Delete</small></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="fe fe-24 fe-file mx-2 text-muted"></span></td>
                                    <th scope="row">
                                        <small><strong>Index page</strong><small><br />
                                                <span class="badge badge-light text-muted mr-2">1.24M</span>
                                                <span class="badge badge-light text-muted">HTML</span>
                                    </th>
                                    <td>
                                        <small>Dennis Pollard</small><br />
                                        <small class="text-muted">Oct 30, 2019</small>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm dropdown-toggle more-dropdown" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="sr-only"></span>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#"><small>Move</small></a>
                                                <a class="dropdown-item" href="#"><small>Share</small></a>
                                                <a class="dropdown-item" href="#"><small>Delete</small></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div> <!-- / .list-group -->
                    </div> <!-- / .card-body -->
                </div> <!-- / .card -->
            </div> <!-- end section -->
            <div class="row">
                <!-- Log -->
                <div class="col-md-12 mb-4">
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
                </div> <!-- / .col -->
            </div> <!-- end section -->
            <h2 class="h5" id="user-section">Users</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at, pretium blandit sapien.</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4 col-md-2 text-center">
                                    <a href="profile-posts.html" class="avatar avatar-md">
                                        <img src="{{ asset('assets/avatars/face-2.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                    </a>
                                </div>
                                <div class="col">
                                    <strong class="mb-1">Leblanc Yoshio</strong><span class="dot dot-lg bg-success ml-1"></span>
                                    <p class="small text-muted mb-1">Fringilla Ornare Placerat Consulting</p>
                                </div>
                                <div class="col-4 col-md-auto offset-4 offset-md-0 my-2">
                                    <a href="#!" class="btn btn-sm btn-secondary">Contact</a>
                                </div>
                            </div>
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                    <div class="card shadow mb-4">
                        <div class="card-body text-center">
                            <a href="#!" class="avatar avatar-lg">
                                <img src="{{ asset('assets/avatars/face-4.jpg') }}" alt="..." class="avatar-img rounded-circle">
                            </a>
                            <div class="card-text my-2">
                                <strong class="card-title my-0">Bass Wendy </strong>
                                <p class="small text-muted mb-0">Accumsan Consulting</p>
                                <p class="small"><span class="badge badge-dark">New York, USA</span></p>
                            </div>
                        </div> <!-- ./card-text -->
                        <div class="card-footer">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <small>
                                        <span class="dot dot-lg bg-success mr-1"></span> Online </small>
                                </div>
                                <div class="col-auto">
                                    <a href="#!" class="btn btn-sm btn-primary">Contact</a>
                                </div>
                            </div>
                        </div> <!-- /.card-footer -->
                    </div> <!-- /.card -->
                </div> <!-- / .col- -->
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="list-group list-group-flush my-n3">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <a href="profile-posts.html" class="avatar avatar-sm">
                                                <img src="{{ asset('assets/avatars/face-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <p class="small mb-0"><strong>Kelley Sonya</strong></p>
                                            <small><span class="dot dot-md bg-success ml-1"></span><span class="text-muted"> Online</span></small>
                                        </div>
                                        <div class="col-auto pr-0">
                                            <small class="fe fe-more-vertical fe-16 text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <a href="profile-posts.html" class="avatar avatar-sm">
                                                <img src="{{ asset('assets/avatars/face-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <p class="small mb-0"><strong>Brown, Asher</strong></p>
                                            <small><span class="dot dot-md bg-secondary ml-1"></span><span class="text-muted"> Offline</span></small>
                                        </div>
                                        <div class="col-auto pr-0">
                                            <small class="fe fe-more-vertical fe-16 text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <a href="profile-posts.html" class="avatar avatar-sm">
                                                <img src="{{ asset('assets/avatars/face-4.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <p class="small mb-0"><strong>Bass Wendy</strong></p>
                                            <small><span class="dot dot-md bg-success ml-1"></span><span class="text-muted"> Online</span></small>
                                        </div>
                                        <div class="col-auto pr-0">
                                            <small class="fe fe-more-vertical fe-16 text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- / .list-group -->
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <a href="profile-posts.html" class="avatar avatar-md">
                                        <img src="{{ asset('assets/avatars/face-1.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                    </a>
                                </div>
                                <div class="col ml-n2">
                                    <strong class="mb-1">Brown, Asher</strong><span class="dot dot-lg bg-success ml-1"></span>
                                    <p class="small text-muted mb-1">Fringilla Ornare Placerat Consulting</p>
                                </div>
                                <div class="col-auto">
                                    <span class="m-1"><i class="fe fe-facebook fe-12 text-muted"></i></span>
                                    <span class="m-1"><i class="fe fe-twitter fe-12 text-muted"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="small mb-2 d-flex">
                                        <span class="text-muted flex-fill">Progress</span>
                                        <span class="text-muted">68</span>
                                    </div>
                                    <div class="progress" style="height: 2px;">
                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <button type="button" class="btn btn-sm btn-primary">Message</button>
                                    <button type="button" class="btn btn-sm btn-secondary">Profile</button>
                                </div>
                            </div>
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card -->
                </div> <!-- / .col- -->
                <div class="col-md-12 mb-4">
                    <div class="card profile shadow">
                        <div class="card-body my-4">
                            <div class="row align-items-center">
                                <div class="col-md-3 text-center mb-5">
                                    <a href="#!" class="avatar avatar-xl">
                                        <img src="{{ asset('assets/avatars/face-3.jpg') }}" alt="..." class="avatar-img rounded-circle">
                                    </a>
                                </div>
                                <div class="col">
                                    <div class="row align-items-center">
                                        <div class="col-md-7">
                                            <h4 class="mb-1">Brown, Asher</h4>
                                            <p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
                                        </div>
                                        <div class="col">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-7">
                                            <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at, pretium blandit sapien. </p>
                                        </div>
                                        <div class="col">
                                            <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                                            <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                                            <p class="small mb-0 text-muted">(537) 315-1481</p>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-7 mb-2">
                                            <span class="small text-muted mb-0">Joined April 10, 2020</span>
                                        </div>
                                        <div class="col mb-2">
                                            <button type="button" class="btn btn-primary">Message</button>
                                            <button type="button" class="btn btn-secondary">Profile</button>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- / .row- -->
                        </div> <!-- / .card-body - -->
                    </div> <!-- / .card- -->
                </div> <!-- / .col- -->
            </div> <!-- end section -->
            <h2 class="h5" id="task-section">Tasks</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at, pretium blandit sapien.</p>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow mb-3">
                        <div class="card-body py-3">
                            <div class="row align-items-center">
                                <div class="col-auto pr-1">
                                    <span class="small text-muted fe fe-12 fe-menu mr-1 d-block d-md-inline"></span>
                                    <span class="small text-muted">2/10</span>
                                </div>
                                <div class="col pr-0">
                                    <strong>Updated layouts structures</strong>
                                    <p class="small text-muted mb-0">Due 5 days</p>
                                </div>
                                <div class="col-auto px-0">
                                    <ul class="avatars-list m-0">
                                        <li>
                                            <a href="#!" class="avatar avatar-sm">
                                                <img alt="..." class="avatar-img rounded-circle" src="{{ asset('assets/avatars/face-2.jpg') }}">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="avatar avatar-sm">
                                                <img alt="..." class="avatar-img rounded-circle" src="{{ asset('assets/avatars/face-4.jpg') }}">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <small class="fe fe-more-vertical fe-16 text-muted"></small>
                                </div>
                            </div>
                        </div> <!-- / .card-body -->
                    </div> <!-- /.card -->
                    <div class="card shadow mb-3">
                        <div class="card-body py-3">
                            <div class="row align-items-center">
                                <div class="col-auto pr-1">
                                    <span class="small text-muted fe fe-12 fe-check mr-1 d-block d-md-inline"></span>
                                    <span class="small text-muted">6/6</span>
                                </div>
                                <div class="col pr-0">
                                    <strong>Create new plan</strong>
                                    <p class="small text-muted mb-0">Due 5 days</p>
                                </div>
                                <div class="col-auto px-0">
                                    <ul class="avatars-list m-0">
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
                                </div>
                                <div class="col-auto">
                                    <small class="fe fe-more-vertical fe-16 text-muted"></small>
                                </div>
                            </div>
                        </div> <!-- / .card-body -->
                    </div> <!-- /.card -->
                    <div class="card shadow">
                        <div class="card-body py-3">
                            <div class="row align-items-center">
                                <div class="col-auto pr-1">
                                    <span class="small text-muted fe fe-12 fe-menu mr-1 d-block d-md-inline"></span>
                                    <span class="small text-muted">1/2</span>
                                </div>
                                <div class="col pr-0">
                                    <strong>Setup new demo</strong>
                                    <p class="small text-muted mb-0">3 days</p>
                                </div>
                                <div class="col-auto px-0">
                                    <ul class="avatars-list m-0">
                                        <li>
                                            <a href="#!" class="avatar avatar-sm">
                                                <img alt="..." class="avatar-img rounded-circle" src="{{ asset('assets/avatars/face-3.jpg') }}">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!" class="avatar avatar-sm">
                                                <img alt="..." class="avatar-img rounded-circle" src="{{ asset('assets/avatars/face-2.jpg') }}">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-auto">
                                    <small class="fe fe-more-vertical fe-16 text-muted"></small>
                                </div>
                            </div>
                        </div> <!-- / .card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <strong class="card-title mb-0">Checklist</strong>
                            <span class="small text-muted float-right mt-1">6 items completed</span>
                        </div>
                        <div class="card-body">
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="c1">
                                <label class="custom-control-label" for="c1">Create homepage layout with 3 block</label>
                                <span class="small text-muted fe fe-12 fe-menu float-right"></span>
                            </div>
                            <div class="custom-control custom-checkbox mb-2 checked">
                                <input type="checkbox" class="custom-control-input" id="c2" checked>
                                <label class="custom-control-label" for="c2">Add latest version for bootstrap</label>
                                <span class="small text-muted fe fe-12 fe-menu float-right"></span>
                            </div>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="c3">
                                <label class="custom-control-label" for="c3">Update git with new layout</label>
                                <span class="small text-muted fe fe-12 fe-menu float-right"></span>
                            </div>
                            <div class="custom-control custom-checkbox mb-2 checked">
                                <input type="checkbox" class="custom-control-input" id="c4" checked>
                                <label class="custom-control-label" for="c4">Create new document version</label>
                                <span class="small text-muted fe fe-12 fe-menu float-right"></span>
                            </div>
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="c5">
                                <label class="custom-control-label" for="c5">Send email to everyone</label>
                                <span class="small text-muted fe fe-12 fe-menu float-right"></span>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="c5">
                                <label class="custom-control-label" for="c5">Build and create a new package</label>
                                <span class="small text-muted fe fe-12 fe-menu float-right"></span>
                            </div>
                        </div> <!-- / .card-body -->
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div>
    </div> <!-- .row -->
@endsection
