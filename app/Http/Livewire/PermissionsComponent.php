<?php

namespace App\Http\Livewire;

use App\Models\Module;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class PermissionsComponent extends Component
{
    public $selectedPermissions = [];
    public $currentRoleId = null;

    public $modules = [];

    protected $listeners = [
        'selectedRole',
    ];

    public function render()
    {
        return view('admin.livewire.permissions.index', [
            'roles' => Role::get()
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
    }

    public function selectedRole($item)
    {
        if (!$item) {
            return;
        }
        $this->currentRoleId = $item;
        $rolePermissions = Role::findById($item)->getAllPermissions()->pluck('name','id')->toArray();

        $this->selectedPermissions = $rolePermissions;

        $modules = Module::with('permissions')->get();

        $this->modules = $modules;
    }

    public function update()
    {
        if (!$this->currentRoleId) {
            return;
        }

        Role::findById($this->currentRoleId)->syncPermissions($this->selectedPermissions);

        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Permissions update successfully!']);
    }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
        $this->emit('select2');
    }
}
