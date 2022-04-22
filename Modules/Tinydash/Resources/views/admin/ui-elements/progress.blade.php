@extends('layouts.app')

@section('title')
    Progress
@endsection

@section('content')
      <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="page-title">Progress</h2>
              <p class="lead text-muted">Examples for using Bootstrap custom progress bars featuring support for stacked bars, animated backgrounds, and text labels.</p>
              <div class="row my-4">
                <div class="col-md-6">
                  <div class="mb-4">
                    <p class="mb-1"><strong>Default</strong></p>
                    <div class="progress mb-3">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-1"><strong>With label</strong></p>
                    <div class="progress mb-3">
                      <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                    </div>
                    <p class="mb-1"><strong>Small Progress</strong></p>
                    <div class="progress mb-3" style="height: 2px;">
                      <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-1"><strong>Large Progress</strong></p>
                    <div class="progress mb-3" style="height: 30px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-4">
                    <p class="mb-1"><strong>Multiple bars</strong></p>
                    <div class="progress mb-2">
                      <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="mb-1"><strong>Multiple bars with label</strong></p>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">15%</div>
                      <div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
                      <div class="progress-bar bg-dark" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-4">
                    <p class="mb-1"><strong>Backgrounds</strong></p>
                    <div class="progress mb-3">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="mb-4">
                    <p class="mb-1"><strong>Striped</strong></p>
                    <div class="progress mb-3">
                      <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                      <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                      <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mb-3">
                      <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div> <!-- end section -->
              <h2>Spinners</h2>
              <p class="lead text-muted">Indicate the loading state of a component or page with Bootstrap spinners, built entirely with HTML, CSS, and no JavaScript.</p>
              <div class="row my-4">
                <div class="col-md-6">
                  <div class="mb-4">
                    <p class="mb-3">
                      <strong>Border Spinners</strong>
                    </p>
                    <div class="spinner-border mr-3 text-primary" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border mr-3 text-secondary" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border mr-3 text-success" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border mr-3 text-danger" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border mr-3 text-warning" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border mr-3 text-info" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border mr-3 text-light" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-border mr-3 text-dark" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                  </div>
                  <div class="mb-4">
                    <p class="mb-3">
                      <strong>Spinners size</strong>
                    </p>
                    <div class="row align-items-center">
                      <div class="col-md-5">
                        <div class="spinner-border mr-3" style="width: 3rem; height: 3rem;" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow mr-3" style="width: 3rem; height: 3rem;" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                      </div>
                      <div class="col">
                        <div class="spinner-border mr-3 spinner-border" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow mr-3 spinner-grow" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                      </div>
                      <div class="col">
                        <div class="spinner-border mr-3 spinner-border-sm" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                        <div class="spinner-grow mr-3 spinner-grow-sm" role="status">
                          <span class="sr-only">Loading...</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="mb-4">
                    <p class="mb-3">
                      <strong>Growing spinner</strong>
                    </p>
                    <div class="spinner-grow mr-3 text-primary" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow mr-3 text-secondary" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow mr-3 text-success" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow mr-3 text-danger" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow mr-3 text-warning" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow mr-3 text-info" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow mr-3 text-light" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow mr-3 text-dark" role="status">
                      <span class="sr-only">Loading...</span>
                    </div>
                  </div>
                  <div class="mb-4">
                    <p class="mb-3">
                      <strong>Buttons with spinners</strong>
                    </p>
                    <button class="btn btn-primary" type="button" disabled>
                      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                      <span class="sr-only">Loading...</span>
                    </button>
                    <button class="btn btn-secondary" type="button" disabled>
                      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading... </button>
                    <button class="btn btn-success" type="button" disabled>
                      <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                      <span class="sr-only">Loading...</span>
                    </button>
                    <button class="btn btn-secondary" type="button" disabled>
                      <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span> Loading... </button>
                  </div>
                </div>
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
@stop
