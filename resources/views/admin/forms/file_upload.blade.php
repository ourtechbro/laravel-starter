@extends('layouts.app')

@section('title')
    File Uploads
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/uppy.min.css') }}">
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <h2 class="page-title">File Uploads</h2>
      <p class="lead text-muted">Demo for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
      <div class="row mb-4">
        <div class="col-md-6">
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong>Dropzone</strong>
            </div>
            <div class="card-body">
              <form action="/file-upload" class="dropzone bg-light rounded-lg" id="tinydash-dropzone">
                <div class="dz-message needsclick">
                  <div class="circle circle-lg bg-primary">
                    <i class="fe fe-upload fe-24 text-white"></i>
                  </div>
                  <h5 class="text-muted mt-4">Drop files here or click to upload</h5>
                </div>
              </form>
              <!-- Preview -->
              <!-- <div class="dropzone-previews mt-3" id="file-previews"></div> -->
              <!-- file preview template -->
              <div class="d-none" id="uploadPreviewTemplate">
                <div class="card mt-1 mb-0 shadow-none border">
                  <div class="p-2">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                      </div>
                      <div class="col pl-0">
                        <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                        <p class="mb-0" data-dz-size></p>
                      </div>
                      <div class="col-auto">
                        <!-- Button -->
                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                          <i class="dripicons-cross"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
        </div> <!-- .col -->
        <div class="col-md-6">
          <div class="card shadow mb-4">
            <div class="card-header">
              <strong>Uppy</strong>
            </div>
            <div class="card-body">
              <div id="drag-drop-area"></div>
            </div> <!-- .card-body -->
          </div> <!-- .card -->
        </div> <!-- .col -->
      </div> <!-- .row -->
    </div>
  </div> <!-- .row -->
@endsection
@section('scripts')
<script src='{{ asset('js/jquery.mask.min.js') }}'></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('js/jquery.steps.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/jquery.timepicker.js') }}"></script>
<script src="{{ asset('js/dropzone.min.js') }}"></script>
<script src="{{ asset('js/uppy.min.js') }}"></script>
<script src="{{ asset('js/quill.min.js') }}"></script>
<script>
    var uptarg = document.getElementById('drag-drop-area');
    if (uptarg) {
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
      uppy.on('complete', (result) => {
        console.log('Upload complete! We’ve uploaded these files:', result.successful)
      });
    }
  </script>
@endsection