<div>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-md-12 text-center">
                <h3><strong>Couriers CRUD</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <button class="btn btn-sm btn-info mb-3" onclick="location.href='/couriers';">Courier Index</button>
                <div class="card">
                    <div class="card-header">
                        <h5 style="float: left; margin: 0;"><strong>All Couriers</strong></h5>
                        <button class="btn btn-sm btn-primary" style="float: right;" data-toggle="modal" data-target="#addCourierModal">Add New Courier</button>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th>Registered Date ( yyyy-mm-dd )</th>
                                    <th style="text-align: center;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($couriers->count() > 0)
                                    @foreach ($couriers as $courier)
                                        <tr>
                                            <td>{{ $courier->name }}</td>
                                            <td>{{ $courier->level }}</td>
                                            <td>{{ $courier->registered_date }}</td>
                                            <td style="text-align: center;">
                                                <button class="btn btn-sm btn-success" wire:click="viewCourierDetails({{ $courier->id }})">View</button>
                                                <button class="btn btn-sm btn-warning" wire:click="editCouriers({{ $courier->id }})">Edit</button>
                                                <button class="btn btn-sm btn-danger" wire:click="deleteConfirmation({{ $courier->id }})">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" style="text-align: center;"><small>No Courier Found</small></td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        @if ($couriers->count() > 0)
                            <div>
                                {{ $couriers->links() }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="addCourierModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Courier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form wire:submit.prevent="storeCourierData">

                        <div class="form-group row">
                            <label for="name" class="col-3">Name</label>
                            <div class="col-9">
                                <input type="text" id="name" class="form-control" wire:model="name">
                                @error('name')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="level" class="col-3">Level</label>
                            <div class="col-9">
                                <input type="number" min="1" max="5" id="level" class="form-control" wire:model="level">
                                @error('level')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="registered_date" class="col-3">Registered Date</label>
                            <div class="col-9">
                                <input type="date" id="registered_date" class="form-control" wire:model="registered_date">
                                @error('registered_date')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-3"></label>
                            <div class="col-9">
                                <button type="submit" class="btn btn-sm btn-primary">Add Courier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="editCourierModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Courier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form wire:submit.prevent="editCourierData">
                        <div class="form-group row">
                            <label for="name" class="col-3">Name</label>
                            <div class="col-9">
                                <input type="text" id="name" class="form-control" wire:model="name">
                                @error('name')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="level" class="col-3">Level</label>
                            <div class="col-9">
                                <input type="number" min="1" max="5" id="level" class="form-control" wire:model="level">
                                @error('level')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="registered_date" class="col-3">Registered Date</label>
                            <div class="col-9">
                                <input type="date" id="registered_date" class="form-control" wire:model="registered_date">
                                @error('registered_date')
                                    <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-3"></label>
                            <div class="col-9">
                                <button type="submit" class="btn btn-sm btn-warning">Edit Courier</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="deleteCourierModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-4 pb-4">
                    <h6>Are you sure? You want to delete this courier data!</h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-secondary" wire:click="cancel()" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn btn-sm btn-danger" wire:click="deleteCourierData()">Yes! Delete</button>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="viewCourierModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Courier Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeViewCourierModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Name : </th>
                                <td>{{ $view_courier_name }}</td>
                            </tr>
                            <tr>
                                <th>Level : </th>
                                <td>{{ $view_courier_level }}</td>
                            </tr>
                            <tr>
                                <th>Registered Date : </th>
                                <td>{{ $view_courier_registered_date }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        window.addEventListener('close-modal', event =>{
            $('#addCourierModal').modal('hide');
            $('#editCourierModal').modal('hide');
            $('#deleteCourierModal').modal('hide');
        });

        window.addEventListener('show-edit-courier-modal', event =>{
            $('#editCourierModal').modal('show');
        });

        window.addEventListener('show-delete-confirmation-modal', event =>{
            $('#deleteCourierModal').modal('show');
        });

        window.addEventListener('show-view-courier-modal', event =>{
            $('#viewCourierModal').modal('show');
        });
    </script>
@endpush
