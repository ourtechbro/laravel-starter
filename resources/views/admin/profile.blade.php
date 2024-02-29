<x-admin.app-layout>
    <x-slot name="header">
        <h2 class="">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="container">
        <livewire:profile.update-profile-information-form />
    </div>
</x-admin.app-layout>
