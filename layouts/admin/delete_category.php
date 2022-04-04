<?php
include_once('../connection.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
     $delete_sql="delete from categories where id ='$id'";

    if(mysqli_query($con,$delete_sql))
    {
        echo '<script>confirm("all information delete successfully")</script>';
       
    }
    else{
        echo '<script>confirm("Sorry this delete unsuccessful")</script>';
      
    }
}
header("Location:category_list.php");
die();