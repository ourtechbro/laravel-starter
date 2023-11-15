<?php

namespace App\Livewire\Administrator\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UserCreate extends Component
{
    use WithPagination;

    public $data, $name, $email, $password, $selected_id;
    public array $selectedRoles = [];
    public $per_page = 10;
    public $query = '';

    protected $listeners = [
        'rolesChanged',
    ];

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
        $this->selectedRoles = [];

        $this->dispatch('clearSelect');
    }

    public function rolesChanged($roles)
    {
        if (!$roles) {
            return;
        }

        $this->selectedRoles = $roles;
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
        $this->dispatch('closeModal');
        $this->dispatch('alert', ['type' => 'success',  'message' => 'User created successfully!']);
    }
    public function edit($id)
    {
        $this->hydrate();
        $record = User::with('roles')->findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->email = $record->email;
        $this->selectedRoles = optional($record->roles)->pluck('id')->toArray();

        $this->dispatch('showPreviousRoles', ['roles' => $this->selectedRoles]);
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

        $this->dispatch('closeModal');
        $this->dispatch('alert', ['type' => 'success',  'message' => 'User updated successfully!']);
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
