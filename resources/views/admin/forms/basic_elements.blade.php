@extends('layouts.app')

@section('title')
    Basci Elements
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <h2 class="page-title">Form elements</h2>
      <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Form controls</strong>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group mb-3">
                <label for="simpleinput">Text</label>
                <input type="text" id="simpleinput" class="form-control">
              </div>
              <div class="form-group mb-3">
                <label for="example-email">Email</label>
                <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group mb-3">
                <label for="example-password">Password</label>
                <input type="password" id="example-password" class="form-control" value="password">
              </div>
              <div class="form-group mb-3">
                <label for="example-palaceholder">Placeholder</label>
                <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
              </div>
            </div> <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group mb-3">
                <label for="example-helping">Helping text</label>
                <input type="text" id="example-helping" class="form-control" placeholder="Input with helping text">
                <span class="help-block"><small>A block of help text that breaks onto a new line.</small></span>
              </div>
              <div class="form-group mb-3">
                <label for="example-readonly">Readonly</label>
                <input type="text" id="example-readonly" class="form-control" readonly="" value="Readonly value">
              </div>
              <div class="form-group mb-3">
                <label for="example-disable">Disabled</label>
                <input type="text" class="form-control" id="example-disable" disabled="" value="Disabled value">
              </div>
              <div class="form-group mb-3">
                <label for="example-static">Static control</label>
                <input type="text" readonly="" class="form-control-plaintext" id="example-static" value="j@example.com">
              </div>
            </div>
          </div>
        </div>
      </div> <!-- / .card -->
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-body">
              <div class="form-group mb-3">
                <label for="example-textarea">Text area</label>
                <textarea class="form-control" id="example-textarea" rows="4"></textarea>
              </div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /.col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-body">
              <div class="form-group mb-3">
                <div class="form-group mb-3">
                  <label for="example-fileinput">Default file input</label>
                  <input type="file" id="example-fileinput" class="form-control-file">
                </div>
                <div class="form-group mb-3">
                  <label for="customFile">Custom file input</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
              </div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /.col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-body">
              <div class="form-group mb-3">
                <label for="example-select">Input Select</label>
                <select class="form-control" id="example-select">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="example-multiselect">Multiple Select</label>
                <select id="example-multiselect" multiple="" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /.col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-body">
              <div class="form-group mb-3">
                <label for="custom-select">Custom Select</label>
                <select class="custom-select" id="custom-select">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="custom-multiselect">Custom Multiple Select</label>
                <select class="custom-select" multiple id="custom-multiselect">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-body">
              <p class="mb-2"><strong>Checkboxes</strong></p>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1"> Default checkbox </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" disabled>
                <label class="form-check-label" for="defaultCheck3"> Disabled checkbox </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-body">
              <p class="mb-2"><strong>Custom checkboxes</strong></p>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Check this first custom checkbox</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">Check this secondary custom checkbox</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1-1" disabled checked>
                <label class="custom-control-label" for="customCheck1">Disabled custom checkbox</label>
              </div>
            </div> <!-- / .card-body -->
          </div> <!-- / .card -->
        </div> <!-- /. col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-body">
              <p class="mb-2"><strong>Default radio</strong></p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1"> This is default radio </label>
              </div>
              <div class="form-check mb-2">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" disabled>
                <label class="form-check-label" for="exampleRadios3"> Disabled radio </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">1</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">2</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
              </div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /.col -->
        <div class="col-md-6 mb-4">
          <div class="card shadow">
            <div class="card-body">
              <p class="mb-2"><strong>Custom Radios</strong></p>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" checked>
                <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" name="radioDisabled" id="customRadioDisabled2" class="custom-control-input" disabled>
                <label class="custom-control-label" for="customRadioDisabled2">Disabled this custom radio</label>
              </div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /.col -->
        <div class="col-md-12 mb-4">
          <div class="card shadow">
            <div class="card-header">
              <strong class="card-title">Sizing</strong>
            </div>
            <div class="card-body">
              <div class="form-group">
                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
              </div>
              <div class="form-group">
                <input class="form-control" type="text" placeholder="Default input">
              </div>
              <div class="form-group">
                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end section -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
@endsection
