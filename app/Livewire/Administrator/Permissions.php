<?php

namespace App\Livewire\Administrator;

use App\Models\Module;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Permissions extends Component
{
    public $selectedPermissions = [];
    public $role = null;
    public $modules = [];

    public function render()
    {
        return view('admin.administrator.permissions', [
            'roles' => Role::get()
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
    }

    public function updatedRole($item)
    {
        if (!$item) {
            return;
        }

        $rolePermissions = Role::findById($item)->getAllPermissions()->pluck('name')->toArray();

        $this->selectedPermissions = $rolePermissions;

        $modules = Module::with('permissions')->get();

        $this->modules = $modules;
    }

    public function update()
    {
        if (!$this->role) {
            return;
        }

        Role::findById($this->role)->syncPermissions($this->selectedPermissions);

        $this->dispatch('alert', ['type' => 'success',  'message' => 'Permissions update successfully!']);
    }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
