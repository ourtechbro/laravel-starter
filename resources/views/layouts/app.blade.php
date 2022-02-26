<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts._head')

<body class="vertical  light  ">
<div class="wrapper">
    <nav class="topnav navbar navbar-light">
        <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
            <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <form class="form-inline mr-auto searchform text-muted">
            <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
        </form>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                    <i class="fe fe-sun fe-16"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                    <span class="fe fe-grid fe-16"></span>
                </a>
            </li>
            <li class="nav-item nav-notif">
                <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                    <span class="fe fe-bell fe-16"></span>
                    <span class="dot dot-md bg-success"></span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
              </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activities</a>
                </div>
            </li>
        </ul>
    </nav>
    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100 mb-4 d-flex">
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
                </a>
            </div>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                    <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-home fe-16"></i>
                        <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
                        <li class="nav-item active">
                            <a class="nav-link pl-3" href="./index.html"><span class="ml-1 item-text">Default</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./dashboard-analytics.html"><span class="ml-1 item-text">Analytics</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./dashboard-sales.html"><span class="ml-1 item-text">E-commerce</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./dashboard-saas.html"><span class="ml-1 item-text">Saas Dashboard</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./dashboard-system.html"><span class="ml-1 item-text">Systems</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Components</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                    <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-box fe-16"></i>
                        <span class="ml-3 item-text">UI elements</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./ui-color.html"><span class="ml-1 item-text">Colors</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./ui-typograpy.html"><span class="ml-1 item-text">Typograpy</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./ui-icons.html"><span class="ml-1 item-text">Icons</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./ui-buttons.html"><span class="ml-1 item-text">Buttons</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./ui-notification.html"><span class="ml-1 item-text">Notifications</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./ui-modals.html"><span class="ml-1 item-text">Modals</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./ui-tabs-accordion.html"><span class="ml-1 item-text">Tabs & Accordion</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./ui-progress.html"><span class="ml-1 item-text">Progress</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item w-100">
                    <a class="nav-link" href="widgets.html">
                        <i class="fe fe-layers fe-16"></i>
                        <span class="ml-3 item-text">Widgets</span>
                        <span class="badge badge-pill badge-primary">New</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-credit-card fe-16"></i>
                        <span class="ml-3 item-text">Forms</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./form_elements.html"><span class="ml-1 item-text">Basic Elements</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./form_advanced.html"><span class="ml-1 item-text">Advanced Elements</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./form_validation.html"><span class="ml-1 item-text">Validation</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./form_wizard.html"><span class="ml-1 item-text">Wizard</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./form_layouts.html"><span class="ml-1 item-text">Layouts</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./form_upload.html"><span class="ml-1 item-text">File upload</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-grid fe-16"></i>
                        <span class="ml-3 item-text">Tables</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./table_basic.html"><span class="ml-1 item-text">Basic Tables</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./table_advanced.html"><span class="ml-1 item-text">Advanced Tables</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./table_datatables.html"><span class="ml-1 item-text">Data Tables</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-pie-chart fe-16"></i>
                        <span class="ml-3 item-text">Charts</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="charts">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./chart-inline.html"><span class="ml-1 item-text">Inline Chart</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./chart-chartjs.html"><span class="ml-1 item-text">Chartjs</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./chart-apexcharts.html"><span class="ml-1 item-text">ApexCharts</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./datamaps.html"><span class="ml-1 item-text">Datamaps</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Apps</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item w-100">
                    <a class="nav-link" href="calendar.html">
                        <i class="fe fe-calendar fe-16"></i>
                        <span class="ml-3 item-text">Calendar</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-book fe-16"></i>
                        <span class="ml-3 item-text">Contacts</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="contact">
                        <a class="nav-link pl-3" href="./contacts-list.html"><span class="ml-1">Contact List</span></a>
                        <a class="nav-link pl-3" href="./contacts-grid.html"><span class="ml-1">Contact Grid</span></a>
                        <a class="nav-link pl-3" href="./contacts-new.html"><span class="ml-1">New Contact</span></a>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-user fe-16"></i>
                        <span class="ml-3 item-text">Profile</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="profile">
                        <a class="nav-link pl-3" href="./profile.html"><span class="ml-1">Overview</span></a>
                        <a class="nav-link pl-3" href="./profile-settings.html"><span class="ml-1">Settings</span></a>
                        <a class="nav-link pl-3" href="./profile-security.html"><span class="ml-1">Security</span></a>
                        <a class="nav-link pl-3" href="./profile-notification.html"><span class="ml-1">Notifications</span></a>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#fileman" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-folder fe-16"></i>
                        <span class="ml-3 item-text">File Manager</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="fileman">
                        <a class="nav-link pl-3" href="./files-list.html"><span class="ml-1">Files List</span></a>
                        <a class="nav-link pl-3" href="./files-grid.html"><span class="ml-1">Files Grid</span></a>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#support" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-compass fe-16"></i>
                        <span class="ml-3 item-text">Help Desk</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="support">
                        <a class="nav-link pl-3" href="./support-center.html"><span class="ml-1">Home</span></a>
                        <a class="nav-link pl-3" href="./support-tickets.html"><span class="ml-1">Tickets</span></a>
                        <a class="nav-link pl-3" href="./support-ticket-detail.html"><span class="ml-1">Ticket Detail</span></a>
                        <a class="nav-link pl-3" href="./support-faqs.html"><span class="ml-1">FAQs</span></a>
                    </ul>
                </li>
            </ul>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Extra</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                    <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-file fe-16"></i>
                        <span class="ml-3 item-text">Pages</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100 w-100" id="pages">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./page-orders.html">
                                <span class="ml-1 item-text">Orders</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./page-timeline.html">
                                <span class="ml-1 item-text">Timeline</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./page-invoice.html">
                                <span class="ml-1 item-text">Invoice</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./page-404.html">
                                <span class="ml-1 item-text">Page 404</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./page-500.html">
                                <span class="ml-1 item-text">Page 500</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./page-blank.html">
                                <span class="ml-1 item-text">Blank</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#auth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-shield fe-16"></i>
                        <span class="ml-3 item-text">Authentication</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="auth">
                        <a class="nav-link pl-3" href="./auth-login.html"><span class="ml-1">Login 1</span></a>
                        <a class="nav-link pl-3" href="./auth-login-half.html"><span class="ml-1">Login 2</span></a>
                        <a class="nav-link pl-3" href="./auth-register.html"><span class="ml-1">Register</span></a>
                        <a class="nav-link pl-3" href="./auth-resetpw.html"><span class="ml-1">Reset Password</span></a>
                        <a class="nav-link pl-3" href="./auth-confirm.html"><span class="ml-1">Confirm Password</span></a>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#layouts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-layout fe-16"></i>
                        <span class="ml-3 item-text">Layout</span>
                    </a>
                    <ul class="collapse list-unstyled pl-4 w-100" id="layouts">
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./index.html"><span class="ml-1 item-text">Default</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./index-horizontal.html"><span class="ml-1 item-text">Top Navigation</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-3" href="./index-boxed.html"><span class="ml-1 item-text">Boxed</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
            <p class="text-muted nav-heading mt-4 mb-1">
                <span>Documentation</span>
            </p>
            <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item w-100">
                    <a class="nav-link" href="../docs/index.html">
                        <i class="fe fe-help-circle fe-16"></i>
                        <span class="ml-3 item-text">Getting Start</span>
                    </a>
                </li>
            </ul>
            <div class="btn-box w-100 mt-4 mb-1">
                <a href="https://themeforest.net/item/tinydash-bootstrap-html-admin-dashboard-template/27511269" target="_blank" class="btn mb-2 btn-primary btn-lg btn-block">
                    <i class="fe fe-shopping-cart fe-12 mx-2"></i><span class="small">Buy now</span>
                </a>
            </div>
        </nav>
    </aside>
    <main role="main" class="main-content">
        <div class="container-fluid">
            @yield('content')
        </div> <!-- .container-fluid -->
        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-box fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Package has uploaded successfull</strong></small>
                                        <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-download fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Widgets are updated successfull</strong></small>
                                        <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-inbox fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Notifications have been sent</strong></small>
                                        <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                        <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-link fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Link was attached to menu</strong></small>
                                        <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                                        <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                    </div>
                                </div>
                            </div> <!-- / .row -->
                        </div> <!-- / .list-group -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-5">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-success justify-content-center">
                                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Control area</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Activity</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Droplet</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Upload</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Users</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Settings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- main -->
</div> <!-- .wrapper -->

@livewireScripts

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/simplebar.min.js') }}"></script>
<script src="{{ asset('js/daterangepicker.js') }}"></script>
<script src="{{ asset('js/jquery.stickOnScroll.js') }}"></script>
<script src="{{ asset('js/tinycolor-min.js') }}"></script>
<script src="{{ asset('js/config.js') }}"></script>
<script src="{{ asset('js/d3.min.js') }}"></script>
<script src="{{ asset('js/topojson.min.js') }}"></script>
<script src="{{ asset('js/datamaps.all.min.js') }}"></script>
<script src="{{ asset('js/datamaps-zoomto.js') }}"></script>
<script src="{{ asset('js/datamaps.custom.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
</script>
<script src="{{ asset('js/gauge.min.js') }}"></script>
<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('js/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/apexcharts.custom.js') }}"></script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/jquery.steps.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery.timepicker.js') }}"></script>
<script src="{{ asset('js/dropzone.min.js') }}"></script>
<script src="{{ asset('js/uppy.min.js') }}"></script>
<script src="{{ asset('js/quill.min.js') }}"></script>
<script>
    $('.select2').select2(
        {
            theme: 'bootstrap4',
        });
    $('.select2-multi').select2(
        {
            multiple: true,
            theme: 'bootstrap4',
        });
    $('.drgpicker').daterangepicker(
        {
            singleDatePicker: true,
            timePicker: false,
            showDropdowns: true,
            locale:
                {
                    format: 'MM/DD/YYYY'
                }
        });
    $('.time-input').timepicker(
        {
            'scrollDefault': 'now',
            'zindex': '9999' /* fix modal open */
        });
    /** date range picker */
    if ($('.datetimes').length)
    {
        $('.datetimes').daterangepicker(
            {
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale:
                    {
                        format: 'M/DD hh:mm A'
                    }
            });
    }
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end)
    {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker(
        {
            startDate: start,
            endDate: end,
            ranges:
                {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
        }, cb);
    cb(start, end);
    $('.input-placeholder').mask("00/00/0000",
        {
            placeholder: "__/__/____"
        });
    $('.input-zip').mask('00000-000',
        {
            placeholder: "____-___"
        });
    $('.input-money').mask("#.##0,00",
        {
            reverse: true
        });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ',
        {
            translation:
                {
                    'Z':
                        {
                            pattern: /[0-9]/,
                            optional: true
                        }
                },
            placeholder: "___.___.___.___"
        });
    // editor
    var editor = document.getElementById('editor');
    if (editor)
    {
        var toolbarOptions = [
            [
                {
                    'font': []
                }],
            [
                {
                    'header': [1, 2, 3, 4, 5, 6, false]
                }],
            ['bold', 'italic', 'underline', 'strike'],
            ['blockquote', 'code-block'],
            [
                {
                    'header': 1
                },
                {
                    'header': 2
                }],
            [
                {
                    'list': 'ordered'
                },
                {
                    'list': 'bullet'
                }],
            [
                {
                    'script': 'sub'
                },
                {
                    'script': 'super'
                }],
            [
                {
                    'indent': '-1'
                },
                {
                    'indent': '+1'
                }], // outdent/indent
            [
                {
                    'direction': 'rtl'
                }], // text direction
            [
                {
                    'color': []
                },
                {
                    'background': []
                }], // dropdown with defaults from theme
            [
                {
                    'align': []
                }],
            ['clean'] // remove formatting button
        ];
        var quill = new Quill(editor,
            {
                modules:
                    {
                        toolbar: toolbarOptions
                    },
                theme: 'snow'
            });
    }
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function()
    {
        'use strict';
        window.addEventListener('load', function()
        {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form)
            {
                form.addEventListener('submit', function(event)
                {
                    if (form.checkValidity() === false)
                    {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
<script>
    var uptarg = document.getElementById('drag-drop-area');
    if (uptarg)
    {
        var uppy = Uppy.Core().use(Uppy.Dashboard,
            {
                inline: true,
                target: uptarg,
                proudlyDisplayPoweredByUppy: false,
                theme: 'dark',
                width: 770,
                height: 210,
                plugins: ['Webcam']
            }).use(Uppy.Tus,
            {
                endpoint: 'https://master.tus.io/files/'
            });
        uppy.on('complete', (result) =>
        {
            console.log('Upload complete! We’ve uploaded these files:', result.successful)
        });
    }
</script>
<script src="{{ asset('js/apps.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag()
    {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-56159088-1');
</script>

@yield('scripts')

@stack('scripts')

</body>
</html>
