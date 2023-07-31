<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include("includes.head")
<body>

@include("includes.navbar")

<!-- Page container -->
<div class="page-container @yield('has-detached-right-pace-done')">

    <!-- Page content -->
    <div class="page-content">
        <!-- main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">

                @include("includes.sidebar-user")
                @include("includes.sidebar")

            </div>
        </div>
        <!-- /main sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">
        @include("includes.header")

        <!-- Content area -->
            <div class="content">

                @yield("content")

                @include("includes.footer")
            </div>
            <!-- /Content area -->
        </div>
        <!-- /Main content -->
    </div>
</div>
@include("includes.messages")
</body>
</html>
