<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SettingsComponent extends Component
{
    public $tabs = [
        'General',
        'Services',
    ];

    public function render()
    {
        return view('admin.livewire.settings');
    }
}
