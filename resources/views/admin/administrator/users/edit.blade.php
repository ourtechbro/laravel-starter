<div class="col-12">
    <h2 class="page-title">{{ __('User edit') }}</h2>
    <div class="row">

        <!-- Bordered table -->
        <div class="col-md-12 my-4">
            <div class="card shadow">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>{{ __('Enter Name') }}</label>
                            <input type="text" wire:model="name" class="form-control input-sm"  placeholder="{{ __('Enter Name') }}">
                            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label>{{ __('Enter email') }}</label>
                            <input type="email" class="form-control input-sm" placeholder="{{ __('Enter email') }}" wire:model="email">
                            @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group">
                            <label>{{ __('Enter Password') }}</label>
                            <input type="password" class="form-control input-sm" placeholder="********" wire:model="password">
                            @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group" wire:ignore>
                            <select class="form-control input-sm" id="select2Update">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <a wire:navigate href="{{ route('users') }}" class="btn btn-secondary mt-2">{{ __('Back to list') }}</a>
                        <button wire:click.prevent="update()" class="btn btn-primary mt-2">{{ __('Submit') }}</button>
                    </form>
                </div>
            </div>
        </div> <!-- Bordered table -->
    </div> <!-- end section -->
</div> <!-- .col-12 -->
@push('scripts')
<script>
    document.addEventListener('livewire:navigated', function () {
        initSelect2();
    });

    document.addEventListener('livewire:init', function () {
        initSelect2();
    });

    function initSelect2() {
        $('#select2Update').select2({
            theme: 'bootstrap4',
            multiple: true,
            width: 'resolve',
            placeholder: 'Select a role',
            allowClear: true,
        }).on('change', function (e) {
            @this.set('selectedRoles', $(this).val());
        })

        $('#select2Update').val(@json($selectedRoles))
    };
</script>
@endpush
