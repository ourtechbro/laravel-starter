<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Akaunting\Setting\Facade as Setting;

class SettingsComponent extends Component
{
    public $enableActivity = true;

    public function render()
    {
        return view('admin.livewire.settings');
    }

    public function mount()
    {
        $this->enableActivity = setting('activity_log_enable');
    }

    public function updatedEnableActivity($value)
    {
        setting(['activity_log_enable' => $value])->save();

        $this->successMessage();
    }

    private function successMessage()
    {
        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Settings updated successfully!']);
    }
}
