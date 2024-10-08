<?php

namespace App\Livewire;

use Livewire\Component;

class SettingsComponent extends Component
{
    public $platforms = [
        ['id' => 'facebook', 'title' => 'Facebook'],
        ['id' => 'google', 'title' => 'Google'],
        ['id' => 'github', 'title' => 'GitHub'],
        ['id' => 'twitter', 'title' => 'Twitter'],
    ];
    public $general = [
        ['id' => 'pusher', 'title' => 'Pusher'],
        ['id' => 'mail', 'title' => 'MAIL'],
    ];

    public $settings = [];

    public function render()
    {
        return view('livewire.settings.settings');
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
        $this->dispatch('alert', ['type' => 'success',  'message' => 'Settings updated successfully!']);
    }
}
