<?php
ob_start();
include("dbconn.php");

$cid = $_GET['id'];

$query= "delete from Customer where cid = $cid";

?>

<!DOCTYPE HTML>
<html>
<head>
<title>delete User</title>
    <?php
        include('header.php');
        ?>

</head> 
   
 <body class="sticky-header left-side-expanded"  onload="initMap()">
    <section>
    <!-- left side start-->
        <?php
        include('nav.php');
        ?>
    <!-- left side end-->
    
    <!-- main content start-->
		<div class="main-content main-content4">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<!--notification menu start -->
	
			<!--notification menu end -->

	<!-- //header-ends -->
			<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1"> Delete Customer</h3>
					 <div class="xs tabls">
						<div class="bs-example4" data-example-id="contextual-table">



<h3>
    Are you sure you want to delete?
</h3>

<form method="post">
    <input type="submit" class="btn btn-danger" value="Yes" name="btn-ok" />
    <input type="submit" class="btn btn-info" value="Cancel" name="btn-not-ok" />
</form>

<?php

if(isset($_POST['btn-ok']))
{
    $check =mysqli_query($conn,$query);
    if($check)
    {
        header('Location:userData.php');
    }
}

if(isset($_POST['btn-not-ok']))
{
    header('Location:userData.php');
}



?>

</div>
					  
                      </div>
                  </div>
              </div>
              
          </section>
          
      <script src="js/jquery.nicescroll.js"></script>
      <script src="js/scripts.js"></script>
      <!-- Bootstrap Core JavaScript -->
         <script src="js/bootstrap.min.js"></script>
      </body>
      </html>
      <?php
      ob_end_flush();
      ?>