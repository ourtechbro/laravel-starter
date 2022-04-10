<x-guest-layout>
    <div class="wrapper vh-100">
        <div class="align-items-center h-100">
            <form class="col-lg-6 col-md-8 col-10 mx-auto" method="POST" action="{{ route('register') }}" style="top: 100px">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible">
                        {{ session('status') }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible">
                        <strong>
                            {!! implode('<br/>', $errors->all('<span>:message</span>')) !!}
                        </strong>
                    </div>
                @endif
                @csrf
                <div class="mx-auto text-center my-4">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                        <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
                    </a>
                    <h2 class="my-3">{{ __('Register') }}</h2>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">{{ __('Email') }}</label>
                    <input type="email" class="form-control" id="inputEmail4" name="email" value="{{ old('email') }}" required autofocus autocomplete="email">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstname">{{ __('Name') }}</label>
                        <input type="text" id="firstname" class="form-control" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
                    </div>
                </div>
                <hr class="my-4">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputPassword5">{{ __('New Password') }}</label>
                            <input type="password" class="form-control" id="inputPassword5" name="password" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword6">{{ __('Confirm Password') }}</label>
                            <input type="password" class="form-control" id="inputPassword6" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-2">{{ __('Password requirements') }}</p>
                        <p class="small text-muted mb-2"> To create a new password, you have to meet all the following requirements: </p>
                        <ul class="small text-muted pl-4 mb-0">
                            <li> Minimum 8 character </li>
                            <li>At least one special character</li>
                            <li>At least one number</li>
                            <li>Can’t be the same as a previous password </li>
                        </ul>
                    </div>
                </div>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Sign up') }}</button>
                <p class="mt-5 mb-3 text-muted text-center">© {{ date('Y') }}</p>
            </form>
        </div>
    </div>
</x-guest-layout>
