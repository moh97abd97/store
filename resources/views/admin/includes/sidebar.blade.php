<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->username }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <!-- <li class="nav-item has-treeview menu-open"> -->
          <li class="nav-item has-treeview">
            <a href="" class="nav-link active">
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link active">
                  <p>View Users</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.create') }}" class="nav-link">
                  <p>Create User</p>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a href="{{ route('user.edit') }}" class="nav-link">
                  <p>Edit User</p>
                </a>
              </li> --}}
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="" class="nav-link active">
              <p>
                Categories
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link active">
                  <p>View Catgories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('category.create') }}" class="nav-link">
                  <p>Create Category</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>