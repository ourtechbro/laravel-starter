@extends('layouts.app')

@section('title')
    Wizard
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
  <div class="col-12 col-lg-10">
    <h2 class="page-title">Form Wizard</h2>
    <p>Using jQuery Steps as default wizard plugin. That is an extremely flexible, compact and feature-rich plugin.</p>
    <div class="card my-4">
      <div class="card-header">
        <strong>Basic</strong>
      </div>
      <div class="card-body">
        <div id="example-basic">
          <h3>Keyboard</h3>
          <section>
            <p>Try the keyboard navigation by clicking arrow left or right!</p>
          </section>
          <h3>Effects</h3>
          <section>
            <p>Wonderful transition effects.</p>
          </section>
          <h3>Pager</h3>
          <section>
            <p>The next and previous buttons help you to navigate through your content.</p>
          </section>
        </div>
      </div> <!-- .card-body -->
    </div> <!-- .card -->
    <div class="card my-4">
      <div class="card-header">
        <strong>Vertical</strong>
      </div>
      <div class="card-body">
        <div id="example-vertical">
          <h3>Keyboard</h3>
          <section>
            <p>Try the keyboard navigation by clicking arrow left or right!</p>
          </section>
          <h3>Effects</h3>
          <section>
            <p>Wonderful transition effects.</p>
          </section>
          <h3>Pager</h3>
          <section>
            <p>The next and previous buttons help you to navigate through your content.</p>
          </section>
        </div>
      </div> <!-- .card-body -->
    </div> <!-- .card -->
    <div class="card my-4">
      <div class="card-header">
        <strong>Validation</strong>
      </div>
      <div class="card-body">
        <form id="example-form" action="#">
          <div>
            <h3>Account</h3>
            <section>
              <div class="form-group">
                <label for="userName">User name *</label>
                <input id="userName" name="userName" type="text" class="form-control required">
              </div>
              <div class="form-group">
                <label for="password">Password *</label>
                <input id="password" name="password" type="text" class="form-control required">
              </div>
              <div class="form-group">
                <label for="confirm">Confirm Password *</label>
                <input id="confirm" name="confirm" type="text" class="form-control required">
              </div>
              <div class="help-text text-muted">(*) Mandatory</div>
            </section>
            <h3>Profile</h3>
            <section>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">First name *</label>
                  <input id="name" name="name" type="text" class="form-control required">
                </div>
                <div class="form-group col-md-6">
                  <label for="surname">Last name *</label>
                  <input id="surname" name="surname" type="text" class="form-control required">
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input id="email" name="email" type="text" class="form-control required email">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input id="address" name="address" class="form-control" type="text">
              </div>
              <div class="help-text text-muted">(*) Mandatory</div>
            </section>
            <h3>Hints</h3>
            <section>
              <ul class="ml-5">
                <li>Foo</li>
                <li>Bar</li>
                <li>Foobar</li>
              </ul>
            </section>
            <h3>Finish</h3>
            <section>
              <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
            </section>
          </div>
        </form>
      </div> <!-- .card-body -->
    </div> <!-- .card -->
  </div> <!-- .col-12 -->
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
@endsection
