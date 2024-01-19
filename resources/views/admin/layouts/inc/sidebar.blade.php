<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Digital Krishi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#"
                        class="nav-link {{ request()->is('province') ? 'active' : '' }} || {{ request()->is('province/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>
                            Province
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/province/create"
                                class="nav-link {{ request()->is('province/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/province" class="nav-link {{ request()->is('province') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Province List
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#"
                        class="nav-link {{ request()->is('city') ? 'active' : '' }} || {{ request()->is('city/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>
                            Cities
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/city/create" class="nav-link {{ request()->is('city/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/city" class="nav-link {{ request()->is('city') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Cities List
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#"
                        class="nav-link {{ request()->is('subadmin') ? 'active' : '' }} || {{ request()->is('subadmin/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/subadmin/create" class="nav-link {{ request()->is('subadmin/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/subadmin" class="nav-link {{ request()->is('subadmin') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-block btn-danger">logout</button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
