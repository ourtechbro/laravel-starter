<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SettingsComponent extends Component
{
    public $platforms = [
        ['id' => 'facebook', 'title' => 'Facebook'],
        ['id' => 'google', 'title' => 'Google'],
        ['id' => 'github', 'title' => 'GitHub'],
        ['id' => 'twitter', 'title' => 'Twitter'],
    ];

    public $settings = [];

    public function render()
    {
        return view('admin.livewire.settings.settings');
    }

    public function mount()
    {
        $this->settings = setting()->all();
    }

    public function updateSettings()
    {
        setting($this->settings)->save();

        $this->successMessage();
    }

    private function successMessage()
    {
        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Settings updated successfully!']);
    }
}
