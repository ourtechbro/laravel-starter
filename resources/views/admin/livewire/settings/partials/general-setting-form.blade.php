@php
    $isEnable = \Illuminate\Support\Arr::get($settings, 'general.' . $general['id'] .'.is_enable')
@endphp
<div class="row align-items-center">
    <div class="col-auto">
        <strong class="mb-2">{{ $general['title'] }}</strong><br>
    </div> <!-- .col -->
    <div class="col-12">
        @if ( $general['title'] == 'MAIL')
        <div class="form-group">
            <input class="form-control form-control-sm"
                   type="text"
                   wire:model.defer="settings.{{ $general['id'] }}_driver"
                   placeholder="{{ $general['title'] }} Name">
        </div>
        <div class="form-group">
            <input class="form-control form-control-sm"
                   type="text"
                   wire:model.defer="settings.{{ $general['id'] }}_host"
                   placeholder="{{ $general['title'] }} Host">
        </div>
        <div class="form-group">
            <input class="form-control form-control-sm"
                type="text"
                wire:model.defer="settings.{{ $general['id'] }}_port"
                placeholder="{{ $general['title'] }} Port">
        </div>
        <div class="form-group">
            <input class="form-control form-control-sm"
                type="text"
                wire:model.defer="settings.{{ $general['id'] }}_username"
                placeholder="{{ $general['title'] }} Username">
        </div>
        <div class="form-group">
            <input class="form-control form-control-sm"
                type="text"
                wire:model.defer="settings.{{ $general['id'] }}_password"
                placeholder="{{ $general['title'] }} Password">
        </div>
        <div class="form-group">
            <input class="form-control form-control-sm"
                type="text"
                wire:model.defer="settings.{{ $general['id'] }}_encryption"
                placeholder="{{ $general['title'] }} Encryption">
        </div>
        <div class="form-group">
            <input class="form-control form-control-sm"
                type="text"
                wire:model.defer="settings.{{ $general['id'] }}_sender_address"
                placeholder="{{ $general['title'] }} Sender Mail Address">
        </div>
        <div class="form-group">
            <input class="form-control form-control-sm"
                type="text"
                wire:model.defer="settings.{{ $general['id'] }}_sender_company"
                placeholder="{{ $general['title'] }} Sender Name">
        </div>
        @else
        <div class="form-group">
            <input class="form-control form-control-sm"
                   type="text"
                   wire:model.defer="settings.security.{{ $general['id'] }}.app_id"
                   placeholder="{{ $general['title'] }} App ID">
        </div>
        <div class="form-group">
            <input class="form-control form-control-sm"
                   type="text"
                   wire:model.defer="settings.security.{{ $general['id'] }}.app_key"
                   placeholder="{{ $general['title'] }} App Key">
        </div>
        <div class="form-group">
            <input class="form-control form-control-sm"
                   type="text"
                   wire:model.defer="settings.security.{{ $general['id'] }}.app_secret"
                   placeholder="{{ $general['title'] }} App Secret">
        </div>
        @endif
    </div> <!-- .col -->
    <div class="col" style="text-align: right">
        <button class="btn btn-primary btn-sm" wire:click.prevent="updateSettings">{{ __('Save') }}</button>
    </div>

</div> <!-- .row -->
