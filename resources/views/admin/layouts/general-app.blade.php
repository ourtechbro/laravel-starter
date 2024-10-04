<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>{{ $title ?? config('app.name') }}</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme">

    @yield('styles')
</head>

<body class="vertical  light  ">
<div class="wrapper">

    <livewire:layouts.navigation />

    <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
            <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
            <!-- nav bar -->
            <div class="w-100 mb-4 d-flex">
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
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
                <li class="nav-item w-100 @if(url()->current() == route('dashboard')) active @endif">
                    <a class="nav-link" wire:navigate href="{{ route('dashboard') }}">
                        <i class="fe fe-home"></i>
                        <span class="ml-3 item-text">{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#administrator" data-toggle="collapse" aria-expanded="{{ (request()->is('administrator/*')) ? 'true' : 'false' }}" class="dropdown-toggle nav-link">
                        <i class="fe fe-book fe-16"></i>
                        <span class="ml-3 item-text">{{ __('Administrator') }}</span>
                    </a>
                    <ul class="collapse {{ (request()->is('administrator/*')) ? 'show' : '' }} list-unstyled pl-4 w-100" id="administrator">
                        <a class="nav-link pl-3" wire:navigate href="{{ route('users') }}"><span class="ml-1">{{ __('Users') }}</span></a>
                        <a class="nav-link pl-3" wire:navigate href="{{ route('roles') }}"><span class="ml-1">{{ __('Roles') }}</span></a>
                        <a class="nav-link pl-3" wire:navigate href="{{ route('permissions') }}"><span class="ml-1">{{ __('Permissions') }}</span></a>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#settings" data-toggle="collapse" aria-expanded="{{ (request()->is('settings/*')) ? 'true' : 'false' }}" class="dropdown-toggle nav-link">
                        <i class="fe fe-user fe-16"></i>
                        <span class="ml-3 item-text">{{ __('Settings') }}</span>
                    </a>
                    <ul class="collapse {{ (request()->is('settings*')) ? 'show' : '' }} list-unstyled pl-4 w-100" id="settings">
                        <a class="nav-link pl-3" href="{{ route('settings') }}"><span class="ml-1">{{ __('Settings') }}</span></a>
                    </ul>
                </li>
            </ul>

        </nav>
    </aside>

    <main role="main" class="main-content">
        <div class="container-fluid">
            @yield('content')
        </div> <!-- .container-fluid -->
    </main> <!-- main -->
</div> <!-- .wrapper -->

@livewireScripts

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/simplebar.min.js') }}"></script>
<script src="{{ asset('js/jquery.stickOnScroll.js') }}"></script>
<script src="{{ asset('js/config.js') }}"></script>
<script src="{{ asset('js/apps.js') }}"></script>
@yield('scripts')

@stack('scripts')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<x-livewire-alert::scripts />
</body>
</html>
