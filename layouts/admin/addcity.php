<?php
include_once('../connection.php');
   $errormsg=$suggmsg="";
   if(isset($_POST['add'])){
    $area=$_POST['city'];
    $sql = "SELECT * FROM tbdivision WHERE name = '$area'";
    $result=mysqli_query($con,$sql);
    $num =mysqli_num_rows($result);
    if ($num==0){                         
       $sql = "INSERT INTO tbdivision VALUES ('$area')";
       if ($con->query($sql)){
         $suggmsg = "Area added succesfully";
       }
       else{
           echo "Error: ". $sql ."
       ". $con->error;
       }
       $con->close();
   }
   else{
    $errormsg = "Area that you have entered is already exist!";
    $con->close();
} 
   }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Validation Form</title>

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
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
      

       
        <?php include './Sidebar/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>ADD NEW LOCATION</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">ADD NEW LOCATION</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">NEW LOCATION</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                    
                                <form method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">City</label>
                                            <input type="text" name="city" class="form-control" placeholder="Enter New City">
                                        </div>
                                        <label class="m-t-10" style="color: red"><?php echo $errormsg;?></label>
          <label class="" style="color:green" role="alert">
            <?php echo $suggmsg;?>
                 </label>


                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary" name="add">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">

                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
   <!-- jQuery -->
   <script src="plugins/jquery/jquery.min.js"></script>
                
                <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
               
                <script>
                    $.widget.bridge('uibutton', $.ui.button)
                </script>
               
                <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
             
                <script src="plugins/chart.js/Chart.min.js"></script>
              
                <script src="plugins/sparklines/sparkline.js"></script>
              
                <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
                <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
              
                <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
              
                <script src="plugins/moment/moment.min.js"></script>
                <script src="plugins/daterangepicker/daterangepicker.js"></script>
             
                <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>                <script src="plugins/summernote/summernote-bs4.min.js"></script>
                <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                <script src="dist/js/adminlte.js"></script>
                <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>