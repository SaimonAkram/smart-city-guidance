<?php
include_once('../connection.php');


$sql1 = "Select * from categories";
$res1 = mysqli_query($con, $sql1);

if (isset($_GET['id'])) {
   $post = $_GET['id'];
   $res = mysqli_query($con, "select * from posts where id ='$post'");
   $check = mysqli_num_rows($res);
   if ($check > 0) {
      $row = mysqli_fetch_assoc($res);
      $title = $row['title'];
      $contents = $row['contents'];
      $cat_id = $row['cat_id'];
   } else {
      header('location:manage_post.php');
      die();
   }
}


if (isset($_POST['submit'])) {

   $title      = trim($_POST['title']);
   $contents   = trim($_POST['contents']);
   $cat_id = $_POST['category'];


   $sql = "UPDATE posts SET `cat_id` = '$cat_id', `title` = '$title', `contents` = '$contents' WHERE id='$post'";
   if ($con->query($sql)) {
      echo '<script>confirm("all information Update successfully")</script>';
   } else {
      echo "Error: " . $sql . "
     " . $con->error;
   }
}

//  else {

//     echo '<script>alert("Institution that you have entered is already exist!")</script>';
// }










// if(isset($_POST['title'],$_POST['contents'],$_POST['category'])){

//     $errors = array();

//     $title      = trim($_POST['title']);
//     $contents   = trim($_POST['contents']);

//     if(empty($title)){
//      $errors[] = 'You need to supply a title';
//     }
//     else if(strlen($title)>255){
//      $errors[] = 'The title can not be longer than 255 characters';   
//     }

//     if(empty($contents)){
//      $errors[] = 'You need to supply some text';   
//     }
//     if(!category_exists('id',$_POST['category'])){
//     $errors[] = 'That category does not exists';   
//     }

//     if(empty($errors)){
//         edit_post($_GET['id'],$title,$contents,$_POST['category']);

//         header("Location:index.php?id={$post[0]['post_id']}");
//         die();
//     }
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
      .btn-grad {
         background-image: linear-gradient(to right, #02AAB0 0%, #00CDAC 51%, #02AAB0 100%)
      }

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
         background-position: right center;
         /* change the direction of the change here */
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
                        <li class="breadcrumb-item active">Edit Post</li>
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
                              if (isset($errors) && !empty($errors)) {
                                 echo "<ul><li>", implode("</li><li>", $errors), "</li></ul>";
                              }
                              ?>
                              <h2 class="entry-title">
                                 <h2>Update your blo</h2>
                              </h2>

                              <div class="entry-meta">
                                 <form action='' method='post'>
                                    <div class="col-md-6 form-group">
                                       <label for='title'>Title</label>
                                       <input class="form-control" type='text' name='title' required value="<?php echo $title ?>" />
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <label for='contents'>Content</label>
                                       <textarea class="form-control" name='contents' cols=20 rows=10> <?php echo $contents ?> </textarea>
                                    </div>
                                    <div class="col-md-6 form-group">
                                       <label for='category'>Category</label>
                                       <select name='category' class="form-control">
                                          <?php
                                          while ($row1 = mysqli_fetch_assoc($res1)) {
                                             $selected = ($row1['name'] == $cat_id) ? 'selected' : '';
                                          ?>
                                             <option value='<?php echo $row1['name'] ?>' <?php echo $selected; ?>><?php echo $row1['name'] ?></option>
                                          <?php
                                          }
                                          ?>
                                       </select>
                                    </div>
                                    <p><input class="btn-grad ml-1" type='submit' name="submit" value='Add Post' /></p>
                                 </form>
                              </div>

                           </header>


                           <div class="entry-content">
                              <p>
                                 <!--insert here-->
                              </p>
                           </div>


                        </article> <!-- end entry -->

                     </div> <!-- end main -->



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
                     <!-- <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script> -->
                     <!-- <script src="js/main.js"></script> -->
</body>

</html>