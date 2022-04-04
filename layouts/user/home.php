<?php include 'connection.php'; ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.cardcontainer {
    width: 250px;
    background-color: white;
    margin-left: auto;
    margin-right: auto;
    transition: 0.3s
}


.photo {
    height: 200px;

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
    top: 20px
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



@keyframes move1 {
    0% {
        height: 200px
    }

    100% {
        height: 100px
    }
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

.cardcontainer:hover {
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
}

.btn-grad {
    background-image: linear-gradient(to right, #FF512F 0%, #DD2476 51%, #FF512F 100%)
}

.btn-grad {
    margin: 8px;
    padding: 10px 28px;
    text-align: center;
    text-transform: uppercase;
    transition: 0.5s;
    background-size: 200% auto;
    color: white;
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
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <h1>Welecome To,<br>City Guidance System</h1>
            <h2>We provies the Information about City, Famous places and Tourist places</h2>
            <a href="findout.php" class="btn-get-started">Find Out</a>
        </div>
    </section><!-- End Hero -->



    <div class="container" style="margin-top:50px;">
        <h2 class="mb-5">Hospital</h2>
        <div class="row">
            <?php
                $query="SELECT * FROM tbinstitutions WHERE types = 'hospital' LIMIT 4";
                $result=mysqli_query($con,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["imagePath"];
                    $name=$row['institution_name'];
                    $area=$row['Ins_Address'];
                     $details=$row['Service_Time'];
                     $type=$row['types'];
                  
                
                    
                ?>
            <div class="cardcontainer col-3 mb-5 hover-overlay ripple shadow-1-strong rounded">
                <div class="photo"> <img src="./upload/<?php echo $image ?>" class="img-fluid rounded" alt="">
                    <div class="photos">Photos</div>
                </div>
                <div class="mb-3 px-2" style="max-width:280px">
                    <?php
             echo '<p class="txt4">  ' .$name.'</p>';
             echo '<p class="txt5">' .$area.'</p>';
             echo '<p class="txt2">' .$details.'</p>'; 
             ?>

                </div>
                <div class="">
                    <?php
           echo '<p><a class="px-2 btn-grad" style="width:80%" href="institution.php?title=' .$name.'">Read More</a></p>';
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

    <?php //<a href="view all.php?title=' .$type . '"> class="learn-more-btn"><p style="text-align:center"><font size="+3">Get Top 12 School Details</font></a>
    echo '<h5><a href="All_Institution.php?type=' .$type. '">  <p style="text-align:right;margin-right: 20px;text-decoration: underline;"><font size="">View all Hospital</font></a> </a></h5>';
?>




    <div class="container" style="margin-top:5px;">
        <h2 class="mb-5">Educational Institution</h2>
        <div class="row">
            <?php
                $query="SELECT * FROM tbinstitutions WHERE types = 'Educational Institution' LIMIT 4";
                $result=mysqli_query($con,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["imagePath"];
                    $name=$row['institution_name'];
                    $area=$row['Ins_Address'];
                     $details=$row['Service_Time'];
                     $type=$row['types'];
                  
                
                    
                ?>
            <div class="cardcontainer col-3 mb-5 hover-overlay ripple shadow-1-strong rounded">
                <div class="photo"> <img src="./upload/<?php echo $image ?>" class="img-fluid rounded" alt="">
                    <div class="photos">Photos</div>
                </div>
                <div class="mb-3 px-2" style="max-width:280px">
                    <?php
             echo '<p class="txt4">  ' .$name.'</p>';
             echo '<p class="txt5">' .$area.'</p>';
             echo '<p class="txt2">' .$details.'</p>'; 
             ?>

                </div>
                <div class="">
                    <?php
           echo '<p><a class="px-2 btn-grad" style="width:80%" href="institution.php?title=' .$name.'">Read More</a></p>';
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

    <?php //<a href="view all.php?title=' .$type . '"> class="learn-more-btn"><p style="text-align:center"><font size="+3">Get Top 12 School Details</font></a>
    echo '<h5><a href="All_Institution.php?type=' .$type. '">  <p style="text-align:right;margin-right: 20px;text-decoration: underline;"><font size="">View all Hospital</font></a> </a></h5>';
?>


    <div class="container" style="margin-top:5px;">
        <h2 class="mb-5">Police Station</h2>
        <div class="row">
            <?php
                $query="SELECT * FROM tbinstitutions WHERE types = 'Police Station' LIMIT 4";
                $result=mysqli_query($con,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["imagePath"];
                    $name=$row['institution_name'];
                    $area=$row['Ins_Address'];
                     $details=$row['Service_Time'];
                     $type=$row['types'];

                  
                
                    
                ?>
            <div class="cardcontainer col-3 mb-5 hover-overlay ripple shadow-1-strong rounded">
                <div class="photo"> <img src="./upload/<?php echo $image ?>" class="img-fluid rounded" alt="">
                    <div class="photos">Photos</div>
                </div>
                <div class="mb-3 px-2" style="max-width:280px">
                    <?php
             echo '<p class="txt4">  ' .$name.'</p>';
             echo '<p class="txt5">' .$area.'</p>';
             echo '<p class="txt2">' .$details.'</p>'; 

             ?>

                </div>
                <div class="">
                    <?php
           echo '<p><a class="px-2 btn-grad" style="width:80%" href="institution.php?title=' .$name.'">Read More</a></p>';
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
    <?php //<a href="view all.php?title=' .$type . '"> class="learn-more-btn"><p style="text-align:center"><font size="+3">Get Top 12 School Details</font></a>
    echo '<h5><a href="All_Institution.php?type=' .$type. '">  <p style="text-align:right;margin-right: 20px;text-decoration: underline;"><font size="">View all Police Station</font></a> </a></h5>';
?>



    <div class="container" style="margin-top:5px;">
        <h2 class="mb-5">Shopping Mall</h2>
        <div class="row">
            <?php
                 $query="SELECT * FROM tbinstitutions WHERE types = 'Shopping Mall' LIMIT 4";
                $result=mysqli_query($con,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["imagePath"];
                    $name=$row['institution_name'];
                    $area=$row['Ins_Address'];
                     $details=$row['Service_Time'];
                     $type=$row['types'];
                  
                
                    
                ?>
            <div class="cardcontainer col-3 mb-5 hover-overlay ripple shadow-1-strong rounded">
                <div class="photo"> <img src="./upload/<?php echo $image ?>" class="img-fluid rounded" alt="">
                    <div class="photos">Photos</div>
                </div>
                <div class="mb-3 px-2" style="max-width:280px">
                    <?php
             echo '<p class="txt4">  ' .$name.'</p>';
             echo '<p class="txt5">' .$area.'</p>';
             echo '<p class="txt2">' .$details.'</p>'; 
             ?>

                </div>
                <div class="">
                    <?php
           echo '<p><a class="px-2 btn-grad" style="width:80%" href="institution.php?title=' .$name.'">Read More</a></p>';
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

    <?php //<a href="view all.php?title=' .$type . '"> class="learn-more-btn"><p style="text-align:center"><font size="+3">Get Top 12 School Details</font></a>
    echo '<h5><a href="All_Institution.php?type=' .$type. '">  <p style="text-align:right;margin-right: 20px;text-decoration: underline;"><font size="">View all Shopping Mall</font></a> </a></h5>';
?>


    <div class="container" style="margin-top:5px;">
        <h2 class="mb-5">Restaurants</h2>
        <div class="row">
            <?php
                $query="SELECT * FROM tbinstitutions WHERE types = 'Restaurants' LIMIT 4";
                $result=mysqli_query($con,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["imagePath"];
                    $name=$row['institution_name'];
                    $area=$row['Ins_Address'];
                     $details=$row['Service_Time'];
                     $type=$row['types'];
                
                    
                ?>
            <div class="cardcontainer col-3 mb-5 hover-overlay ripple shadow-1-strong rounded">
                <div class="photo"> <img src="./upload/<?php echo $image ?>" class="img-fluid rounded" alt="">
                    <div class="photos">Photos</div>
                </div>
                <div class="mb-3 px-2" style="max-width:280px">
                    <?php
             echo '<p class="txt4">  ' .$name.'</p>';
             echo '<p class="txt5">' .$area.'</p>';
             echo '<p class="txt2">' .$details.'</p>'; 
             ?>

                </div>
                <div class="">
                    <?php
           echo '<p><a class="px-2 btn-grad" style="width:80%" href="institution.php?title=' .$name.'">Read More</a></p>';
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
    <?php //<a href="view all.php?title=' .$type . '"> class="learn-more-btn"><p style="text-align:center"><font size="+3">Get Top 12 School Details</font></a>
    echo '<h5><a href="All_Institution.php?type=' .$type. '">  <p style="text-align:right;margin-right: 20px;text-decoration: underline;"><font size="">View all Restaurant</font></a> </a></h5>';
?>


    <div class="container" style="margin-top:5px;">
        <h2 class="mb-5">Play Ground</h2>
        <div class="row">
            <?php
                 $query="SELECT * FROM tbinstitutions WHERE types = 'Play Ground' LIMIT 4";
                $result=mysqli_query($con,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["imagePath"];
                    $name=$row['institution_name'];
                    $area=$row['Ins_Address'];
                     $details=$row['Service_Time'];
                     $type=$row['types'];
                  
                
                    
                ?>
            <div class="cardcontainer col-3 mb-5 hover-overlay ripple shadow-1-strong rounded">
                <div class="photo"> <img src="./upload/<?php echo $image ?>" class="img-fluid rounded" alt="">
                    <div class="photos">Photos</div>
                </div>
                <div class="mb-3 px-2" style="max-width:280px">
                    <?php
             echo '<p class="txt4">  ' .$name.'</p>';
             echo '<p class="txt5">' .$area.'</p>';
             echo '<p class="txt2">' .$details.'</p>'; 
             ?>

                </div>
                <div class="">
                    <?php
           echo '<p><a class="px-2 btn-grad" style="width:80%" href="institution.php?title=' .$name.'">Read More</a></p>';
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
    <?php //<a href="view all.php?title=' .$type . '"> class="learn-more-btn"><p style="text-align:center"><font size="+3">Get Top 12 School Details</font></a>
    echo '<h5><a href="All_Institution.php?type=' .$type. '">  <p style="text-align:right;margin-right: 20px;text-decoration: underline;"><font size="">View all Play Ground</font></a> </a></h5>';
?>


    <div class="container" style="margin-top:5px;">
        <h2 class="mb-5">Bus Station</h2>
        <div class="row">
            <?php
                $query="SELECT * FROM tbinstitutions where types='Bus Station'";
                $result=mysqli_query($con,$query);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    $image=$row["imagePath"];
                    $name=$row['institution_name'];
                    $area=$row['Ins_Address'];
                     $details=$row['Service_Time'];
                     $type=$row['types'];
                  
                
                    
                ?>
            <div class="cardcontainer col-3 mb-5 hover-overlay ripple shadow-1-strong rounded">
                <div class="photo"> <img src="./upload/<?php echo $image ?>" class="img-fluid rounded" alt="">
                    <div class="photos">Photos</div>
                </div>
                <div class="mb-3 px-2" style="max-width:280px">
                    <?php
             echo '<p class="txt4">  ' .$name.'</p>';
             echo '<p class="txt5">' .$area.'</p>';
             echo '<p class="txt2">' .$details.'</p>'; 
             ?>

                </div>
                <div class="">
                    <?php
           echo '<p><a class="px-2 btn-grad" style="width:80%" href="institution.php?title=' .$name.'">Read More</a></p>';
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

    <?php //<a href="view all.php?title=' .$type . '"> class="learn-more-btn"><p style="text-align:center"><font size="+3">Get Top 12 School Details</font></a>
    echo '<h5><a href="All_Institution.php?type=' .$type. '">  <p style="text-align:right;margin-right: 20px;text-decoration: underline;"><font size="">View all Bus Station</font></a> </a></h5>';
?>


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