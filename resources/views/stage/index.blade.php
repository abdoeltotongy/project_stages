@extends('layouts.main')
@section('title')
    Stages
@endsection
@section('content')
    <!-- main-panel -->
    <div class="main-panel Category">
        <div class="content-wrapper">
            <div class="row">
                @include('inc.messages')


                <div class="col-lg-12 stretch-card">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Stages</h4>
                            <div class="template-demo">
                                <button type="button" class="btn btn-success btn-icon-text" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="ti-upload btn-icon-prepend"></i>
                                    Add New Stage
                                </button>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="table-success" style="width: 100px">
                                                order
                                            </th>
                                            <th class="table-info">
                                                Stage
                                            </th>
                                            <th class="table-primary">
                                                Action
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($stages as $stage)
                                            <tr>
                                                <td class="table-success" style="width: 100px">
                                                    {{ $stage->order }}
                                                </td>
                                                <td class="table-info">
                                                    {{ $stage->name }}

                                                </td>

                                                <td class="table-primary">
                                                    <a type="button" href="{{ url("stage/delete/{$stage->id}") }}"
                                                        class="btn btn-danger btn-rounded p-2" title="Delete">
                                                        <i class="mdi mdi-delete"></i>
                                                    </a>

                                                    <a type="button" class="btn btn-sm btn-dark edit-btn"
                                                        data-id="{{ $stage->id }}" data-order="{{ $stage->order }}"
                                                        data-name="{{ $stage->name }}" data-bs-toggle="modal"
                                                        data-bs-target="#edit-modal"
                                                        href="{{ url("stage/edit/{$stage->id}") }}" title="Edit">
                                                        <i class="mdi mdi-lead-pencil"></i>
                                                    </a>


                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Add Stage -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Stage</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form method="post" action="{{ route('stage') }}" id="add-form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="Stage">New Stage</label>
                                        <input type="text" class="form-control" name="name" placeholder="Stage...   "
                                            required />
                                    </div>
                                    <div class="form-group">
                                        <label for="Stage">Order</label>
                                        <input type="number" class="form-control" name="order"
                                            placeholder="Order Stage...   " required />
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" form="add-form">Add</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Stage -->
                <div class="modal fade" id="edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Stage</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            @include('inc.errors')
                            <div class="modal-body">
                                <form method="post" action="{{ route('stage.update') }}" id="edit-form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Name </label>
                                            <input type="text" name="name" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Order </label>
                                            <input type="number" name="order" class="form-control">
                                        </div>

                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" form="edit-form" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- js -->
@endsection
@section('scripts')
    <script>
        $('.edit-btn').click(function() {
            let id = $(this).attr('data-id');
            let order = $(this).attr('data-order');
            let name = $(this).attr('data-name');


            $("#edit-form input[name|='id']").val(id)
            $("#edit-form input[name|='order']").val(order)
            $("#edit-form input[name|='name']").val(name)

        })
    </script>
@endsection
