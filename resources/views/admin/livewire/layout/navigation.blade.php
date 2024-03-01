<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <ul class="nav">
        <li class="nav-item">
            <select class="nav-link my-2 form-control" id="changeLang">
                @php
                $locales = get_locales();
                @endphp
                @if($locales)
                    @foreach($locales as $available_locale)
                    <option value="{{ $available_locale }}" {{ session()->get('locale') == $available_locale ? 'selected' : '' }}>
                        {{ strtoupper($available_locale) }}
                    </option>
                    @endforeach
                @else
                    <option value="{{ app()->getLocale() }}" selected>
                        {{ strtoupper(app()->getLocale()) }}
                    </option>
                @endif
            </select>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="avatar avatar-sm mt-2">
                <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&size=128" alt="..." class="avatar-img rounded-circle">
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('profile') }}" wire:navigate>Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activities</a>
                <a class="dropdown-item" wire:click="logout">{{ __("Logout") }}</a>
            </div>
        </li>
    </ul>
</nav>
