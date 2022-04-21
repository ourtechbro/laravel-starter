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
        @foreach(get_menus() as $module)
            @php
                $moduleAlias = isset($module['alias']) ? $module['alias'] . '::sidebar.' : 'sidebar.';
            @endphp
            @if($module['group_title'])
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>{{ __($moduleAlias . $module['group_title']) }}</span>
                </p>
            @endif
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    @foreach($module['items'] as $key => $item)
                        @if(!Route::has($key))
                            @continue
                        @endif
                        @if(!isset($item['items']))
                            @if(isset($item['permission']))
                                @can($item['permission'])
                                 <li class="nav-item w-100 @if(url()->current() == route($key)) active @endif">
                                      <a class="nav-link" href="{{ route($key) }}">
                                        <i class="{{ $item['icon_class'] }} fe-16"></i>
                                        <span class="ml-3 item-text">
                                            {{ __( $moduleAlias . $item['title'] ) }}
                                        </span>
                                      </a>
                                </li>
                                @endcan
                            @else
                                <li class="nav-item w-100 @if(url()->current() == route($key)) active @endif">
                                    <a class="nav-link" href="{{ route($key) }}">
                                        <i class="{{ $item['icon_class'] }} fe-16"></i>
                                        <span class="ml-3 item-text">
                                            {{ __($moduleAlias . $item['title']) }}
                                        </span>
                                    </a>
                                </li>
                            @endif
                        @else
                         <li class="nav-item dropdown">
                            <a href="{{ isset($item['items']) ? '#' . $key : route($key) }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                                <i class="{{ $item['icon_class'] }} fe-16"></i>
                                <span class="ml-3 item-text">{{ __($moduleAlias . $item['title']) }}</span><span class="sr-only">(current)</span>
                            </a>
                            @if(!isset($item['items']))
                                @continue
                            @endif
                            <ul class="collapse list-unstyled pl-4 w-100" id="{{ $key }}">
                                @foreach($item['items'] as $menuKey => $menu)
                                    @if(isset($menu['permission']))
                                        @can($menu['permission'])
                                        <li class="nav-item @if(request()->is(route($key, ['type' => $menuKey]))) active @endif">
                                            <a class="nav-link pl-3" href="{{ route($key, ['type' => $menuKey]) }}"><span class="ml-1 item-text">{{ __($moduleAlias . $menu['title']) }}</span></a>
                                        </li>
                                        @endcan
                                    @else
                                        <li class="nav-item @if(request()->is(route($key, ['type' => $menuKey]))) active @endif">
                                            <a class="nav-link pl-3" href="{{ route($key, ['type' => $menuKey]) }}"><span class="ml-1 item-text">{{ __($moduleAlias . $menu['title']) }}</span></a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        @endif

                    @endforeach
                </ul>
        @endforeach
    </nav>
</aside>
