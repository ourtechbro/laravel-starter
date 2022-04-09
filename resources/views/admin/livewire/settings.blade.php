
    <div class="col-12 col-lg-10 col-xl-8">
        <h2 class="h3 mb-4 page-title">Settings</h2>
        <div class="my-4">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                @foreach($tabs as $tab)
                <li class="nav-item">
                    <a class="nav-link" id="{{ $tab }}-tab" data-toggle="tab" href="#{{ $tab }}" role="tab" aria-controls="{{ $tab }}" aria-selected="true">{{ $tab }}</a>
                </li>
                @endforeach
            </ul>
            <h5 class="mb-0 mt-5">Security Settings</h5>
            <p>These settings are helps you keep your account secure.</p>
            <div class="list-group mb-5 shadow">
                <div class="list-group-item">
                    <div class="row align-items-center">
                        <div class="col">
                            <strong class="mb-2">Enable Activity Logs</strong>
                            <p class="text-muted mb-0">Donec id elit non mi porta gravida at eget metus.</p>
                        </div> <!-- .col -->
                        <div class="col-auto">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="activityLog" checked>
                                <span class="custom-control-label"></span>
                            </div>
                        </div> <!-- .col -->
                    </div> <!-- .row -->
                </div> <!-- .list-group-item -->
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
            </div> <!-- .list-group -->
            @if(\Nwidart\Modules\Facades\Module::has('ActivityLog'))
                @livewire('activitylog::activity')
            @endif
        </div> <!-- /.card-body -->
    </div>
