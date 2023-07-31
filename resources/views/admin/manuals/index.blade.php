@extends("layouts.adminapp")

@section("title", "Car Manuals")
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
    <!-- Theme JS files -->
    <script src="{{ asset('admin/global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script src="{{ asset('admin/global_assets/js/demo_pages/form_layouts.js') }}"></script>
    <script src="{{ asset('admin/assets/css/components.min.css') }}"></script>


    <!-- /theme JS files -->
@endpush
@section("content")
    <div class="row">
        <div class="col-md-12">
            <!-- Column selectors -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title text-semibold">Add Car Manual </h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="close"></a></li>
                        </ul>
                    </div>
                </div>
                <form  method="POST"  action="{{route('manuals.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <fieldset>
                                <legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Manual details</legend>

                                <div class="form-group col-md-4">
                                    <label>Select Car Brand</label>
                                    <select id="sel_brand" data-placeholder="Select Car Brand" name="brand"  class="form-control form-control-select2" data-fouc required>
                                        <option></option>
                                        <optgroup label="Car Brands">
                                            @foreach($brand as $brand)
                                                <option value="{{$brand->id}}">{{$brand->title}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group  col-md-4">
                                    <label>Select Car Model:</label>
                                    <select id="car_model" data-placeholder="Select Car Model" name="model" class="form-control form-control-select2" data-fouc required>
                                        <option value="0">

                                        </option>
{{--                                        <optgroup label="Car Model">--}}
{{--                                            @foreach($carmodel as $carmodel)--}}
{{--                                                <option value="{{$carmodel->id}}">{{$carmodel->title}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </optgroup>--}}
                                    </select>
                                </div>
                                <div class="form-group  col-md-4">
                                    <label>Select Car Year:</label>
                                    <select data-placeholder="Select Car Year" name="year" class="form-control form-control-select2" data-fouc required>
                                        <option></option>
                                        <optgroup label="Car Year">
                                            @foreach($year as $year)
                                                <option value="{{$year->id}}">{{$year->year}}</option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="form-group  col-md-4">
                                    <label>Select Status:</label>
                                    <select data-placeholder="Select Status" name="status_id" class="form-control form-control-select2" data-fouc required>
                                        <option></option>
                                        <optgroup label="Status">
                                            @foreach($status as $status)
                                                <option value="{{$status->id}}">{{$status->title}}</option>
                                            @endforeach

                                        </optgroup>
                                    </select>
                                </div>

                                <div class="form-group  col-md-4">
                                    <label>Attach Manual:</label>
                                    <input type="file" class="form-input-styled" name="manualFile" data-fouc required>
                                </div>
                            </fieldset>
                        </div>

                    </div>

                    <div class="text-right" style="margin-right: 20px;">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                    </div>
                    <br>
                    <br>
                </form>
            </div>
        </div>
<script>
    $(document).ready(function(){
        let x = '';
        $("#sel_brand").change(function(){
            var brandid = $(this).val();
            $.ajax({
                url: '{!! route('getmodel') !!}',
                type: 'post',
                data: {brand_id:brandid, _token:'{{ csrf_token() }}'},
                dataType: 'json',
                success:function(response){
                    if(response != null){
                        response.forEach(obj=>{
                            x += "<option value='"+obj.id+"'>"+obj.title+"</option>"
                        });
                    }
                    document.getElementById('car_model').innerHTML = x

                }
            });
        });
    });
</script>


        <div class="col-md-12">

            <!-- Column selectors -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title text-semibold">Cars Manual List</h5>
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

                        <th>brand</th>
                        <th>year</th>
                        <th>model</th>
                        <th>manual</th>
                        <th>Status</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                </table>
            </div>
            <!-- /column selectors -->
        </div>
    </div>

@endsection




@push("after-app-script")
    {{--    <script src="{{ asset('admin/global_assets/js/demo_pages/datatables_extension_buttons_html5.js') }}"></script>--}}
    <script>
        $(function() {
            $('#utable').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: '{!! route('manuals.index') !!}',
                columns: [
                    { data: 'brand', name: 'brand' },
                    { data: 'year', name: 'year' },
                    { data: 'model', name: 'model' },
                    { data: 'manualpdf', name: 'manualpdf' },
                    { data: 'status', name: 'status' },
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

