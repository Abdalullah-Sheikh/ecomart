

<?php
session_start();
include("dbconn.php");
if(!isset($_SESSION['cname']))
{
   header('Location:login.php');
}
$cust_id=$_SESSION["custid"];
$query= "select * from customer where cid=$cust_id";
$rawData = mysqli_query($conn,$query);
?>



<!doctype html>
<html class="no-js" lang="zxx">



<head>
   <link href="assets/css/style2.css" type="text/css" rel="stylesheet" />
<?php include("header.php"); ?>
</head>

<body>
  

   <!-- header area start  -->
   <header class="header1">
    
       
                        <?php include("nav.php"); ?>
      <!-- page title area start  -->
      <br><br>

         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="page-title-wrapper text-center">
                     <h1 class="page-title mb-10">Checkout</h1>
                     <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                           <ul class="trail-items">
                              <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                              <li class="trail-item trail-end"><span>Checkout</span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>

      <!-- page title area end  -->

     

      <!-- checkout-area start -->
       <form method="post" class="bg-white p-5 contact-form" enctype="multipart/form-data">
      <section class="checkout-area pb-70">
         <div class="container container-small">
         
                  <?php
                 if ($row = mysqli_fetch_array($rawData)) {
                   
        
                    ?>

               <div class="row">
                  <div class="col-lg-5">

                     <div class="checkbox-form">
                        <h3>Billing Details</h3>

                        
                        <div class="row">
                            <div class="col-md-12">
                              <div class="checkout-form-list">
                                 <label>country </label>
                                 <input type="text"   name="country" required value="<?= $row["6"] ?>" >
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>first Name </label>
                                  <input type="text"  class="form-control" required name="firstname" value="<?= $row["fname"] ?>" >
                                 
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>Last  Name </label>
                                 <input type="text" class="form-control" required name="lastname" value="<?= $row["2"] ?>" >
                              </div>
                           </div>

                           <div class="col-md-12">
                              <div class="checkout-form-list">
                                 <label>Address </label>
                                  <input type="text"  class="form-control" required name="address" value="<?= $row["7"] ?>" >
                              </div>
                           </div>
                          
                           
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>State</label>
                                 <input type="text"  class="form-control" required name="State" value="<?= $row["8"] ?>" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>Zip code </label>
                                  <input type="text"  class="form-control" required name="zipcode" value="<?= $row["9"] ?>" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>Email Address </label>
                                  <input type="text"  class="form-control" name="email"  value="<?= $row["4"] ?>" >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="checkout-form-list">
                                 <label>Phone </label>
                                 <input type="text"  class="form-control" required name="Phone" value="<?= $row["10"] ?>">
                              </div>
                           </div>
                            
                          <?php
                             }
                             ?>
                        
                        </div>
                     </div>
                  </div>

 

<div class="col-lg-7">

                     <div class="your-order mb-20 ">
                        <h3>Your order</h3>
                       

     <section class="cart-area pt-100 pb-100">
  
         <div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

   
      <br>
      <br>


<br>


<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?> 
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>

<th >Quantity</th>
<th >Price</th>
<th >Unit Price</th>
<th >Remove</th>
</tr> 
<?php    
    foreach ($_SESSION["cart_item"] as $item)
    {
        $item_price = $item["quantity"]*$item["price"];
      ?>

            <tr>
            <td><?php echo $item["name"]; ?></td>
           
            <td required ><?php echo $item["quantity"]; ?></td>
            <td ><?php echo "$ ".$item["price"]; ?></td>
            <td ><?php echo "$ ". number_format($item_price,2); ?> </td>

            <td ><a href="mycart.php?action=remove&code=<?php echo $item["code"]; ?>" ><img src="icon-delete.png" alt="Remove Item" /></a></td>
            </tr>
            <?php
            $total_quantity += $item["quantity"];
            $total_price += ($item["price"]*$item["quantity"]);
      }
      ?>

<tr>
<td >Total:</td>
<td ><?php echo $total_quantity; ?></td>
<td></td>
<td><strong><?php echo "$".number_format($total_price, 2); ?></strong></td>


</tr>
</tbody>
</table>    

  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>

<?php 
}
?>


                  <div class="row">
                     <div class="col-12">
                       
                           <br>
                           <br>

                        

                       
                       
                      <!--  <input type="submit" value="Add to Cart" name="btn_reg"class="btnAddAction" /></div> -->
                                           <div class="coupon2">
                                            <button onclick="myFunction()" class="fill-btn" name="btn_reg">Placed Order</button>

                                             
                                          </div>
                                                         

                         <!--     <div class="coupon2">
                          <button class="fill-btn" name="btn_reg">Placed order</button>
                        </div>
 -->
                      
                     </div>
                  </div>
         
               </div>
            </div>
         </div>

         <?php

         if(isset($_POST['btn_reg']))
            {

                foreach ($_SESSION["cart_item"] as $item)
                    {
                              $order_name= $item["name"];
                              $order_code= $item["code"];


                            $product_id= $item["id"];                   
                            $order_quantity= $item["quantity"];
                            $item_price = $item["quantity"]*$item["price"];
                            $order_bill= $item_price;
                            $cust_id=$_SESSION["custid"];
                           

                            
                                       $query="insert into tbl_orders values ('',now(),'".$product_id."','".$order_quantity."','".$cust_id."','".$order_bill."')";

                                            $insert = mysqli_query($conn,$query);

                                           
                        }
                         if($insert)
                                            {
                                             
                                             // header('location:mycart.php?action=empty');
                                             // echo '<script>alert("Your order is placed")</script>';

                                             
                                              echo "<script>
                                                alert('Your order is placed');
                                                window.location.href='mycart.php?action=empty';
                                                </script>";

                                            }
                                            else
                                            {
                                                echo "<p class='text-danger'>".mysqli_error($conn)."</p>";
                                            }  

            }
            
        ?>
      </form>          

      </section>
        
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