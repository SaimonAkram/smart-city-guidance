<?php
include_once('../connection.php');
if (isset($_GET['id']) && $_GET['id'] != '') {
   $posts = $_GET['id'];
}

$sql = "Select * from posts where cat_id ='$posts'";
$res = mysqli_query($con, $sql);

$sql1 = "Select * from categories where id ='$posts'";
$res1 = mysqli_query($con, $sql1);


$sql = "Select * from categories";
$category = mysqli_query($con, $sql);




?>


<style>
   .cardcontainer {
      width: 300px;
      height: 400px;
      background-color: white;
      margin-left: auto;
      margin-right: auto;
      transition: 0.3s
   }

   .cardcontainer:hover {
      box-shadow: 0 0 45px gray
   }

   .photo {
      height: 200px;
      width: 80%
   }

   .photo img {
      height: 100%;
      width: 100%
   }

   .txt1 {
      margin: auto;
      text-align: center;
      font-size: 18px
   }

   .content {
      width: 80%;
      height: 100px;
      margin-left: auto;
      margin-right: auto;
      position: relative;
      top: -33px
   }

   .photos {
      width: 90px;
      height: 30px;
      background-color: #E74C3C;
      color: white;
      position: relative;
      top: -30px;
      padding-left: 10px;
      font-size: 20px
   }

   .txt4 {
      font-size: 20px;
      position: relative;
      top: 33px
   }

   .txt5 {
      position: relative;
      top: 18px;
      color: #E74C3C;
      font-size: 17px
   }

   .txt2 {
      position: relative;
      top: 10px
   }

   .cardcontainer:hover>.photo {
      height: 200px;
      animation: move1 0.5s ease both
   }

   @keyframes move1 {
      0% {
         height: 200px
      }

      100% {
         height: 100px
      }
   }

   .cardcontainer:hover>.content {
      height: 200px
   }

   .footer {
      width: 80%;
      height: 100px;
      margin-left: auto;
      margin-right: auto;
      background-color: white;
      position: relative;
      top: -15px
   }

   .btn {
      position: relative;
      top: 15px
   }





   /* .fa-gratipay {
        margin-right: 10px;
        transition: 0.5s
    } */

   /* .fa-gratipay:hover {
        color: #E74C3C
    } */

   .txt3 {
      color: gray;
      position: relative;
      top: 15px;
      font-size: 10px
   }

   .checked {
      color: orange;
   }
</style>





<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>CGS</title>
   <meta content="" name="description">
   <meta content="" name="keywords">

   <!-- Favicons -->

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
   <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
   <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
   <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
   <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background-image: url('https://cdn.pixabay.com/photo/2017/01/20/00/30/maldives-1993704_960_720.jpg'); background-size: cover; background-repeat: no-repeat">


   <headerBlogBlog>
      <?php include './include/navbar.php'; ?>
   </headerBlogBlog>




   <div class="container">
      <div class="row">

         <div class="headerBlogBlog-content twelve columns" style="margin-top:100px;">

            <h1 id="logo-text"><a href="Adindex.php" title="" style="color:white;">Your Blog!</a></h1>
            <p id="intro" style="color:white;">Write About Your Journey...........</p>

         </div>

      </div>

     
      </div>



      <div class="row">

         <ul id="nav" class="nav">
         <li class="current"><a href="Adindex.php" >Home</a></li>
                <li><a href="add_post.php" style="color:white;">Upload Your Post</a></li>
                <li><a href="manage_post.php" style="color:white;">Manage Your Post</a></li>
                <li><a href="../logout.php" style="color:white;">LogOut</a></li>
         </ul> <!-- end #nav -->

      </div>

      </nav> <!-- end #nav-wrap -->

      </header> <!-- Header End -->


      <!-- Content
   ================================================== -->
      <div id="content-wrap">

         <div class="row">

            <div id="main" class="eight columns">

               <article class="entry">
                  <header class="entry-header">

                     <h2 class="entry-title">
                        <h2 style="text-decoration: underline;">Category</h2><br />
                     </h2>

                     <?php
                     while ($rt = mysqli_fetch_assoc($res1)) {
                     ?>
                        <h3><a href='category.php?id=<?php echo $row['category_id']; ?>'><?php echo $rt['name']; ?></h3><br>


                        <?php
                        while ($row = mysqli_fetch_assoc($res)) {
                        ?>


                           <div class="entry-meta">
                              <h2><a href='index.php?id=<?php echo $row['post_id']; ?>'><?php echo $row['title']; ?></a></h2>
                              <p>
                                 Posted on <?php echo date('d-m-y h:i:s', strtotime($row['date_posted'])); ?>
                                 </a>
                              </p>
                              <div><?php echo nl2br($row['contents']); ?></div>
                              <menu>
                                 <ul>
                                    <li></li>
                                    <li></li>
                                 </ul>
                              </menu>
                           </div>

                  </header>


                  <div class="entry-content">
                     <p>
                        <!--insert here-->
                     </p>
                  </div>

            <?php
                        }
                     }
            ?>
               </article> <!-- end entry -->

            </div> <!-- end main -->

            <div id="sidebar" class="four columns">



               <div class="widget widget_categories group">
                  <h3>Categories.</h3>
                  <?php
                  while ($r = mysqli_fetch_assoc($category)) {
                  ?>
                     <p><a href="category.php?id=<?php echo $r['id']; ?>"><?php echo $r['name']; ?></a>
                     <?php
                  }
                     ?>
               </div>



            </div> <!-- end sidebar -->

         </div> <!-- end row -->

      </div> <!-- end content-wrap -->


      <!-- Footer
   ================================================== -->





      <script src="assets/vendor/jquery/jquery.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
      <script src="assets/vendor/counterup/counterup.min.js"></script>
      <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="assets/vendor/aos/aos.js"></script>


      <script src="assets/js/main.js"></script>

</body>

</html>