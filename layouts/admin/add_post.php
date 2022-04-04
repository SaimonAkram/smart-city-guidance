<?php
include_once('../connection.php');

$sql1="Select * from categories";
$res=mysqli_query($con,$sql1);


if (isset($_POST['submit'])) {

   $title      = trim($_POST['title']);
   $contents   = trim($_POST['contents']);
   $cat_id= $_POST['category'];


   $sql = "SELECT *  FROM posts WHERE title= '$title'";
   $result = mysqli_query($con, $sql);
   $num = mysqli_num_rows($result);
   if ($num == 0) {
       $sql = "INSERT INTO posts(title,contents,cat_id) VALUES('$title','$contents','$cat_id')";
       if ($con->query($sql)) {
         echo '<script>confirm("all information save successfully")</script>';
     } else {
         echo "Error: " . $sql . "
     " . $con->error;
     }

   } else {

       echo '<script>alert("Institution that you have entered is already exist!")</script>';
   }
}





// if(isset($_POST['title'],$_POST['contents'],$_POST['category'])){
    
   
//     $errors = array();
//     $title      = trim($_POST['title']);
//     $contents   = trim($_POST['contents']);
//     $cat_id= $_POST['category'];
    
//     if(empty($title)){
//      $errors[] = 'You need to supply a title';
//     }
//     else if(strlen($title)>255){
//      $errors[] = 'The title can not be longer than 255 characters';   
//     }
    
//     if(empty($contents)){
//      $errors[] = 'You need to supply some text';   
//     }
   

//     if(empty($errors)){
//         mysqli_query($con, "INSERT INTO posts(title,contents,cat_id) VALUES('$title,$contents,$cat_id')");
      
//     }
//         header("Location:Adindex.php?");
//         die();

// }

       

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
					<header class="entry-header">
		<?php
        if(isset($errors) && !empty($errors)){
            echo"<ul><li>",implode("</li><li>",$errors),"</li></ul>";
        }
        ?>
						<h2 class="entry-title">
							<h2>Add Post</h2>
						</h2> 				 
					
						<div class="entry-meta">
                  <form id="validate_form" class="p-8 php-email-form" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="form-row">
     <!-- <div>
        <label for='title'>Title</label>
         <input type='text' name='title' value='<?php if(isset($_POST['title'])) echo $_POST['title']; ?>' />
     </div> -->
      
     <div class="col-md-6 form-group">

<input type="text" class="form-control" id="institution_name"
    name="title" data-parsley-trigger="keyup" required
    placeholder="Add Title" />
<div class="validate"></div>

</div>


<div class="form-group col-md-12">
 <textarea class="form-control" name="contents" id="description" rows="5"
  required="" data-parsley-trigger="keyup" s
   placeholder="Write something about institutions"></textarea>
     <div class="validate"></div>
       </div>


     <!-- <div>
         <label for='contents'>Content</label>
         <textarea name='contents' cols=20 rows=10><?php if(isset($_POST['contents'])) echo $_POST['contents']; ?></textarea>
      </div>
     <div> -->
     <div class="col-md-6 form-group">
       <label for='category'>Category</label>
       <select name='category' class="form-control" >
        <?php
        while($row=mysqli_fetch_assoc($res)){
         ?>
         <option value='<?php echo $row['id'] ?>'><?php echo $row['name'] ?></option>
         <?php
        }
        ?>
       </select>
     </div>

      <div class="text-center col-md-12">
         <input type="submit" id="submit"
         name="submit" value="Submit" class="btn btn-success w-25" /></div>
     </form>
						</div> 
					 
					</header> 
	
					
					<div class="entry-content">
						<p><!--insert here--></p>
					</div> 


				</article> <!-- end entry -->

   		</div> <!-- end main -->

   		

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