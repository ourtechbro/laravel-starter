

    <div class="col-md-12">
      <h2 class="page-title">Update Profile</h2>
      <div class="card shadow mb-4">
        <div class="card-header">
          <strong class="card-title">Form controls</strong>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="updateProfile">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputName">Name</label>
                            <input type="hidden" wire:model="user_id">
                            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" wire:model.defer="name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter Email" wire:model="email">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputbody">Profile Photo</label>
                            <input type="file" class="form-control" wire:change="$emit('uploadFile')" id="Image">
                            <span class="text-danger" id="errMsg"></span>
                            @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="exampleInputName">New Password</label>
                            <input type="password" class="form-control" id="exampleInputName" wire:model="password">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputEmail" wire:model="password_confirmation">
                            @error('confirmation_password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                           <img src="{{ $photo }}" width="200" alt="">
                        </div>
                    </div>
                </div>

            </form>
        </div>
      </div> <!-- / .card -->
    </div> <!-- .col-12 -->

