<?php

namespace App\Livewire\Administrator\Users;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserCreate extends Component
{
    public $name, $email, $password;
    public $selectedRoles;

    public function render()
    {
        return view('admin.administrator.users.create', [
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

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        $user->syncRoles($this->selectedRoles);

        $this->dispatch('alert', ['type' => 'success',  'message' => 'User created successfully!']);

        return $this->redirect(route('users'), navigate: true);
    }
}
