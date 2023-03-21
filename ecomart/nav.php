<?php

@session_start();
ob_start();

?>     

 <div id="header-sticky" class="header-main header-main1">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-12 col-lg-12">
                  <div class="header-main-content-wrapper">
                     <div class="header-main-left header-main-left-header1">
                        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
                        <div class="header-logo header1-logo">
                           <a href="index.php" class="logo-bl"><img src="assets/img/logo/logo-bl.png"
                                 alt="logo-img"></a>



 <?php
              if(isset($_SESSION['cname']))
              {    
         ?>
        
           <li>Welcome: <b><?= $_SESSION['cname'] ?></b></li>
          

         <?php
        }
            
         ?>
          
   </div>
   &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;&nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;

                      <div class="main-menu main-menu1 d-none d-lg-block">
                           <nav id="mobile-menu">
                              <ul>
                                 <li ><a href="index.php">Home</a>
                                    
                                      <!--  <li><a href="index.php">Home Style 01</a></li> -->
                                      
                                   
                                 </li>
                                 <li ><a href="shop.php">Shop</a>
                                    
                                 </li>
                                 <li class="menu-item-has-children"><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                       <li><a href="about.php">About</a></li>
                                      
                                      
                                       <li><a href="faq.php">FAQ</a></li>
                                      
                                    </ul>
                                 </li>
                                 <li class="menu-item-has-children"><a href="blog.php">Blog</a>
                                    <ul class="sub-menu">
                                       <li><a href="blog.php">Blog</a></li>
                                       <li><a href="blog-details.php">Blog Details</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="contact.php">Contact</a></li>
                                  <li><a href="mycart.php">My Cart</a></li>
                                
                                  <?php
              if(isset($_SESSION['cname']))
              {    
         ?>
  
         
           <li><a href="logout.php">Logout</a></li>

         <?php
        }
            else
              {
         ?>
          <li><a href="login.php">Login</a></li>
           <?php
               }
             ?>
       
                
                              </ul>
                           </nav>
                        </div>
                     </div>
                     
   </header>



   <!-- header area end -->

   <!-- Add your site or application content here -->
 <main>


      <!-- side toggle start -->
      <div class="fix">
         <div class="side-info">
            <div class="side-info-content">
               <div class="offset-widget offset-logo mb-40">
                  <div class="row align-items-center">
                     <div class="col-9">
                        <a href="index.php">
                           <img src="assets/img/logo/logo-bl.png" alt="Logo">
                        </a>
                     </div>
                     <div class="col-3 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button>
                     </div>
                  </div>
               </div>
               <div class="mobile-menu d-lg-none fix"></div>
               <div class="offset-profile-action d-md-none">
                  <div class="offset-widget mb-40">
                     <div class="action-list action-list-header1">
                        <div class="action-item action-item-cart">
                           <a href="javascript:void(0)" class="view-cart-button">
                              <i class="fal fa-shopping-bag"></i>
                              <span class="action-item-number">3</span></a>
                        </div>
                        <div class="action-item action-item-wishlist">
                           <a href="javascript:void(0)" class="view-wishlist-button">
                              <i class="fal fa-heart"></i>
                              <span class="action-item-number">2</span></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="offset-widget offset_searchbar mb-30">
                  <form action="#" class="filter-search-input">
                     <input type="text" placeholder="Search keyword">
                     <button><i class="fal fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="offcanvas-overlay"></div>
      <div class="offcanvas-overlay-white"></div>

      <div class="fix">
         <div class="sidebar-action sidebar-cart">
            <button class="close-sidebar">Close<i class="fal fa-times"></i></button>
            <h4 class="sidebar-action-title">Shopping Cart</h4>
            <div class="sidebar-action-list">
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.php" class=""><img src="assets/img/shirt/3/1.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.php">Felted Shirt for Man</a></div>
                     <div class="product-pricing">
                        <span class="item-number">1 &times;</span>
                        <span class="price-now">$24.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.php" class=""><img src="assets/img/pant/1/4.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.php">Denim Jeans Pant</a></div>
                     <div class="product-pricing">
                        <span class="item-number">1 &times;</span>
                        <span class="price-now">$12.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.php" class=""><img src="assets/img/jacket/2/2.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.php">Denim Official Jacket</a></div>
                     <div class="product-pricing">
                        <span class="item-number">1 &times;</span>
                        <span class="price-now">$42.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>

            </div>
            <div class="product-price-total">
               <span>Subtotal :</span>
               <span class="subtotal-price">$78.00</span>
            </div>
            <div class="sidebar-action-btn">
               <a href="cart.php" class="fill-btn">View cart</a>
               <a href="checkout.php" class="border-btn">Checkout</a>
            </div>
         </div>
      </div>
      <div class="fix">
         <div class="sidebar-action sidebar-wishlist">
            <button class="close-sidebar">Close<i class="fal fa-times"></i></button>
            <h4 class="sidebar-action-title">Wishlist</h4>
            <div class="sidebar-action-list">
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.php" class=""><img src="assets/img/shirt/1/1.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.php">Women's Faux-Trim Shirt</a></div>
                     <div class="product-pricing">
                        <span class="price-now">$20.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.php" class=""><img src="assets/img/pant/1/1.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.php">Skinny Jeans Pant</a></div>
                     <div class="product-pricing">
                        <span class="price-now">$24.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>

            </div>
            <div class="product-price-total">
               <span>Subtotal :</span>
               <span class="subtotal-price">$44.00</span>
            </div>
            <div class="sidebar-action-btn">
               <a href="cart.php" class="fill-btn">View cart</a>
               <a href="cart.php" class="border-btn">Checkout</a>
            </div>
         </div>
      </div>
      <!-- side toggle end -->