@extends('layouts.app')

@section('title')
    Settings
@endsection

@section('content')
    <div class="row justify-content-center">
        @livewire('settings-component')
    </div> <!-- .row -->
@endsection
