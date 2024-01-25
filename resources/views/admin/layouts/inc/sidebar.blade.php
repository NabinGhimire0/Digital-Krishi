<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="brand-image img-circle elevation-3"
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
                {{-- if logged in  --}}
                @auth
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                @endauth
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
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/province') ? 'active' : '' }} || {{ request()->is('admin/province/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>
                            Province
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/province/create"
                                class="nav-link {{ request()->is('admin/province/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/province"
                                class="nav-link {{ request()->is('admin/province') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Province List
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/city') ? 'active' : '' }} || {{ request()->is('admin/city/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>
                            Cities
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/city/create"
                                class="nav-link {{ request()->is('admin/city/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/city" class="nav-link {{ request()->is('admin/city') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Cities List
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/subadmin') ? 'active' : '' }} || {{ request()->is('admin/subadmin/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-user"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/subadmin/create"
                                class="nav-link {{ request()->is('admin/subadmin/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/subadmin"
                                class="nav-link {{ request()->is('admin/subadmin') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/disease') ? 'active' : '' }} || {{ request()->is('admin/disease/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-disease"></i>
                        <p>
                            Disease
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/disease/create"
                                class="nav-link {{ request()->is('admin/disease/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/disease" class="nav-link {{ request()->is('disease') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Disease
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/seeds') ? 'active' : '' }} || {{ request()->is('admin/seeds/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-s"></i>
                        <p>
                            Seeds
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/seeds/create"
                                class="nav-link {{ request()->is('admin/seeds/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/seeds"
                                class="nav-link {{ request()->is('admin/seeds') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Seeds
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/pesticide') ? 'active' : '' }} || {{ request()->is('admin/pesticide/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-p"></i>
                        <p>
                            Pesticide
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/pesticide/create"
                                class="nav-link {{ request()->is('admin/pesticide/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/pesticide"
                                class="nav-link {{ request()->is('admin/pesticide') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Pesticide
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/fertilizer') ? 'active' : '' }} || {{ request()->is('admin/fertilizer/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-f"></i>
                        <p>
                            Fertilizer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/fertilizer/create"
                                class="nav-link {{ request()->is('admin/fertilizer/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/fertilizer"
                                class="nav-link {{ request()->is('admin/fertilizer') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Fertilizer
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/agroexpert') ? 'active' : '' }} || {{ request()->is('admin/agroexpert/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-a"></i>
                        <p>
                            Agro Expert
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/agroexpert/create"
                                class="nav-link {{ request()->is('admin/agroexpert/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/agroexpert"
                                class="nav-link {{ request()->is('admin/agroexpert') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Experts
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/product') ? 'active' : '' }} || {{ request()->is('admin/product/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-c"></i>
                        <p>
                            Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/product/create"
                                class="nav-link {{ request()->is('admin/product/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/product" class="nav-link {{ request()->is('admin/product') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Product List
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('admin/notice') ? 'active' : '' }} || {{ request()->is('admin/notice/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Notices
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/notice/create"
                                class="nav-link {{ request()->is('admin/notice/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/notice"
                                class="nav-link {{ request()->is('admin/notice') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Notice List
                                </p>
                            </a>
                        </li>
                    </ul>
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
