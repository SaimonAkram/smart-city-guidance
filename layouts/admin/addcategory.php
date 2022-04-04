<?php
include_once('../connection.php');

$categories='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=$_GET['id'];
	$res=mysqli_query($con,"select * from tbinstitution_types where id ='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories=$row['institutions_type'];
	}else{
		header('location:updatecat.php');
		die();
	}
}

if (isset($_POST['add'])) {
    $categories = $_POST['area'];
    $res =  mysqli_query($con, "select * from tbinstitution_types where institutions_type='$categories'");
    $check = mysqli_num_rows($res);
    if ($check > 0) {
        $msg = "Category that you have entered is already exists 🔥";
    } else {

        if (isset($_GET['id']) && $_GET['id'] != '') {
            mysqli_query($con, "update tbinstitution_types set institutions_type='$categories' where id='$id'");
        } else {
            mysqli_query($con, "INSERT INTO tbinstitution_types(institutions_type) VALUES('$categories')");
        }
        header('location:updatecat.php');
        die();
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
                            <h1>ADD INSTITUTION CATEGORY</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Add Institution Category </li>
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
                                    <h3 class="card-title">NEW INSTITUTION TYPE</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                    
                                <form method="POST">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Institutions</label>
                                            <input type="text" name="area" class="form-control" placeholder="Enter New Category" required value="<?php echo $categories?>">
                                        </div>
                                        <label class="m-t-10" style="color: red"><?php echo $msg;?></label>


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