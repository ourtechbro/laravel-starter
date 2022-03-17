<div>
    <div class="form-group">
        <label for="exampleInputPassword1">Enter Name</label>
        <input type="text" wire:model="name" class="form-control input-sm"  placeholder="Name">
    </div>
    <div class="form-group">
        <label>Enter Email</label>
        <input type="email" class="form-control input-sm" placeholder="Enter email" wire:model="email">
    </div>

    <div class="form-group">
        <label>Enter Password</label>
        <input type="password" class="form-control input-sm" placeholder="********" wire:model="password">
    </div>
    <button wire:click="store()" class="btn btn-primary">Submit</button>
</div>
