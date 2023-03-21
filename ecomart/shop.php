

<?php
session_start();
include('dbconn.php');
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
   case "add":
      if(!empty($_POST["quantity"])) {
         $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
         $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
         
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
      <section >
        <div class="banner-area banner-area2 pos-rel">
         <div class="swiper-container slider__active">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="single-banner single-banner-2 banner-800 d-flex align-items-center pos-rel">
                     <div class="banner-bg banner-bg2 banner-bg2-1" data-background="assets/img/banner/banner-1-2.jpg">
                     </div>
                     <div class="container pos-rel">
                        <div class="row align-items-center">
                           <div class="col-lg-10 col-md-10">
                              <div class="banner-content banner-content2 banner-content2-1 pt-0">
                                 <div class="banner-meta-text" data-animation="fadeInUp" data-delay=".3s">
                                    <span>Fashion Everyday</span>
                                 </div>
                                 <h1 class="banner-title" data-animation="fadeInUp" data-delay=".5s">
                                    Be Standard <br>
                                    Be Our Customer</h1>
                                 <div class="banner-btn" data-animation="fadeInUp" data-delay=".7s">
                                    <a href="shop.php" class="border-btn">Shop Now</a>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div> 
      </section>
      <br>
      <br>
       <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="page-title-wrapper text-center">
                     <h1 class="page-title mb-10">Shop</h1>
                     <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                           <ul class="trail-items">
                              <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                              <li class="trail-item trail-end"><span>Shop</span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <!-- page title area end  -->

      <!-- shop main area start  -->
      <div class="shop-main-area pt-120 pb-10">
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12">
                  <div class="shop-main-wrapper mb-60">
                     <div class="shop-main-wrapper-head mb-30">
                        <div class="swowing-list"> <span></span></div>
                        <div class="sort-type-filter">
                           <div class="sorting-type">
                              <span>Sort by : </span>
                              <select class="sorting-list" name="sorting-list" id="sorting-list">
                                 <option value="1">Default</option>
                                 <option value="2">Most popular</option>
                                 <option value="3">Date</option>
                                 <option value="4">Trending</option>
                                 <option value="4">Featured</option>
                                 <option value="4">Discounted</option>
                              </select>
                           </div>
                           <div class="action-item action-item-filter">
                              <a href="javascript:void(0)" class="view-filter-button">
                                 <i class="flaticon-filter"></i>
                              </a>
                           </div>
                        </div>
                     </div>
             
 
               <div id="product-grid">
   <div class="txt-heading">Products</div>
   <?php
   $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
   if (!empty($product_array)) { 
      foreach($product_array as $key=>$value){
   ?>
   
       
       <div class="product-item">

       <form method="post" action="mycart.php?action=add&id=<?php echo $product_array[$key]["id"]; ?>">

         <div class="product-image" ><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
       
         <div class="product-tile-footer">
         <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
         <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
         <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
         </div>
         </form>

      </div>

   <?php
      }

   }

   ?>


</div>

            </div>

         </div>
      </div>
   </div>
</div>

      <!-- shop
      < main area end  -->






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