<?php

namespace App\Livewire\Administrator\Roles;

use App\Traits\LivewireAlertPlus;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleEdit extends Component
{
    use LivewireAlertPlus;

    public $id, $name;

    public function render()
    {
        return view('admin.administrator.roles.edit');
    }

    public function mount($id)
    {
        $this->id = $id;

        $record = Role::findOrFail($id);
        $this->name = $record->name;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required'
        ]);

        if ($this->id) {
            $record = Role::find($this->id);
            $record->update([
                'name' => $this->name
            ]);
        }

        $this->flash('success', 'Role updated successfully!', [], 'roles');
    }
}
