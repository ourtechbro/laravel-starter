@extends('layouts.app')

@section('title')
    Advanced Elements
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/select2.css') }}">
<link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
<link rel="stylesheet" href="{{ asset('css/uppy.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.steps.css') }}">
<link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
<link rel="stylesheet" href="{{ asset('css/quill.snow.css') }}">
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-12">
      <h2 class="page-title">Form advanced elements</h2>
      <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a wide variety of forms.</p>
      <div class="row">
        <div class="col-md-6">
          <div class="card shadow mb-4">
            <div class="card-body">
              <p class="mb-3"><strong>Input group</strong></p>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
              </div>
              <label for="basic-url">Your vanity URL</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                </div>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                  <span class="input-group-text">.00</span>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Button addons" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <button class="btn btn-secondary" type="button">Button</button>
                </div>
                <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                  <option selected>Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
          </div>
          <div class="card shadow mb-4">
            <div class="card-body">
              <p class="mb-3"><strong>Switches</strong></p>
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
              </div>
              <div class="custom-control custom-switch mb-2">
                <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
              </div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /.col -->
        <div class="col-md-6">
          <div class="card shadow mb-4">
            <div class="card-body">
              <p class="mb-2"><strong>Select2</strong></p>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="simple-select2">Simple Select</label>
                  <select class="form-control select2" id="simple-select2">
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                      <option value="AK">Alaska</option>
                      <option value="HI">Hawaii</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                      <option value="CA">California</option>
                      <option value="NV" disabled="disabled">Nevada (disabled)</option>
                      <option value="OR">Oregon</option>
                      <option value="WA">Washington</option>
                    </optgroup>
                  </select>
                </div> <!-- form-group -->
                <div class="form-group col-md-6">
                  <label for="multi-select2">Multiple Select</label>
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
              </div> <!-- form-row -->
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <p class="mb-2"><strong>Date & Time Pickers</strong></p>
              <div class="form-row">
                <div class="form-group col-md-8">
                  <label for="date-input1">Date Picker</label>
                  <div class="input-group">
                    <input type="text" class="form-control drgpicker" id="date-input1" value="04/24/2020" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16"></span></div>
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-4">
                  <label for="time-input2">Time Picker</label>
                  <div class="input-group">
                    <input type="text" class="form-control time-input" id="time-input2" placeholder="" aria-describedby="button-addon2">
                  </div>
                </div>
              </div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <p class="mb-2"><strong>Date Range Picker</strong></p>
              <div class="form-group">
                <label for="date-input1">Date Range</label>
                <input type="text" name="datetimes" class="form-control datetimes" />
              </div>
              <div class="form-group">
                <label for="reportrange">Predefined Date Ranges</label>
                <div id="reportrange" class="border px-2 py-2 bg-light">
                  <i class="fe fe-calendar fe-16 mx-2"></i>
                  <span></span>
                </div>
              </div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /.col -->
        <div class="col-md-6">
          <div class="card shadow mb-4">
            <div class="card-body">
              <p class="mb-2"><strong>Input masks</strong></p>
              <div class="form-group mb-3">
                <label for="example-date">Date</label>
                <input class="form-control" id="example-date" type="date" name="date">
              </div>
              <div class="form-group mb-3">
                <label for="example-month">Month</label>
                <input class="form-control" id="example-month" type="month" name="month">
              </div>
              <div class="form-group mb-3">
                <label for="example-time">Time</label>
                <input class="form-control" id="example-time" type="time" name="time">
              </div>
              <div class="form-group mb-3">
                <label for="example-week">Week</label>
                <input class="form-control" id="example-week" type="week" name="week">
              </div>
              <div class="form-group mb-3">
                <label for="example-number">Number</label>
                <input class="form-control" id="example-number" type="number" name="number">
              </div>
              <div class="form-group mb-3">
                <label for="example-color">Color</label>
                <input class="form-control" id="example-color" type="color" name="color" value="#28a745">
              </div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /.col -->
        <div class="col-md-6">
          <div class="card shadow mb-4">
            <div class="card-body">
              <p class="mb-2"><strong>Custom input masks</strong></p>
              <div class="form-group mb-3">
                <label for="custom-placeholder">Mask placeholder</label>
                <input class="form-control input-placeholder" id="custom-placeholder" type="text" name="placeholder">
              </div>
              <div class="form-group mb-3">
                <label for="custom-zip">Zip code</label>
                <input class="form-control input-zip" id="custom-zip" data-placeholder="__/__/____" data-mask="00/00/0000">
              </div>
              <div class="form-group mb-3">
                <label for="custom-money">Money</label>
                <input class="form-control input-money" id="custom-money" type="text" name="money">
              </div>
              <div class="form-group mb-3">
                <label for="custom-phone">US Telephone</label>
                <input class="form-control input-phoneus" id="custom-phone" placeholder="(987) 654-3210">
              </div>
              <div class="form-group mb-3">
                <label for="custom-mixed">Mixed mask</label>
                <input class="form-control input-mixed" id="custom-mixed" type="text" placeholder="AAA 000-S0S">
              </div>
              <div class="form-group mb-3">
                <label for="custom-ipadd">IP address</label>
                <input class="form-control input-ip" id="custom-ipadd">
              </div>
            </div> <!-- /.card-body -->
          </div> <!-- /.card -->
        </div> <!-- /.col -->
      </div> <!-- end section -->
      <div class="row mb-4">
        <div class="col-md-12">
          <div class="card shadow">
            <div class="card-body">
              <h5 class="card-title">Editor</h5>
              <p>Pages type scale includes a range of contrasting styles that support the needs of your product and its content.</p>
              <!-- Create the editor container -->
              <div id="editor" style="min-height:100px;">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lobortis convallis efficitur. Cras nisi felis, luctus nec nibh quis, consequat maximus velit. Ut iaculis at lacus sed pellentesque.</p>
                <p>Maecenas luctus nisl quis leo porta, quis elementum mi tempus. Morbi blandit metus ut nulla scelerisque, sed ornare purus elementum. Vivamus sed augue in tortor commodo malesuada sed et nulla. Nullam cursus erat eget tellus maximus, ut placerat lorem fringilla.</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end section -->
    </div> <!-- .col-12 -->
  </div> <!-- .row -->
@endsection
@section('scripts')
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
<script src="js/apps.js"></script>
@endsection
