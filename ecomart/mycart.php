<?php
session_start();
include("dbconn.php");
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
   case "add":
      if(!empty($_POST["quantity"])) {
         $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE id='" . $_GET["id"] . "'");
         $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 
          'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"],
           'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"],
            'id'=>$productByCode[0]["id"]));
         
         if(!empty($_SESSION["cart_item"])) {
            if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
               foreach($_SESSION["cart_item"] as $k => $v) {
                     if($productByCode[0]["code"] == $k) {
                        if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                           $_SESSION["cart_item"][$k]["quantity"] = 0;
                        }
                        $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                     }
               }
            } else {
               $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
            }
         } else {
            $_SESSION["cart_item"] = $itemArray;
         }
      }
   break;
   case "remove":
      if(!empty($_SESSION["cart_item"])) {
         foreach($_SESSION["cart_item"] as $k => $v) {
               if($_GET["code"] == $k)
                  unset($_SESSION["cart_item"][$k]);           
               if(empty($_SESSION["cart_item"]))
                  unset($_SESSION["cart_item"]);
         }
      }
   break;
   case "empty":
      unset($_SESSION["cart_item"]);
   break;   
}
}
?>
<style>
  .cart-item-image {
  width: 70px;
    height: 70px;
    border-radius: 45%;
    border: #E0E0E0 1px solid;
    padding: 5px;
    vertical-align: middle;
    margin-right: 15px;

}
  
</style>



<!doctype html>
<html class="no-js" lang="zxx">
<head>
   
<?php include("header.php"); ?>
<!--  <link href="assets/css/style2.css" type="text/css" rel="stylesheet" /> -->
</head>

<body>
   

   <!-- header area start  -->
   <header class="header1">
          
                        <div class="main-menu main-menu1 d-none d-lg-block">
                        <?php include("nav.php"); ?>
      <!-- page title area start  -->
     <br>
     <br>
     
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="page-title-wrapper text-center">
                     <h1 class="page-title mb-10">My Cart</h1>
                     <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                           <ul class="trail-items">
                              <li class="trail-item trail-begin" style="color:white;"><a href="index.php"><span>Home</span></a></li>
                              <li class="trail-item trail-end"><span>Cart</span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   
      <!-- page title area end  -->

      <!-- cart area start  -->
      <section class="cart-area pt-50 pb-50">
         <div id="shopping-cart">
<div class="txt-heading"><h2>Shopping Cart</h2></div>
<form method="post" class="bg-white p-5 contact-form" enctype="multipart/form-data">
   <div class="coupon2">
   <a class="fill-btn" href="mycart.php?action=empty">Empty Cart</a>
   </div>
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
<!-- <th style="text-align:left;">id</th> -->
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>&nbsp;&nbsp;
<th style="text-align:right;" width="10%">Remove</th>
</tr> 
<?php    
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
      ?>
            <tr>
            <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
          <!--   <td><?php echo $item["id"]; ?></td> -->
            <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
            <td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
            <td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
            <td style="text-align:right;"><a href="mycart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
            </tr>
            <?php
            $total_quantity += $item["quantity"];
            $total_price += ($item["price"]*$item["quantity"]);
      }
      ?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>

<td></td>
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

                        

                       <a class="fill-btn" href="shop.php">update Cart</a>

                          <div class="coupon2">
                           <a class="fill-btn" href="checkout.php">Proceed to checkout</a>
                          <!-- <button class="fill-btn" name="btn_reg">Register now</button> -->

                          
                        </div>


                     </div>
                  </div>
                 
               </div>
            </div>
         </div>


         <?php

                if(isset($_POST['btn_reg']))
                {
                    $order_name= $item["name"];
                    $order_code= $item["code"];
                    $order_quantity= $item["quantity"];
                    $order_price= $total_price;
                   
                   

                           $query="insert into order_product values ('','".$order_name."','".$order_code."','".$order_quantity."','".$order_price."')";
                                    $insert = mysqli_query($conn,$query);
                                    if($insert)
                                    {
                                        echo "<p class='text-success'>Order successfully placed</p>";
                                    }
                                    else
                                    {
                                        echo "<p class='text-danger'>".mysqli_error($conn)."</p>";
                                    }  


                }
            ?>
            </form>
                                

      </section>
      <!-- cart area end  -->







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
  

   <!-- JS here -->
   <?php include("js.php"); ?>
</body>



</html>