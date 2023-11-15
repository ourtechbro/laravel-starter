<div class="modal fade" wire:ignore.self id="updateModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyModalLabel">{{ __('Update user') }}</h5>
                <button type="button" class="close" wire:click.prevent="cancel()" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter Name</label>
                        <input type="text" wire:model="name" class="form-control input-sm"  placeholder="Name">
                        @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label>Enter Email</label>
                        <input type="email" class="form-control input-sm" placeholder="Enter email" wire:model="email">
                        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12"  wire:ignore>
                            <select class="form-control" id="select2Update">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                <button wire:click.prevent="update()" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>
