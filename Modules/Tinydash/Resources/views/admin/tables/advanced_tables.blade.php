@extends('layouts.app')

@section('title')
    Advanced Tables
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <div class="row">
        <!-- Small table -->
        <div class="col-md-12 my-4">
          <h2 class="h4 mb-1">Customize table rendering</h2>
          <p class="mb-3">Additional table rendering with vertical border, rich content formatting for cell</p>
          <div class="card shadow">
            <div class="card-body">
              <div class="toolbar">
                <form class="form">
                  <div class="form-row">
                    <div class="form-group col-auto mr-auto">
                      <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref1">Show</label>
                      <select class="custom-select mr-sm-2" id="inlineFormCustomSelectPref1">
                        <option value="">...</option>
                        <option value="1">12</option>
                        <option value="2" selected>32</option>
                        <option value="3">64</option>
                        <option value="3">128</option>
                      </select>
                    </div>
                    <div class="form-group col-auto">
                      <label for="search" class="sr-only">Search</label>
                      <input type="text" class="form-control" id="search1" value="" placeholder="Search">
                    </div>
                  </div>
                </form>
              </div>
              <!-- table -->
              <table class="table table-borderless table-hover">
                <thead>
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="all2">
                        <label class="custom-control-label" for="all2"></label>
                      </div>
                    </td>
                    <th>ID</th>
                    <th>User</th>
                    <th>Company</th>
                    <th>Contact</th>
                    <th class="w-25">Bio</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="2474">
                        <label class="custom-control-label" for="2474"></label>
                      </div>
                    </td>
                    <td>
                      <div class="avatar avatar-md">
                        <img src="./assets/avatars/face-3.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><strong>Brown, Asher D.</strong></p>
                      <small class="mb-0 text-muted">2474</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted">Accumsan Consulting</p>
                      <small class="mb-0 text-muted">Ap #331-7123 Lobortis Avenue</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><a href="#" class="text-muted">(958) 421-0798</a></p>
                      <small class="mb-0 text-muted">Nigeria</small>
                    </td>
                    <td class="w-25"><small class="text-muted"> Egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst quisque sagittis purus.</small></td>
                    <td class="text-muted">13/09/2020</td>
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
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="2786">
                        <label class="custom-control-label" for="2786"></label>
                      </div>
                    </td>
                    <td>
                      <div class="avatar avatar-md">
                        <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><strong>Leblanc, Yoshio V.</strong></p>
                      <small class="mb-0 text-muted">2786</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted">Fringilla Ornare Placerat Consulting</p>
                      <small class="mb-0 text-muted">287-8300 Nisl. St</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><a href="#" class="text-muted">(899) 881-3833</a></p>
                      <small class="mb-0 text-muted">Papua New Guinea</small>
                    </td>
                    <td class="w-25"><small class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></td>
                    <td class="text-muted">04/05/2019</td>
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
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="2747">
                        <label class="custom-control-label" for="2747"></label>
                      </div>
                    </td>
                    <td>
                      <div class="avatar avatar-md">
                        <img src="./assets/avatars/face-2.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><strong>Hester, Nissim L.</strong></p>
                      <small class="mb-0 text-muted">2747</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted">Tristique Ltd</p>
                      <small class="mb-0 text-muted">4577 Cras St.</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><a href="#" class="text-muted">(977) 220-6518</a></p>
                      <small class="mb-0 text-muted">Central African Republic</small>
                    </td>
                    <td class="w-25"><small class="text-muted"> Non tellus orci ac auctor augue. Elit at imperdiet dui accumsan sit.</small></td>
                    <td class="text-muted">21/08/2019</td>
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
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="2639">
                        <label class="custom-control-label" for="2639"></label>
                      </div>
                    </td>
                    <td>
                      <div class="avatar avatar-md">
                        <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><strong>Gardner, Leigh S.</strong></p>
                      <small class="mb-0 text-muted">2639</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted">Orci Luctus Et Inc.</p>
                      <small class="mb-0 text-muted">P.O. Box 228, 7512 Lectus Ave</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><a href="#" class="text-muted">(537) 315-1481</a></p>
                      <small class="mb-0 text-muted">United Kingdom</small>
                    </td>
                    <td class="w-25"><small class="text-muted"> Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Neque convallis a cras semper auctor</small></td>
                    <td class="text-muted">04/08/2019</td>
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
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="2238">
                        <label class="custom-control-label" for="2238"></label>
                      </div>
                    </td>
                    <td>
                      <div class="avatar avatar-md">
                        <img src="./assets/avatars/face-5.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><strong>Higgins, Uriah L.</strong></p>
                      <small class="mb-0 text-muted">2238</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted">Sit Amet Lorem Industries</p>
                      <small class="mb-0 text-muted">Ap #377-5357 Sed Road</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><a href="#" class="text-muted">(238) 386-0247</a></p>
                      <small class="mb-0 text-muted">Canada</small>
                    </td>
                    <td class="w-25"><small class="text-muted"> Libero id faucibus nisl tincidunt eget. Leo a diam sollicitudin tempor id. </small></td>
                    <td class="text-muted">26/07/2020</td>
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
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="2152">
                        <label class="custom-control-label" for="2152"></label>
                      </div>
                    </td>
                    <td>
                      <div class="avatar avatar-md">
                        <img src="./assets/avatars/face-6.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><strong>Wheeler, Ralph F.</strong></p>
                      <small class="mb-0 text-muted">2152</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted">Suspendisse LLC</p>
                      <small class="mb-0 text-muted">Ap #410-5363 Non, Avenue</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><a href="#" class="text-muted">(587) 675-3258</a></p>
                      <small class="mb-0 text-muted">Chad</small>
                    </td>
                    <td class="w-25"><small class="text-muted"> Libero id faucibus nisl tincidunt eget. Leo a diam sollicitudin tempor id. </small></td>
                    <td class="text-muted">11/09/2019</td>
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
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="2488">
                        <label class="custom-control-label" for="2488"></label>
                      </div>
                    </td>
                    <td>
                      <div class="avatar avatar-md">
                        <img src="./assets/avatars/face-7.jpg" alt="..." class="avatar-img rounded-circle">
                      </div>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><strong>Kelley, Sonya Y.</strong></p>
                      <small class="mb-0 text-muted">2488</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted">Dolor Incorporated</p>
                      <small class="mb-0 text-muted">8250 Molestie St.</small>
                    </td>
                    <td>
                      <p class="mb-0 text-muted"><a href="#" class="text-muted">(934) 582-9495</a></p>
                      <small class="mb-0 text-muted">British Indian Ocean Territory</small>
                    </td>
                    <td class="w-25"><small class="text-muted"> A lacus vestibulum sed arcu non odio euismod lacinia. In tellus integer feugiat scelerisque.</small></td>
                    <td class="text-muted">30/03/2021</td>
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
              <nav aria-label="Table Paging" class="mb-0 text-muted">
                <ul class="pagination justify-content-center mb-0">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div> <!-- customized table -->
      </div> <!-- end section -->
      <div class="row">
        <!-- Striped rows -->
        <div class="col-md-12 my-4">
          <h2 class="h4 mb-1">Grouped header & rows</h2>
          <p class="mb-4">Customized table based on Bootstrap with additional elements and more functions</p>
          <div class="card shadow">
            <div class="card-body">
              <div class="toolbar row mb-3">
                <div class="col">
                  <form class="form-inline">
                    <div class="form-row">
                      <div class="form-group col-auto">
                        <label for="search" class="sr-only">Search</label>
                        <input type="text" class="form-control" id="search" value="" placeholder="Search">
                      </div>
                      <div class="form-group col-auto ml-3">
                        <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref">Status</label>
                        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                          <option selected>Choose...</option>
                          <option value="1">Processing</option>
                          <option value="2">Success</option>
                          <option value="3">Pending</option>
                          <option value="3">Hold</option>
                        </select>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col ml-auto">
                  <div class="dropdown float-right">
                    <button class="btn btn-primary float-right ml-3" type="button">Add more +</button>
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="actionMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Action </button>
                    <div class="dropdown-menu" aria-labelledby="actionMenuButton">
                      <a class="dropdown-item" href="#">Export</a>
                      <a class="dropdown-item" href="#">Delete</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- table -->
              <table class="table table-bordered">
                <thead>
                  <tr role="row">
                    <th colspan="3">Orders</th>
                    <th colspan="4">Billing</th>
                    <th colspan="3">State</th>
                  </tr>
                  <tr role="row">
                    <th>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="all">
                        <label class="custom-control-label" for="all"></label>
                      </div>
                    </th>
                    <th>ID</th>
                    <th>Purchase Date</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Tracking #</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="4574">
                        <label class="custom-control-label" for="4574"></label>
                      </div>
                    </td>
                    <td>4574</td>
                    <td>2019-09-11 10:22:04</td>
                    <td>Kitra Knapp</td>
                    <td>(132) 339-7423</td>
                    <td>P.O. Box 944, 4739 Suspendisse Road</td>
                    <td>$68.79</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td></td>
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
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="2132">
                        <label class="custom-control-label" for="2132"></label>
                      </div>
                    </td>
                    <td>2132</td>
                    <td>2019-08-23 12:28:40</td>
                    <td>Blake Orr</td>
                    <td>(257) 565-4706</td>
                    <td>P.O. Box 939, 9156 Sollicitudin St.</td>
                    <td>$84.24</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td></td>
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
                  <tr role="group" class="bg-light">
                    <td colspan="10"><strong>Shipped</strong></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="2576">
                        <label class="custom-control-label" for="2576"></label>
                      </div>
                    </td>
                    <td>2576</td>
                    <td>2020-07-14 17:18:27</td>
                    <td>Amber Rice</td>
                    <td>(791) 898-8806</td>
                    <td>P.O. Box 724, 3385 Vel Ave</td>
                    <td>$37.00</td>
                    <td><span class="badge badge-success">Success</span></td>
                    <td>487385-5144</td>
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
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="2397">
                        <label class="custom-control-label" for="2397"></label>
                      </div>
                    </td>
                    <td>2397</td>
                    <td>2020-12-25 13:35:39</td>
                    <td>Fletcher Petty</td>
                    <td>(115) 625-5813</td>
                    <td>8907 Orci St.</td>
                    <td>$75.69</td>
                    <td><span class="badge badge-success">Success</span></td>
                    <td>039606-5955</td>
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
                  <tr role="group" class="bg-light">
                    <td colspan="10"><strong>Return</strong></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="4028">
                        <label class="custom-control-label" for="4028"></label>
                      </div>
                    </td>
                    <td>4028</td>
                    <td>2021-04-11 22:33:47</td>
                    <td>Kasimir Carr</td>
                    <td>(266) 991-0479</td>
                    <td>489-624 Quis St.</td>
                    <td>$86.89</td>
                    <td><span class="badge badge-danger">Hold</span></td>
                    <td></td>
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
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="3782">
                        <label class="custom-control-label" for="3782"></label>
                      </div>
                    </td>
                    <td>3782</td>
                    <td>2020-03-01 10:44:03</td>
                    <td>Daria Frank</td>
                    <td>(599) 361-7999</td>
                    <td>Ap #875-5778 Massa. Av.</td>
                    <td>$38.04</td>
                    <td><span class="badge badge-primary">Processing</span></td>
                    <td>072140-0703</td>
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
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="3881">
                        <label class="custom-control-label" for="3881"></label>
                      </div>
                    </td>
                    <td>3881</td>
                    <td>2019-12-17 00:40:24</td>
                    <td>Herrod Byrd</td>
                    <td>(878) 901-7269</td>
                    <td>P.O. Box 107, 3720 Vitae, Ave</td>
                    <td>$73.38</td>
                    <td><span class="badge badge-primary">Processing</span></td>
                    <td>047336-4370</td>
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
              <nav aria-label="Table Paging" class="mb-0 text-muted">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div> <!-- simple table -->
      </div> <!-- end section -->
      <div class="row">
        <div class="col-md-12 my-4">
          <h2 class="h4 mb-1">Expandable rows</h2>
          <p class="mb-3">Child rows with additional detailed information</p>
          <div class="card shadow">
            <div class="card-body">
              <!-- table -->
              <table class="table table-hover table-borderless border-v">
                <thead class="thead-dark">
                  <tr>
                    <th>Invoice No</th>
                    <th>Invoice Date</th>
                    <th>Order #</th>
                    <th>Bill To</th>
                    <th>Status</th>
                    <th>Grand Total</th>
                    <th>Total</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="accordion-toggle collapsed" id="c-2474" data-toggle="collapse" data-parent="#c-2474" href="#collap-2474">
                    <td>3599</td>
                    <td>2020-09-12 11:21:03</td>
                    <td>3951</td>
                    <td>Alexander Ellis</td>
                    <td><span class="badge badge-pill badge-success mr-2">S</span><small class="text-muted">Paid</small></td>
                    <td>$37.39</td>
                    <td>$80.11</td>
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
                  <tr id="collap-2474" class="collapse show in p-3 bg-light">
                    <td colspan="8">
                      <dl class="row mb-0 mt-1">
                        <dt class="col-sm-1">Company</dt>
                        <dd class="col-sm-2">Fringilla Ornare Consulting</dd>
                        <dt class="col-sm-1">Address</dt>
                        <dd class="col-sm-2">287-8300 Nisl. St.</dd>
                        <dt class="col-sm-1">Phone</dt>
                        <dd class="col-sm-2">(899) 881-3833</dd>
                        <dt class="col-sm-1 text-truncate">Region</dt>
                        <dd class="col-sm-2">Papua New Guinea</dd>
                      </dl>
                    </td>
                  </tr>
                  <tr class="accordion-toggle collapsed" id="c-3954" data-toggle="collapse" data-parent="#c-3954" href="#collap-3954">
                    <td>3954</td>
                    <td>2020-10-11 19:09:12</td>
                    <td>4038</td>
                    <td>Casey Caldwell</td>
                    <td><span class="badge badge-pill badge-success mr-2">S</span><small class="text-muted">Paid</small></td>
                    <td>$30.74</td>
                    <td>$46.14</td>
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
                  <tr id="collap-3954" class="collapse in p-3 bg-light">
                    <td colspan="8">
                      <dl class="row mb-0 mt-1">
                        <dt class="col-sm-1">Company</dt>
                        <dd class="col-sm-2">Tristique Ltd</dd>
                        <dt class="col-sm-1">Address</dt>
                        <dd class="col-sm-2">4577 Cras St.</dd>
                        <dt class="col-sm-1">Phone</dt>
                        <dd class="col-sm-2">(977) 220-6518</dd>
                        <dt class="col-sm-1 text-truncate">Region</dt>
                        <dd class="col-sm-2">Central African Republic</dd>
                      </dl>
                    </td>
                  <tr class="accordion-toggle collapsed" id="c-2429" data-toggle="collapse" data-parent="#c-2429" href="#collap-2429">
                    <td>2429</td>
                    <td>2020-11-26 02:45:30</td>
                    <td>4603</td>
                    <td>Jack Adams</td>
                    <td><span class="badge badge-pill badge-warning mr-2">W</span><small class="text-muted">Pending</small></td>
                    <td>$20.84</td>
                    <td>$28.51</td>
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
                  <tr id="collap-2429" class="collapse in p-3 bg-light">
                    <td colspan="8">
                      <dl class="row mb-0 mt-1">
                        <dt class="col-sm-1">Company</dt>
                        <dd class="col-sm-2">Orci Luctus Et Inc.</dd>
                        <dt class="col-sm-1">Address</dt>
                        <dd class="col-sm-2">P.O. Box 228, 7512 Lectus Ave</dd>
                        <dt class="col-sm-1">Phone</dt>
                        <dd class="col-sm-2">(537) 315-1481</dd>
                        <dt class="col-sm-1 text-truncate">Region</dt>
                        <dd class="col-sm-2">Bonaire, Sint Eustatius and Sabac</dd>
                      </dl>
                    </td>
                  </tr>
                  <tr class="accordion-toggle collapsed" id="c-3987" data-toggle="collapse" data-parent="#c-3987" href="#collap-3987">
                    <td>3987</td>
                    <td>2020-02-13 19:29:45</td>
                    <td>4261</td>
                    <td>Samantha Hansen</td>
                    <td><span class="badge badge-pill badge-success mr-2">S</span><small class="text-muted">Paid</small></td>
                    <td>$83.19</td>
                    <td>$48.48</td>
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
                  <tr id="collap-3987" class="collapse in p-3 bg-light">
                    <td colspan="8">
                      <dl class="row mb-0 mt-1">
                        <dt class="col-sm-1">Company</dt>
                        <dd class="col-sm-2">Ap #377-5357 Sed Road</dd>
                        <dt class="col-sm-1">Address</dt>
                        <dd class="col-sm-2">P.O. Box 228, 7512 Lectus Ave</dd>
                        <dt class="col-sm-1">Phone</dt>
                        <dd class="col-sm-2">(238) 386-0247</dd>
                        <dt class="col-sm-1 text-truncate">Region</dt>
                        <dd class="col-sm-2">Canada</dd>
                      </dl>
                    </td>
                  </tr>
                  <tr class="accordion-toggle collapsed" id="c-3165" data-toggle="collapse" data-parent="#c-3987" href="#collap-3165">
                    <td>3165</td>
                    <td>2020-05-05 22:33:28</td>
                    <td>3308</td>
                    <td>Carla Ochoa</td>
                    <td><span class="badge badge-pill badge-primary mr-2">P</span><small class="text-muted">Invoiced</small></td>
                    <td>$99.92</td>
                    <td>$38.62</td>
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
                  <tr id="collap-3165" class="collapse in p-3 bg-light">
                    <td colspan="8">
                      <dl class="row mb-0 mt-1">
                        <dt class="col-sm-1">Company</dt>
                        <dd class="col-sm-2">Suspendisse LLC</dd>
                        <dt class="col-sm-1">Address</dt>
                        <dd class="col-sm-2">Ap #410-5363 Non, Avenue</dd>
                        <dt class="col-sm-1">Phone</dt>
                        <dd class="col-sm-2">(587) 675-3258</dd>
                        <dt class="col-sm-1 text-truncate">Region</dt>
                        <dd class="col-sm-2">Chad</dd>
                      </dl>
                    </td>
                  </tr>
                  <tr class="accordion-toggle collapsed" id="c-5429" data-toggle="collapse" data-parent="#c-5429" href="#collap-5429">
                    <td>5429</td>
                    <td>2020-11-26 02:45:30</td>
                    <td>4603</td>
                    <td>Jack Adams</td>
                    <td><span class="badge badge-pill badge-warning mr-2">W</span><small class="text-muted">Pending</small></td>
                    <td>$20.84</td>
                    <td>$28.51</td>
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
                  <tr id="collap-5429" class="collapse in p-3 bg-light">
                    <td colspan="8">
                      <dl class="row mb-0 mt-1">
                        <dt class="col-sm-1">Company</dt>
                        <dd class="col-sm-2">Dolor Incorporated</dd>
                        <dt class="col-sm-1">Address</dt>
                        <dd class="col-sm-2">8250 Molestie St.</dd>
                        <dt class="col-sm-1">Phone</dt>
                        <dd class="col-sm-2">(934) 582-9495</dd>
                        <dt class="col-sm-1 text-truncate">Region</dt>
                        <dd class="col-sm-2">British</dd>
                      </dl>
                    </td>
                  </tr>
                  <tr class="accordion-toggle collapsed" id="c-3951" data-toggle="collapse" data-parent="#c-3951" href="#collap-3951">
                    <td>3951</td>
                    <td>2020-10-11 19:09:12</td>
                    <td>4038</td>
                    <td>Casey Caldwell</td>
                    <td><span class="badge badge-pill badge-success mr-2">S</span><small class="text-muted">Paid</small></td>
                    <td>$30.74</td>
                    <td>$46.14</td>
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
                  <tr id="collap-3951" class="collapse in p-3 bg-light">
                    <td colspan="8">
                      <dl class="row mb-0 mt-1">
                        <dt class="col-sm-1">Company</dt>
                        <dd class="col-sm-2">Urna Et PC</dd>
                        <dt class="col-sm-1">Address</dt>
                        <dd class="col-sm-2">3132 Mi Av.</dd>
                        <dt class="col-sm-1">Phone</dt>
                        <dd class="col-sm-2">(459) 982-1284</dd>
                        <dt class="col-sm-1 text-truncate">Region</dt>
                        <dd class="col-sm-2">Burkina Faso</dd>
                      </dl>
                    </td>
                  </tr>
                  <tr class="accordion-toggle collapsed" id="c-3599" data-toggle="collapse" data-parent="#c-3599" href="#collap-3599">
                    <td>3599</td>
                    <td>2020-09-12 11:21:03</td>
                    <td>3951</td>
                    <td>Alexander Ellis</td>
                    <td><span class="badge badge-pill badge-primary mr-2">P</span><small class="text-muted">Invoiced</small></td>
                    <td>$37.39</td>
                    <td>$80.11</td>
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
                  <tr id="collap-3599" class="collapse in p-3 bg-light">
                    <td colspan="8">
                      <dl class="row mb-0 mt-1">
                        <dt class="col-sm-1">Company</dt>
                        <dd class="col-sm-2">Mi Consulting</dd>
                        <dt class="col-sm-1">Address</dt>
                        <dd class="col-sm-2">921-6311 Nam Av.</dd>
                        <dt class="col-sm-1">Phone</dt>
                        <dd class="col-sm-2">(759) 501-2397</dd>
                        <dt class="col-sm-1 text-truncate">Region</dt>
                        <dd class="col-sm-2">Singapore</dd>
                      </dl>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> <!-- end section -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
@endsection
