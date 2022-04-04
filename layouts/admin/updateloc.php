<?php
include_once('../connection.php');

   if(isset($_GET['type']) && $_GET['type']!=''){
    $type=$_GET['type'];
     if($type=='delete'){
         $id=$_GET['id'];
         $delete_sql="delete from tbareadetails where id ='$id'";
         mysqli_query($con,$delete_sql);
     }
 }
 
         $sql="Select * from tbareadetails order by Area asc";
         $res=mysqli_query($con,$sql);

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
    <link rel="stylesheet" href="../../css/style1.css">
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
                            <h1>UPDATE INSTITUTION LOCATION</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Update Institution location </li>
                                
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
                                    <h3 class="box-link"><a href="addcategory.php">ADD Institution Location</a> </h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                    
                    <div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">ID</th>
							   <th>Divison</th>
                               <th>Area</th>
							   <th>PostOffice</th>
                               <th>Postcode</th>
                               <th>Image</th>
                               <!-- <th>Map</th> -->
                               <!-- <th>Description</th> -->
                               <th>Update</th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td><?php echo $row['id']?></td>
                               <td><?php echo $row['Division']?></td>
							   <td><?php echo $row['Area']?></td>
                               <td><?php echo $row['postOffice']?></td>
                               <td><?php echo $row['postCode']?></td>
                               <td><?php echo $row['imagePath']?></td>
                               <!-- <td><?php echo $row['mapurl']?></td> -->
                               <!-- <td><?php echo $row['description']?></td> -->
							   <td>
								<?php
								// echo "<span class='badge badge-edit'><a href='./addAreaDetails.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
								
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>


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