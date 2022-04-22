@php
    $isEnable = \Illuminate\Support\Arr::get($settings, 'social.' . $platform['id'] .'.is_enable')
@endphp
<div class="row align-items-center">
    <div class="col-auto">
        <strong class="mb-2">{{ $platform['title'] }}</strong><br>
        <div class="custom-control custom-switch">
            <input type="checkbox" wire:model.defer="settings.social.{{ $platform['id'] }}.is_enable" class="custom-control-input" id="{{ $platform['id'] }}" @if($isEnable) checked @endif>
            <label class="custom-control-label" for="{{ $platform['id'] }}">@if($isEnable) {{ __('Enable') }} @else {{ __('Disable') }} @endif</label>
        </div>
    </div> <!-- .col -->
    <div class="col">
        <div class="form-group">
            <input class="form-control form-control-sm"
                   type="text"
                   wire:model.defer="settings.social.{{ $platform['id'] }}.app_id"
                   placeholder="{{ $platform['title'] }} App ID">
        </div>
        <div class="form-group">
            <input class="form-control form-control-sm"
                   type="text"
                   wire:model.defer="settings.social.{{ $platform['id'] }}.app_secret"
                   placeholder="{{ $platform['title'] }} App Secret">
        </div>
        <div class="form-group">
            <input class="form-control form-control-sm"
                   type="text"
                   wire:model.defer="settings.social.{{ $platform['id'] }}.app_redirect"
                   placeholder="{{ $platform['title'] }} Redirect URL">
        </div>
    </div> <!-- .col -->

</div> <!-- .row -->
