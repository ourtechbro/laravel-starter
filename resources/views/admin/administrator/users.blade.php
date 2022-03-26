@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')
    <div class="row justify-content-center">
        @livewire('user-component')
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
