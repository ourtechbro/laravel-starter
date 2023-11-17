<?php

namespace App\Livewire\Administrator\Users;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserEdit extends Component
{
    public $name, $email, $password, $selected_id;
    public $selectedRoles;

    public function render()
    {
        return view('admin.administrator.users.edit', [
            'roles' => Role::get()
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
        $this->selectedRoles = null;

        $this->dispatch('clearSelect');
    }

    public function mount($id)
    {
        $record = User::with('roles')->findOrFail($id);
        $this->name = $record->name;
        $this->email = $record->email;
        $this->selectedRoles = optional($record->roles)->pluck('id')->toArray();

        $this->dispatch('show-previous-roles', roles: $this->selectedRoles);
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'email' => 'required|email'
        ]);
        if ($this->selected_id) {
            $record = User::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'email' => $this->email
            ]);

            $record->syncRoles($this->selectedRoles);

            $this->resetInput();
        }


        $this->dispatch('alert', ['type' => 'success',  'message' => 'User updated successfully!']);

        return $this->redirect(route('users'), navigate: true);
    }
}
