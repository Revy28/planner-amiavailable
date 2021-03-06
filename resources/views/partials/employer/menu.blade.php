<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{Route::is('employer.') ? 'active' : '' }} ">
        <a class="nav-link" href="{{route('employer.')}}">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Planning</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">Management</div>

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item {{Route::is('employer.employees.index') ? 'active' : '' }} ">
        <a class="nav-link" href="{{route('employer.employees.index')}}">
            <i class="fas fa-users"></i>
            <span>Werknemers</span></a>
    </li>
    {{-- <li class="nav-item {{Route::is('employer.groups.index') ? 'active' : '' }} ">--}}
    {{-- <a class="nav-link" href="{{route('employer.groups.index')}}">--}}
    {{-- <i class="fas fa-layer-group"></i>--}}
    {{-- <span>Groepen</span></a>--}}
    {{-- </li>--}}

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
