<div class="my-4">
    <ul class="nav nav-tabs mb-4" id="settingsTab" role="tablist" wire:ignore>
        <li class="nav-item">
            <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">{{ __('General') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="service-tab" data-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="true">{{ __('Service') }}</a>
        </li>
    </ul>
    <div class="tab-content" id="settingsTabContent" wire:ignore.self>
        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab" wire:ignore.self>
            <h5 class="mb-0 mt-5">{{ __('Security Settings') }}</h5>
            <p>{{ __('These settings are helps you keep your account secure.') }}</p>
            <div class="list-group mb-5 shadow">
                @if(module_enabled('ActivityLog'))
                    @include('activitylog::activity-settings-switch')
                @endif
            </div> <!-- .list-group -->
            @if(module_enabled('ActivityLog'))
                @livewire('activitylog::activity')
            @endif
        </div>
        <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab" wire:ignore.self>
            <div class="row">
                <div class="col">
                    <h5>{{ __('Social login settings') }}</h5>
                    <p>{{ __('Use switch to disable logins') }}</p>
                </div>
                <div class="col" style="text-align: right">
                    <button class="btn btn-primary btn-sm" wire:click.prevent="updateSettings">{{ __('Save') }}</button>
                </div>
            </div>

            <div class="list-group mb-5 shadow">
                @foreach($platforms as $platform)
                    <div class="list-group-item">
                        @include('admin.livewire.settings.partials.social-config-form', $platform)
                    </div> <!-- .list-group-item -->
                @endforeach
            </div>
        </div>
    </div>
</div> <!-- /.card-body -->
