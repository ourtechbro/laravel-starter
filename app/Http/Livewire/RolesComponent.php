<?php

namespace App\Http\Livewire;

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

    public function cancel()
    {
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->name = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|string'
        ]);

        Role::create(['name' => $this->name]);

        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
    }
    public function edit($id)
    {
        $this->hydrate();
        $record = Role::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|string',
        ]);
        if ($this->selected_id) {
            $record = Role::find($this->selected_id);
            $record->update([
                'name' => $this->name
            ]);
            $this->resetInput();
        }

        $this->dispatchBrowserEvent('closeModal');
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Role::where('id', $id);
            $record->delete();
        }
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
