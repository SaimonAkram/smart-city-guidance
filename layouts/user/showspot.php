<?php include 'connection.php'; ?>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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


    <!-- ======= Breadcrumbs ======= -->

    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">


            <?php
      
      echo "<h2><bold>"; echo$_GET['title']; echo "</bold></h2>";
      $value=$_GET['title'];
      
      
      ?>

            <p>
                <?php
                $query="SELECT place_desription FROM touristspot where place_name='$value'";
                $result=mysqli_query($con,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    echo $row["place_desription"]. "<br> ";
                    
                  }
                } else {
                  echo "0 results";
                }
                ?>
            </p>

        </div>
    </div>
    <!-- End Breadcrumbs -->


    <div data-aos="fade-up">



        <iframe style="border:0; width: 100%; height: 350px;" <?php
                $query="SELECT * FROM touristspot where place_name='$value'";
                $result=mysqli_query($con,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $map= $row["place_mapurl"]. "<br> ";
                    $image=$row["place_img"];
                    $division=$row["Division"];
                    $area=$row["place_address"];
                    $district=$row["District"];
                    $place_type=$row["place_type"];
                    $place_name=$row["place_name"];
                   
                   
                    
                   

                  }
                } else {
                  echo "0 results";
                }
                ?> src="<?php echo $map ?>" frameborder="0" allowfullscreen></iframe>
    </div>

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">



            <div class="row">
                <div class="col-lg-8">

                    <img src="./touristspot/<?php echo $image ?>" width='90%' height='300px' class='thumbnail'>

                </div>

                <div class="col-lg-4">

                <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Place Name: </h5>
                        <p> <?php echo  $place_name ?>
                        </p>
                    </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Place Type: </h5>
                        <p> <?php echo  $place_type ?>
                        </p>
                    </div>

                <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Division: </h5>
                        <p> <?php echo $division ?>
                        </p>
                    </div>
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>District: </h5>
                        <p> <?php echo $district ?>
                        </p>
                    </div>


                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Place Address: </h5>
                        <p> <?php echo $area ?>
                        </p>
                    </div>

                    

                  


                   

                    

                    



                   

                   

                </div>

            </div>
        </div>

        </div>
    </section><!-- End Cource Details Section -->

    <footer id="footer">
        <div class="container d-md-flex py-4">

            <div class="mr-md-auto text-center text-md-left pt-3">
                <div class="copyright">
                    &copy; Copyright <strong><span>Institutions Information System</span></strong>. All Rights Reserved
                </div>

            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->




    <!-- Vendor JS Files -->
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