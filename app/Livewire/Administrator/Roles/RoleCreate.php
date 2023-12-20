<?php

namespace App\Livewire\Administrator\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleCreate extends Component
{
    public $name;

    public function render()
    {
        return view('admin.administrator.roles.create');
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->name = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5'
        ]);

        Role::create([
            'name' => $this->name
        ]);

        $this->dispatch('alert', ['type' => 'success',  'message' => 'Role created successfully!']);

        return $this->redirect(route('roles'), navigate: true);
    }
}
