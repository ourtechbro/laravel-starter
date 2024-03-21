@extends('admin.layouts.app')

@section('title')
    {{ __('Roles') }}
@endsection

@section('content')
    <div class="row justify-content-center">
        @livewire('roles-component')
    </div>
@endsection
