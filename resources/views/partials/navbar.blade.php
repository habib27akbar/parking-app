<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-gray-dark">
    <!-- Left navbar links -->

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <style>
        img.img-size-40 {
            width: 40px;
            height: 40px;
        }
    </style>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">




        <!-- User Navbar -->
       

        
        

        <li class="nav-item dropdown">
            <a class="nav-link d-flex align-items-center" data-toggle="dropdown" href="#">
                <img src="{{ url('/public/img/default.png') }}" alt="User Avatar" class="img-size-40 img-circle mr-2">
                {{ auth()->user()->name }}

            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="card card-widget widget-user margin-auto">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-user">

                        <h5 class="widget-user-desc"> {{ auth()->user()->name }}</h5>
                    </div>
                    <div class="widget-user-image">
                        <img style="position: relative; bottom:35px;" class="img-circle elevation-2" src="{{ url('/public/img/default.png') }}" alt="User Avatar">
                    </div>
                    <form action="{{ url('/logout') }}" method="POST" class="mt-2">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-block btn-primary">
                            <p>
                                 <i class="nav-icon fas fa-sign-out-alt"></i>
                                Log Out

                            </p>
                        </button>
                    </form>
                    
                </div>
            </div>
        </li>

        <!-- End User Navbar -->
    </ul>


</nav>
<!-- /.navbar -->