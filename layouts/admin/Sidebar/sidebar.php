<?php
 session_start();
  if ($_SESSION['name']=="Saimon Akram"){?>
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo $_SESSION['pic']?>" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">
                        <?php echo $_SESSION['name']?>
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
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Blog
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../admin/manage_post.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Blog</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="./dashboard.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="./addcategory.php" class="nav-link">
                        <i class="fas fa-location-arrow"></i>
                        <p>ADD INSTITUTIONS CATEGORY</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./addAreaDetails.php" class="nav-link">
                        <i class="fas fa-street-view"></i>
                        <p>ADD AREA DETAILS</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./addins.php" class="nav-link">
                        <i class="fas fa-street-view"></i>
                        <p>ADD INSTITUTION DETAILS</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./addtourist_area.php" class="nav-link">
                        <i class="fas fa-street-view"></i>
                        <p>ADD TOURIST AREA</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./updatecat.php" class="nav-link">
                        <i class="fas fa-street-view"></i>
                        <p>UPDATE INSTITUTION CATEGORY</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./updateloc.php" class="nav-link">
                        <i class="fas fa-street-view"></i>
                        <p>UPDATE LOCATION</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./updatecategorydeails.php" class="nav-link">
                        <i class="fas fa-street-view"></i>
                        <p>UPDATE INSTITUTION DETAILS</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./updatetouristarea.php" class="nav-link">
                        <i class="fas fa-street-view"></i>
                        <p>UPDATE TOURIST AREA</p>
                    </a>
                </li>

                <li class="nav-item bottom-0">
                    <a href="../logout.php" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>

                </li>

            </ul>
        </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <?php }?>