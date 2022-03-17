@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')
    <div class="row justify-content-center">
        @livewire('user')
    </div>
@endsection
