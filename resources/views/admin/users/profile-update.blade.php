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
        <script>
            Livewire.on('uploadFile', () => {
                let inputField = document.getElementById('Image')
                let file = inputField.files[0]

                let reader = new FileReader();
                reader.onloadend = () =>{
                    Livewire.emit('image', reader.result)
                }
                reader.readAsDataURL(file);
            })
        </script>
@endsection
