<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

use App\Traits\LivewireAlertPlus;
use Spatie\Permission\Models\Role;

new #[Layout('admin.layouts.app')] class extends Component
{
    use LivewireAlertPlus;

    public $name;

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
            'name' => 'required'
        ]);

        Role::create([
            'name' => $this->name
        ]);

        $this->flash('success', 'Role created successfully!', [], 'roles');
    }
}; ?>

<div class="col-12">
    <div class="row">
        <div class="col-md-12 my-4">
            <div class="card shadow">
                <div class="card-header">
                    <strong class="card-title">{{ __('Create Role') }}</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">{{ __('Enter Name') }}</label>
                        <input type="text" wire:model="name" class="form-control input-sm"  placeholder="{{ __('Name') }}">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="card-footer">
                    <a wire:navigate href="{{ route('roles') }}" class="btn btn-secondary mt-2">{{ __('Back to list') }}</a>
                    <button wire:click.prevent="store()" class="btn btn-primary mt-2">{{ __('Submit') }}</button>
                </div>
            </div>
        </div> <!-- Bordered table -->
    </div> <!-- end section -->
</div> <!-- .col-12 -->
