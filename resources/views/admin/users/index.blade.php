@extends("layouts.adminapp")

@section("title", "User Management")

@section("content")
    <div class="row">

        <div class="col-md-12">
            <!-- Column selectors -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title text-semibold">Add User </h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('users.store')}}" method="POST" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <fieldset>
                                    <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> User details</legend>

                                    <div class="form-group col-md-6">
                                        <label>Enter Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter name" name="name" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Enter Email :</label>
                                        <input type="email" class="form-control" placeholder="Enter email" name="email"  autocomplete="false" required>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Enter Password:</label>
                                        <input type="password" class="form-control" placeholder="Enter password" name="password" autocomplete="false" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Confirm Password:</label>
                                        <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="text-right " style="margin-right: 20px;">
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                        <br>
                        <br>
                    </form>
                </div>
            </div>

        </div>








        <div class="col-md-12">
            <!-- Column selectors -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title text-semibold">List Users </h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>

                <table class="table datatable-ajax" id="utable">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created at</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <!-- /column selectors -->
        </div>
    </div>
{{--    @include("admin.users.detail-modal")--}}
@endsection


@push("before-app-script")
    <!-- Theme JS files -->
    <script src="{{ asset('admin/global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script
        src="{{ asset('admin/global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js') }}"></script>
    <script
        src="{{ asset('admin/global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js') }}"></script>
    <script
        src="{{ asset('admin/global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/plugins/tables/datatables/extensions/buttons.min.js') }}"></script>
@endpush

@push("after-app-script")
    {{--    <script src="{{ asset('admin/global_assets/js/demo_pages/datatables_extension_buttons_html5.js') }}"></script>--}}
    <script>
        $(function() {
            $('#utable').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: '{!! route('users.index') !!}',
                columns: [
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'status', name: 'status' },
                    { data: 'actions', name: 'actions' }
                ],
                buttons: {
                    dom: {
                        button: {
                            className: 'btn btn-light'
                        }
                    },
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'csvHtml5',
                        'pdfHtml5'
                    ]
                }
            });
        });
    </script>
@endpush

