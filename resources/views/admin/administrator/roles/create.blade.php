<div class="col-12">
    <h2 class="page-title">{{ __('Role Create') }}</h2>
    <div class="row">

        <!-- Bordered table -->
        <div class="col-md-12 my-4">
            <div class="card shadow">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">{{ __('Enter Name') }}</label>
                            <input type="text" wire:model="name" class="form-control input-sm"  placeholder="{{ __('Name') }}">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <a wire:navigate href="{{ route('users') }}" class="btn btn-secondary mt-2">{{ __('Back to list') }}</a>
                        <button wire:click.prevent="store()" class="btn btn-primary mt-2">{{ __('Submit') }}</button>
                    </form>
                </div>
            </div>
        </div> <!-- Bordered table -->
    </div> <!-- end section -->
</div> <!-- .col-12 -->
