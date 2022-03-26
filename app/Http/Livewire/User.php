<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as UserModel;

class User extends Component
{
    public $data, $name, $email, $password, $selected_id;

    public function render()
    {
        $this->data = UserModel::all();
        return view('admin.administrator.livewire.user');
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
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:6'
        ]);

        UserModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        $this->resetInput();
        $this->dispatchBrowserEvent('closeModal');
    }
    public function edit($id)
    {
        $this->hydrate();
        $record = UserModel::findOrFail($id);
        $this->selected_id = $id;
        $this->name = $record->name;
        $this->email = $record->email;
    }

    public function update()
    {
        $this->validate([
            'selected_id' => 'required|numeric',
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns'
        ]);
        if ($this->selected_id) {
            $record = UserModel::find($this->selected_id);
            $record->update([
                'name' => $this->name,
                'email' => $this->email
            ]);
            $this->resetInput();
        }

        $this->dispatchBrowserEvent('closeModal');
    }
    public function destroy($id)
    {
        if ($id) {
            $record = UserModel::where('id', $id);
            $record->delete();
        }
    }

    public function hydrate()
    {
        $this->resetErrorBag();
        $this->resetValidation();
    }
}
