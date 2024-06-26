<div class="col-12">
    <h2 class="page-title">{{ __('Manage permissions') }}</h2>
    <div class="row">
        <div class="col-md-12 my-4">
            <div class="card shadow">
                <div class="card-body">
                    <p class="mb-2"><strong>{{ __('Select Role') }}</strong></p>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <select class="form-control" wire:model.live="role">
                                <option value="" selected disabled>{{ __('Select Role') }}</option>
                                @foreach($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div> <!-- form-group -->
                    </div> <!-- form-row -->
                </div>
            </div>
            @if($modules)
            <div class="card shadow">
                <div class="card-body">
                    <div class="list-group list-group-flush my-n3">
                        @foreach($modules as $module)
                        <div class="list-group-item">
                            <div class="row">
                                <div class="col">
                                    <small><strong>{{ $module->name }}</strong></small>
                                    @foreach($module->permissions as $key => $permission)
                                        <div class="form-check">
                                            <input type="checkbox"
                                                   value="{{ $permission->name }}"
                                                   wire:model.live="selectedPermissions"
                                                   class="form-check-input"
                                                   id="permissionCheck{{ $permission->id }}">
                                            <label class="form-check-label" for="permissionCheck{{ $permission->id }}">{{ $permission->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            @if(auth()->user()->can('update permissions') && $role)
            <div class="card shadow">
                <div class="card-body">
                    <button class="btn btn-primary" type="submit" wire:click.prevent="update">{{ __('Update') }}</button>
                </div>
            </div>
            @endif
        </div>
    </div>
</div> <!-- .col-12 -->
