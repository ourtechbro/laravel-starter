@extends('layouts.app')

@section('title')
    {{ __('Settings') }}
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
            <h2 class="h3 mb-4 page-title">{{ __('Settings') }}</h2>
            @livewire('settings-component')
        </div>
    </div> <!-- .row -->
@endsection
