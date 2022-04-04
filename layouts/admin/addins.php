<?php
include_once('../connection.php');

if (isset($_POST['submit'])) {

    $dis = $_POST['dis'];
    $sub = $_POST['sub'];
    $postOffice = $_POST['postOffice'];
    $postCode = $_POST['postCode'];
    $types = $_POST['Institution_type'];
    $institution_name = $_POST['institution_name'];
    $Ins_Address = $_POST['Ins_Address'];
    $Ins_website = $_POST['Ins_website'];
    $phone_no = $_POST['phone_no'];
    $Service_Time = $_POST['Service_Time'];
    

    $image = $_FILES['image']['name'];
    $dir = $_FILES['image']['tmp_name'];
    $map = $_POST['map'];
    $message = $_POST['message'];


    $sql = "SELECT *  FROM tbinstitutions WHERE institution_name= '$institution_name'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 0) {
        $sql = "INSERT INTO tbinstitutions (Division,AREA,postOffice,postCode,types,institution_name,Ins_Address,Ins_website,phone_no,Service_Time,imagePath,mapurl,description) VALUE ('$dis','$sub','$postOffice','$postCode','$types','$institution_name','$Ins_Address','$Ins_website','$phone_no','$Service_Time','$image','$map','$message')";



        if ($con->query($sql)) {


            move_uploaded_file($dir, "../user/upload/$image");
            echo '<script>confirm("all information save successfully")</script>';
            //header('location:loginPage.php');
        } else {
            echo "Error: " . $sql . "
        " . $con->error;
        }
        $con->close();
    } else {

        echo '<script>alert("Institution that you have entered is already exist!")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Validation Form</title>

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
    <link rel="stylesheet" href="../../css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="http://parsleyjs.org/dist/parsley.js"></script>


    <style>
        .box {
            width: 100%;
            max-width: 600px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 16px;
            margin: 0 auto;
        }

        input.parsley-success,
        select.parsley-success,
        textarea.parsley-success {
            color: #468847;
            background-color: #DFF0D8;
            border: 1px solid #D6E9C6;
        }

        input.parsley-error,
        select.parsley-error,
        textarea.parsley-error {
            color: #B94A48;
            background-color: #F2DEDE;
            border: 1px solid #EED3D7;
        }

        .parsley-errors-list {
            margin: 2px 0 3px;
            padding: 0;
            list-style-type: none;
            font-size: 0.9em;
            line-height: 0.9em;
            opacity: 0;

            transition: all .3s ease-in;
            -o-transition: all .3s ease-in;
            -moz-transition: all .3s ease-in;
            -webkit-transition: all .3s ease-in;
        }

        .parsley-errors-list.filled {
            opacity: 1;
        }

        .parsley-type,
        .parsley-required,
        .parsley-equalto {
            color: #ff0000;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->



        <?php include './Sidebar/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>ADD NEW INSTITUTION</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                                <li class="breadcrumb-item active">Add New Institution</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">NEW INSTITUTION</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->

                                <form id="validate_form" class="p-8 php-email-form" method="POST" enctype="multipart/form-data">
                                    <div class="form-row">

                                        <div class="col-md-6 form-group">
                                            <select class="form-control" onchange=chngs() name="dis" id="dis" required="" data-parsley-trigger="keyup">
                                                <option selected Value="">Please select Division</option>
                                                <?php

                                                $sql = "SELECT Division FROM tbdivision";
                                                $result = mysqli_query($con, $sql);
                                                while ($row = mysqli_fetch_array($result)) {

                                                    $name = $row['Division'];
                                                    echo '<option value="' . $name . '" >' . $name . '</option>';
                                                }
                                                ?>
                                            </select>

                                        </div>
                                        <div class="col-md-6 form-group">
                                            <select class="form-control" name="sub" id="city" onchange=postOfficess() required="" data-parsley-trigger="keyup">
                                                <option selected Value="">Please select City</option>
                                                <?php

                                                // $sql = "SELECT name FROM tbinstitutions";
                                                // $result = mysqli_query($con, $sql);
                                                // while ($row = mysqli_fetch_array($result)) {

                                                //     $name = $row['name'];
                                                //     echo '<option value="' . $name . '" >' . $name . '</option>';
                                                // }
                                                // 
                                                ?>



                                            </select>
                                            <div class="validate"></div>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <select class="form-control" required="" onchange=postCodes() data-parsley-trigger="keyup" name="postOffice" id="postOffice" data-parsley-message="Please select Post office">
                                                <?php

                                                // $sql = "SELECT name FROM tbinstitutions";
                                                // $result = mysqli_query($con, $sql);
                                                // while ($row = mysqli_fetch_array($result)) {

                                                //     $name = $row['name'];
                                                //     echo '<option value="' . $name . '" >' . $name . '</option>';
                                                // }
                                                ?>
                                            </select>
                                            <div class="validate"></div>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <select class="form-control" required="" name="postCode" id="postCode" data-parsley-trigger="keyup" data-parsley-message="Please select institution">

                                            </select>
                                            <div class="validate"></div>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <select class="form-control" required=""  name="Institution_type" id="Institution_type" data-parsley-message="Please select institution type">
                                            <option selected Value="">Please select Institution type</option>
                                               <?php

                                                $sql = "SELECT institutions_type FROM tbinstitution_types";
                                                $result = mysqli_query($con, $sql);
                                                while ($row = mysqli_fetch_array($result)) {

                                                     $name = $row['institutions_type'];
                                                     echo '<option value="' . $name . '" >' . $name . '</option>';
                                                 }
                                                ?>
                                            </select>
                                            <div class="validate"></div>
                                        </div>

                                       

                                        <div class="col-md-6 form-group">
                                       
                                            <input type="text" class="form-control" id="institution_name" name="institution_name" data-parsley-trigger="keyup" required placeholder="Add New Institution" />
                                            <div class="validate"></div>
                                        
                                        </div>

                                        <div class="col-md-6 form-group">
                                        
                                            <input type="text" class="form-control" id="Ins_Address" name="Ins_Address"  data-parsley-trigger="keyup" required placeholder="Add Intitution Address" />
                                            <div class="validate"></div>
                                        
                                        </div>

                                       

                                    <div class="col-md-6 form-group">
                                        
                                        <input type="text" class="form-control" id="Ins_website" name="Ins_website" data-parsley-type="url" data-parsley-trigger="keyup" required placeholder="Add Intitution Website" />
                                        <div class="validate"></div>
                                    
                                    </div>

                                    <div class="col-md-6 form-group">
                                        
                                        <input type="text" class="form-control" id="phone_no" name="phone_no"  data-parsley-trigger="keyup" required placeholder="Add Contact Number" />
                                        <div class="validate"></div>
                                    
                                    </div>

                                    <div class="col-md-6 form-group">
                                        
                                        <input type="text" class="form-control" id="Service_Time" name="Service_Time"  data-parsley-trigger="keyup" required placeholder="Add Service Hour" />
                                        <div class="validate"></div>
                                    
                                    </div>


                                        <div class="col-md-6 form-group">
                                            <div class="section-title mt-2 mb-3">
                                                <h2>Please select a institution image</h2>
                                            </div>
                                            <input type="file" class="form-control" accept="image/*" required="" name="image" id="image">
                                            <div class="validate"></div>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <div class="section-title mt-2 mb-3">
                                                <h2>Please enter shareable institution map url</h2>
                                            </div>
                                            <input type="text" class="form-control" id="map" name="map" data-parsley-type="url" data-parsley-trigger="keyup" required placeholder="http://" />
                                            <div class="validate"></div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <textarea class="form-control" name="message" id="message" rows="5" required="" data-parsley-trigger="keyup" s placeholder="Write something about institutions"></textarea>
                                            <div class="validate"></div>
                                        </div>

                                        <div class="text-center col-md-12"><input type="submit" id="submit" name="submit" value="Submit" class="btn btn-success w-25" /></div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6">

                        </div>
                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <script>
        $('#validate_form').parsley();
    </script>

    <script>
        function chngs() {
            var dis = document.getElementById('dis').value;
            console.log(dis)
            if (dis == "Chittagong Division") {
                toster()
            }
        }


        async function toster() {
            jss = 'ctg_city.json'
            const res = await fetch(jss)
            const data = await res.json();
            let i = 0;
            var htmlSegment = ''
            var rem = ''
            data.forEach(index => {
                // console.log(index.Upazila)
                if (rem != index.Upazila) {

                    li = `<option value="${index.Upazila}">${index.Upazila}</option>`;
                    htmlSegment += li;
                    rem = index.Upazila
                    console.log(li)
                }
            })
            document.getElementById('city').innerHTML = htmlSegment;

        }

        async function postOfficess() {
            jss = 'ctg_city.json'
            const res = await fetch(jss)
            const data = await res.json();
            let i = 0;
            let htmlSegment = ''
            let rem = ''
            let city = document.getElementById('city').value;
            console.log("cc" + city)
            data.forEach(index => {
                // console.log(index.Upazila)
                if (city == index.Upazila) {

                    li = `<option>${index.PostOffice}</option>`;
                    htmlSegment += li;
                }
            })
            document.getElementById('postOffice').innerHTML = htmlSegment;
        }

        async function postCodes() {
            jss = 'ctg_city.json'
            const res = await fetch(jss)
            const data = await res.json();
            let i = 0;
            let htmlSegment = ''
            let rem = ''
            let city = document.getElementById('postOffice').value;
            data.forEach(index => {
                // console.log(index.Upazila)
                if (city == index.PostOffice) {

                    li = `<option>${index.Code}</option>`;
                    htmlSegment += li;
                }
            })
            document.getElementById('postCode').innerHTML = htmlSegment;
        }


        // document.getElementById('dis').addEventListener('change',a())

        // async function toster() {
        //     jss = 'city.json'
        //     const res = await fetch(jss)
        //     const data = await res.json();
        //     let i = 0;
        //     var htmlSegment = ''
        //     data.forEach(index => {
        //         console.log(index.Division)
        //         li = `<option>${index.Division}</option>`;
        //         htmlSegment += li;


        //     })
        //     document.getElementById('dis').innerHTML = htmlSegment;

        //     // document.getElementById('testyfy').appendChild html;
        //     console.log(htmlSegment)
        // }
        // toster()
    </script>
    =
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="plugins/chart.js/Chart.min.js"></script>

    <script src="plugins/sparklines/sparkline.js"></script>

    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>

    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>