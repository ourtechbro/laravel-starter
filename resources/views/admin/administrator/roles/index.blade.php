<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

use App\Traits\LivewireAlertPlus;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;
use Livewire\Attributes\Url;

new #[Layout('admin.layouts.app')] class extends Component
{
    use WithPagination, LivewireAlertPlus;

    #[Url]
    public $per_page = 10;

    #[Url]
    public $query = '';

    #[Url]
    public $orderKey = 'created_at';

    #[Url]
    public $orderBy = 'DESC';

    public $deletingId;

    protected $listeners = [
        'confirmedDelete'
    ];

    public function with()
    {
        $roles = Role::query();

        if ($this->query) {
            $roles->where(function($query) {
                $query->where('name','LIKE','%'. $this->query .'%');
            });
        }

        return [
            'list' => $roles->orderBy($this->orderKey, $this->orderBy)->paginate($this->per_page)
        ];
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

    public function orderChange($key)
    {
        if($this->orderKey == $key) {
            $this->orderBy = $this->orderBy == 'DESC' ? 'ASC' : 'DESC';
        } else {
            $this->orderKey = $key;
        }
    }
}; ?>


<div class="col-12">
    <h2 class="page-title">{{ __('Role List') }}</h2>
    <div class="row">
        <div class="col-md-12 my-4">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group row">
                                <label for="perPage" class="col-sm-4 col-form-label">{{ __('Per Page') }}</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" id="perPage" wire:model.live="per_page">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group row">
                                <input type="text" placeholder="{{ __('Type to search') }}" class="form-control" wire:model.debounce.500ms="query">
                            </div>
                        </div>
                        <div class="col-md-4 text-right">
                            <a wire:navigate href="{{ route('roles.create') }}" type="button" class="btn mb-2 btn-primary">
                                {{ __('Create new') }}
                            </a>
                        </div>
                    </div>

                    <table class="table table-bordered table-hover mb-0">
                        <thead>
                            <tr>
                                <th wire:click="orderChange('id')" style="cursor: pointer">
                                    <span class="fe @if($orderKey == 'id') fe-arrow-up @else fe-arrow-down @endif"></span>
                                    {{ __('ID') }}
                                </th>
                                <th wire:click="orderChange('name')" style="cursor: pointer">
                                    <span class="fe @if($orderKey == 'name') fe-arrow-up @else fe-arrow-down @endif"></span>
                                    {{ __('Name') }}
                                </th>
                                <th wire:click="orderChange('created_at')" style="cursor: pointer">
                                    <span class="fe @if($orderKey == 'created_at') fe-arrow-up @else fe-arrow-down @endif"></span>
                                    {{ __('Created At') }}
                                </th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $row)
                            <tr>
                                <td>{{ $row->id }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->created_at->diffForHumans() }}</td>
                                <td>
                                    <a wire:navigate href="{{ route('roles.edit', ['id' => $row->id]) }}" class="btn btn-sm btn-outline-info py-0">
                                        <span class="fe fe-edit"></span>
                                        {{ __('Edit') }}
                                    </a>
                                    |
                                    <button wire:click="destroy({{$row->id}})" class="btn btn-sm btn-outline-danger py-0">
                                            <span class="fe fe-trash-2"></span>
                                            {{ __('Delete') }}
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $list->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
