@extends('layouts.app')

@section('title')
    {{ __('Permissions') }}
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
@endsection
@section('content')
    <div class="row justify-content-center">
        @livewire('permissions-component')
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/select2.min.js') }}"></script>
@endsection
