<?php require_once "controllerUserData.php"; ?>

<?php

require_once './vendor/autoload.php';
include 'connection.php';

$clientId = "1025198180720-1l5m94m2qdgirahqam3i9p7vc4v1hcri.apps.googleusercontent.com";
$clientSecret = "SjY3-_CyVItkXx2u6QKmp44a";
$redirectUri = "http://localhost/Radin_city/layouts/signin.php";

$client = new Google_Client();
$client->setClientId($clientId);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope('email');
$client->addScope('profile');

if (isset($_GET['code'])) {

   
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);
    $oAuth = new Google_Service_Oauth2($client);
    $userData = $oAuth->userinfo->get();


    $email = $userData->email;
    $_SESSION['email'] = $email;
    $name = $userData->name;
    $picture = $userData->picture;
    $_SESSION['name'] = $name;
    $_SESSION['pic'] = $picture;


    if ($name == "Saimon Akram") {
        // $email_check = "SELECT * FROM registration WHERE email = '$email' ";
        // $res = mysqli_query($con, $email_check);
        // if (mysqli_num_rows($res) > 0) {
        //     echo '<script>console.log("Message Send asdfsadf")</script>';
        //     $insert_data = "INSERT INTO registration (firstname,email, created_on)
        //     values('$name;','$email' ,'$now')";
    
        //     $data_check = mysqli_query($con, $insert_data);
    
        // }
       header('location:./admin/dashboard.php');
    } else {
        header('location:./user/home.php');
    }

    // echo "<h1>$picture</h1>";
    // echo "<h1>$name</h1>";
    // echo "<h1>$email</h1>";

} else {
    # code...
    $login_url = $client->createAuthUrl();

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>City Guidance System</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/styles.css">
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            /* .login-form .btn-warning {
    background: #36A420;
    border: 1px solid #36A420;
    color: aliceblue;
    font-size: 17px;
    font-weight: bold;
    padding: 10px 15px;
    border-radius: 7px;
    text-transform: capitalize; */
            .modal h2 {
                font-size: 32px;
                font-weight: bold;
                margin-bottom: 0;
            }

            .modal .modal-title p {
                color: #606770;
                font-size: 15px;
                line-height: 24px;
                margin-bottom: 0;

            }

            .modal .dob {
                color: #606770;
                font-size: 12px;
                line-height: 20px;
                margin-bottom: 0;

            }

            .modal p>input {
                float: right;

            }

            .modal-content {
                width: 80% !important;
            }

            .modal p.footer {
                color: #777;
                font-size: 11px;

            }

            .modal p.footer>a {
                color: #385898;
                text-decoration: none;

            }

            .modal .btn-success {
                padding: 4px 60px;
                background: #42B72A;
                border: 1px solid #42B72A;
                font-weight: bold;
                font-size: 19px;
            }

            .modal input.form-control {
                background: #F5F6F7;
            }
        </style>
    </head>

    <body>
        <section class="flex flex-col md:flex-row h-screen items-center">

            <div class="hidden lg:block w-full md:w-1/2 xl:w-2/3 h-screen">
            
                <img src="../images/sea-3243357_1280.jpg" alt="" class="w-full h-full object-cover">
                
            </div>

            <div class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
              flex items-center justify-center">

                <div class="w-full h-100">


                    <h1 class="text-xl md:text-2xl font-bold leading-tight mt-3">Log in to your account</h1>

                    <form class="mt-6" action="signin.php" method="POST">
                        <?php
                        if (count($errors) > 0) {
                        ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                foreach ($errors as $showerror) {
                                    echo $showerror;
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                        <div>
                            <label class="block text-gray-700">Email Address</label>
                            <input type="email" name="email" id="" placeholder="Enter Email Address" class="w-full py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none" autofocus autocomplete required value="<?php echo $email ?>">
                        </div>

                        <div class="mt-4">
                            <label class="block text-gray-700">Password</label>
                            <input type="password" name="password" id="pass" placeholder="Enter Password" minlength="6" class="w-full py-3 rounded-lg bg-gray-200 mt-2 border focus:border-blue-500
                      focus:bg-white focus:outline-none" required>



                        </div>

                        <div class=" mt-2">
                            <div> <input type="checkbox" onclick="myFunction1()"><span class="px-1">Show Password</span></div>

                        </div>

                        <button type="submit" class="w-full block bg-indigo-500 hover:bg-indigo-400 focus:bg-indigo-400 text-white font-semibold rounded-lg px-4 py-3 mt-2 mb-2" name="login" value="Login">Log In</button>
                        <div class="text-center">
                            <a href="forgot-password.php" class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot Password?</a>
                        </div>
                    </form>

                    <hr class="my-2 border-gray-300 w-full">

                    <a href="<?php echo $login_url; ?> " class="w-full block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-4 py-3 border border-gray-300">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="w-6 h-6" viewBox="0 0 48 48">
                                <defs>
                                    <path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z" />
                                </defs>
                                <clipPath id="b">
                                    <use xlink:href="#a" overflow="visible" />
                                </clipPath>
                                <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z" />
                                <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z" />
                                <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z" />
                                <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z" />
                            </svg>
                            <span class="ml-4">
                                Log in
                                with
                                Google</span>
                        </div>
                    </a>

                    <p class="mt-4">Need an account?
                    <div class="link login-link text-center"> <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#signUP">Create new account</button></div>
                    </p>


                </div>
            </div>


        </section>


        <!-- Modal -->

        <div class="modal fade" id="signUP">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            <h2>Sign Up</h2>
                            <p>It's quick and easy.</p>
                            <?php
                            if (count($errors) == 1) {
                            ?>
                                <div class="alert alert-danger text-center">
                                    <?php
                                    foreach ($errors as $showerror) {
                                        echo $showerror;
                                    }
                                    ?>
                                </div>
                            <?php
                            } elseif (count($errors) > 1) {
                            ?>
                                <div class="alert alert-danger">
                                    <?php
                                    foreach ($errors as $showerror) {
                                    ?>
                                        <li><?php echo $showerror; ?></li>
                                    <?php
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                            ?>

                            <!-- <script>
validateForm() {
//   var x = document.forms["myForm"]["email"].value;
  var y = "<?php echo $errors; ?>";
  if (count(y)>0) {
    alert("Error occurred");
    return false;
  }
}
</script> -->

                        </div>

                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="signin.php" onsubmit="return validateForm()" method="POST" autocomplete="" enctype="multipart/form-data">
                            <div class="form-row my-3">
                                <div class="col">
                                    <input type="text" class="form-control" name="firstname" placeholder="First name" required>
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="lastname" placeholder="Last name" required>
                                </div>
                            </div>
                            <div class="form-row my-3">
                                <div class="col">
                                    <input type="text" class="form-control" name="email" placeholder="Email address" required>

                                </div>
                            </div>
                            <div class="form-row my-3">
                                <div class="col">
                                    <input type="password" class="form-control" name="password" placeholder="New password" id="new_pass" required>


                                </div>
                                <div class="col">
                                    <input type="password" class="form-control" name="cpassword" placeholder="Re password" id="re_pass" required>
                                    <script>
                                        function myFunction() {
                                            var x = document.getElementById("new_pass");
                                            var y = document.getElementById("re_pass");
                                            if (x.type === "password" && y.type === "password") {
                                                x.type = "text";
                                                y.type = "text";
                                            } else {
                                                x.type = "password";
                                                y.type = "password";
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                            <input type="checkbox" onclick="myFunction()"> Show Password

                            <div class="form-row my-3">
                                <div class="col">
                                    <label class="dob">Gender ?</label>
                                </div>
                            </div>
                            <div class="form-row my-3">
                                <div class="col">
                                    <p class="form-control">Female <input type="radio" id="Female" name="Gender" value="Female"></p>

                                   

                                </div>
                                <div class="col">
                                    <p class="form-control">Male <input type="radio" id="Male" name="Gender" value="Male"></p>
                                   
                                </div>
                                <div class="col">
                                    <p class="form-control">Custom <input type="radio" id="Custom" name="Gender" value="Custom"></p>
                                    
                                </div>
                            </div>
                            <div class="form-row my-3">

                            </div>
                            <div class="form-row my-3">
                                <div class="col text-center">
                                    <input class="btn btn-success" type="submit" onclick="validateForm()" name="submit" value="Sign Up">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function myFunction1() {
                var x = document.getElementById("pass");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
       
    </body>

    </html>
<?php } ?>