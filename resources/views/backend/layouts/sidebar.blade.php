<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(180deg, #428c638a  0%, #2a7539c7 100%);">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink" style=""></i>
    </div>

    @if (Auth::user()->role == 'superadmin')
    <div class="sidebar-brand-text mx-3">SuperAdmin</div>
    @elseif (Auth::user()->role == 'admin')
    <div class="sidebar-brand-text mx-3">Admin</div>
    @endif
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <li class="nav-item {{Request::is('superadmin/dashboard') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('superadmin.dashboard')}}">
      <i class="fas fa-fw fa-tachometer-alt" style=""></i>
      <span>Dashboard</span></a>
  </li>
  <!-- akses super admin  -->
  @if (Auth::user()->role == 'superadmin')
  <li class="nav-item {{Request::is('superadmin/orders') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('orders.index')}}">
      <i class="fas fa-cart-arrow-down" style=""></i>
      <span>Order</span></a>
  </li>
  <!-- Reviews -->
  <li class="nav-item {{Request::is('superadmin/reviews') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('reviews.index')}}">
      <i class="fas fa-star" style=""></i>
      <span>Reviews</span></a>
  </li>
  <!-- Unsuspend -->
  <li class="nav-item {{Request::is('superadmin/unsuspend') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('unsuspend.index')}}">
      <i class="fas fa-user-check" style=""></i>
      <span>Unsuspend</span></a>
  </li>
  <!-- Register -->
  <li class="nav-item {{Request::is('superadmin/register') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('adminRegister.index')}}">
      <i class="fas fa-user-plus" style=""></i>
      <span>Register</span></a>
  </li>

  <!-- data customers  -->
  <li class="nav-item {{Request::is('superadmin/customers') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('customers.index')}}">
      <i class="fas fa-users" style=""></i>
      <span>Customers</span></a>
  </li>
  <!-- //data terapis icon database  -->
  <li class="nav-item {{Request::is('admin/terapis') ? 'active' : ''}}">
    {{-- <a class="nav-link" href="{{route('terapis.index')}}"> --}}
    <a class="nav-link" href="#">
      <i class="fas fa-database" style=""></i>
      <span>Terapis</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Heading -->
  <div class="sidebar-heading">
    <p style="color: #15311e;">

      Reports
    </p>
  </div>

  <!-- Laporan -->
  <li class="nav-item {{Request::is('admin/reports') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('reports.index')}}">
      <i class="fas fa-file-alt" style=""></i>
      <span>Laporan</span></a>
  </li>

  <!-- akses admin  -->
  @elseif (Auth::user()->role == 'admin')
  <!-- Order -->
  <li class="nav-item {{Request::is('admin/dashboard') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('admin.dashboard')}}">
      <i class="fas fa-fw fa-tachometer-alt" style=""></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading" style="margin-bottom: 5px;">
    <p style="color: #15311e;">
      Menu Master
    </p>
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Order -->
  <li class="nav-item {{Request::is('admin/orders') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('orders.index')}}">
      <i class="fas fa-cart-arrow-down" style=""></i>
      <span>Order</span></a>
  </li>
  <!-- Reviews -->
  <li class="nav-item {{Request::is('admin/reviews') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('reviews.index')}}">
      <i class="fas fa-star" style=""></i>
      <span>Reviews</span></a>
  </li>
  <!-- Unsuspend -->
  <li class="nav-item {{Request::is('admin/unsuspend') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('unsuspend.index')}}">
      <i class="fas fa-user-check" style=""></i>
      <span>Unsuspend</span></a>
  </li>
  <!-- Register -->
  <li class="nav-item {{Request::is('admin/register') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('adminRegister.index')}}">
      <i class="fas fa-user-plus" style=""></i>
      <span>Register</span></a>
  </li>

  <!-- data customers  -->
  <li class="nav-item {{Request::is('admin/customers') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('customers.index')}}">
      <i class="fas fa-users" style=""></i>
      <span>Customers</span></a>
  </li>
  <!-- //data terapis icon database  -->
  <li class="nav-item {{Request::is('admin/terapis') ? 'active' : ''}}">
    {{-- <a class="nav-link" href="{{route('terapis.index')}}"> --}}
    <a class="nav-link" href="#">
      <i class="fas fa-database" style=""></i>
      <span>Terapis</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Heading -->
  <div class="sidebar-heading">
    <p style="color: #15311e;">

      Reports
    </p>
  </div>

  <!-- Laporan -->
  <li class="nav-item {{Request::is('admin/reports') ? 'active' : ''}}">
    <a class="nav-link" href="{{route('reports.index')}}">
      <i class="fas fa-file-alt" style=""></i>
      <span>Laporan</span></a>
  </li>
  @endif

  <!-- General settings -->
  <li class="nav-item">
    <a class="nav-link" href="">
      <i class="fas fa-cog" style=""></i>
      <span>Settings</span></a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>