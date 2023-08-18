<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: linear-gradient(180deg, #428c638a  0%, #2a7539c7 100%);">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink" style=""></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
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
      Meenu Master
    </p>
  </div>
  <!-- //hr  -->
  <!-- Nav Item - Pages Collapse Menu -->
  <hr class="sidebar-divider d-none d-md-block">


  <!-- Order -->
  <li class="nav-item">
    <a class="nav-link" href="">
      <i class="fas fa-cart-arrow-down" style=""></i>
      <span>Order</span></a>
  </li>
  <!-- Reviews -->
  <li class="nav-item">
    <a class="nav-link" href="">
      <i class="fas fa-star" style=""></i>
      <span>Reviews</span></a>
  </li>
  <!-- Unsuspend -->
  <li class="nav-item">
    <a class="nav-link" href="">
      <i class="fas fa-user-check" style=""></i>
      <span>Unsuspend</span></a>
  </li>
  <!-- Register -->
  <li class="nav-item">
    <a class="nav-link" href="">
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
  <li class="nav-item">
    <a class="nav-link" href="">
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
  <li class="nav-item">
    <a class="nav-link" href="">
      <i class="fas fa-file-alt" style=""></i>
      <span>Laporan</span></a>
  </li>
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