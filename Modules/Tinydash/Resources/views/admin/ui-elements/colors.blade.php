@extends('layouts.app')

@section('title')
    Colors
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="h5 page-title">Colors</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at, pretium blanditsapien. </p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card bg-transparent">
                        <div class="card-body p-0">
                            <div class="row no-gutters bg-primary text-white">
                                <div class="col p-4">Primary color</div>
                                <div class="col-auto p-4 text-right"><small class="badge badge-pill text-white bg-primary-dark">#007bff</small></div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col p-2 bg-primary-lighter"></div>
                                <div class="col p-2 bg-primary-light"></div>
                                <div class="col p-2 bg-primary-dark"></div>
                                <div class="col p-2 bg-primary-darker"></div>
                            </div>
                        </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4 mb-4">
                    <div class="card bg-transparent">
                        <div class="card-body p-0">
                            <div class="row no-gutters bg-success text-white">
                                <div class="col p-4">Success color</div>
                                <div class="col-auto p-4 text-right"><small class="badge badge-pill text-white bg-success-dark">#28a745</small></div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col p-2 bg-success-lighter"></div>
                                <div class="col p-2 bg-success-light"></div>
                                <div class="col p-2 bg-success-dark"></div>
                                <div class="col p-2 bg-success-darker"></div>
                            </div>
                        </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4 mb-4">
                    <div class="card bg-transparent">
                        <div class="card-body p-0">
                            <div class="row no-gutters bg-warning text-white">
                                <div class="col p-4">Warning color</div>
                                <div class="col-auto p-4 text-right"><small class="badge badge-pill text-white bg-warning-dark">#28a745</small></div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col p-2 bg-warning-lighter"></div>
                                <div class="col p-2 bg-warning-light"></div>
                                <div class="col p-2 bg-warning-dark"></div>
                                <div class="col p-2 bg-warning-darker"></div>
                            </div>
                        </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4 mb-4">
                    <div class="card bg-transparent">
                        <div class="card-body p-0">
                            <div class="row no-gutters bg-secondary text-white">
                                <div class="col p-4">Secondary color</div>
                                <div class="col-auto p-4 text-right"><small class="badge badge-pill text-white bg-secondary-dark">#6c757d</small></div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col p-2 bg-secondary-lighter"></div>
                                <div class="col p-2 bg-secondary-light"></div>
                                <div class="col p-2 bg-secondary-dark"></div>
                                <div class="col p-2 bg-secondary-darker"></div>
                            </div>
                        </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4 mb-4">
                    <div class="card bg-transparent">
                        <div class="card-body p-0">
                            <div class="row no-gutters bg-info text-white">
                                <div class="col p-4">Info color</div>
                                <div class="col-auto p-4 text-right"><small class="badge badge-pill text-white bg-info-dark">#007bff</small></div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col p-2 bg-info-lighter"></div>
                                <div class="col p-2 bg-info-light"></div>
                                <div class="col p-2 bg-info-dark"></div>
                                <div class="col p-2 bg-info-darker"></div>
                            </div>
                        </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
                <div class="col-md-4 mb-4">
                    <div class="card bg-transparent">
                        <div class="card-body p-0">
                            <div class="row no-gutters bg-danger text-white">
                                <div class="col p-4">Danger color</div>
                                <div class="col-auto p-4 text-right"><small class="badge badge-pill text-white bg-danger-dark">#28a745</small></div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col p-2 bg-danger-lighter"></div>
                                <div class="col p-2 bg-danger-light"></div>
                                <div class="col p-2 bg-danger-dark"></div>
                                <div class="col p-2 bg-danger-darker"></div>
                            </div>
                        </div> <!-- /. card-body -->
                    </div> <!-- /. card -->
                </div> <!-- /. col -->
            </div> <!-- end section -->
            <h2 class="h5" id="task-section">Gray Levels</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at, pretium blanditsapien. </p>
            <div class="card bg-transparent">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-2 p-4 bg-white text-secondary">White</div>
                        <div class="col-lg-2 p-4 bg-light text-secondary">Light</div>
                        <div class="col-lg-2 p-4 bg-secondary-lighter text-white">Borderds</div>
                        <div class="col-lg-2 p-4 bg-secondary-light text-white">Muted</div>
                        <div class="col-lg-2 p-4 bg-secondary text-white">Regular</div>
                        <div class="col-lg-2 p-4 bg-dark text-white">Headings</div>
                    </div>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div> <!-- .col-12 -->
    </div> <!-- .row -->
@endsection
