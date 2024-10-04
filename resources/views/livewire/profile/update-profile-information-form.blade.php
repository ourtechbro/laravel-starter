<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
            'password' => 'nullable|confirmed'
        ]);

        if(!is_null($this->password)){
            $user->password = Hash::make($this->password);
        }

        $user->name = $this->name;
        $user->email = $this->email;

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        $this->dispatch('profile-updated', name: $user->name);
    }

    /**
     * Send an email verification notification to the current user.
     */
    public function sendVerification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: RouteServiceProvider::HOME);

            return;
        }

        $user->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }
}; ?>


<div class="col-md-12">
    <h2 class="page-title">{{ __('Update Profile') }}</h2>
    <div class="card shadow mb-4">
      <div class="card-header">
        <strong class="card-title">{{ __('General') }}</strong>
      </div>
      <div class="card-body">
          <form wire:submit="updateProfileInformation">
              <div class="row">
                  <div class="col-md-6">
                      <div class="form-group mb-3">
                          <label for="exampleInputName">{{ __('Name') }}</label>
                          <input type="text" class="form-control" id="exampleInputName" placeholder="{{ __('Enter name') }}" wire:model.defer="name">
                          @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="form-group mb-3">
                          <label for="email">{{ __('Email') }}</label>
                          <input type="text" class="form-control" id="email" placeholder="{{ __('Enter Email') }}" wire:model="email">
                          @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! auth()->user()->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800">
                                {{ __('Your email address is unverified.') }}

                                <button wire:click.prevent="sendVerification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                      <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group mb-3">
                          <label for="password">{{ __('New Password') }}</label>
                          <input type="password" class="form-control" id="password" wire:model="password">
                          @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                      <div class="form-group mb-3">
                          <label for="cpassword">{{ __('Confirm Password') }}</label>
                          <input type="password" class="form-control" id="cpassword" wire:model="password_confirmation">
                          @error('confirmation_password') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                  </div>
              </div>

          </form>
      </div>
    </div> <!-- / .card -->
</div> <!-- .col-12 -->
