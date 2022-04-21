@extends('layouts.app')

@section('title')
    Data Table
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <h2 class="mb-2 page-title">Data table</h2>
      <p class="card-text">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. </p>
      <div class="row my-4">
        <!-- Small table -->
        <div class="col-md-12">
          <div class="card shadow">
            <div class="card-body">
              <!-- table -->
              <table class="table datatables" id="dataTable-1">
                <thead>
                  <tr>
                    <th></th>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>Company</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>368</td>
                    <td>Imani Lara</td>
                    <td>(478) 446-9234</td>
                    <td>Asset Management</td>
                    <td>Borland</td>
                    <td>9022 Suspendisse Rd.</td>
                    <td>High Wycombe</td>
                    <td>Jun 8, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>323</td>
                    <td>Walter Sawyer</td>
                    <td>(671) 969-1704</td>
                    <td>Tech Support</td>
                    <td>Macromedia</td>
                    <td>Ap #708-5152 Cursus. Ave</td>
                    <td>Bath</td>
                    <td>May 8, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>371</td>
                    <td>Noelle Ray</td>
                    <td>(803) 792-2559</td>
                    <td>Human Resources</td>
                    <td>Sibelius</td>
                    <td>Ap #992-8933 Sagittis Street</td>
                    <td>Ivanteyevka</td>
                    <td>Apr 2, 2021</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>302</td>
                    <td>Portia Nolan</td>
                    <td>(216) 946-1119</td>
                    <td>Payroll</td>
                    <td>Microsoft</td>
                    <td>Ap #461-4415 Enim Rd.</td>
                    <td>Kanpur Cantonment</td>
                    <td>Dec 4, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>443</td>
                    <td>Scarlett Anderson</td>
                    <td>(486) 309-3564</td>
                    <td>Tech Support</td>
                    <td>Yahoo</td>
                    <td>P.O. Box 988, 7282 Lobortis Avenue</td>
                    <td>Lot</td>
                    <td>Dec 27, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>345</td>
                    <td>Kevyn Mills</td>
                    <td>(976) 873-4833</td>
                    <td>Tech Support</td>
                    <td>Sibelius</td>
                    <td>P.O. Box 666, 9803 Sed Avenue</td>
                    <td>Fino Mornasco</td>
                    <td>Dec 24, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>356</td>
                    <td>Sharon Buckley</td>
                    <td>(429) 517-6784</td>
                    <td>Tech Support</td>
                    <td>Sibelius</td>
                    <td>Ap #372-3407 Sed St.</td>
                    <td>Lompret</td>
                    <td>Mar 3, 2021</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>263</td>
                    <td>Fletcher Everett</td>
                    <td>(735) 632-1255</td>
                    <td>Customer Service</td>
                    <td>Borland</td>
                    <td>Ap #688-5120 Egestas Avenue</td>
                    <td>Beerzel</td>
                    <td>Mar 27, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>227</td>
                    <td>Bertha Ball</td>
                    <td>(656) 680-1553</td>
                    <td>Sales and Marketing</td>
                    <td>Finale</td>
                    <td>951-3836 Ac Rd.</td>
                    <td>Cherbourg-Octeville</td>
                    <td>Feb 11, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>396</td>
                    <td>Phoebe Cobb</td>
                    <td>(663) 233-0340</td>
                    <td>Human Resources</td>
                    <td>Adobe</td>
                    <td>922 Enim. Avenue</td>
                    <td>Fahler</td>
                    <td>May 18, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>276</td>
                    <td>Lillith Joseph</td>
                    <td>(406) 343-5430</td>
                    <td>Advertising</td>
                    <td>Macromedia</td>
                    <td>Ap #363-1293 Neque St.</td>
                    <td>Vieuxville</td>
                    <td>Sep 22, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>222</td>
                    <td>Ruth Shaffer</td>
                    <td>(488) 102-5116</td>
                    <td>Human Resources</td>
                    <td>Lycos</td>
                    <td>Ap #117-5518 A, Rd.</td>
                    <td>Buxton</td>
                    <td>Feb 19, 2021</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>397</td>
                    <td>Jerry Orr</td>
                    <td>(657) 274-3095</td>
                    <td>Accounting</td>
                    <td>Lycos</td>
                    <td>919-782 Vitae Street</td>
                    <td>La Plata</td>
                    <td>Jul 24, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>218</td>
                    <td>Hayfa Cox</td>
                    <td>(602) 569-0400</td>
                    <td>Asset Management</td>
                    <td>Altavista</td>
                    <td>Ap #189-4628 Curabitur Rd.</td>
                    <td>Dindigul</td>
                    <td>Dec 8, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>361</td>
                    <td>Ishmael Mcleod</td>
                    <td>(148) 643-9938</td>
                    <td>Customer Service</td>
                    <td>Yahoo</td>
                    <td>P.O. Box 253, 2328 Mauris St.</td>
                    <td>San Juan del Río</td>
                    <td>Feb 13, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>281</td>
                    <td>Kevyn Snyder</td>
                    <td>(659) 649-4750</td>
                    <td>Customer Relations</td>
                    <td>Macromedia</td>
                    <td>P.O. Box 731, 7143 Sem Rd.</td>
                    <td>Taber</td>
                    <td>Mar 1, 2021</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>236</td>
                    <td>Patience Sanders</td>
                    <td>(287) 279-0868</td>
                    <td>Legal Department</td>
                    <td>Sibelius</td>
                    <td>664-7649 Euismod Rd.</td>
                    <td>Strijtem</td>
                    <td>Mar 26, 2021</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>394</td>
                    <td>Tamara Cooke</td>
                    <td>(998) 560-1052</td>
                    <td>Asset Management</td>
                    <td>Macromedia</td>
                    <td>Ap #507-3545 Enim. St.</td>
                    <td>Hattiesburg</td>
                    <td>Jan 25, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>276</td>
                    <td>Abel Raymond</td>
                    <td>(930) 726-7338</td>
                    <td>Quality Assurance</td>
                    <td>Yahoo</td>
                    <td>5370 Vestibulum. Avenue</td>
                    <td>La Cruz</td>
                    <td>Jul 3, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>388</td>
                    <td>Honorato Nichols</td>
                    <td>(561) 758-1908</td>
                    <td>Legal Department</td>
                    <td>Microsoft</td>
                    <td>P.O. Box 925, 286 Ipsum Street</td>
                    <td>St. John's</td>
                    <td>Aug 29, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>498</td>
                    <td>Ishmael Aguirre</td>
                    <td>(594) 850-4912</td>
                    <td>Media Relations</td>
                    <td>Yahoo</td>
                    <td>P.O. Box 398, 8254 Pede, Av.</td>
                    <td>Cannes</td>
                    <td>Jul 5, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>277</td>
                    <td>Christian Nieves</td>
                    <td>(933) 345-5314</td>
                    <td>Human Resources</td>
                    <td>Cakewalk</td>
                    <td>889-9118 Ipsum Rd.</td>
                    <td>Berhampore</td>
                    <td>Jul 8, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>215</td>
                    <td>Nevada Weber</td>
                    <td>(603) 763-9893</td>
                    <td>Human Resources</td>
                    <td>Altavista</td>
                    <td>Ap #439-124 Eros St.</td>
                    <td>Cádiz</td>
                    <td>Nov 2, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>449</td>
                    <td>Addison Tran</td>
                    <td>(200) 967-8241</td>
                    <td>Sales and Marketing</td>
                    <td>Microsoft</td>
                    <td>214-4812 Sed, Rd.</td>
                    <td>Offenbach am Main</td>
                    <td>Nov 30, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>272</td>
                    <td>Brenna Reid</td>
                    <td>(925) 647-2628</td>
                    <td>Finances</td>
                    <td>Microsoft</td>
                    <td>P.O. Box 604, 587 Ac Street</td>
                    <td>Gallicchio</td>
                    <td>Jul 1, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>380</td>
                    <td>Kirby Summers</td>
                    <td>(140) 854-4790</td>
                    <td>Human Resources</td>
                    <td>Lycos</td>
                    <td>Ap #611-2789 Donec Ave</td>
                    <td>s Herenelderen</td>
                    <td>Sep 23, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>316</td>
                    <td>Cairo Villarreal</td>
                    <td>(410) 944-9399</td>
                    <td>Sales and Marketing</td>
                    <td>Borland</td>
                    <td>P.O. Box 631, 8966 Dapibus Street</td>
                    <td>Alingsås</td>
                    <td>Jan 10, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>369</td>
                    <td>Savannah Gallagher</td>
                    <td>(519) 628-8362</td>
                    <td>Media Relations</td>
                    <td>Microsoft</td>
                    <td>6794 Lorem St.</td>
                    <td>Knoxville</td>
                    <td>Jul 27, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>477</td>
                    <td>Cade Hinton</td>
                    <td>(198) 250-0971</td>
                    <td>Payroll</td>
                    <td>Google</td>
                    <td>Ap #621-2106 Amet Rd.</td>
                    <td>Lo Prado</td>
                    <td>Jun 22, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>493</td>
                    <td>Daquan Arnold</td>
                    <td>(659) 185-0446</td>
                    <td>Finances</td>
                    <td>Chami</td>
                    <td>999-6646 Faucibus Rd.</td>
                    <td>Empoli</td>
                    <td>Nov 5, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>350</td>
                    <td>Aquila Kramer</td>
                    <td>(818) 871-1487</td>
                    <td>Media Relations</td>
                    <td>Google</td>
                    <td>5155 Donec Ave</td>
                    <td>Rewa</td>
                    <td>May 5, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>403</td>
                    <td>Rana Mcknight</td>
                    <td>(243) 205-2734</td>
                    <td>Accounting</td>
                    <td>Finale</td>
                    <td>Ap #236-8034 Imperdiet Street</td>
                    <td>Zutendaal</td>
                    <td>Feb 7, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>413</td>
                    <td>Kareem Sweet</td>
                    <td>(260) 159-8343</td>
                    <td>Legal Department</td>
                    <td>Macromedia</td>
                    <td>566-2188 Libero. Road</td>
                    <td>Nankana Sahib</td>
                    <td>Sep 1, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>443</td>
                    <td>Jonah Chavez</td>
                    <td>(671) 419-1034</td>
                    <td>Customer Service</td>
                    <td>Yahoo</td>
                    <td>8579 Sagittis Rd.</td>
                    <td>Sydney</td>
                    <td>Dec 4, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>336</td>
                    <td>Tanek Decker</td>
                    <td>(402) 292-6679</td>
                    <td>Legal Department</td>
                    <td>Sibelius</td>
                    <td>2201 Libero Av.</td>
                    <td>Bida</td>
                    <td>Feb 22, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>314</td>
                    <td>Oleg Mckay</td>
                    <td>(634) 227-2714</td>
                    <td>Research and Development</td>
                    <td>Apple Systems</td>
                    <td>P.O. Box 600, 1974 Arcu. Street</td>
                    <td>Ancarano</td>
                    <td>Feb 28, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>426</td>
                    <td>Driscoll Kelly</td>
                    <td>(948) 436-4534</td>
                    <td>Accounting</td>
                    <td>Sibelius</td>
                    <td>Ap #784-6075 Fusce Avenue</td>
                    <td>Sacramento</td>
                    <td>Sep 9, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>479</td>
                    <td>Kane Tillman</td>
                    <td>(762) 298-8478</td>
                    <td>Payroll</td>
                    <td>Macromedia</td>
                    <td>P.O. Box 119, 519 Sodales St.</td>
                    <td>Hillsboro</td>
                    <td>Apr 16, 2021</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>341</td>
                    <td>Zorita Moran</td>
                    <td>(840) 554-9481</td>
                    <td>Accounting</td>
                    <td>Lycos</td>
                    <td>P.O. Box 290, 9398 Quam Rd.</td>
                    <td>Viddalba</td>
                    <td>Jun 16, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>322</td>
                    <td>Alea Winters</td>
                    <td>(449) 757-3194</td>
                    <td>Customer Service</td>
                    <td>Sibelius</td>
                    <td>1999 Mus. Street</td>
                    <td>Eastbourne</td>
                    <td>Apr 5, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>455</td>
                    <td>Mohammad Whitfield</td>
                    <td>(550) 107-4320</td>
                    <td>Accounting</td>
                    <td>Macromedia</td>
                    <td>P.O. Box 790, 9677 Purus Rd.</td>
                    <td>Deline</td>
                    <td>Nov 21, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>323</td>
                    <td>Jerry Guzman</td>
                    <td>(293) 790-5171</td>
                    <td>Public Relations</td>
                    <td>Borland</td>
                    <td>P.O. Box 140, 3346 Mauris Ave</td>
                    <td>Bury St. Edmunds</td>
                    <td>Feb 15, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>211</td>
                    <td>Kiara Bryant</td>
                    <td>(438) 112-2227</td>
                    <td>Customer Relations</td>
                    <td>Altavista</td>
                    <td>791-8711 Sed St.</td>
                    <td>Aiello Calabro</td>
                    <td>Nov 19, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>294</td>
                    <td>Aquila James</td>
                    <td>(944) 277-4831</td>
                    <td>Quality Assurance</td>
                    <td>Apple Systems</td>
                    <td>P.O. Box 306, 6025 Justo Rd.</td>
                    <td>Offida</td>
                    <td>Jul 18, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>206</td>
                    <td>Mia Madden</td>
                    <td>(554) 422-4590</td>
                    <td>Payroll</td>
                    <td>Macromedia</td>
                    <td>892-7709 Eget St.</td>
                    <td>Aachen</td>
                    <td>Aug 26, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>345</td>
                    <td>Nasim Smith</td>
                    <td>(750) 696-9160</td>
                    <td>Customer Service</td>
                    <td>Chami</td>
                    <td>6755 Ultrices Av.</td>
                    <td>Innisfail</td>
                    <td>Jan 18, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>358</td>
                    <td>Grady Tyson</td>
                    <td>(967) 301-3938</td>
                    <td>Research and Development</td>
                    <td>Sibelius</td>
                    <td>6927 Ante. Avenue</td>
                    <td>Piscinas</td>
                    <td>Feb 13, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>338</td>
                    <td>Allen Swanson</td>
                    <td>(326) 862-2675</td>
                    <td>Legal Department</td>
                    <td>Microsoft</td>
                    <td>810-128 Libero. Rd.</td>
                    <td>Desamparados</td>
                    <td>Feb 2, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>429</td>
                    <td>Cameran Phelps</td>
                    <td>(292) 150-9250</td>
                    <td>Tech Support</td>
                    <td>Finale</td>
                    <td>536 Aenean Rd.</td>
                    <td>Proddatur</td>
                    <td>Nov 5, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>305</td>
                    <td>Palmer Maldonado</td>
                    <td>(687) 671-7597</td>
                    <td>Sales and Marketing</td>
                    <td>Sibelius</td>
                    <td>570 Feugiat. Ave</td>
                    <td>Leominster</td>
                    <td>Jul 28, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>286</td>
                    <td>Russell Simon</td>
                    <td>(499) 664-6600</td>
                    <td>Public Relations</td>
                    <td>Adobe</td>
                    <td>Ap #974-1629 Placerat, Ave</td>
                    <td>Coimbatore</td>
                    <td>Oct 5, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>400</td>
                    <td>Tatum Benton</td>
                    <td>(844) 240-9223</td>
                    <td>Public Relations</td>
                    <td>Borland</td>
                    <td>5639 Inceptos Road</td>
                    <td>Cedar Rapids</td>
                    <td>Jan 5, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>493</td>
                    <td>Arden Harrington</td>
                    <td>(380) 763-0890</td>
                    <td>Quality Assurance</td>
                    <td>Altavista</td>
                    <td>P.O. Box 485, 2533 Tincidunt Road</td>
                    <td>Central Jakarta</td>
                    <td>Feb 29, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>419</td>
                    <td>Hayes Fitzpatrick</td>
                    <td>(756) 216-2498</td>
                    <td>Customer Relations</td>
                    <td>Lavasoft</td>
                    <td>755-4189 Auctor, Avenue</td>
                    <td>Frankfort</td>
                    <td>Jun 18, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>203</td>
                    <td>Barbara Charles</td>
                    <td>(487) 840-1443</td>
                    <td>Research and Development</td>
                    <td>Microsoft</td>
                    <td>217-2734 Rhoncus Street</td>
                    <td>Fogliano Redipuglia</td>
                    <td>Jul 17, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>443</td>
                    <td>Kenyon Glover</td>
                    <td>(593) 822-4946</td>
                    <td>Sales and Marketing</td>
                    <td>Adobe</td>
                    <td>3615 Blandit St.</td>
                    <td>San Bernardo</td>
                    <td>Dec 11, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>346</td>
                    <td>Evan Figueroa</td>
                    <td>(803) 974-4759</td>
                    <td>Payroll</td>
                    <td>Yahoo</td>
                    <td>P.O. Box 801, 9864 Lobortis Ave</td>
                    <td>Santa Bárbara</td>
                    <td>Jun 4, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>237</td>
                    <td>Xavier Riley</td>
                    <td>(135) 789-4714</td>
                    <td>Sales and Marketing</td>
                    <td>Macromedia</td>
                    <td>Ap #317-3617 Nulla Av.</td>
                    <td>Castor</td>
                    <td>Apr 23, 2021</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>497</td>
                    <td>Ray Hess</td>
                    <td>(297) 183-1287</td>
                    <td>Payroll</td>
                    <td>Borland</td>
                    <td>9049 Duis St.</td>
                    <td>Basingstoke</td>
                    <td>Dec 2, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>368</td>
                    <td>Renee Wolf</td>
                    <td>(734) 594-1676</td>
                    <td>Asset Management</td>
                    <td>Lycos</td>
                    <td>Ap #939-7635 Quisque Road</td>
                    <td>Squillace</td>
                    <td>Oct 2, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>228</td>
                    <td>Caldwell White</td>
                    <td>(763) 192-7853</td>
                    <td>Payroll</td>
                    <td>Yahoo</td>
                    <td>146 Integer Street</td>
                    <td>Newark</td>
                    <td>Mar 9, 2020</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>247</td>
                    <td>Lance Bush</td>
                    <td>(197) 616-3571</td>
                    <td>Finances</td>
                    <td>Lavasoft</td>
                    <td>P.O. Box 377, 2374 Pellentesque. Road</td>
                    <td>Kapuskasing</td>
                    <td>May 11, 2019</td>
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
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label"></label>
                      </div>
                    </td>
                    <td>427</td>
                    <td>Clark Dennis</td>
                    <td>(239) 172-7907</td>
                    <td>Human Resources</td>
                    <td>Finale</td>
                    <td>Ap #978-3375 Adipiscing Av.</td>
                    <td>High Level</td>
                    <td>Sep 16, 2020</td>
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
            </div>
          </div>
        </div> <!-- simple table -->
      </div> <!-- end section -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
@endsection
@section('scripts')
  <script src='{{ asset('js/jquery.dataTables.min.js') }}'></script>
  <script src='{{ asset('js/dataTables.bootstrap4.min.js') }}'></script>
  <script>
    $('#dataTable-1').DataTable(
    {
      autoWidth: true,
      "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
      ]
    });
  </script>
@endsection
