<div class="my-4">
    <ul class="nav nav-tabs mb-4" id="settingsTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">{{ __('General') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="service-tab" data-toggle="tab" href="#service" role="tab" aria-controls="service" aria-selected="true">{{ __('Service') }}</a>
        </li>
    </ul>
    <div class="tab-content" id="settingsTabContent">
        <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
            <h5 class="mb-0 mt-5">Security Settings</h5>
            <p>These settings are helps you keep your account secure.</p>
            <div class="list-group mb-5 shadow">
                @if(\Nwidart\Modules\Facades\Module::has('ActivityLog'))
                    @include('activitylog::activity-settings-switch')
                @endif
            </div> <!-- .list-group -->
            @if(\Nwidart\Modules\Facades\Module::has('ActivityLog'))
                @livewire('activitylog::activity')
            @endif
        </div>
        <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab">
            <h5 class="mb-0 mt-5">Security Settings</h5>
            <p>These settings are helps you keep your account secure.</p>
            <div class="list-group mb-5 shadow">
                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col">
                            <strong class="mb-2">2FA Authentication</strong>
                            <span class="badge badge-pill badge-success">Enabled</span>
                            <p class="text-muted mb-0">Maecenas sed diam eget risus varius blandit.</p>
                        </div> <!-- .col -->
                        <div class="col-auto">
                            <button class="btn btn-primary btn-sm">Disable</button>
                        </div> <!-- .col -->
                    </div> <!-- .row -->
                </div> <!-- .list-group-item -->
                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col">
                            <strong class="mb-2">Activate Pin Code</strong>
                            <p class="text-muted mb-0">Donec id elit non mi porta gravida at eget metus.</p>
                        </div> <!-- .col -->
                        <div class="col-auto">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="pinCode">
                                <span class="custom-control-label"></span>
                            </div>
                        </div> <!-- .col -->
                    </div> <!-- .row -->
                </div> <!-- .list-group-item -->
            </div>
        </div>
    </div>
</div> <!-- /.card-body -->
