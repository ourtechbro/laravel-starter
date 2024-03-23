<?php

namespace App\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RolesComponent extends Component
{
    public $data, $name, $selected_id;

    public function render()
    {
        return view('admin.livewire.roles.index', [
            'list' => Role::paginate(20)
        ]);
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Role::where('id', $id);
            $record->delete();
        }
    }

    public function paginationView()
    {
        return 'admin.pagination';
    }
}
