<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Validation\Rules;
use Livewire\WithFileUploads;


class ProfileComponent extends Component
{
    public $user_id;
    public $name;
    public $email;
    public $photo;
    public $password;
    public $password_confirmation;

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->new_password = null;
        $this->password = null;
        $this->password_confirmation = null;
    }
  
    public function updateProfile()
    {
        $validatedProfile = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();
        
        
        $this->resetInput();
        session()->flash('message', 'User Updated Successfully.');

        // return redirect()->route('profile.update');
    }
    
    public function render()
    {
        $user = user::find(auth()->user()->id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->user_id = $user->id;
        // $this->photo = $user->profile_photo_path;
        return view('admin.livewire.profile.profile-component');
    }

}
