<div class="list-group-item">
    <div class="row align-items-center">
        <div class="col">
            <strong class="mb-2">{{ __('Enable Activity Logs') }}</strong>
            <p class="text-muted mb-0">{{ __('Activities of users will store and listed') }}</p>
        </div> <!-- .col -->
        <div class="col-auto">
            <div class="custom-control custom-switch">
                <input type="checkbox" wire:model="enableActivity" class="custom-control-input" id="activity" @if($enableActivity) checked @endif>
                <label class="custom-control-label" for="activity">@if($enableActivity) On @else Off @endif</label>
            </div>
        </div> <!-- .col -->
    </div> <!-- .row -->
</div> <!-- .list-group-item -->
