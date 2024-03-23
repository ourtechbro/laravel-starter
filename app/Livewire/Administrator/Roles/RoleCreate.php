<?php

namespace App\Livewire\Administrator\Roles;

use App\Traits\LivewireAlertPlus;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleCreate extends Component
{
    use LivewireAlertPlus;

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
            'name' => 'required'
        ]);

        Role::create([
            'name' => $this->name
        ]);

        $this->flash('success', 'Role created successfully!', [], 'roles');
    }
}
