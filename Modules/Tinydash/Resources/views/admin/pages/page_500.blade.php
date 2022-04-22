@extends('layouts.app')

@section('title')
   Orders
@endsection
@section('content')
<div class="row justify-content-center">
  <div class="col-12">
    <h2 class="h3 mb-3 page-title">Orders</h2>
    <div class="row mb-4 items-align-center">
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
        <span class="small bg-white border py-1 px-2 rounded mr-2 d-none d-lg-inline">
          <a href="#" class="text-muted"><i class="fe fe-x mx-1"></i></a>
          <span class="text-muted">Status : <strong>Pending</strong></span>
        </span>
        <span class="small bg-white border py-1 px-2 rounded mr-2 d-none d-lg-inline">
          <a href="#" class="text-muted"><i class="fe fe-x mx-1"></i></a>
          <span class="text-muted">April 14, 2020 - May 13, 2020</span>
        </span>
        <button type="button" class="btn" data-toggle="modal" data-target=".modal-slide"><span class="fe fe-filter fe-16 text-muted"></span></button>
        <button type="button" class="btn"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
      </div>
    </div>
    <!-- Slide Modal -->
    <div class="modal fade modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="defaultModalLabel">Filters</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <i class="fe fe-x fe-12"></i>
            </button>
          </div>
          <div class="modal-body">
            <div class="p-2">
              <div class="form-group my-4">
                <p class="mb-2"><strong>Regions</strong></p>
                <label for="multi-select2" class="sr-only"></label>
                <select class="form-control select2-multi" id="multi-select2">
                  <optgroup label="Mountain Time Zone">
                    <option value="AZ">Arizona</option>
                    <option value="CO">Colorado</option>
                    <option value="ID">Idaho</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NM">New Mexico</option>
                    <option value="ND">North Dakota</option>
                    <option value="UT">Utah</option>
                    <option value="WY">Wyoming</option>
                  </optgroup>
                  <optgroup label="Central Time Zone">
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="IL">Illinois</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="OK">Oklahoma</option>
                    <option value="SD">South Dakota</option>
                    <option value="TX">Texas</option>
                    <option value="TN">Tennessee</option>
                    <option value="WI">Wisconsin</option>
                  </optgroup>
                </select>
              </div> <!-- form-group -->
              <div class="form-group my-4">
                <p class="mb-2">
                  <strong>Payment</strong>
                </p>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Paypal</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck2">
                  <label class="custom-control-label" for="customCheck2">Credit Card</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1-1" checked>
                  <label class="custom-control-label" for="customCheck1">Wire Transfer</label>
                </div>
              </div> <!-- form-group -->
              <div class="form-group my-4">
                <p class="mb-2">
                  <strong>Types</strong>
                </p>
                <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                  <label class="custom-control-label" for="customRadio1">End users</label>
                </div>
                <div class="custom-control custom-radio">
                  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" checked>
                  <label class="custom-control-label" for="customRadio2">Whole Sales</label>
                </div>
              </div> <!-- form-group -->
              <div class="form-group my-4">
                <p class="mb-2">
                  <strong>Completed</strong>
                </p>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Include</label>
                </div>
              </div> <!-- form-group -->
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn mb-2 btn-primary btn-block">Apply</button>
            <button type="button" class="btn mb-2 btn-secondary btn-block">Reset</button>
          </div>
        </div>
      </div>
    </div>
    <table class="table border table-hover bg-white">
      <thead>
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
          <th>Ship To</th>
          <th>Total</th>
          <th>Payment</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="align-center">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1331</td>
          <td>2020-12-26 01:32:21</td>
          <td>Kasimir Lindsey</td>
          <td>(697) 486-2101</td>
          <td>996-3523 Et Ave</td>
          <td>$3.64</td>
          <td> Paypal</td>
          <td><span class="dot dot-lg bg-success mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
          <td class="align-center">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1156</td>
          <td>2020-04-21 00:38:38</td>
          <td>Melinda Levy</td>
          <td>(748) 927-4423</td>
          <td>Ap #516-8821 Vitae Street</td>
          <td>$4.18</td>
          <td> Paypal</td>
          <td><span class="dot dot-lg bg-warning mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1038</td>
          <td>2019-06-25 19:13:36</td>
          <td>Aubrey Sweeney</td>
          <td>(422) 405-2736</td>
          <td>Ap #598-7581 Tellus Av.</td>
          <td>$4.98</td>
          <td>Credit Card </td>
          <td><span class="dot dot-lg bg-primary mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1227</td>
          <td>2021-01-22 13:28:00</td>
          <td>Timon Bauer</td>
          <td>(690) 965-1551</td>
          <td>840-2188 Placerat, Rd.</td>
          <td>$3.46</td>
          <td> Paypal</td>
          <td><span class="dot dot-lg bg-primary mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1956</td>
          <td>2019-11-11 16:23:17</td>
          <td>Kelly Barrera</td>
          <td>(117) 625-6737</td>
          <td>816 Ornare, Street</td>
          <td>$4.16</td>
          <td>Credit Card </td>
          <td><span class="dot dot-lg bg-success mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1669</td>
          <td>2021-04-12 07:07:13</td>
          <td>Kellie Roach</td>
          <td>(422) 748-1761</td>
          <td>5432 A St.</td>
          <td>$3.53</td>
          <td> Paypal</td>
          <td><span class="dot dot-lg bg-success mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1909</td>
          <td>2020-05-14 00:23:11</td>
          <td>Lani Diaz</td>
          <td>(767) 486-2253</td>
          <td>3328 Ut Street</td>
          <td>$4.29</td>
          <td> Paypal</td>
          <td><span class="dot dot-lg bg-warning mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1234</td>
          <td>2020-01-25 07:56:57</td>
          <td>Hadley Raymond</td>
          <td>(356) 732-2834</td>
          <td>917-1461 Aliquam St.</td>
          <td>$3.94</td>
          <td>Credit Card </td>
          <td><span class="dot dot-lg bg-primary mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1085</td>
          <td>2020-10-08 20:15:34</td>
          <td>Simone Wright</td>
          <td>(545) 742-5090</td>
          <td>877-711 Dolor Rd.</td>
          <td>$3.36</td>
          <td>Credit Card </td>
          <td><span class="dot dot-lg bg-success mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1872</td>
          <td>2020-06-10 19:57:09</td>
          <td>Lucas Bush</td>
          <td>(720) 141-7318</td>
          <td>6421 Integer Rd.</td>
          <td>$3.17</td>
          <td> Paypal</td>
          <td><span class="dot dot-lg bg-success mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1511</td>
          <td>2019-07-18 10:48:33</td>
          <td>Grant Maldonado</td>
          <td>(276) 751-9198</td>
          <td>P.O. Box 968, 3979 Duis Rd.</td>
          <td>$2.74</td>
          <td> Paypal</td>
          <td><span class="dot dot-lg bg-success mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1800</td>
          <td>2019-07-14 04:31:07</td>
          <td>Kiayada Reid</td>
          <td>(910) 140-7500</td>
          <td>6000 Phasellus St.</td>
          <td>$2.70</td>
          <td> Paypal</td>
          <td><span class="dot dot-lg bg-warning mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1296</td>
          <td>2019-10-09 13:56:11</td>
          <td>Flynn Collins</td>
          <td>(580) 287-6157</td>
          <td>P.O. Box 734, 7447 Curabitur Street</td>
          <td>$4.13</td>
          <td>Credit Card </td>
          <td><span class="dot dot-lg bg-warning mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1582</td>
          <td>2019-11-14 14:28:52</td>
          <td>Leonard Floyd</td>
          <td>(530) 682-3320</td>
          <td>5901 Rhoncus Rd.</td>
          <td>$3.20</td>
          <td> Paypal</td>
          <td><span class="dot dot-lg bg-success mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1371</td>
          <td>2021-04-12 16:52:25</td>
          <td>Noelani Fitzpatrick</td>
          <td>(143) 737-5060</td>
          <td>Ap #826-9238 Pellentesque Rd.</td>
          <td>$2.03</td>
          <td> Paypal</td>
          <td><span class="dot dot-lg bg-warning mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1437</td>
          <td>2019-08-23 23:18:12</td>
          <td>Fallon Rogers</td>
          <td>(345) 430-9053</td>
          <td>1531 Risus Av.</td>
          <td>$2.89</td>
          <td> Paypal</td>
          <td><span class="dot dot-lg bg-success mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1242</td>
          <td>2019-12-08 07:02:25</td>
          <td>Zane Jackson</td>
          <td>(327) 142-0897</td>
          <td>P.O. Box 688, 4186 Feugiat Rd.</td>
          <td>$3.25</td>
          <td> Paypal</td>
          <td><span class="dot dot-lg bg-success mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
              <input type="checkbox" class="custom-control-input">
              <label class="custom-control-label"></label>
            </div>
          </td>
          <td>1573</td>
          <td>2020-01-14 01:04:42</td>
          <td>Bryar Reilly</td>
          <td>(873) 448-3021</td>
          <td>745-3818 Vitae, Ave</td>
          <td>$2.06</td>
          <td>Credit Card </td>
          <td><span class="dot dot-lg bg-success mr-2"></span></td>
          <td>
            <div class="dropdown">
              <button class="btn btn-sm dropdown-toggle more-vertical" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      </tbody>
    </table>
    <nav aria-label="Table Paging" class="my-3">
      <ul class="pagination justify-content-end mb-0">
        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
      </ul>
    </nav>
  </div>
</div> <!-- .row -->
@endsection