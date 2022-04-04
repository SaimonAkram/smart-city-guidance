<?php
include_once('../connection.php');
//$posts = (isset($_GET['id'])) ? get_posts($_GET['id']) : get_posts();
// $posts = get_posts((isset($_GET['id']))? $_GET['id'] : null); 
if(isset($_GET['id']) && $_GET['id']!=''){
   $posts=$_GET['id'];
   
}

$sql="Select * from posts";
$res=mysqli_query($con,$sql);

$sql="Select * from categories";
$category=mysqli_query($con,$sql);

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
                     <li style="border-bottom: 5px solid gray;"><a href="./admin.php">Manage</a></li>
                     <li><a href="../logout.php">LogOut</a></li>
                  </ul> <!-- end #nav -->

               </div>


               <!-- Content
   ================================================== -->
               <div id="content-wrap">

                  <div class="row">
   		<div id="main" class="eight columns">

	   		<article class="entry">
		<?php
     while($row=mysqli_fetch_assoc($res)){
      ?>
					<header class="entry-header">

						<h2 class="entry-title">
							<h2><a href='index.php?id=<?php echo $row['id']; ?>' ><?php echo $row['title']; ?></a></h2>
						</h2> 				 
					
						<div class="entry-meta">
							<ul>
								<li> <?php echo date('d-m-y h:i:s',strtotime($row['date_posted'])); ?></li>
								<span class="meta-sep">&bull;</span>								
								<li><a href="#" title="" rel="category tag">
								<span class="meta-sep">&bull;</span>
								<li><a href='./delete_post.php?id=<?php echo $row['id']; ?>' ><font color="red">Delete This Post</font></a></li>&nbsp;||
								<li><a href='./edit_post.php?id=<?php echo $row['id']; ?>' ><font color="blue">Edit This Post</font></a></li>
							</ul>
						</div> 
					 
					</header> 
	
					
					<div class="entry-content">
						<p><?php echo nl2br($row['contents']); ?></p>
					</div> 
									 <?php   
     }
     ?>

				</article> <!-- end entry -->

   		</div> <!-- end main -->

   		<div id="sidebar" class="four columns">

   			<div class="widget widget_search">
                  <h3>Search</h3> 
                  <form action="#">

                     <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
                     <input type="submit" value="" class="submit-search">

                  </form>
               </div>

   			<div class="widget widget_categories group">
   				<h3>Categories.</h3> 
   				<?php
     while($r=mysqli_fetch_assoc($category)){
     ?>
      <p><a href="manage_category.php?id=<?php echo $r['id'];?>"><?php echo $r['name']; ?></a>
     <?php  
     }
     ?>
			


           
   			
   		</div> <!-- end sidebar -->

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->
   

   <!-- Footer
   ================================================== -->
  


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
            <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
            <script src="js/main.js"></script>
</body>

</html>