<?php

namespace App\Livewire\Administrator\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UserList extends Component
{
    use WithPagination;

    public $data, $name, $email, $password;
    public $per_page = 10;
    public $query = '';

    public function render()
    {
        $users = User::with('roles');

        if ($this->query) {
            $users->where(function($query) {
                $query->where('name','LIKE','%'. $this->query .'%')
                    ->orWhere('email','LIKE','%'. $this->query .'%');
            });
        }

        return view('admin.administrator.users.index', [
            'list' => $users->latest()->paginate($this->per_page),
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

        $this->dispatch('clearSelect');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        $user->syncRoles($this->selectedRoles);

        $this->resetInput();

        $this->dispatch('alert', ['type' => 'success',  'message' => 'User created successfully!']);
    }

    public function destroy($id)
    {
        if ($id) {
            $record = User::where('id', $id);
            $record->delete();
        }

        $this->dispatch('alert', ['type' => 'success',  'message' => 'User deleted successfully!']);
    }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function paginationView()
    {
        return 'admin.pagination';
    }
}
