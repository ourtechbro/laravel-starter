 <div class="col-md-12">
      <h2 class="page-title">Update Profile</h2>
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Form controls</strong>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="update">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputName">Name</label>
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" wire:model.defer="name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Enter Email" wire:model="email">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="photo">Profile Photo</label>
                            <input type="file" class="form-control" wire:model="photo" id="photo">
                            <span class="text-danger" id="errMsg"></span>
                            @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="password">New Password</label>
                            <input type="password" class="form-control" id="password" wire:model="password">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="cpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="cpassword" wire:model="password_confirmation">
                            @error('confirmation_password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        @if ($photo)
                            <img src="{{$photo->temporaryUrl()}}" height="250px">
                        @elseif($user->profile_photo_path)
                            <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($user->profile_photo_path) }}" alt="" title="" />
                        @endif
                    </div>
                </div>

            </form>
        </div>
      </div> <!-- / .card -->
    </div> <!-- .col-12 -->

