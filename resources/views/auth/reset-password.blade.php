<x-guest-layout>
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{ route('password.update') }}">
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
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
                        <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                    <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                    <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                    <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
                    </a>
                    <h2 class="my-3">{{ __('Change Password') }}</h2>
                </div>
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">{{ __('Email') }}</label>
                    <input type="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email address"  name="email" value="{{ old('email', $request->email ) }}" required autofocus>
                </div>
                <div class="form-group">
                    <label for="inputPassword5">{{ __('New Password') }}</label>
                    <input type="password" class="form-control" id="inputPassword5" name="password" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="inputPassword6">{{ __('Confirm Password') }}</label>
                    <input type="password" class="form-control" id="inputPassword6" name="password_confirmation" required autocomplete="new-password">
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Reset Password') }}</button>
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
                <p class="mt-5 mb-3 text-muted">© {{ date('Y') }}</p>
            </form>
        </div>
    </div>
</x-guest-layout>
