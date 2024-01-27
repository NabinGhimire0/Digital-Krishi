<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
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
                    <a href="/dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <i class="fa-solid fa-gauge"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/posts/create" class="nav-link {{ request()->is('posts/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-plus"></i>
                        <p>
                            Create Posts
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/orders" class="nav-link {{ request()->is('orders') ? 'active' : '' }}">
                        <i class="fa-brands fa-first-order"></i>
                        <p>
                            Orders
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('marketplace') ? 'active' : '' }} || {{ request()->is('marketplace/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-check"></i>
                        <p>
                            Market Place
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/marketplace/create"
                                class="nav-link {{ request()->is('marketplace/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Add to market place
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/marketplace" class="nav-link {{ request()->is('marketplace') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    View Products
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('equipment') ? 'active' : '' }} || {{ request()->is('equipment/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-tractor"></i>
                        <p>
                            Farming Equipment
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/equipment/create"
                                class="nav-link {{ request()->is('equipment/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Add
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/equipment" class="nav-link {{ request()->is('equipment') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    View Equipment
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#"
                        class="nav-link {{ request()->is('pickup') ? 'active' : '' }} || {{ request()->is('pickup/create') ? 'active' : '' }}">
                        <i class="fa-solid fa-truck-pickup"></i>
                        <p>
                            Pickup Request
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/pickup/create"
                                class="nav-link {{ request()->is('pickup/create') ? 'active' : '' }}">
                                <i class="fa-solid fa-plus"></i>
                                <p>
                                    Create request
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pickup" class="nav-link {{ request()->is('pickup') ? 'active' : '' }}">
                                <i class="fa-solid fa-table"></i>
                                <p>
                                    Request Status
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
