

        <?php
            include 'connection.php';
            session_start() ;
        // include 'connection.php';
         
        // if(isset($_POST['u_btn'])){
         
         
        //     $sub=$_POST['search'];
        //     $sql="SELECT * FROM tbinstitutions WHERE Division LIKE '$sub%' OR AREA LIKE '$sub%' OR postOffice
        //     LIKE '$sub%' OR types LIKE '$sub%' OR institution_name LIKE '$sub%'
        //     OR Ins_Address LIKE '$sub%'";
         
        //     $result = mysqli_query($con, $sql);
        //     echo "<script> var jsvar = '' </script>";
        //     while ($row=mysqli_fetch_array($result)){
        //      echo "<script>  jsvar = " . json_encode($row) . "</script>";
        //      echo "<script>dataLoad(jsvar) </script>";
         
        //     }
        // }
        ?>
         
         
        <!DOCTYPE html>
        <html lang="en">
         
        <head>
            <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
         
            <title>CGS</title>
            <meta content="" name="description">
            <meta content="" name="keywords">
         
            <!-- Favicons -->
         
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
            <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.9/tailwind.min.css" rel="stylesheet">
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
         
        </head>
         
        <body>
         
            <header>
            <?php include './include/navbar.php'; ?>
            </header>
            <div class="breadcrumbs" data-aos="fade-in">
                <div class="container">
                    <h2 style="padding-top:7px;">Find out institution based on your location</h2>
                </div>
            </div>
         
         
            <section id="contact" class="contact mb-5">
                <div class=" mt-5  ml-5 ">
         
                    <form method="POST">
                       
         
                        <div class="col-md-6 m-auto form-group">
                                <input class="form-control mb-3" type="text" name="search">
                                <div class="validate"></div>
                            </div>
         
                           
                            <div class="text-center col-md-12">
                                <input type="submit" id="submit" name="u_btn" value="Find" class="btn btn-success w-25" />
                            </div>
                    </form>
         
            <div class="sm:grid sm:grid-cols-2 lg:grid-cols-4 gap-4 space-y-4 sm:space-y-0 mt-16">
                <?php
                   
         
                    if(isset($_POST['u_btn'])){
                   
                   
                        $sub=$_POST['search'];
                        $sql="SELECT * FROM tbinstitutions WHERE Division LIKE '$sub%' OR AREA LIKE '$sub%' OR postOffice
                        LIKE '$sub%' OR types LIKE '$sub%' OR institution_name LIKE '$sub%'
                        OR Ins_Address LIKE '$sub%'";
         
                        $result = mysqli_query($con, $sql);
                        if ($result->num_rows > 0) {
                        while ($row=mysqli_fetch_array($result)){
                     
                            $image=$row["imagePath"];
                            $name=$row['institution_name'];
                            $area=$row['Ins_Address'];
                             $details=$row['Service_Time'];
                         
                       
                           
                         ?>
        <div class="bg-white">
                <div>
                  <div class="shadow-lg hover:shadow-xl transform transition duration-500 hover:scale-105 rounded-md">
                    <div>
                      <img class="w-full object-cover h-56 rounded-md" src="./upload/<?php echo $image ?>"  />
                      <div class="px-4 py-2">
                        <h1 class="text-xl font-gray-700 font-bold"><?php echo $name ?></h1>
                        <div class="flex space-x-2 mt-2">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                          </span>
                          <h3 class="text-base text-gray-500 font-semibold mb-2"><?php echo $area ?></h3>
                        </div>
                        <p class="text-sm tracking-normal"><?php echo $details ?></p>
                        <button class="mt-12 w-full text-center bg-yellow-400 py-2 rounded-lg">Read more</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
         
                       <?php }
                        }
                        else{
         
                            echo '<p class="text-xl m-auto">No Search Result</p>';
                            }
                    }
                    ?>
                   </div>
         
                </div>
            </section>
         
         
         
         
            </div><!-- End Breadcrumbs -->
         
         
         
         
         
         
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

