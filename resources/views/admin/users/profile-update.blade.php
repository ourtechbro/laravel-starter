@extends('layouts.app')

@section('title')
    Profile Update
@endsection

@section('content')
    <div class="row justify-content-center">
        @livewire('user.profile-component')

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
