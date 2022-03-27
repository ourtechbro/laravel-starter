<x-guest-layout>
    <div class="wrapper vh-100">
        <div class="row align-items-center h-100">
            <form class="col-lg-3 col-md-4 col-10 mx-auto text-center"  method="POST" action="{{ route('login') }}">
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
                <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
                    <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                  <g>
                      <polygon class="st0" points="78,105 15,105 24,87 87,87" />
                      <polygon class="st0" points="96,69 33,69 42,51 105,51" />
                      <polygon class="st0" points="78,33 15,33 24,15 87,15" />
                  </g>
                </svg>
                </a>
                <h1 class="h6 mb-3">{{ __('Sign in') }}</h1>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">{{ __('Email') }}</label>
                    <input type="email" name="email" id="inputEmail" class="form-control form-control-lg" placeholder="Email address" value="admin@mail.com" required autofocus>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">{{ __('Password') }}</label>
                    <input type="password" name="password" id="inputPassword" class="form-control form-control-lg" placeholder="Password" value="password" required autocomplete="current-password">
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" name="remember" value="remember-me"> {{ __('Remember me') }} </label>
                </div>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Log in') }}</button>
                <a class="btn btn-lg btn-primary btn-block" href="{{ route('register') }}">{{ __('Sign up') }}</a>
                <p class="mt-5 mb-3 text-muted">© {{ date('Y') }}</p>
            </form>
        </div>
    </div>
</x-guest-layout>
