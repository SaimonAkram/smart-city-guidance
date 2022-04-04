

        <?php
        session_start() ;
        include_once('../connection.php');
         
        $sql1="Select * from categories";
        $res=mysqli_query($con,$sql1);
         
         
        if (isset($_POST['submit'])) {
         
           $title      = trim($_POST['title']);
           $contents   = trim($_POST['contents']);
           $cat_id= $_POST['category'];
         
            $id = '';
            $email = $_SESSION['email'] ;
           $sql = "SELECT *  FROM posts WHERE title= '$title'";
           $result = mysqli_query($con, $sql);
           $num = mysqli_num_rows($result);
           if ($num == 0) {
                $email_check = "SELECT * FROM registration WHERE email = '$email' ";
                $res = mysqli_query($con, $email_check);
                while ($row1 = mysqli_fetch_assoc($res)) {
                    $id = $row1['user_id'];
                }
               $sql = "INSERT INTO posts(user_id,title,contents,cat_id) VALUES('$id','$title','$contents','$cat_id')";
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
         
         
           <!-- Java Script
           ================================================== -->
           <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
           <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
           <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>  
           <script src="js/main.js"></script>
         
        </body>
         
        </html>

