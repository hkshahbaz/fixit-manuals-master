@extends("layouts.adminapp")

@section("title", "Cars Model")

@section("content")
    <div class="row">
        <div class="col-md-12">
            <!-- Column selectors -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title text-semibold">Add Car Model </h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{route('carModels.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <fieldset>
                                    <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Car model details</legend>
                                    <div class="form-group col-md-6">
                                        <label>Select Car Brand</label>
                                        <select data-placeholder="Select Car Brand" name="brand_id"  class="form-control form-control-select2" data-fouc required>
                                            <option></option>
                                            <optgroup label="Car Brands">
                                                @foreach($brand as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->title}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Enter Car model:</label>
                                        <input type="text" class="form-control" placeholder="Enter car model" name="title" required>
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
                    <h5 class="panel-title text-semibold">Car Models List</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>
                <div style="padding-right:40px;">
                    <table style="margin-left: 40px;" class="table datatable-ajax" id="utable">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                </table>
                </div>
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
                ajax: '{!! route('carModels.index') !!}',
                columns: [
                    { data: 'title', name: 'title' },
                    { data: 'created_at', name: 'created_at' },
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

