<?php
session_start() ;
include_once('../connection.php');


$sql1="Select * from categories";
$res1=mysqli_query($con,$sql1);

if(isset($_GET['id'])){
   $post=$_GET['id'];
	$res=mysqli_query($con,"select * from posts where id ='$post'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$title=$row['title'];
      $contents=$row['contents'];
      $cat_id=$row['cat_id'];
	}else{
		header('location:manage_post.php');
		die();
	}
}


if (isset($_POST['submit'])) {

   $title      = trim($_POST['title']);
   $contents   = trim($_POST['contents']);
   $cat_id= $_POST['category'];


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




    <div class="container" >
        <div class="row">

            <div class="headerBlogBlog-content twelve columns" style="margin-top:100px;" >

                <h1 id="logo-text"><a href="Adindex.php" title="" style="color:white;">Your Blog!</a></h1>
                <p id="intro" style="color:white;">Write About Your Journey...........</p>

            </div>

        </div>


        <div class="row">

            <ul id="nav" class="nav">
            <li ><a href="Adindex.php" style="color:white;">Home</a></li>
                <li class="current"><a href="add_post.php" >Upload Your Post</a></li>
                <li><a href="manage_post.php" style="color:white;">Manage Your Post</a></li>
                <li><a href="../logout.php" style="color:white;">LogOut</a></li>
            </ul> <!-- end #nav -->

        </div>

        </nav> <!-- end #nav-wrap -->

        </headerBlogBlog> <!-- Header End -->
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
                  <p><input class="btn-grad ml-3" type='submit' name="submit" value='Add Post' /></p>
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


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>  
   <script src="js/main.js"></script>

</body>

</html>