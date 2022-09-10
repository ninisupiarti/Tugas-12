@php

  function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
  }
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('public/Admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Shoes<b> Store</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('public/Admin') }}/dist/img/myprofile.jfif" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
           @if(Auth::check())
            {{request()->user()->nama}}
           @else
              Silahkan Login
           @endif
        </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{('dashboard')}}" class="nav-link {{checkRouteActive('dashboard')}}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                    Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{url('admin/produk')}}" class="nav-link {{checkRouteActive('produk')}}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Data Product
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href={{url('admin/produk')}} class="nav-link {{checkRouteActive('kategori')}}">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                    Kategori
                    </p>
                </a>
            </li>
          <li class="nav-item">
            <a href="{{url('admin/user')}}"class="nav-link {{checkRouteActive('user')}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{('admin/client')}}" class="nav-link {{checkRouteActive('client')}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Client
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{('admin/penjual')}}" class="nav-link {{checkRouteActive('penjual')}}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Penjual
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
