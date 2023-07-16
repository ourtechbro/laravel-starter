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
                <a class="nav-link" href="{{ route('dashboard') }}">
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
                    <a class="nav-link pl-3" href="{{ route('users') }}"><span class="ml-1">{{ __('Users') }}</span></a>
                    <a class="nav-link pl-3" href="{{ route('roles') }}"><span class="ml-1">{{ __('Roles') }}</span></a>
                    <a class="nav-link pl-3" href="{{ route('permissions') }}"><span class="ml-1">{{ __('Permissions') }}</span></a>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#settings" data-toggle="collapse" aria-expanded="{{ (request()->is('settings/*')) ? 'true' : 'false' }}" class="dropdown-toggle nav-link">
                    <i class="fe fe-user fe-16"></i>
                    <span class="ml-3 item-text">{{ __('Settings') }}</span>
                </a>
                <ul class="collapse {{ (request()->is('settings*')) ? 'show' : '' }} list-unstyled pl-4 w-100" id="settings">
                    <a class="nav-link pl-3" href="{{ route('settings.settings') }}"><span class="ml-1">{{ __('Settings') }}</span></a>
                    <a class="nav-link pl-3" href="{{ route('settings.language') }}"><span class="ml-1">{{ __('Language') }}</span></a>
                </ul>
            </li>
        </ul>

    </nav>
</aside>
