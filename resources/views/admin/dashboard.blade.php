@extends("layouts.adminapp")
@section("title", "Dashboard")
@section("content")
    <!-- Quick stats boxes -->
    <div class="row">
        <div class="col-lg-3">
            <!-- Members online -->
            <div class="panel bg-teal-400">
                <div class="panel-body">
                    <h3 class="no-margin">&nbsp;{{$manual}}
                    </h3>
                    Total Manual
                </div>
                <div class="container-fluid">
                    <div id="members-online"></div>
                </div>
            </div>
            <!-- /members online -->
        </div>
        <div class="col-lg-3">
            <!-- Today's revenue -->
            <div class="panel bg-green-400" >
                <div class="panel-body">
                    <h3 class="no-margin">&nbsp;{{$brand}}</h3>
                    Total Car Brands
                </div>
                <div id="today-revenue"></div>
            </div>
            <!-- /today's revenue -->
        </div>
        <div class="col-lg-3">
            <!-- Today's revenue -->
            <div class="panel bg-teal-400" >
                <div class="panel-body">
                    <h3 class="no-margin">&nbsp;{{$user}}</h3>
                    Total Users
                </div>
                <div id="today-revenue"></div>
            </div>
            <!-- /today's revenue -->
        </div>
        <div class="col-lg-3">
            <!-- Today's revenue -->
            <div class="panel bg-green-400" >
                <div class="panel-body">
                    <h3 class="no-margin">&nbsp;{{$contact}}</h3>
                    Total Contacts
                </div>
                <div id="today-revenue"></div>
            </div>
            <!-- /today's revenue -->
        </div>
    </div>
    <!-- /quick stats boxes -->
@endsection
