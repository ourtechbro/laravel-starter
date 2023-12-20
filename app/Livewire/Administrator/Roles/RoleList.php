<?php

namespace App\Livewire\Administrator\Roles;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class RoleList extends Component
{
    use WithPagination;

    public $data;
    public $per_page = 10;
    public $query = '';

    public function render()
    {
        $roles = Role::query();

        if ($this->query) {
            $roles->where(function($query) {
                $query->where('name','LIKE','%'. $this->query .'%');
            });
        }

        return view('admin.administrator.roles.index', [
            'list' => $roles->latest()->paginate($this->per_page)
        ]);
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Role::where('id', $id);
            $record->delete();
        }

        $this->dispatch('alert', ['type' => 'success',  'message' => 'Role deleted successfully!']);
    }

    public function paginationView()
    {
        return 'admin.pagination';
    }
}
