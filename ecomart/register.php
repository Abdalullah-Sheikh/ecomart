<?php

include('dbconn.php');

?>
<!doctype html>
<html class="no-js" lang="zxx">



<head>
<?php include("header.php"); ?>
<style>
   .page-title-area {
  height: 70px;
  display: flex;
  align-items: center;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
}
</style>
</head>

<body>
  

   <!-- header area start  -->
   <header class="header1">
        
                        <?php include("nav.php"); ?>      <!-- page title area start  -->
                        <br>
                        
      <!-- page title area start  -->
      <section class="page-title-area" data-background="assets/img/logo/logo-bl.png">
         
      </section>
      <br>
      <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="page-title-wrapper text-center">
                     <h1 class="page-title mb-10">Register</h1>
                     <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                           <ul class="trail-items">
                              <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                              <li class="trail-item trail-end"><span>Register</span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>

    <!--   <section class="page-title-area" data-background="assets/img/bg/page-title-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="page-title-wrapper text-center">
                     <h1 class="page-title mb-10">Register</h1>
                     <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                           <ul class="trail-items">
                              <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                              <li class="trail-item trail-end"><span>Register</span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <!-- page title area end  -->

      <!-- register area start  -->
       <form method="post" class="bg-white p-5 contact-form" enctype="multipart/form-data">
      <div class="register-area pt-5 pb-5">
         <div class="container container-small">
            <div class="row justify-content-center">
               <div class="col-lg-8">
                  <div class="signup-form-wrapper">
                     <div class="row">
                        <form method="post" class="bg-white p-5 contact-form" enctype="multipart/form-data">
            <div class="col-md-6">
            <div class="signup-wrapper">
                <input type="text" required class="form-control" name="fname" placeholder="First Name">
              </div>
           </div>
           <div class="col-md-6">
            <div class="signup-wrapper">
                <input type="text" required class="form-control" name="lname" placeholder="Last Name">
              </div>
           </div>
             <div class="col-md-12">
            <div class="signup-wrapper">
                <input type="text" required class="form-control" name="cname" placeholder="User name">
              </div>
            <div class="col-md-12">
            <div class="signup-wrapper">
                <input type="email" required class="form-control" name="cemail" placeholder="Your Email">
              </div>
           </div>
              <div class="col-md-12">
            <div class="signup-wrapper">
                <input type="password" required class="form-control" name="cpassword" placeholder="Your Password">
              </div>
           </div>
           <div class="col-md-12">
            <div class="signup-wrapper">
                <input type="text" required class="form-control" name="country" placeholder="Country">
              </div>
           </div>
           <div class="col-md-12">
            <div class="signup-wrapper">
                <input type="text" required class="form-control" name="address" placeholder="Address">
              </div>
           </div>
           <div class="col-md-12">
            <div class="signup-wrapper">
                <input type="text" required class="form-control" name="state" placeholder="State">

              </div>
           </div>
           <div class="col-md-12">
            <div class="signup-wrapper">
                <input type="text" required class="form-control" name="zipcode" placeholder="Zip Code">
              </div>
           </div>
           <div class="col-md-12">
            <div class="signup-wrapper">
                <input type="phone number" required class="form-control" name="Phone" placeholder="Phone number">
              </div>
           </div>





              

            <div class="signup-action">
                        <div class="course-sidebar-list">
                           <input class="signup-checkbo"required type="checkbox" id="sing-up">
                           <label class="sign-check" for="sing-up"><span>Accept the terms and <a href="#">Privacy
                                    Policy</a></span></label>
                        </div>
                     </div>
                    
                     <div class="acount-login text-center">
                        <span>Already have an account? <a href="login.php">Log in</a></span>
                     </div>
              
                <div class="sing-buttom mb-20">
                <button type="submit"  name="btn_reg" class="sing-btn">Register Now </button>
              </div>
                <div class="sign-social text-center">
                        <span>Or Sign- in with</span>
                     </div>
                   
      <div class="sign-social-icon">
                        <div class="sign-facebook">
                           <svg xmlns="http://www.w3.org/2000/svg" width="9.034" height="18.531"
                              viewBox="0 0 9.034 18.531">
                              <path id="Path_212" data-name="Path 212"
                                 d="M183.106,757.2v-1.622c0-.811.116-1.274,1.39-1.274h1.621v-3.127h-2.664c-3.243,0-4.285,1.506-4.285,4.169v1.969h-2.085v3.127h1.969v9.265h4.054v-9.265h2.664l.347-3.243Z"
                                 transform="translate(-177.083 -751.176)" fill="#2467ec"></path>
                           </svg>
                           <a href="https://www.facebook.com/">Facebook</a>
                        </div>
                        <div class="sign-gmail">
                           <svg xmlns="http://www.w3.org/2000/svg" width="21.692" height="16.273"
                              viewBox="0 0 21.692 16.273">
                              <g id="gmail" transform="translate(0 -63.953)">
                                 <path id="Path_8685" data-name="Path 8685"
                                    d="M1.479,169.418H4.93v-8.381l-2.26-3.946L0,157.339v10.6a1.479,1.479,0,0,0,1.479,1.479Z"
                                    transform="translate(0 -89.192)" fill="#0085f7"></path>
                                 <path id="Path_8686" data-name="Path 8686"
                                    d="M395.636,169.418h3.451a1.479,1.479,0,0,0,1.479-1.479v-10.6l-2.666-.248-2.264,3.946v8.381Z"
                                    transform="translate(-378.874 -89.192)" fill="#00a94b"></path>
                                 <path id="Path_8687" data-name="Path 8687"
                                    d="M349.816,65.436,347.789,69.3l2.027,2.541,4.93-3.7V66.176A2.219,2.219,0,0,0,351.2,64.4Z"
                                    transform="translate(-333.054)" fill="#ffbc00"></path>
                                 <path id="Path_8688" data-name="Path 8688"
                                    d="M72.7,105.365l-1.932-4.08L72.7,98.956l5.916,4.437,5.916-4.437v6.409L78.619,109.8Z"
                                    transform="translate(-67.773 -33.52)" fill="#ff4131" fill-rule="evenodd"></path>
                                 <path id="Path_8689" data-name="Path 8689"
                                    d="M0,66.176v1.972l4.93,3.7V65.436L3.55,64.4A2.219,2.219,0,0,0,0,66.176Z"
                                    transform="translate(0)" fill="#e51c19"></path>
                              </g>
                           </svg>
                           <a href="https://www.google.com/gmail/">Google</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

               

              <br/>
              Already a Registered User? <a href="login.php" >Click Here</a>

            <br/>


            <?php

                if(isset($_POST['btn_reg']))
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
                    $phone= $_POST['Phone'];
                   

                           $query="insert into customer values ('','".$fname."','".$lname."','".$cname."','".$cemail."','".$cpassword."','".$country."','".$address."','".$state."','".$zipcode."','".$phone."')";
                                    $insert = mysqli_query($conn,$query);
                                    if($insert)
                                    {
                                     
                                        echo '<script>alert("registered successfully")</script>';
                                    }
                                    else
                                    {
                                        echo "<p class='text-danger'>".mysqli_error($conn)."</p>";
                                    }  
                                
                               

                  

                }
            ?>
            </form>
   


   </main>

   <!-- footer area start  -->
   <?php include("footer.php"); ?>   <!-- footer area end  -->

   <!-- pre loader area start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
               <img src="assets/img/logo/logo-text.png" alt="logo-img">
               <img class="loading-logo" src="assets/img/logo/preloader.svg" alt="img">
            </div>
         </div>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->


   <!-- JS here -->
   <?php include("js.php"); ?>
</body>


</html>