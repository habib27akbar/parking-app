@include('partials.navbar')
<style>
    [class*="sidebar-dark-"] {
        background-color: #429bb8;
    }

    [class*="sidebar-dark-"] .sidebar a {
        color: aliceblue;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: aliceblue;
        background-color: black;
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
        background-color: black;
        color: aliceblue;
    }

    [class*="sidebar-dark-"] .nav-header {
        background-color: inherit;
        color: aliceblue;
    }

    [class*="sidebar-dark-"] .nav-sidebar>.nav-item.menu-open>.nav-link,
    [class*="sidebar-dark-"] .nav-sidebar>.nav-item:hover>.nav-link,
    [class*="sidebar-dark-"] .nav-sidebar>.nav-item>.nav-link:focus {
        background-color: black;
        color: aliceblue;
    }

    [class*="sidebar-dark-"] .nav-treeview>.nav-item>.nav-link {
        color: aliceblue;
    }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <center>
          
            <font style="color: black;">Parking App</font>
            
        </center>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div style="width:3.1rem;" class="image">
               
                <img src="{{ url('/public/img/default.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('/admin/laporan') }}" class="nav-link {{ Request::segment(2) == 'laporan' ? 'active':'' }}">
                        <i class="nav-icon fas fa-chart-bar"></i>

                        <p>
                            Laporan

                        </p>
                    </a>
                </li>
                
                

              



                


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>