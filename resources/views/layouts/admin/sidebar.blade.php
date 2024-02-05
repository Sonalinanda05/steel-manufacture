<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Steel Manufacture</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('backend/assets/img/user2-160x160.jpg ')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <h4 class="d-block text-light">Admin</h4>
            </div>
        </div>

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

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                {{-- <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li> --}}
                <li class="nav-item {{ request()->routeIs('admin.blog') ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.blog') }}" class="nav-link {{ request()->routeIs('admin.blog') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>Blogs</p>
                    </a>
                </li>

                <li class="nav-item {{ request()->routeIs('admin.services') ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.services') }}" class="nav-link {{ request()->routeIs('admin.services') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Products
                            
                        </p>
                    </a>
                   
                </li>

                <li class="nav-item {{ request()->routeIs('admin.products') ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.products') }}" class="nav-link {{ request()->routeIs('admin.products') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Products Images
                            
                        </p>
                    </a>
                   
                </li>

                <li class="nav-item {{ request()->routeIs('admin.contact') ? 'menu-open' : '' }}">
                    <a href="{{ route('admin.contact') }}" class="nav-link {{ request()->routeIs('admin.contact') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Contact Us
                            
                        </p>
                    </a>
                   
                </li>



              
            </ul>
        </nav>

    </div>

</aside>