@extends('layouts.app')

@section('title')
    {{ __('Roles') }}
@endsection

@section('content')
    <div class="row justify-content-center">
        @livewire('roles-component')
    </div>
@endsection
@section('scripts')
    <script>
        window.addEventListener('closeModal', event => {
            $("#createModal").modal('hide');
            $("#updateModal").modal('hide');
        })
    </script>
@endsection
