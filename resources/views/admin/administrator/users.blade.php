@extends('layouts.app')

@section('title')
    {{ __('Users') }}
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    <style>
        .select2-container {
            min-width: 100% !important;
        }
    </style>
@endsection
@section('content')
    <div class="row justify-content-center">
        @livewire('user-component')
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script>
        window.addEventListener('closeModal', event => {
            $("#createModal").modal('hide');
            $("#updateModal").modal('hide');
        })
    </script>
@endsection
