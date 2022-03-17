@extends('layouts.app')

@section('title')
   Files Grid
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
      <div class="row align-items-center my-3">
        <div class="col">
          <h2 class="page-title">Files</h2>
        </div>
        <div class="col-auto">
          <button type="button" class="btn btn-lg btn-primary"><span class="fe fe-plus fe-16 mr-3"></span>New</button>
        </div>
      </div>
      <div class="file-container border-top">
        <div class="file-panel mt-4">
          <h6 class="mb-3">Quick Access</h6>
          <div class="row my-4">
            <div class="col-md-3">
              <div class="card shadow text-center mb-4">
                <div class="card-body file">
                  <div class="file-action">
                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu m-2">
                      <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                    </div>
                  </div>
                  <div class="circle circle-lg bg-secondary my-4">
                    <span class="fe fe-folder fe-24 text-white"></span>
                  </div>
                </div> <!-- .card-body -->
                <div class="card-footer bg-transparent border-0 fname">
                  <strong><span class="dot dot-md bg-success mr-2"></span>Fusion Backpack</strong>
                </div> <!-- .card-footer -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-3">
              <div class="card shadow text-center mb-4">
                <div class="card-body file">
                  <div class="file-action">
                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu m-2">
                      <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                    </div>
                  </div>
                  <div class="circle circle-lg bg-secondary my-4">
                    <span class="fe fe-folder fe-24 text-white"></span>
                  </div>
                  <div class="file-info">
                    <span class="badge badge-light text-muted mr-2"><i class="fe fe-users fe-12"></i></span>
                  </div>
                </div> <!-- .card-body -->
                <div class="card-footer bg-transparent border-0 fname">
                  <span class="dot dot-md bg-warning mr-2"></span>
                  <strong>Bootstrap 4.x</strong>
                </div> <!-- .card-footer -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-3">
              <div class="card shadow text-center mb-4">
                <div class="card-body file">
                  <div class="file-action">
                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu m-2">
                      <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                    </div>
                  </div>
                  <div class="circle circle-lg bg-light my-4">
                    <span class="fe fe-file-text fe-24 text-success"></span>
                  </div>
                  <div class="file-info">
                    <span class="badge badge-light text-muted mr-2">1.2M</span>
                    <span class="badge badge-pill badge-light text-muted">HTML</span>
                  </div>
                </div> <!-- .card-body -->
                <div class="card-footer bg-transparent border-0 fname">
                  <strong>Tinydash Document</strong>
                </div> <!-- .card-footer -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-3">
              <div class="card shadow text-center mb-4">
                <div class="card-body file">
                  <div class="file-action">
                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu m-2">
                      <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                    </div>
                  </div>
                  <div class="circle circle-lg bg-light my-4">
                    <span class="fe fe-image fe-24 text-success"></span>
                  </div>
                  <div class="file-info">
                    <span class="badge badge-light text-muted mr-2">288K</span>
                    <span class="badge badge-pill badge-light text-muted">PNG</span>
                  </div>
                </div> <!-- .card-body -->
                <div class="card-footer bg-transparent border-0 fname">
                  <strong>Creative Logo</strong>
                </div> <!-- .card-footer -->
              </div> <!-- .card -->
            </div> <!-- .col -->
          </div> <!-- .row -->
          <hr class="my-4">
          <div class="row align-items-center mb-4">
            <div class="col">
              <strong>Folders</strong>
            </div>
            <div class="col-auto">
              <button type="button" class="btn btn-sm">
                <i class="fe fe-16 fe-grid text-primary"></i>
              </button>
              <button type="button" class="btn btn-sm">
                <i class="fe fe-16 fe-list text-muted"></i>
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-body file-list">
                  <div class="d-flex align-items-center">
                    <div class="circle circle-md bg-secondary">
                      <span class="fe fe-folder fe-16 text-white"></span>
                    </div>
                    <div class="flex-fill ml-4 fname">
                      <strong>Components</strong><br />
                      <span class="badge badge-light text-muted">3 files</span>
                      <i class="fe fe-users fe-12 ml-2 text-muted"></i>
                    </div>
                    <div class="file-action">
                      <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted sr-only">Action</span>
                      </button>
                      <div class="dropdown-menu m-2">
                        <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                      </div>
                    </div>
                  </div>
                </div> <!-- .card-body -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-6 col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-body file-list">
                  <div class="d-flex align-items-center">
                    <div class="text-center">
                      <div class="circle circle-md bg-secondary">
                        <span class="fe fe-folder fe-16 text-white"></span>
                      </div>
                    </div>
                    <div class="flex-fill ml-4 fname">
                      <strong>Admin template</strong><br />
                      <span class="badge badge-light text-muted">12 files</span>
                      <span class="dot dot-md bg-success ml-2"></span>
                    </div>
                    <div class="file-action">
                      <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted sr-only">Action</span>
                      </button>
                      <div class="dropdown-menu m-2">
                        <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                      </div>
                    </div>
                  </div>
                </div> <!-- .card-body -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-6 col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-body file-list">
                  <div class="d-flex align-items-center">
                    <div class="circle circle-md bg-secondary">
                      <span class="fe fe-folder fe-16 text-white"></span>
                    </div>
                    <div class="flex-fill ml-4 fname">
                      <strong>Bootstrap 4.x</strong><br />
                      <span class="badge badge-light text-muted">8 files</span>
                      <span class="dot dot-md bg-warning ml-2"></span>
                    </div>
                    <div class="file-action">
                      <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted sr-only">Action</span>
                      </button>
                      <div class="dropdown-menu m-2">
                        <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                      </div>
                    </div>
                  </div>
                </div> <!-- .card-body -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-6 col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-body file-list">
                  <div class="d-flex align-items-center">
                    <div class="circle circle-md bg-secondary">
                      <span class="fe fe-folder fe-16 text-white"></span>
                    </div>
                    <div class="flex-fill ml-4 fname">
                      <strong>Design Files</strong><br />
                      <span class="badge badge-light text-muted">3 files</span>
                      <span class="dot dot-md bg-warning ml-2"></span>
                      <i class="fe fe-users fe-12 ml-2 text-muted"></i>
                    </div>
                    <div class="file-action">
                      <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted sr-only">Action</span>
                      </button>
                      <div class="dropdown-menu m-2">
                        <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                      </div>
                    </div>
                  </div>
                </div> <!-- .card-body -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-6 col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-body file-list">
                  <div class="d-flex align-items-center">
                    <div class="circle circle-md bg-secondary">
                      <span class="fe fe-folder fe-16 text-white"></span>
                    </div>
                    <div class="flex-fill ml-4 fname">
                      <strong>Production</strong><br />
                      <span class="badge badge-light text-muted">30 files</span>
                      <i class="fe fe-users fe-12 ml-2 text-muted"></i>
                    </div>
                    <div class="file-action">
                      <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted sr-only">Action</span>
                      </button>
                      <div class="dropdown-menu m-2">
                        <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                        <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                      </div>
                    </div>
                  </div>
                </div> <!-- .card-body -->
              </div> <!-- .card -->
            </div> <!-- .col -->
          </div> <!-- .row -->
          <hr class="my-4">
          <h6 class="mb-3">Files</h6>
          <div class="row my-4 pb-4">
            <div class="col-md-3">
              <div class="card shadow text-center mb-4">
                <div class="card-body file">
                  <div class="file-action">
                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu m-2">
                      <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                    </div>
                  </div>
                  <div class="circle circle-lg bg-light my-4">
                    <span class="fe fe-archive fe-24 text-secondary"></span>
                  </div>
                  <div class="file-info">
                    <span class="badge badge-light text-muted mr-2">14.8M</span>
                    <span class="badge badge-pill badge-light text-muted">Zip</span>
                  </div>
                </div> <!-- .card-body -->
                <div class="card-footer bg-transparent border-0 fname">
                  <strong>Packaged-04.02.zip</strong>
                </div> <!-- .card-footer -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-3">
              <div class="card shadow text-center mb-4">
                <div class="card-body file">
                  <div class="file-action">
                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu m-2">
                      <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                    </div>
                  </div>
                  <div class="circle circle-lg bg-light my-4">
                    <span class="fe fe-film fe-24 text-info"></span>
                  </div>
                  <div class="file-info">
                    <span class="badge badge-light text-muted mr-2">28M</span>
                    <span class="badge badge-pill badge-light text-muted">MP4</span>
                  </div>
                </div> <!-- .card-body -->
                <div class="card-footer bg-transparent border-0 fname">
                  <strong>Introduction.mp4</strong>
                </div> <!-- .card-footer -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-3">
              <div class="card shadow text-center mb-4">
                <div class="card-body file">
                  <div class="file-action">
                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu m-2">
                      <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                    </div>
                  </div>
                  <div class="circle circle-lg bg-light my-4">
                    <span class="fe fe-file fe-24 text-success"></span>
                  </div>
                  <div class="file-info">
                    <span class="badge badge-light text-muted mr-2">1.2M</span>
                    <span class="badge badge-pill badge-light text-muted">HTML</span>
                  </div>
                </div> <!-- .card-body -->
                <div class="card-footer bg-transparent border-0 fname">
                  <strong>Tinydash Document</strong>
                </div> <!-- .card-footer -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-3">
              <div class="card shadow text-center mb-4">
                <div class="card-body file">
                  <div class="file-action">
                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu m-2">
                      <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                    </div>
                  </div>
                  <div class="circle circle-lg bg-light my-4">
                    <span class="fe fe-image fe-24 text-success"></span>
                  </div>
                  <div class="file-info">
                    <span class="badge badge-light text-muted mr-2">288K</span>
                    <span class="badge badge-pill badge-light text-muted">PNG</span>
                  </div>
                </div> <!-- .card-body -->
                <div class="card-footer bg-transparent border-0 fname">
                  <strong>Creative Logo</strong>
                </div> <!-- .card-footer -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-3">
              <div class="card shadow text-center mb-4">
                <div class="card-body file">
                  <div class="file-action">
                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu m-2">
                      <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                    </div>
                  </div>
                  <div class="circle circle-lg bg-light my-4">
                    <span class="fe fe-pen-tool fe-24 text-success"></span>
                  </div>
                  <div class="file-info">
                    <span class="badge badge-light text-muted mr-2">28M</span>
                    <span class="badge badge-pill badge-light text-muted">PSD</span>
                  </div>
                </div> <!-- .card-body -->
                <div class="card-footer bg-transparent border-0 fname">
                  <strong>Large Banner</strong>
                </div> <!-- .card-footer -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-3">
              <div class="card shadow text-center mb-4">
                <div class="card-body file">
                  <div class="file-action">
                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu m-2">
                      <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                    </div>
                  </div>
                  <div class="circle circle-lg bg-light my-4">
                    <span class="fe fe-file-text fe-24 text-success"></span>
                  </div>
                  <div class="file-info">
                    <span class="badge badge-light text-muted mr-2">68K</span>
                    <span class="badge badge-pill badge-light text-muted">TXT</span>
                  </div>
                </div> <!-- .card-body -->
                <div class="card-footer bg-transparent border-0 fname">
                  <strong>Readme</strong>
                </div> <!-- .card-footer -->
              </div> <!-- .card -->
            </div> <!-- .col -->
            <div class="col-md-3">
              <div class="card shadow text-center mb-4">
                <div class="card-body file">
                  <div class="file-action">
                    <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="text-muted sr-only">Action</span>
                    </button>
                    <div class="dropdown-menu m-2">
                      <a class="dropdown-item" href="#"><i class="fe fe-chevrons-right fe-12 mr-4"></i>Move</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-copy fe-12 mr-4"></i>Copy</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-edit-3 fe-12 mr-4"></i>Rename</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-delete fe-12 mr-4"></i>Delete</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-share fe-12 mr-4"></i>Share</a>
                      <a class="dropdown-item" href="#"><i class="fe fe-download fe-12 mr-4"></i>Download</a>
                    </div>
                  </div>
                  <div class="circle circle-lg bg-light my-4">
                    <span class="fe fe-music fe-24 text-success"></span>
                  </div>
                  <div class="file-info">
                    <span class="badge badge-light text-muted mr-2">2M</span>
                    <span class="badge badge-pill badge-light text-muted">Mp3</span>
                  </div>
                </div> <!-- .card-body -->
                <div class="card-footer bg-transparent border-0 fname">
                  <strong>Dark.mp3</strong>
                </div> <!-- .card-footer -->
              </div> <!-- .card -->
            </div> <!-- .col -->
          </div> <!-- .row -->
        </div> <!-- .file-panel -->
        <div class="info-panel">
          <div class="info-content p-3 border-left">
            <div class="d-flex align-items-center mb-3">
              <div class="flex-fill">
                <span class="circle circle-sm bg-white mr-2">
                  <span class="fe fe-image fe-12 text-success"></span>
                </span>
                <span class="h6">Creative Logo.PNG</span>
              </div>
              <span class="btn close-info">
                <i class="fe fe-x"></i>
              </span>
            </div>
            <ul class="nav nav-tabs nav-fill mb-3" id="file-detail" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="tab-detail" data-toggle="tab" href="#detail" role="tab" aria-controls="detail" aria-selected="true">Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-activity" data-toggle="tab" href="#activity" role="tab" aria-controls="activity" aria-selected="false">Activities</a>
              </li>
            </ul>
            <div class="tab-content" id="file-tabs">
              <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="tab-detail">
                <img src="./assets/products/p4.jpg" alt="..." class="img-fluid rounded">
                <ul class="avatars-list my-4 mx-0">
                  <li>
                    <a href="#!" class="avatar avatar-sm">
                      <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-2.jpg">
                    </a>
                  </li>
                  <li>
                    <a href="#!" class="avatar avatar-sm">
                      <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-4.jpg">
                    </a>
                  </li>
                </ul>
                <dl class="row my-4 small">
                  <dt class="col-6 text-muted">Owner</dt>
                  <dd class="col-6">Whilemina Pate</dd>
                  <dt class="col-6 text-muted">Type</dt>
                  <dd class="col-6">Image</dd>
                  <dt class="col-6 text-muted">Size</dt>
                  <dd class="col-6">32M</dd>
                  <dt class="col-6 text-muted">Location</dt>
                  <dd class="col-6"><a href="#" class="text-muted">Design File</a></dd>
                  <dt class="col-6 text-muted">Created at</dt>
                  <dd class="col-6">Aug 20, 2020</dd>
                  <dt class="col-6 text-muted">Last update</dt>
                  <dd class="col-6">Aug 21, 2020</dd>
                </dl>
              </div> <!-- .tab-pane -->
              <div class="tab-pane fade" id="activity" role="tabpanel" aria-labelledby="tab-activity">
                <div class="timeline">
                  <div class="pb-3 timeline-item item-primary">
                    <div class="pl-5 small">
                      <div class="mb-1"><strong>@Brown Asher</strong><span class="text-muted mx-1">have uploaded</span><strong>Tinydash</strong></div>
                      <span class="badge badge-pill badge-dark">1h ago</span>
                    </div>
                  </div>
                  <div class="pb-3 timeline-item item-warning">
                    <div class="pl-5 small">
                      <div class="mb-3"><strong>@Fletcher</strong><span class="text-muted mx-1">shared</span><strong>Tiny Admin</strong></div>
                      <ul class="avatars-list mb-2">
                        <li>
                          <a href="#!" class="avatar avatar-sm">
                            <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-1.jpg">
                          </a>
                        </li>
                        <li>
                          <a href="#!" class="avatar avatar-sm">
                            <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-4.jpg">
                          </a>
                        </li>
                        <li>
                          <a href="#!" class="avatar avatar-sm">
                            <img alt="..." class="avatar-img rounded-circle" src="./assets/avatars/face-3.jpg">
                          </a>
                        </li>
                      </ul>
                      <span class="badge badge-pill badge-dark">1h ago</span>
                    </div>
                  </div>
                  <div class="pb-3 timeline-item item-success">
                    <div class="pl-5 small">
                      <div class="mb-2"><strong>@Kelley Sonya</strong><span class="text-muted small mx-1">has commented on</span><strong>Advanced table</strong></div>
                      <div class="card d-inline-flex mb-2">
                        <div class="card-body bg-light py-2 px-3"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
                      </div>
                      <span class="badge badge-pill badge-dark">1h ago</span>
                    </div>
                  </div>
                </div> <!-- / .timeline -->
              </div> <!-- .tab-pane -->
            </div> <!-- .tab-content -->
          </div>
        </div>
      </div> <!-- .file-container -->
    </div> <!-- .col -->
  </div> <!-- .row -->
@endsection
