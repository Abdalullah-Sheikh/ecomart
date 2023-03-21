<?php
session_start();

if(isset($_SESSION['name']))
{
	header('Location:index.php');
}


?>

<!DOCTYPE Html>
<Html lang="en">

<head>
<title>Sign IN</title>
<?php include ("header.php"); ?>
</head>

<body>
<form method="post">
						
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Welcome back, Charles</h1>
							<p class="lead">
								Sign in to your account to continue
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="img/avatars/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
									<form method="post"> 

							
							<div class= "row">
                            <div class="col-lg-12">
                            <p><label class="label-primary">Enter Name: </label>
                            <input type = "name" required name="name" class="form-control" /> </p>
                            </div>
                            </div>

							<div class= "row">
                            <div class="col-lg-12">
                            <p><label class="label-primary">Enter password: </label>
                            <input type = "password" required name="password" class="form-control" /> </p>
                            </div>
                            </div>
							<input type="submit" name="sbt" value="Login to your account">
								


									<?php

						if(isset($_POST['sbt']))
						{
							if($_POST['name'] == "admin" && $_POST['password'] == "admin")
							{
								$_SESSION['name'] = "admin";
								header('Location:index.php');
							}
							else
							{
								echo "<p class='text-danger'>Invalid Username/Password </p>";	
							}
						}
							?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</Html>