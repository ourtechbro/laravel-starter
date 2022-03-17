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
        @foreach(config('tinydash.menu') as $module)
            @if($module['group_title'])
                <p class="text-muted nav-heading mt-4 mb-1">
                    <span>{{ $module['group_title'] }}</span>
                </p>
            @endif
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    @foreach($module['items'] as $key => $item)

                    @if(!isset($item['items']))
                     <li class="nav-item w-100">
                      <a class="nav-link" href="{{ route($key) }}">
                        <i class="fe fe-calendar fe-16"></i>
                        <span class="ml-3 item-text">{{ $item['title'] }}</span>
                      </a>
                    </li>
                    @else
                     <li class="nav-item dropdown">
                        <a href="{{ isset($item['items']) ? '#' . $key : route($key) }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                            <i class="{{ $item['icon_class'] }}"></i>
                            <span class="ml-3 item-text">{{ $item['title'] }}</span><span class="sr-only">(current)</span>
                        </a>
                        @if(!isset($item['items']))
                            @continue
                        @endif
                        <ul class="collapse list-unstyled pl-4 w-100" id="{{ $key }}">
                            @foreach($item['items'] as $menuKey => $menu)
                            <li class="nav-item active">
                                <a class="nav-link pl-3" href="{{ route($key, ['type' => $menuKey]) }}"><span class="ml-1 item-text">{{ $menu['title'] }}</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    @endif

                    @endforeach
                </ul>
        @endforeach
    </nav>
</aside>
