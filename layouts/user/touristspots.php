

<?php include 'connection.php'; ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
.checked{
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  

<header>
<?php include './include/navbar.php'; ?>
  </header>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welecome To,<br>Find Famous Tourist places</h1>
      <h2>We provies the Information about famous Tourist places</h2>
      <a href="findout.php" class="btn-get-started">Find Out</a>
    </div>
  </section><!-- End Hero -->



<div class="container" style="margin-top:100px;">
 <h2>Division: Chattogram</h2>  
</br>             
  <div class="row">
  <?php
                $query="SELECT * FROM touristspot where Division='Chittagong Division'";
                $result=mysqli_query($con,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["place_img"];
                    $name=$row['place_name'];
                    $area=$row['place_address'];
                     $district=$row['District'];
                  
                
                    
                ?>
    <div class="cardcontainer col-4">
        <div class="photo"> <img src="./touristspot/<?php echo $image ?>" class="img-fluid" alt="">
            <div class="photos">Photos</div>
        </div>
        <div class="content">
         <?php
             echo '<p class="txt4">  ' .$name.'</p>';
             echo '<p class="txt5">' .$area.'</p>';
             echo '<p class="txt2">' .$district.'</p>'; 
             ?>
              
        </div>
        <div class="footer">
        <?php
           echo '<p><a class="waves-effect waves-light btn" href="showspot.php?title=' .$name.'">Read More</a></p>';
            ?>
        </div>
        
    </div>

   

    <?php }
                }
                 else {
                  echo "0 results";
                }
                ?>
 



  </div>
 
 </div>


 <div class="container" style="margin-top:100px;">
 <h2>Division: Dhaka</h2>  
</br>             
  <div class="row">
  <?php
                $query="SELECT * FROM touristspot where Division='Dhaka Division'";
                $result=mysqli_query($con,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["place_img"];
                    $name=$row['place_name'];
                    $area=$row['place_address'];
                     $district=$row['District'];
                  
                
                    
                ?>
    <div class="cardcontainer col-4">
        <div class="photo"> <img src="./touristspot/<?php echo $image ?>" class="img-fluid" alt="">
            <div class="photos">Photos</div>
        </div>
        <div class="content">
         <?php
             echo '<p class="txt4">  ' .$name.'</p>';
             echo '<p class="txt5">' .$area.'</p>';
             echo '<p class="txt2">' .$district.'</p>'; 
             ?>
              
        </div>
        <div class="footer">
        <?php
           echo '<p><a class="waves-effect waves-light btn" href="showspot.php?title=' .$name.'">Read More</a></p>';
            ?>
        </div>
        
    </div>

   

    <?php }
                }
                 else {
                  echo "0 results";
                }
                ?>
 



  </div>
 
 </div>
 



<!-- ======= Best School Section  ======= -->

  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>



