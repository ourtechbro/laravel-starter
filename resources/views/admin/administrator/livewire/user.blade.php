<div class="col-12">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sorry!</strong> invalid input.<br><br>
            <ul style="list-style-type:none;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    @if($updateMode)
        @include('admin.administrator.livewire.update')
    @else
        @include('admin.administrator.livewire.create')
    @endif

    <h2 class="page-title">User List</h2>
    <p> Tables with built-in bootstrap styles </p>
    <div class="row">

        <!-- Bordered table -->
        <div class="col-md-12 my-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Bordered table</h5>
                    <p class="card-text">Add .table-bordered for borders on all sides of the table and cells.</p>
                    <table class="table table-bordered table-hover mb-0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $row)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>
                                    <button wire:click="edit({{$row->id}})" class="btn btn-sm btn-outline-danger py-0">Edit</button> |
                                    <button wire:click="destroy({{$row->id}})" class="btn btn-sm btn-outline-danger py-0">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- Bordered table -->
    </div> <!-- end section -->
</div> <!-- .col-12 -->
