<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: #ffff;">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
    <div class="sidebar-brand-icon rotate-n-15">
      <!-- icon  -->
      <img src="{{asset('frontend/assets/image/logo-70.png')}}" alt="" width="50px">

      <!-- <i class="fas fa-laugh-wink" style=""></i> -->
    </div>

    @if (Auth::user()->role == 'superadmin')
    <div class="sidebar-brand-text mx-3">SuperAdmin</div>
    @elseif (Auth::user()->role == 'admin')
    <div class="sidebar-brand-text mx-3">Admin</div>
    @endif
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->


  @if (Auth::user()->role == 'superadmin')
  <li class="nav-item {{Request::is('superadmin/dashboard') ? 'active' : ''}}">
    <a class="nav-link" href="{{url('superadmin.dashboard')}}">
      <i class="fas fa-fw fa-tachometer-alt" style=""></i>
      <span>Dashboard</span></a>
  </li>

  <!-- data customers  -->


  <!-- Heading -->
  <div class="sidebar-heading" style="margin-bottom: 5px;">
    <p style="color: #15311e;">
      Menu Master
    </p>
  </div>


  <!-- Nav Item - Pages Collapse Menu -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Order -->
  <li class="nav-item {{Request::is('superadmin/orders') ? 'active' : ''}}">
    <a class="nav-link" href="{{url('orders.index')}}">
      <i class="fas fa-cart-arrow-down" style=""></i>
      <span>Order</span></a>
  </li>
  <!-- Reviews -->
  <li class="nav-item {{Request::is('superadmin/reviews') ? 'active' : ''}}">
    <a class="nav-link" href="{{url('reviews.index')}}">
      <i class="fas fa-star" style=""></i>
      <span>Reviews</span></a>
  </li>
  <!-- Unsuspend -->
  <li class="nav-item {{Request::is('superadmin/unsuspend') ? 'active' : ''}}">
    <a class="nav-link" href="{{url('unsuspend.index')}}">
      <i class="fas fa-user-check" style=""></i>
      <span>Unsuspend</span></a>
  </li>
  <!-- Admin -->
  <li class="nav-item {{Request::is('superadmin/register') ? 'active' : ''}}">
    <a class="nav-link" href="{{url('admin.index')}}">
      <i class="fas fa-user-plus" style=""></i>
      <span>Admin</span></a>
  </li>

  <!-- data customers  -->
  <li class="nav-item {{Request::is('superadmin/customers') ? 'active' : ''}}">
    <a class="nav-link" href="{{url('customers.index')}}">
      <i class="fas fa-users" style=""></i>
      <span>Customers</span></a>
  </li>
  <!-- //data terapis icon database  -->
  <li class="nav-item {{Request::is('superadmin/terapis') ? 'active' : ''}}">
    {{-- <a class="nav-link" href="{{url('terapis.index')}}"> --}}
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
  <li class="nav-item {{Request::is('superadmin/reports') ? 'active' : ''}}">
    <a class="nav-link" href="{{url('reports.index')}}">
      <i class="fas fa-file-alt" style=""></i>
      <span>Laporan</span></a>
  </li>

  <!-- akses admin  -->
  @elseif (Auth::user()->role == 'admin')

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