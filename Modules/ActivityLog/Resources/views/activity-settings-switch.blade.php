<div class="list-group-item">
    <div class="row align-items-center">
        <div class="col">
            <strong class="mb-2">{{ __('Enable Activity Logs') }}</strong>
            <p class="text-muted mb-0">{{ __('Activities of users will store and listed') }}</p>
        </div> <!-- .col -->
        <div class="col-auto">
            <div class="custom-control custom-switch">
                <input type="checkbox" wire:model="settings.activity_log_enable" class="custom-control-input" id="activity" @if(isset($settings['activity_log_enable']) && $settings['activity_log_enable']) checked @endif>
                <label class="custom-control-label" for="activity">@if(isset($settings['activity_log_enable']) && $settings['activity_log_enable']) On @else Off @endif</label>
            </div>
        </div> <!-- .col -->
        <div class="col" style="text-align: right">
            <button class="btn btn-primary btn-sm" wire:click.prevent="updateSettings">Save</button>
        </div>
    </div> <!-- .row -->
</div> <!-- .list-group-item -->
