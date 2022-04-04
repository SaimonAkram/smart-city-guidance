<?php
include_once('../connection.php');

$sql="Select * from categories";
$res=mysqli_query($con,$sql);
$r=mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Blog!</title>
	<meta name="description" content="">  
	<meta name="author" content="">

	<!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

   <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">  
	<link rel="stylesheet" href="css/media-queries.css"> 

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="top">

   	<div class="row">

   		<div class="header-content twelve columns">

		      <h1 id="logo-text"><a href="Adindex.php" title="">Your Blog!</a></h1>
				<p id="intro">Write About Your Journey...........</p>

			</div>			

	   </div>



	   	<div class="row">    		            

			   	<ul id="nav" class="nav">
               <li class="current"><a href="Adindex.php">Home</a></li>    
                  <li><a href="admin.php">Manage</a></li>    	
			      	<li><a href="page.php">About</a></li>
					  <li><a href="../admin/dashboard.php">Admin Pannel</a></li>
					  <li><a href="../logout.php">LogOut</a></li>	
			   	</ul> <!-- end #nav -->					   	 

	   	</div> 

	   </nav> <!-- end #nav-wrap --> 	     

   </header> <!-- Header End -->


   <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">

	   		<article class="entry">
					<header class="entry-header">

						<h2 class="entry-title">
							<h2>List of Categories</h2><br/>
						</h2> 				 
					
						<div class="entry-meta">
    <?php
     while($row=mysqli_fetch_assoc($res)){
     ?>
      <p><a href="category.php?id=<?php echo $row['id'];?>"><?php echo $row['name']; ?></a> -
      <a href="delete_category.php?id=<?php echo $row['id'];?>" onclick='return confirm_delete()'><font color="red">Delete</font></a></p> 
     <?php  
     }
     ?>
						</div> 
					 
					</header> 
	
					
					<div class="entry-content">
						<p><!--insert here--></p>
					</div> 


				</article> <!-- end entry -->

   		</div> <!-- end main -->

   		<div id="sidebar" class="four columns">


   			<div class="widget widget_categories group">
   				<h3>Categories.</h3> 
   				<?php
     while($rt=mysqli_fetch_assoc($r)){
     ?>
      <p><a href="manage_category.php?id=<?php echo $rt['id'];?>"><?php echo $rt['name']; ?></a>
     <?php  
     }
     ?>
				</div>

				
   		</div> <!-- end sidebar -->

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->
   

   <!-- Footer
   ================================================== -->
  

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>  
   <script src="js/main.js"></script>

</body>

</html>