<?php

namespace App\Livewire\Administrator\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleEdit extends Component
{
    public $id, $name;

    public function render()
    {
        return view('admin.administrator.roles.edit');
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->name = null;
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
            'name' => 'required|min:5'
        ]);

        if ($this->id) {
            $record = Role::find($this->id);
            $record->update([
                'name' => $this->name
            ]);

            $this->resetInput();
        }


        $this->dispatch('alert', ['type' => 'success',  'message' => 'Role updated successfully!']);

        return $this->redirect(route('roles'), navigate: true);
    }
}
