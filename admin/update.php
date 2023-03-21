<?php
include("dbconn.php");

$cid = $_GET['id'];

$query= "select * from Customer where cid = $cid";
$rawData = mysqli_query($conn,$query);

$row = mysqli_fetch_array($rawData);



?>
<!DOCTYPE HTML>
<html>
<head>
<title>Update User</title>
    <?php
        include('header.php');
        ?>

</head> 
   
 <body >
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
					<h3 class="blank1">Update Customer Details</h3>
					 <div class="xs tabls">
						<div class="bs-example4" data-example-id="contextual-table">

                        <div class="row block-9">

<div class="col-md-3"></div>

  <div class="col-md-6 order-md-last d-flex">
    <form method="post" class="bg-white p-5 contact-form" enctype="multipart/form-data">


    <div class= "row">
    <div class="col-lg-12">
    <p><label class="label-primary">First Name: </label>
    <input type = "name" required name="fname" class="form-control" value="<?= $row[1] ?>"/> </p>
    </div>
   </div>
    <div class= "row">
    <div class="col-lg-12">
    <p><label class="label-primary">Last Name: </label>
    <input type = "name" required name="lname" class="form-control" value="<?= $row[2] ?>"/> </p>
    </div>
   </div>
    <div class= "row">
    <div class="col-lg-12">
    <p><label class="label-primary">User Name: </label>
    <input type = "name" required name="cname" class="form-control" value="<?= $row[3] ?>"/> </p>
    </div>
   </div>

  


    
   <div class= "row">
    <div class="col-lg-12">
    <p><label class="label-primary">Enter Email: </label>
    <input type = "name" required name="cemail" class="form-control" value="<?= $row[4] ?>"/> </p>
    </div>
   </div>

    <div class= "row">
    <div class="col-lg-12">
    <p><label class="label-primary">Enter password: </label>
    <input type = "name" required name="cpassword" class="form-control" value="<?= $row[5] ?>"/> </p>
    </div>
   </div>
   <div class= "row">
    <div class="col-lg-12">
    <p><label class="label-primary">Country: </label>
    <input type = "name" required name="country" class="form-control" value="<?= $row[6] ?>"/> </p>
    </div>
   </div>
   <div class= "row">
    <div class="col-lg-12">
    <p><label class="label-primary">Address: </label>
    <input type = "name" required name="address" class="form-control" value="<?= $row[7] ?>"/> </p>
    </div>
   </div>

   <div class= "row">
    <div class="col-lg-12">
    <p><label class="label-primary">State: </label>
    <input type = "name" required name="state" class="form-control" value="<?= $row[8] ?>"/> </p>
    </div>
   </div>
   <div class= "row">
    <div class="col-lg-12">
    <p><label class="label-primary">Zip Code: </label>
    <input type = "name" required name="zipcode" class="form-control" value="<?= $row[9] ?>"/> </p>
    </div>
   </div>
   <div class= "row">
    <div class="col-lg-12">
    <p><label class="label-primary">Phone Number: </label>
    <input type = "name" required name="phone" class="form-control" value="<?= $row[10] ?>"/> </p>
    </div>
   </div>

   
 

      <div class="form-group text-center">
        <input type="submit" value="Save Changes" name="btn_upd" class="btn btn-primary py-2 px-4">
      </div>
<br/>

<?php
if(isset($_POST['btn_upd']))
{
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $cname= $_POST['cname'];
    $cemail= $_POST['cemail'];
    $cpassword= $_POST['cpassword'];
    $country= $_POST['country'];
    $address= $_POST['address'];
    $state= $_POST['state'];
    $zipcode= $_POST['zipcode'];
    $phone= $_POST['phone'];
   

    $query="update Customer set fname='".$fname."',lname='".$lname."',cname='".$cname."',cemail='".$cemail."',cpassword='".$cpassword."',country='".$country."',address='".$address."',state='".$state."',zipcode='".$zipcode."',phone='".$phone."' where cid= $cid";
    $update = mysqli_query($conn,$query);
    if($update)
    {
        echo "<p class='text-success'>User updated successfully!!</p>";
        echo "<br/><a href='UserData.php'> Go Back</a>";
    }
    else
    {
        echo "<p class='text-danger'>".mysqli_error($conn)."</p>";
    }

}

?>



      </form>
          </div>
        </div>
      </div>




                        </div>
					  
                      </div>
                  </div>
              </div>
              <!--footer section start-->
                  <footer>
                     <p>&copy 2015 Easy Admin Panel. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts.</a></p>
                  </footer>
              <!--footer section end-->
          </section>
          
      <script src="js/jquery.nicescroll.js"></script>
      <script src="js/scripts.js"></script>
      <!-- Bootstrap Core JavaScript -->
         <script src="js/bootstrap.min.js"></script>
      </body>
      </html>