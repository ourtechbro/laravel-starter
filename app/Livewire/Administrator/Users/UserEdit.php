<?php

namespace App\Livewire\Administrator\Users;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserEdit extends Component
{
    public $id, $name, $email, $password;
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
        $this->selectedRoles = [];

        $this->dispatch('clearSelect');
    }

    public function mount($id)
    {
        $this->id = $id;

        $record = User::with('roles')->findOrFail($id);
        $this->name = $record->name;
        $this->email = $record->email;
        $this->selectedRoles = optional($record->roles)->pluck('id')->toArray();
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email'
        ]);

        if ($this->id) {
            $record = User::find($this->id);
            $record->update([
                'name' => $this->name,
                'email' => $this->email
            ]);

            $record->syncRoles(array_unique($this->selectedRoles));

            $this->resetInput();
        }


        $this->dispatch('alert', ['type' => 'success',  'message' => 'User updated successfully!']);

        return $this->redirect(route('users'), navigate: true);
    }
}
