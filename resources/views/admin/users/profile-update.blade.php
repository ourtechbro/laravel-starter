@extends('layouts.app')

@section('title')
    {{ __('Profile Update') }}
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
                // console.log(file);
                let fileType = file.type;
                console.log(fileType);
                let ex = fileType.split('/');
                if(ex[1].toLowerCase() == 'png' || ex[1].toLowerCase() == 'jpeg' || ex[1].toLowerCase() == 'jpg'){
                    let reader = new FileReader();
                    reader.onloadend = () =>{
                        Livewire.emit('image', reader.result)
                    }
                    reader.readAsDataURL(file);
                }else{
                    document.getElementById('errMsg').innerText = "{{ __('Please Enter a Valid Image') }}"
                }
            })
        </script>
@endsection
