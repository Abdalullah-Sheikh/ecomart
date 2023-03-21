<?php

include("dbconn.php");

$query= "select * from tbl_orders";
$rawData = mysqli_query($conn,$query);



?>

<!DOCTYPE Html>
<Html lang="en">

<head>
<title>Orders</title>
<?php include ("header.php"); ?>
</head>

<body>
<?php include ("nav.php"); ?>
	

<section>
   
		<div class="main-content main-content4">

			<div class="header-section">
			 

			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>






			<div id="page-wrapper">
				<div class="graphs">
                      <br>
					<h1 class="blank1"><center>Order Details</center></h1>
                   
                  
					 <div class="xs tabls">
						<div class="bs-example4" data-example-id="contextual-table">
						<table class="table">
						  <thead>
                          <tr>
                    <th>Order Id</th>
                    <th>Order Date</th>
                    <th>product Id</th>
                    <th>product Quantity</th>
                    <th>customer Id</th>
                    <th>Order Bill</th>
                   
                    <th colspan="2">Actions</th>
                    </tr>
						  </thead>
						  <tbody>
                          <?php
                    while($row = mysqli_fetch_array($rawData))   
                    {
                    ?>

                    <tr>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>
                    <td><?= $row[2] ?></td>
                    <td><?= $row[3] ?></td>
                    <td><?= $row[4] ?></td>
                    <td>$<?= $row[5] ?></td>
                    
                    <!-- <td><a href="updateorders.php?id=<?= $row[0]; ?>">Update</a></td> -->
                     <td><a href="deleteorders.php?id=<?= $row[0]; ?> ">Delete</a> 
                    </td>
                    </tr>
                            <?php
                    }
                    ?>
						  </tbody>
						</table>
					   </div>
					  
				</div>
			</div>
		</div>
	
	</section>
			

	
<script src="js/app.js"></script>

</body>

</Html>