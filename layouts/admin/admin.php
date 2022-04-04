<?php
include_once('../connection.php');

$sql = "Select * from categories";
$res = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/media-queries.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <style>

.btn-grad {background-image: linear-gradient(to right, #02AAB0 0%, #00CDAC  51%, #02AAB0  100%)}
         .btn-grad {
            color: white;    
            padding: 10px 23px;
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
                 
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          .btn-grad:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
         
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <?php include './Sidebar/sidebar.php'; ?>
    <div class="wrapper">



        <!-- Main Sidebar Container -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">



                    <div class="row">

                        <div class="header-content twelve columns">

                            <h1 id="logo-text"><a href="Adindex.php" title="">Your Blog!</a></h1>
                            <p id="intro">Write About Your Journey...........</p>

                        </div>

                    </div>



                    <div class="row">

                        <ul id="nav" class="nav">
                            <li class=""><a href="Adindex.php">Home</a></li>
                            <li style="border-bottom: 5px solid gray;"><a href="admin.php">Manage</a></li>
                            <li><a href="../logout.php">LogOut</a></li>
                        </ul> <!-- end #nav -->

                    </div>


                    <!-- Content
================================================== -->
                    <div id="content-wrap">

                        <div class="row">

                            <div id="main" class="eight columns">

                                <article class="entry">
                                    <header class="entry-header">

                                        <h2 class="entry-title">
                                            <h2></h2>
                                        </h2>

                                        <div class="d-flex flex-row ">

                                            <button class="btn-grad " type='button' value='Add Category'><a href="./add_category.php" style="color:white;">Add Category</a></button>
                                            <button class="btn-grad mx-1" type='button' value='Add Category'><a href="add_post.php" style="color:white;">Add Post</a></button>
                                            <button class="btn-grad mx-1" type='button' value='Add Category'><a href="category_list.php" style="color:white;">Delete Categories</a></button>
                                            <button class="btn-grad" type='button' value='Add Category'><a href="./manage_post.php" style="color:white;">Manage Post</a></button>


                                        </div>

                                    </header>


                                    <div class="entry-content">
                                        <p>
                                            <!--insert here-->
                                        </p>
                                    </div>


                                </article> <!-- end entry -->

                            </div> <!-- end main -->

                            <div id="sidebar" class="four columns">


                                <div class="widget widget_categories group">
                                    <h3>Categories.</h3>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($res)) { ?>

                                        <p><a href="manage_category.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
                                        <?php
                                    }
                                        ?>
                                </div>



                            </div> <!-- end sidebar -->

                        </div> <!-- end row -->

                    </div> <!-- end content-wrap -->



                    <!-- /.control-sidebar -->
                </div>
            </section>
            <!-- ./wrapper -->

            <!-- jQuery -->
            <script src="plugins/jquery/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>

            </script>
            <!-- Bootstrap 4 -->
            <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- ChartJS -->
            <script src="plugins/chart.js/Chart.min.js"></script>
            <!-- Sparkline -->
            <script src="plugins/sparklines/sparkline.js"></script>
            <!-- JQVMap -->
            <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
            <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
            <!-- daterangepicker -->
            <script src="plugins/moment/moment.min.js"></script>
            <script src="plugins/daterangepicker/daterangepicker.js"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Summernote -->
            <script src="plugins/summernote/summernote-bs4.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="dist/js/adminlte.js"></script>
            <!-- AdminLTE for demo purposes -->
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="dist/js/pages/dashboard.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script>
                window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')
            </script>
            <!-- <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
            <script src="js/main.js"></script> -->
</body>

</html>