<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts._head')

<body class="vertical  light  ">
<div class="wrapper">

    @include('layouts._topnav')

    @include('layouts._sidebar')

    <main role="main" class="main-content">
        <div class="container-fluid">
            @yield('content')
        </div> <!-- .container-fluid -->

        <x-modals.notifications/>

        <x-modals.shortcuts/>
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
<script src="{{ asset('js/gauge.min.js') }}"></script>
<script src="{{ asset('js/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('js/jquery.steps.min.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/config.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src='{{ asset('js/jquery.dataTables.min.js') }}'></script>
<script src='{{ asset('js/dataTables.bootstrap4.min.js') }}'></script>
<script src="{{ asset('js/apps.js') }}"></script>

@yield('scripts')

@stack('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    window.addEventListener('alert', event => {
        toastr[event.detail.type](event.detail.message,
            event.detail.title ?? ''), toastr.options = {
            "closeButton": true,
            "progressBar": true,
        }
    });
</script>
</body>
</html>
