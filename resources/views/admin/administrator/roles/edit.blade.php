<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

use App\Traits\LivewireAlertPlus;
use Spatie\Permission\Models\Role;

new #[Layout('admin.layouts.app')] class extends Component
{
    use LivewireAlertPlus;

    public $id, $name;

    public function mount($id)
    {
        $this->id = $id;

        $record = Role::findOrFail($id);
        $this->name = $record->name;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required'
        ]);

        if ($this->id) {
            $record = Role::find($this->id);
            $record->update([
                'name' => $this->name
            ]);
        }

        $this->flash('success', 'Role updated successfully!', [], 'roles');
    }
}; ?>

<div class="col-12">
    <h2 class="page-title">{{ __('Role edit') }}</h2>
    <div class="row">
        <div class="col-md-12 my-4">
            <div class="card shadow">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">{{ __('Enter Name') }}</label>
                            <input type="text" wire:model="name" class="form-control input-sm"  placeholder="{{ __('Name') }}">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <a wire:navigate href="{{ route('roles') }}" class="btn btn-secondary mt-2">{{ __('Back to list') }}</a>
                        <button wire:click.prevent="update()" class="btn btn-primary mt-2">{{ __('Submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
