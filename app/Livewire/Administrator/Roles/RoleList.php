<?php

namespace App\Livewire\Administrator\Roles;

use App\Traits\LivewireAlertPlus;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class RoleList extends Component
{
    use WithPagination, LivewireAlertPlus;

    public $data;
    public $per_page = 10;
    public $query = '';
    public $deletingId;

    protected $listeners = [
        'confirmedDelete'
    ];

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
        $this->deletingId = $id;

        $this->alert('question', 'Are you sure want to delete this?', [
            'showDenyButton' => true,
            'showConfirmButton' => true,
            'confirmButtonText' => 'Confirm',
            'cancelButtonText' => 'Cancel',
            'onConfirmed' => 'confirmedDelete',
            'allowOutsideClick' => false,
            'timer' => null
        ]);
    }

    public function confirmedDelete() {
        if ($this->deletingId) {
            $record = Role::where('id', $this->deletingId);
            $record->delete();
        }

        $this->flash('success', 'Role deleted successfully!', [], 'roles');
    }

    public function paginationView()
    {
        return 'admin.pagination';
    }
}
