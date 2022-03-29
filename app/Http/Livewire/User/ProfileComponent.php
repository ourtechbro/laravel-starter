<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Illuminate\Validation\Rules;
use Livewire\WithFileUploads;
use Image;


class ProfileComponent extends Component
{
    use WithFileUploads;

    public $user_id;
    public $name;
    public $email;
    public $photo;
    public $password;
    public $password_confirmation;
    protected $listeners = ['image' => 'showProfilePhoto'];

    public function showProfilePhoto($profilePhoto)
    {
         $this->photo = $profilePhoto;
    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
        $this->password_confirmation = null;
        $this->photo = null;
    }

    public function updateProfile()
    {
        $validatedProfile = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['confirmed'],
            // 'photo' => ['mimes:jpg,png,jpeg,gif,svg','max:2048'],
        ]);

        $user = User::find($this->user_id);

        if(!is_null($this->photo)){
            $x = explode(';',$this->photo);
            $xx = explode('/',$x[0]);
            $img_extension = end($xx);
            $image_name = strtolower($this->name).".".$img_extension;
            Image::make($this->photo)->resize(150,150)->save(public_path('uploads/users/') . $image_name);
            $user->profile_photo_path = $image_name;
        }

        if(!is_null($this->password)){
            $user->password = Hash::make($this->password);
        }

        $user->name = $this->name;
        $user->email = $this->email;
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
