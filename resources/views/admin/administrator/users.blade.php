@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <h2 class="page-title">User List</h2>
      <p> Tables with built-in bootstrap styles </p>
      <div class="row">
        <!-- Bordered table -->
        <div class="col-md-12 my-4">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title">Bordered table</h5>
              <p class="card-text">Add .table-bordered for borders on all sides of the table and cells.</p>
              <table class="table table-bordered table-hover mb-0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Activate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>3224</td>
                    <td>Keith Baird</td>
                    <td>Enim Limited</td>
                    <td>901-6206 Cras Av.</td>
                    <td>Apr 24, 2019</td>
                    <td>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="c1" checked>
                        <label class="custom-control-label" for="c1"></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3218</td>
                    <td>Graham Price</td>
                    <td>Nunc Lectus Incorporated</td>
                    <td>Ap #705-5389 Id St.</td>
                    <td>May 23, 2020</td>
                    <td>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="c2">
                        <label class="custom-control-label" for="c2"></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2651</td>
                    <td>Reuben Orr</td>
                    <td>Nisi Aenean Eget Limited</td>
                    <td>7425 Malesuada Rd.</td>
                    <td>Nov 4, 2019</td>
                    <td>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="c3" checked>
                        <label class="custom-control-label" for="c3"></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2636</td>
                    <td>Akeem Holder</td>
                    <td>Pellentesque Associates</td>
                    <td>896 Sodales St.</td>
                    <td>Mar 27, 2020</td>
                    <td>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="c4">
                        <label class="custom-control-label" for="c4"></label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2757</td>
                    <td>Beau Barrera</td>
                    <td>Augue Incorporated</td>
                    <td>4583 Id St.</td>
                    <td>Jan 13, 2020</td>
                    <td>
                      <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="c5">
                        <label class="custom-control-label" for="c5"></label>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- Bordered table -->
      </div> <!-- end section -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
@endsection
