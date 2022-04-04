

<?php session_start() ; ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <!-- <link href="assets/css/style.css" rel="stylesheet"> --> -->
</head>

<body>

<header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        
  
     <h1 class="logo mr-auto"><a href="home.php">Explore Your City</a></h1>
    
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li ><a href="home.php">Home</a></li>
            <li><a href="findout.php">Find Any Place</a></li>
            <!-- <li><a href="ebook.php">Famous Place</a></li> -->
            <li><a href="touristspots.php">Tourist spot</a></li>
            <li><a href="Adindex.php">Blog</a></li>
            <li><a href="addContact.php">Contact</a></li>
           
            <!-- <li> <input class="form-control" type="search" placeholder="Search" aria-label="Search"></li>
       <button class="btn btn-outline-success" type="submit">Search</button> -->
     
          </ul>
          
        </nav>
        <div class="dropdown show">
      <a class="get-started-btn" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']?></a>
      <div class="dropdown-menu" >
              <div class="modal-dialog" role="document" >
                <div class="modal-content" >
                <img src="<?php  echo $_SESSION['pic'];?>" style="margin-left: 8.5rem!important;" width="65px" height="65px"/>
              
                    <h6 style="margin-left: 6rem!important;"><?php echo $_SESSION['name']?></h6> 
                  <p class = "text-center"><?php echo $_SESSION['email']?></p>
                  <div class="modal-footer">
                    <button  class="get-started-btn"><a href="../logout.php" style="color:white;">logout</a></button>
                  </div>
              </div>
            </div>
      </div>
    </div>
      </div>
    </header>


 

  <!-- Vendor JS Files
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <!-- <script src="assets/js/main.js"></script> --> -->

</body>

</html>




  







  