<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;


class ProfileComponent extends Component
{
    use WithFileUploads;

    public $name, $email, $photo, $password, $password_confirmation;

    protected $listeners = [
        'image' => 'showProfilePhoto'
    ];

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

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|confirmed',
            'photo' => 'nullable|image|max:4096'
        ]);

        $user = auth()->user();

        if($this->photo){
            $user->profile_photo_path = $this->storeImage($user->profile_photo_path);
        }

        if(!is_null($this->password)){
            $user->password = Hash::make($this->password);
        }

        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();

        $this->resetInput();
        $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'User profile updated successfully!']);
    }

    private function storeImage($name = null)
    {
        if (!$this->photo) {
            return null;
        }

        if (!$name) {
            $name = Str::random() . '.jpg';
        }

        $img = Image::make($this->photo)->orientate()->resize(245, 245,
            function ($constraint) {
                $constraint->upsize();
                $constraint->aspectRatio();
            })
            ->resizeCanvas(245, 245)
            ->encode('jpg');

        Storage::disk(config('jetstream.profile_photo_disk'))->put($name, $img);

        return $name;
    }

    public function render()
    {
        $user = auth()->user();
        $this->name = $user->name;
        $this->email = $user->email;

        return view('admin.livewire.profile.profile-component', [
            'user' => auth()->user()
        ]);
    }

}
