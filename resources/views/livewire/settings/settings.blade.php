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
            <div class="row">
                <div class="col">
                    <h5>{{ __('Security Settings') }}</h5>
                    <p>{{ __('These settings are helps you keep your account secure.') }}</p>
                </div>
            </div>

            <div class="list-group mb-5 shadow">

            </div> <!-- .list-group -->
        </div>
        <div class="tab-pane fade" id="service" role="tabpanel" aria-labelledby="service-tab" wire:ignore.self>
            <div class="row">

            </div>
        </div>
    </div>
</div> <!-- /.card-body -->
