<!-- Main navigation -->
<div class="sidebar-category sidebar-category-visible">
    <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">
            <!-- Main -->
            <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
            <li class="{{ Request::is(['adminhome']) ? 'active' : '' }}"><a href="{{ route('adminhome') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>

            <!-- User Management -->
            <li class="{{ Request::is(['users/*', 'users']) ? 'active' : '' }}">
                <a href="{{ route('users.index') }}"><i class="icon-user-tie"></i> <span>User Management</span></a>
            </li>
            <!-- /User Management -->
            <!-- Car Brand -->
            <li class="{{ Request::is(['carBrand/*', 'carBrand']) ? 'active' : '' }}">
                <a href="{{ route('carBrand.index') }}"><i class="fa fa-car"></i> <span>Car Brands</span></a>
            </li>
            <!-- /Car Brand -->
            <!-- Car Model -->
            <li class="{{ Request::is(['carModels/*', 'carModels']) ? 'active' : '' }}">
                <a href="{{ route('carModels.index') }}"><i class="fa fa-car"></i> <span>Car Models</span></a>
            </li>
            <!-- /Car Model -->

            <!-- Car year -->
            <li class="{{ Request::is(['year/*', 'year']) ? 'active' : '' }}">
                <a href="{{ route('year.index') }}"><i class="fa fa-calendar-check-o"></i> <span>Years</span></a>
            </li>
            <!-- /Car year -->
            <!-- Car Manual -->
            <li class="{{ Request::is(['manuals/*', 'manuals']) ? 'active' : '' }}">
                <a href="{{ route('manuals.index') }}"><i class="fa fa-car"></i> <span>Manuals</span></a>
            </li>
            <!-- /Car Manual -->
            <!-- contact -->
            <li class="{{ Request::is(['contact/*', 'contact']) ? 'active' : '' }}">
                <a href="{{ route('contact.index') }}"><i class="fa fa-phone"></i> <span>Contact</span></a>
            </li>
            <!-- /contact -->
{{--            <!-- Labours Management -->--}}
{{--            <li class="{{ Request::is(['labours/*', 'labours']) ? 'active' : '' }}">--}}
{{--                <a href="{{ route('labours.index') }}"><i class="fa fa-users"></i> <span>Labours Management</span></a>--}}
{{--            </li>--}}
{{--            <!-- /Labours Management -->--}}

{{--            <!-- Labours Management -->--}}
{{--            <li class="{{ Request::is(['reportProblem/*', 'reportProblem']) ? 'active' : '' }}">--}}
{{--                <a href="{{ route('reportProblem.index') }}"><i class="fa fa-users"></i> <span>Report Problem Management</span></a>--}}
{{--            </li>--}}
{{--            <!-- /Labours Management -->--}}

{{--            <!-- Selling Type Management -->--}}
{{--            <li class="{{ Request::is(['selling_types/*', 'selling_types']) ? 'active' : '' }}">--}}
{{--                <a href="{{ route('selling_types.index') }}"><i class="icon-cart"></i> <span>Selling Types</span></a>--}}
{{--            </li>--}}
{{--            <!-- /Selling Type Management -->--}}
{{--            <!-- Weight Unit Management -->--}}
{{--            <li class="{{ Request::is(['weight_units/*', 'weight_units']) ? 'active' : '' }}">--}}
{{--                <a href="{{ route('weight_units.index') }}"><i class="icon-unicode"></i> <span>Weight Unit</span></a>--}}
{{--            </li>--}}
{{--            <!-- /Weight Units Management -->--}}
{{--            <!-- statuses Management -->--}}
{{--            <li class="{{ Request::is(['statuses/*', 'statuses']) ? 'active' : '' }}">--}}
{{--                <a href="{{ route('statuses.index') }}"><i class="icon-user-block"></i> <span>Status</span></a>--}}
{{--            </li>--}}
{{--            <!-- /statuses Management -->--}}

{{--            <!-- policy Management -->--}}
{{--            <li class="{{ Request::is(['policies/*', 'policies']) ? 'active' : '' }}">--}}
{{--                <a href="{{ route('policies.index') }}"><i class="icon-user-block"></i> <span>Polices</span></a>--}}
{{--            </li>--}}
{{--            <!-- /policy Management -->--}}
{{--            <!-- Farm Management -->--}}
{{--            <li class="{{ Request::is(['farms/*', 'farms']) ? 'active' : '' }}">--}}
{{--                <a href="{{ route('farms.index') }}"><i class="icon-user-tie"></i> <span>Farm</span></a>--}}
{{--            </li>--}}
{{--            <!-- /Farm Management -->--}}

{{--            <!-- Farm Management -->--}}
{{--            <li class="{{ Request::is(['faqs/*', 'faqs']) ? 'active' : '' }}">--}}
{{--                <a href="{{ route('faqs.index') }}"><i class="icon-user-tie"></i> <span>Faq</span></a>--}}
{{--            </li>--}}
{{--            <!-- /Farm Management -->--}}

        </ul>
    </div>
</div>
<!-- /main navigation -->
