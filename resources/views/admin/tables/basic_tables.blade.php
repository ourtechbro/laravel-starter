@extends('layouts.app')

@section('title')
    Basic Tables
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <h2 class="page-title">Basic table</h2>
      <p> Tables with built-in bootstrap styles </p>
      <div class="row">
        <!-- simple table -->
        <div class="col-md-6 my-4">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title">Simple Table</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>3224</td>
                    <td>Keith Baird</td>
                    <td>Enim Limited</td>
                    <td>901-6206 Cras Av.</td>
                    <td>Apr 24, 2019</td>
                    <td><span class="badge badge-pill badge-warning">Hold</span></td>
                  </tr>
                  <tr>
                    <td>3218</td>
                    <td>Graham Price</td>
                    <td>Nunc Lectus Incorporated</td>
                    <td>Ap #705-5389 Id St.</td>
                    <td>May 23, 2020</td>
                    <td><span class="badge badge-pill badge-success">Success</span></td>
                  </tr>
                  <tr>
                    <td>2651</td>
                    <td>Reuben Orr</td>
                    <td>Nisi Aenean Eget Limited</td>
                    <td>7425 Malesuada Rd.</td>
                    <td>Nov 4, 2019</td>
                    <td><span class="badge badge-pill badge-warning">Hold</span></td>
                  </tr>
                  <tr>
                    <td>2636</td>
                    <td>Akeem Holder</td>
                    <td>Pellentesque Associates</td>
                    <td>896 Sodales St.</td>
                    <td>Mar 27, 2020</td>
                    <td><span class="badge badge-pill badge-danger">Danger</span></td>
                  </tr>
                  <tr>
                    <td>2757</td>
                    <td>Beau Barrera</td>
                    <td>Augue Incorporated</td>
                    <td>4583 Id St.</td>
                    <td>Jan 13, 2020</td>
                    <td><span class="badge badge-pill badge-success">Success</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- simple table -->
        <!-- Bordered table -->
        <div class="col-md-6 my-4">
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
      <div class="row">
        <!-- Striped rows -->
        <div class="col-md-6 my-4">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title">Striped rows</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="chall">
                        <label class="custom-control-label" for="d1"></label>
                      </div>
                    </th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="d1">
                        <label class="custom-control-label" for="d1"></label>
                      </div>
                    </td>
                    <td>2474</td>
                    <td>Brown, Asher D.</td>
                    <td>Ap #331-7123 Lobortis Avenue</td>
                    <td>(958) 421-0798</td>
                    <td>13/09/2020</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle" type="button" id="dr1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr1">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Remove</a>
                          <a class="dropdown-item" href="#">Assign</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="d2">
                        <label class="custom-control-label" for="d2"></label>
                      </div>
                    </td>
                    <td>2786</td>
                    <td>Leblanc, Yoshio V.</td>
                    <td>287-8300 Nisl. St.</td>
                    <td>(899) 881-3833</td>
                    <td>04/05/2019</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle" type="button" id="dr2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr2">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Remove</a>
                          <a class="dropdown-item" href="#">Assign</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="d3">
                        <label class="custom-control-label" for="d3"></label>
                      </div>
                    </td>
                    <td>2747</td>
                    <td>Hester, Nissim L.</td>
                    <td>4577 Cras St.</td>
                    <td>(977) 220-6518</td>
                    <td>Nov 4, 2019</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Remove</a>
                          <a class="dropdown-item" href="#">Assign</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="d4">
                        <label class="custom-control-label" for="d4"></label>
                      </div>
                    </td>
                    <td>2639</td>
                    <td>Gardner, Leigh S.</td>
                    <td>P.O. Box 228, 7512 Lectus Ave</td>
                    <td>(537) 315-1481</td>
                    <td>04/08/2019</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle" type="button" id="dr4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr4">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Remove</a>
                          <a class="dropdown-item" href="#">Assign</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="d5">
                        <label class="custom-control-label" for="d5"></label>
                      </div>
                    </td>
                    <td>2238</td>
                    <td>Higgins, Uriah L.</td>
                    <td>Ap #377-5357 Sed Road</td>
                    <td>(238) 386-0247</td>
                    <td>Jan 13, 2020</td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm dropdown-toggle" type="button" id="dr5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="text-muted sr-only">Action</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dr5">
                          <a class="dropdown-item" href="#">Edit</a>
                          <a class="dropdown-item" href="#">Remove</a>
                          <a class="dropdown-item" href="#">Assign</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- Striped rows -->
        <!-- Bordered table -->
        <div class="col-md-6 my-4">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title">Table head options</h5>
              <p class="card-text">Add .table-hover to enable a hover state on table rows within a <tbody>
              </p>
              <table class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th>ID</th>
                    <th>Progress</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>2370</td>
                    <td>
                      <div class="progress progress-sm" style="height:3px">
                        <div class="progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>Barry Bright</td>
                    <td>Donec Corporation</td>
                    <td>662-5410 Eu Ave</td>
                    <td>Jun 22, 2020</td>
                  </tr>
                  <tr>
                    <td>3224</td>
                    <td>
                      <div class="progress progress-sm" style="height:3px">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>Keith Baird</td>
                    <td>Enim Limited</td>
                    <td>901-6206 Cras Av.</td>
                    <td>Apr 24, 2019</td>
                  </tr>
                  <tr>
                    <td>3218</td>
                    <td>
                      <div class="progress progress-sm" style="height:3px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>Graham Price</td>
                    <td>Nunc Lectus Incorporated</td>
                    <td>Ap #705-5389 Id St.</td>
                    <td>May 23, 2020</td>
                  </tr>
                  <tr>
                    <td>2651</td>
                    <td>
                      <div class="progress progress-sm" style="height:3px">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>Reuben Orr</td>
                    <td>Nisi Aenean Eget Limited</td>
                    <td>7425 Malesuada Rd.</td>
                    <td>Nov 4, 2019</td>
                  </tr>
                  <tr>
                    <td>2636</td>
                    <td>
                      <div class="progress progress-sm" style="height:3px">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>Akeem Holder</td>
                    <td>Pellentesque Associates</td>
                    <td>896 Sodales St.</td>
                    <td>Mar 27, 2020</td>
                  </tr>
                  <tr>
                    <td>2757</td>
                    <td>
                      <div class="progress progress-sm" style="height:3px">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td>Beau Barrera</td>
                    <td>Augue Incorporated</td>
                    <td>4583 Id St.</td>
                    <td>Jan 13, 2020</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- Bordered table -->
      </div> <!-- end section -->
      <div class="row">
        <!-- Small table -->
        <div class="col-md-6 my-4">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title">Small table</h5>
              <p class="card-text">Add .table-sm to make tables more compact by cutting cell padding in half.</p>
              <table class="table table-hover table-sm">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>3224</td>
                    <td>Keith Baird</td>
                    <td>Enim Limited</td>
                    <td>901-6206 Cras Av.</td>
                    <td>Apr 24, 2019</td>
                    <td><span class="text-warning">Hold</span></td>
                  </tr>
                  <tr>
                    <td>3218</td>
                    <td>Graham Price</td>
                    <td>Nunc Lectus Incorporated</td>
                    <td>Ap #705-5389 Id St.</td>
                    <td>May 23, 2020</td>
                    <td><span class="text-success">Success</span></td>
                  </tr>
                  <tr>
                    <td>2651</td>
                    <td>Reuben Orr</td>
                    <td>Nisi Aenean Eget Limited</td>
                    <td>7425 Malesuada Rd.</td>
                    <td>Nov 4, 2019</td>
                    <td><span class="text-warning">Hold</span></td>
                  </tr>
                  <tr>
                    <td>2636</td>
                    <td>Akeem Holder</td>
                    <td>Pellentesque Associates</td>
                    <td>896 Sodales St.</td>
                    <td>Mar 27, 2020</td>
                    <td><span class="text-danger">Danger</span></td>
                  </tr>
                  <tr>
                    <td>2757</td>
                    <td>Beau Barrera</td>
                    <td>Augue Incorporated</td>
                    <td>4583 Id St.</td>
                    <td>Jan 13, 2020</td>
                    <td><span class="text-success">Success</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- simple table -->
        <!--Expandable rows -->
        <div class="col-md-6 my-4">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title">Color table rows</h5>
              <p class="card-text">Use contextual classes to color table rows or individual cells.</p>
              <table class="table table-sm table-hover table-borderless">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-warning">
                    <td>3224</td>
                    <td>Keith Baird</td>
                    <td>Enim Limited</td>
                    <td>901-6206 Cras Av.</td>
                    <td>Apr 24, 2019</td>
                    <td><span class="badge badge-pill badge-warning">Hold</span></td>
                  </tr>
                  <tr class="table-success">
                    <td>3218</td>
                    <td>Graham Price</td>
                    <td>Nunc Lectus Incorporated</td>
                    <td>Ap #705-5389 Id St.</td>
                    <td>May 23, 2020</td>
                    <td><span class="badge badge-pill badge-success">Success</span></td>
                  </tr>
                  <tr class="table-warning">
                    <td>2651</td>
                    <td>Reuben Orr</td>
                    <td>Nisi Aenean Eget Limited</td>
                    <td>7425 Malesuada Rd.</td>
                    <td>Nov 4, 2019</td>
                    <td><span class="badge badge-pill badge-warning">Hold</span></td>
                  </tr>
                  <tr class="table-danger">
                    <td>2636</td>
                    <td>Akeem Holder</td>
                    <td>Pellentesque Associates</td>
                    <td>896 Sodales St.</td>
                    <td>Mar 27, 2020</td>
                    <td><span class="badge badge-pill badge-danger">Danger</span></td>
                  </tr>
                  <tr class="table-primary">
                    <td>2757</td>
                    <td>Beau Barrera</td>
                    <td>Augue Incorporated</td>
                    <td>4583 Id St.</td>
                    <td>Jan 13, 2020</td>
                    <td><span class="badge badge-pill badge-primary">Active</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- Expandable rows -->
      </div> <!-- end section -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
@endsection
