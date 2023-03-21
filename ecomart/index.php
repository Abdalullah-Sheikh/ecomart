<?php
include('dbconn.php');
session_start();


?>



<!doctype html>
<html class="no-js" lang="zxx">



<head>
 
<?php include("header.php"); ?>
</head>

<body>
  
   <header class="header1">
    
        
                     <?php include("nav.php"); ?>
      <!-- banner area start  -->
      <div class="banner-area banner-area2 pos-rel">
         <div class="swiper-container slider__active">
            <div class="swiper-wrapper">
               <div class="swiper-slide">
                  <div class="single-banner single-banner-2 banner-800 d-flex align-items-center pos-rel">
                     <div class="banner-bg banner-bg2 banner-bg2-1" data-background="assets/img/banner/banner-2-1.jpg">
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
                           <div class="col-lg-2 col-md-2">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="single-banner single-banner-2 banner-800 d-flex align-items-center pos-rel">
                     <div class="banner-bg banner-bg2 banner-bg2-1" data-background="assets/img/banner/banner-2-2.jpg">
                     </div>
                     <div class="container pos-rel">
                        <div class="row align-items-center">
                           <div class="col-lg-10 col-md-10">
                              <div class="banner-content banner-content2 banner-content2-2 pt-0">
                                 <div class="banner-meta-text" data-animation="fadeInUp" data-delay=".3s">
                                    <span>Fashion Everyday</span>
                                 </div>
                                 <h1 class="banner-title" data-animation="fadeInUp" data-delay=".5s">
                                    Winter Exclusive
                                    Collection</h1>
                                 <div class="banner-btn" data-animation="fadeInUp" data-delay=".7s">
                                    <a href="shop.php" class="border-btn">Shop Now</a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-2 col-md-2">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="swiper-slide">
                  <div class="single-banner single-banner-2 banner-800 d-flex align-items-center pos-rel">
                     <div class="banner-bg banner-bg2 banner-bg2-1" data-background="assets/img/banner/banner-2-3.jpg">
                     </div>
                     <div class="container pos-rel">

                        <div class="row align-items-center">
                           <div class="col-lg-2 col-md-2"></div>
                           <div class="col-lg-10 col-md-10">
                              <div class="banner-content banner-content2 banner-content2-3 pt-0">

                                 <div class="banner-meta-text" data-animation="fadeInUp" data-delay=".3s">
                                    <span>Fashion Everyday</span>
                                 </div>
                                 <h1 class="banner-title" data-animation="fadeInUp" data-delay=".5s">
                                    Stylist Sunglass
                                    For Hot Guy</h1>
                                 <div class="banner-btn" data-animation="fadeInUp" data-delay=".7s">
                                    <a href="shop.php" class="border-btn">Shop Now</a>
                                 </div>
                                 <div class="banner-pricing" data-animation="fadeIn" data-delay=".7s">
                                    Exclusively
                                    <span class="price-now">£89</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- If we need navigation buttons -->
            <div class="slider-nav d-none">
               <div class="slider-button-prev"><i class="fal fa-long-arrow-left"></i></div>
               <div class="slider-button-next"><i class="fal fa-long-arrow-right"></i></div>
            </div>
            <div class="slider2-pagination-container">
               <div class="container">
                  <!-- If we need pagination -->
                  <div class="slider-pagination slider2-pagination"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner area end  -->

      <!-- product area start  -->
      <section class="product-area pt-120 pb-120">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-8">
                  <div class="section-title text-center">
                     <h2 class="section-main-title mb-35">Products of the week</h2>
                  </div>
               </div>
            </div>
            <div class="product-tab-wrapper">
               <div class="product-tab-nav mb-60">
                  <nav>
                     <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1"
                           type="button" role="tab" aria-controls="nav-1" aria-selected="true">Best Seller <span
                              class="total-product">[57]</span></button>
                        <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2"
                           type="button" role="tab" aria-controls="nav-2" aria-selected="false">Hot Collection<span
                              class="total-product">
                              [25]</span></button>
                        <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3"
                           type="button" role="tab" aria-controls="nav-3" aria-selected="false">Trendy<span
                              class="total-product">[32]</span>
                        </button>
                        <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4"
                           type="button" role="tab" aria-controls="nav-4" aria-selected="false">New Arrival<span
                              class="total-product">[64]
                           </span></button>
                     </div>
                  </nav>
               </div>

                  <div class="category-area2 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="product-category2-wrapper">
                     <div class="product-category2-single pos-rel">
                        <div class="product-category-img">
                           <a href="shop.php"><img src="assets/img/product_category/product-cat-6.jpg"
                                 alt="product-img"></a>
                        </div>
                        <div class="product-category-inner">
                           <div class="product-category-content">
                              <a href="shop.php" class="product-category">Winter Wear</a>
                           </div>
                        </div>
                     </div>
                     <div class="product-category2-single pos-rel">
                        <div class="product-category-img">
                           <a href="shop.php"><img src="assets/img/product_category/product-cat-7.jpg"
                                 alt="product-img"></a>
                        </div>
                        <div class="product-category-inner">
                           <div class="product-category-content">
                              <a href="shop.php" class="product-category">Exclusive Footwear</a>
                           </div>
                        </div>
                     </div>
                     <div class="product-category2-single pos-rel">
                        <div class="product-category-img">
                           <a href="shop.php"><img src="assets/img/product_category/product-cat-8.jpg"
                                 alt="product-img"></a>
                        </div>
                        <div class="product-category-inner">
                           <div class="product-category-content">
                              <a href="shop.php" class="product-category">Sunglass & Eye</a>
                           </div>
                        </div>
                     </div>
                     <div class="product-category2-single pos-rel">
                        <div class="product-category-img">
                           <a href="shop.php"><img src="assets/img/product_category/product-cat-9.jpg"
                                 alt="product-img"></a>
                        </div>
                        <div class="product-category-inner">
                           <div class="product-category-content">
                              <a href="shop.php" class="product-category">Active & Outdoor</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>









       <section class="blog-area pt-120 pb-110">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-xl-8">
                  <div class="section-title text-center">
                     <h2 class="section-main-title mb-50">Latest fashion news</h2>
                  </div>
               </div>
            </div>
            <div class="blog-items-wrapper">
               <div class="blog-single">
                  <div class="blog-single-inner">
                     <div class="blog-img">
                        <a href="blog-details.php">
                           <img src="assets/img/blog/b-1.jpg" alt="blog-img">
                        </a>
                     </div>
                     <div class="blog-content">
                        <div class="blog-meta-list">
                           <div class="blog-meta-item">
                              <div class="blog-meta-icon">
                                 <i class="fal fa-folder-open"></i>
                              </div>
                              <div class="blog-meta-content">
                                 <a href="blog.php">Fashion</a>
                              </div>
                           </div>
                           <div class="blog-meta-item">
                              <div class="blog-meta-icon">
                                 <i class="fal fa-clock"></i>
                              </div>
                              <div class="blog-meta-content">
                                 <a href="blog.php">31 Mar 2021</a>
                              </div>
                           </div>
                        </div>
                        <h4 class="blog-title"><a href="blog-details.php">Worthy Cyber Monday Fashion
                              From Ecomart</a></h4>
                     </div>
                  </div>

               </div>
               <div class="blog-single">
                  <div class="blog-single-inner">
                     <div class="blog-img">
                        <a href="blog-details.php">
                           <img src="assets/img/blog/b-3.jpg" alt="blog-img">
                        </a>
                     </div>
                     <div class="blog-content">
                        <div class="blog-meta-list">
                           <div class="blog-meta-item">
                              <div class="blog-meta-icon">
                                 <i class="fal fa-folder-open"></i>
                              </div>
                              <div class="blog-meta-content">
                                 <a href="blog.php">Fashion</a>
                              </div>
                           </div>
                           <div class="blog-meta-item">
                              <div class="blog-meta-icon">
                                 <i class="fal fa-clock"></i>
                              </div>
                              <div class="blog-meta-content">
                                 <a href="blog.php">31 Mar 2021</a>
                              </div>
                           </div>
                        </div>
                        <h4 class="blog-title"><a href="blog-details.php">Holiday Home Decoration I’ve
                              Recently Ordered</a></h4>
                     </div>
                  </div>

               </div>
               <div class="blog-single">
                  <div class="blog-single-inner">
                     <div class="blog-img">
                        <a href="blog-details.php">
                           <img src="assets/img/blog/b-2.jpg" alt="blog-img">
                        </a>
                     </div>
                     <div class="blog-content">
                        <div class="blog-meta-list">
                           <div class="blog-meta-item">
                              <div class="blog-meta-icon">
                                 <i class="fal fa-folder-open"></i>
                              </div>
                              <div class="blog-meta-content">
                                 <a href="blog.php">Fashion</a>
                              </div>
                           </div>
                           <div class="blog-meta-item">
                              <div class="blog-meta-icon">
                                 <i class="fal fa-clock"></i>
                              </div>
                              <div class="blog-meta-content">
                                 <a href="blog.php">31 Mar 2021</a>
                              </div>
                           </div>
                        </div>
                        <h4 class="blog-title"><a href="blog-details.php">Unique Ideas for Fashion You
                              Haven’t heard yet</a></h4>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </section>
              

               <div class="features-area features-area2">
         <div class="container">
            <div class="hr1"></div>
            <div class="features-wrapper">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="features-single">
                        <div class="irc-item">
                           <div class="irc-item-icon">
                              <svg id="_003-scooter" data-name="003-scooter" xmlns="http://www.w3.org/2000/svg"
                                 width="46.699" height="40.604" viewBox="0 0 46.699 40.604">
                                 <path id="Path_3267" data-name="Path 3267"
                                    d="M50.456,29.234h11.6a3.356,3.356,0,0,0,3.352-3.352V14.731a3.427,3.427,0,0,0-3.423-3.424H50.456a3.427,3.427,0,0,0-3.423,3.424V25.81a3.427,3.427,0,0,0,3.423,3.424ZM61.983,12.722a2.011,2.011,0,0,1,2.008,2.009V25.882a1.939,1.939,0,0,1-1.937,1.937h-11.6a2.011,2.011,0,0,1-2.008-2.009V14.731a2.01,2.01,0,0,1,2.008-2.009Z"
                                    transform="translate(-47.033 -11.307)" fill="#171717" />
                                 <path id="Path_3268" data-name="Path 3268"
                                    d="M46.526,41.883H59.247a.708.708,0,0,0,.708-.708V37.97a3.33,3.33,0,0,0-3.326-3.325h-10.1A3.33,3.33,0,0,0,43.2,37.97v.587a3.33,3.33,0,0,0,3.326,3.326ZM58.54,40.468H46.526a1.91,1.91,0,0,1-1.91-1.91v-.587a1.91,1.91,0,0,1,1.91-1.91h10.1a1.91,1.91,0,0,1,1.91,1.91Z"
                                    transform="translate(-38.869 -18.132)" fill="#171717" />
                                 <path id="Path_3269" data-name="Path 3269"
                                    d="M26.589,55.345H57.783a.708.708,0,1,0,0-1.415H26.589A1.79,1.79,0,0,1,24.8,52.193c1.031-6.683,6.17-7.871,6.389-7.918A.708.708,0,1,0,30.9,42.89c-.064.013-6.344,1.415-7.5,9.149a.747.747,0,0,0-.008.105A3.207,3.207,0,0,0,26.589,55.345Z"
                                    transform="translate(-23.386 -20.539)" fill="#171717" />
                                 <path id="Path_3270" data-name="Path 3270"
                                    d="M46.021,55.345a.708.708,0,0,0,.551-1.15,7.567,7.567,0,0,1-.035-10.131A.708.708,0,1,0,45.5,43.1a9.113,9.113,0,0,0-.034,11.983A.708.708,0,0,0,46.021,55.345Z"
                                    transform="translate(-25.643 -20.538)" fill="#171717" />
                                 <path id="Path_3271" data-name="Path 3271"
                                    d="M53.272,65.441A6.246,6.246,0,0,0,59.511,59.2a.708.708,0,0,0-1.415,0,4.824,4.824,0,1,1-9.648,0,.708.708,0,0,0-1.415,0A6.246,6.246,0,0,0,53.272,65.441Z"
                                    transform="translate(-41.138 -25.107)" fill="#171717" />
                                 <path id="Path_3272" data-name="Path 3272"
                                    d="M55.106,52.1h3.267a.708.708,0,1,0,0-1.415H55.108a.708.708,0,1,0,0,1.415Z"
                                    transform="translate(-45.92 -22.824)" fill="#171717" />
                                 <path id="Path_3273" data-name="Path 3273"
                                    d="M13.5,63.317A6.5,6.5,0,1,0,7,56.808,6.5,6.5,0,0,0,13.5,63.317Zm0-11.59a5.088,5.088,0,1,1-5.082,5.082A5.088,5.088,0,0,1,13.5,51.727Z"
                                    transform="translate(26.691 -22.714)" fill="#171717" />
                                 <path id="Path_3274" data-name="Path 3274"
                                    d="M8.107,55.337a.708.708,0,0,0,.675-.92,7.783,7.783,0,1,1,15.2-2.36,5.785,5.785,0,0,1-.114,1.216.676.676,0,0,0-.016.146.708.708,0,0,0,1.411.1,7.358,7.358,0,0,0,.134-1.459A9.2,9.2,0,1,0,7.432,54.846.708.708,0,0,0,8.107,55.337Z"
                                    transform="translate(21.302 -20.535)" fill="#171717" />
                                 <path id="Path_3275" data-name="Path 3275"
                                    d="M19.709,48.117a.708.708,0,0,0,.708-.708V34.222a5.8,5.8,0,0,1,4.528-5.757l.047-.008,2.519,10.637a.707.707,0,1,0,1.377-.325L26.225,27.511a.7.7,0,0,0-.747-.541,7.877,7.877,0,0,0-.786.1A7.14,7.14,0,0,0,19,34.222V47.409A.708.708,0,0,0,19.709,48.117Z"
                                    transform="translate(9.301 -15.887)" fill="#171717" />
                                 <path id="Path_3276" data-name="Path 3276"
                                    d="M19.708,25.984H31.1a.708.708,0,0,0,.708-.708v-5.8a.708.708,0,0,0-.708-.708H28.722A4.029,4.029,0,0,0,24.7,22.792v1.775h-4.99a.708.708,0,1,0,0,1.415ZM30.4,24.569H26.113V22.794a2.612,2.612,0,0,1,2.609-2.609H30.4Z"
                                    transform="translate(6.396 -13.489)" fill="#171717" />
                                 <path id="Path_3277" data-name="Path 3277"
                                    d="M47.741,20.915H64.7a.708.708,0,1,0,0-1.415H47.741a.708.708,0,1,0,0,1.415Z"
                                    transform="translate(-47.033 -13.703)" fill="#171717" />
                                 <path id="Path_3278" data-name="Path 3278"
                                    d="M14.831,61.427a3.284,3.284,0,1,0-3.284-3.284,3.285,3.285,0,0,0,3.284,3.284Zm0-5.153a1.869,1.869,0,1,1-1.869,1.869A1.869,1.869,0,0,1,14.831,56.274Z"
                                    transform="translate(25.366 -24.044)" fill="#171717" />
                              </svg>
                           </div>
                           <div class="irc-item-content">
                              <div class="irc-item-heading">Free Shipping</div>
                              <p>On All Order Over $599</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="features-single">
                        <div class="irc-item">
                           <div class="irc-item-icon">
                              <svg id="_004-return" data-name="004-return" xmlns="http://www.w3.org/2000/svg"
                                 width="41.583" height="40.603" viewBox="0 0 41.583 40.603">
                                 <path id="Path_3279" data-name="Path 3279"
                                    d="M263.129,392.394a.609.609,0,0,0,.609-.609v-1.07a.609.609,0,1,0-1.219,0v1.07A.609.609,0,0,0,263.129,392.394Zm0,0"
                                    transform="translate(-241.198 -358.423)" fill="#171717" />
                                 <path id="Path_3280" data-name="Path 3280"
                                    d="M408.754,392.394a.609.609,0,0,0,.609-.609v-1.07a.609.609,0,1,0-1.219,0v1.07A.609.609,0,0,0,408.754,392.394Zm0,0"
                                    transform="translate(-374.997 -358.423)" fill="#171717" />
                                 <path id="Path_3281" data-name="Path 3281"
                                    d="M319.429,404.232a2.54,2.54,0,0,0,1.918-.854.609.609,0,1,0-.917-.8,1.364,1.364,0,0,1-2,0,.609.609,0,0,0-.918.8,2.539,2.539,0,0,0,1.918.854Zm0,0"
                                    transform="translate(-291.586 -369.69)" fill="#171717" />
                                 <path id="Path_3282" data-name="Path 3282"
                                    d="M101.007,7.387l5.508,4.8a1.492,1.492,0,0,0,2.453-1.116v-.948a10.7,10.7,0,0,1,4.372,1.2,7.814,7.814,0,0,1,3.65,4.446,1.492,1.492,0,0,0,1.427,1.031c.156,0,.312-.013.467-.02a1.508,1.508,0,0,0,1.425-1.569V15.2a11.929,11.929,0,0,0-1.032-4.222,13.808,13.808,0,0,0-5.852-6.143,20.344,20.344,0,0,0-4.458-1.784V1.47A1.5,1.5,0,0,0,106.515.354l-5.508,4.8a1.5,1.5,0,0,0,0,2.232Zm.8-1.313,5.508-4.8a.263.263,0,0,1,.434.2V3.519a.609.609,0,0,0,.471.593c.117.027.248.063.368.1A19.209,19.209,0,0,1,112.8,5.886a12.639,12.639,0,0,1,5.364,5.6,10.7,10.7,0,0,1,.924,3.785v.009a.277.277,0,0,1-.264.287l-.4.018h-.014a.281.281,0,0,1-.268-.187,9.043,9.043,0,0,0-4.229-5.142,12.136,12.136,0,0,0-5.5-1.375.625.625,0,0,0-.673.608v1.584a.264.264,0,0,1-.434.2l-5.508-4.8a.265.265,0,0,1,0-.395Zm0,0"
                                    transform="translate(-92.345 -0.001)" fill="#171717" />
                                 <path id="Path_3283" data-name="Path 3283"
                                    d="M1.81,228.131H3.284v9.584A2.485,2.485,0,0,0,5.766,240.2H35.817a2.485,2.485,0,0,0,2.482-2.482v-9.584h1.473a1.831,1.831,0,0,0,1.684-2.485l-3.2-8.025a.609.609,0,0,0-.566-.384H34.472a.609.609,0,0,0,0,1.219h2.805l3.048,7.641a.6.6,0,0,1-.552.815H20.689a.6.6,0,0,1-.552-.374l-3.224-8.082H32.035a.609.609,0,1,0,0-1.218H3.893a.609.609,0,0,0-.566.383l-3.2,8.025a1.83,1.83,0,0,0,1.684,2.485Zm14.2,6.444a.609.609,0,0,0,.609-.609V221.019L19,226.99a1.8,1.8,0,0,0,1.684,1.141H37.081v9.584a1.265,1.265,0,0,1-1.264,1.264H16.623V236.4a.609.609,0,1,0-1.219,0v2.576H5.766A1.265,1.265,0,0,1,4.5,237.716v-9.584h6.837a1.824,1.824,0,0,0,1.684-1.141l2.382-5.971v12.948a.609.609,0,0,0,.609.609ZM1.258,226.1l3.048-7.641H15.115l-3.224,8.082a.6.6,0,0,1-.552.374H1.81a.6.6,0,0,1-.552-.815Zm0,0"
                                    transform="translate(0 -199.595)" fill="#171717" />
                              </svg>

                           </div>
                           <div class="irc-item-content">
                              <div class="irc-item-heading">Easy Returns</div>
                              <p>30 Day Returns Policy</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="features-single">
                        <div class="irc-item">
                           <div class="irc-item-icon">
                              <svg id="_001-payment-security" data-name="001-payment-security"
                                 xmlns="http://www.w3.org/2000/svg" width="40.603" height="40.604"
                                 viewBox="0 0 40.603 40.604">
                                 <g id="Group_2181" data-name="Group 2181" transform="translate(0 0)">
                                    <path id="Path_3246" data-name="Path 3246"
                                       d="M33.47,353.747a.6.6,0,0,0-.595.595v9.775a.992.992,0,0,1-.991.991H2.184a.992.992,0,0,1-.991-.991v-7.935a.595.595,0,1,0-1.19,0v7.935A2.183,2.183,0,0,0,2.184,366.3h29.7a2.183,2.183,0,0,0,2.181-2.181v-9.775A.6.6,0,0,0,33.47,353.747Z"
                                       transform="translate(-0.003 -325.694)" fill="#171717" />
                                    <path id="Path_3247" data-name="Path 3247"
                                       d="M66.156,433.576a.595.595,0,1,0,0-1.19H54.816a.595.595,0,1,0,0,1.19Z"
                                       transform="translate(-49.921 -398.097)" fill="#171717" />
                                    <path id="Path_3248" data-name="Path 3248"
                                       d="M236.331,433.576a.595.595,0,1,0,0-1.19h-1.8a.595.595,0,1,0,0,1.19Z"
                                       transform="translate(-215.386 -398.097)" fill="#171717" />
                                    <path id="Path_3249" data-name="Path 3249"
                                       d="M288.17,433.576a.595.595,0,1,0,0-1.19h-1.8a.595.595,0,1,0,0,1.19Z"
                                       transform="translate(-263.114 -398.097)" fill="#171717" />
                                    <path id="Path_3250" data-name="Path 3250"
                                       d="M340.011,433.576a.595.595,0,1,0,0-1.19h-1.8a.595.595,0,0,0,0,1.19Z"
                                       transform="translate(-310.844 -398.097)" fill="#171717" />
                                    <path id="Path_3251" data-name="Path 3251"
                                       d="M290.864,196.963a.6.6,0,0,0-.812-.218l-.492.284v-.568a.595.595,0,0,0-1.19,0v.568l-.492-.284a.595.595,0,0,0-.595,1.03l.492.284-.492.284a.595.595,0,1,0,.595,1.03l.492-.284v.568a.595.595,0,0,0,1.19,0v-.568l.492.284a.595.595,0,1,0,.595-1.03l-.492-.284.492-.284A.6.6,0,0,0,290.864,196.963Z"
                                       transform="translate(-264.227 -180.334)" fill="#171717" />
                                    <path id="Path_3252" data-name="Path 3252"
                                       d="M351.244,196.963a.6.6,0,0,0-.812-.218l-.492.284v-.568a.595.595,0,0,0-1.19,0v.568l-.492-.284a.595.595,0,1,0-.595,1.03l.492.284-.492.284a.595.595,0,1,0,.595,1.03l.492-.284v.568a.595.595,0,0,0,1.19,0v-.568l.492.284a.595.595,0,0,0,.595-1.03l-.492-.284.492-.284A.6.6,0,0,0,351.244,196.963Z"
                                       transform="translate(-319.819 -180.334)" fill="#171717" />
                                    <path id="Path_3253" data-name="Path 3253"
                                       d="M410.32,196.462a.595.595,0,0,0-1.19,0v.568l-.492-.284a.595.595,0,0,0-.595,1.03l.492.284-.492.284a.595.595,0,1,0,.595,1.03l.492-.284v.568a.595.595,0,1,0,1.19,0v-.568l.492.284a.595.595,0,1,0,.595-1.03l-.492-.284.492-.284a.595.595,0,1,0-.595-1.03l-.492.284Z"
                                       transform="translate(-375.411 -180.334)" fill="#171717" />
                                    <path id="Path_3254" data-name="Path 3254"
                                       d="M40.011,3.005H35.4a5.768,5.768,0,0,1-4-1.6h0L30.213.275a.99.99,0,0,0-1.369,0L27.67,1.4a5.767,5.767,0,0,1-4,1.607H19.057a.6.6,0,0,0-.595.595V15.592a10.728,10.728,0,0,0,1.165,4.855H1.193V18.874a.992.992,0,0,1,.991-.991H16.527a.595.595,0,0,0,0-1.19H2.184A2.183,2.183,0,0,0,0,18.874v8.646a.595.595,0,0,0,1.19,0V25.39H24.644l4.368,2.746a1,1,0,0,0,1.056,0l5.538-3.485a10.7,10.7,0,0,0,5-9.055V3.6a.6.6,0,0,0-.595-.595ZM1.193,21.636H20.334A10.742,10.742,0,0,0,22.811,24.2H1.193V21.636ZM39.417,15.6a9.459,9.459,0,0,1-4.445,8.049L29.54,27.063,24.1,23.643a9.459,9.459,0,0,1-4.448-8.051V4.2h4.014a6.951,6.951,0,0,0,4.826-1.937l1.037-.992,1.049,1h0A6.952,6.952,0,0,0,35.4,4.195h4.021V15.6Z"
                                       transform="translate(-0.003 0)" fill="#171717" />
                                    <path id="Path_3255" data-name="Path 3255"
                                       d="M349.634,64.249a.771.771,0,0,1-.77-.77.595.595,0,1,0-1.19,0,1.963,1.963,0,0,0,1.365,1.867v.722a.595.595,0,1,0,1.19,0v-.722a1.96,1.96,0,0,0-.595-3.827l-.043,0a.77.77,0,1,1,.814-.769.595.595,0,0,0,1.19,0,1.963,1.963,0,0,0-1.365-1.867v-.722a.595.595,0,0,0-1.19,0v.722a1.96,1.96,0,0,0,.595,3.827l.043,0a.77.77,0,0,1-.043,1.54Z"
                                       transform="translate(-320.103 -53.002)" fill="#171717" />
                                 </g>
                              </svg>
                           </div>
                           <div class="irc-item-content">
                              <div class="irc-item-heading">Secure Payment</div>
                              <p>100% Secure Gaurantee</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="features-single">
                        <div class="irc-item">
                           <div class="irc-item-icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="33.672" height="40.472"
                                 viewBox="0 0 33.672 40.472">
                                 <g id="headphones" transform="translate(-43.008)">
                                    <g id="Group_2248" data-name="Group 2248" transform="translate(57.528 6.231)">
                                       <g id="Group_2247" data-name="Group 2247">
                                          <path id="Path_3446" data-name="Path 3446"
                                             d="M242.332,79.14a.794.794,0,0,0-1.255.971,15.1,15.1,0,0,1,3.183,9.326v2.327a2.338,2.338,0,0,0-.761-.127h-2.189a1.943,1.943,0,0,0-1.871-1.426h-2.175a1.942,1.942,0,0,0-1.939,1.939v10.408a1.942,1.942,0,0,0,1.939,1.94h2.175a1.947,1.947,0,0,0,.3-.024,6.063,6.063,0,0,1-6.005,5.285h-.419a2.146,2.146,0,0,0-2.1-1.726h-2.378a2.145,2.145,0,0,0-2.143,2.143v.754a2.145,2.145,0,0,0,2.143,2.143h2.378a2.146,2.146,0,0,0,2.1-1.726h.419a7.651,7.651,0,0,0,7.643-7.642.789.789,0,0,0-.134-.441,1.925,1.925,0,0,0,.064-.193H243.5a2.35,2.35,0,0,0,2.348-2.347V89.437A16.675,16.675,0,0,0,242.332,79.14Zm-10.561,31.79h0a.556.556,0,0,1-.555.555h-2.378a.556.556,0,0,1-.555-.555v-.754a.556.556,0,0,1,.555-.555h2.378a.556.556,0,0,1,.555.555Zm8.021-18.5v10.127a.353.353,0,0,1-.353.353h-2.175a.353.353,0,0,1-.352-.353V92.15a.353.353,0,0,1,.352-.352h2.175a.353.353,0,0,1,.353.352Zm4.468,1.989v6.3a.762.762,0,0,1-.761.76h-2.12v-8.26h2.12a.762.762,0,0,1,.761.761Z"
                                             transform="translate(-226.694 -78.832)" fill="#171717" />
                                       </g>
                                    </g>
                                    <g id="Group_2250" data-name="Group 2250" transform="translate(43.008)">
                                       <g id="Group_2249" data-name="Group 2249" transform="translate(0)">
                                          <path id="Path_3447" data-name="Path 3447"
                                             d="M69.648,3.148a16.837,16.837,0,0,0-26.64,13.689V28.123a2.35,2.35,0,0,0,2.348,2.347h2.189A1.943,1.943,0,0,0,49.416,31.9h2.175a1.942,1.942,0,0,0,1.939-1.94V19.549a1.942,1.942,0,0,0-1.939-1.939H49.416a1.943,1.943,0,0,0-1.871,1.426H45.356a2.338,2.338,0,0,0-.761.127V16.836a15.251,15.251,0,0,1,24.128-12.4.794.794,0,1,0,.925-1.289ZM49.063,29.677V19.549a.353.353,0,0,1,.353-.352h2.175a.353.353,0,0,1,.352.352V29.957a.353.353,0,0,1-.352.353H49.416a.353.353,0,0,1-.353-.353Zm-3.707-9.054h2.12v8.26h-2.12a.762.762,0,0,1-.761-.76V21.384A.762.762,0,0,1,45.356,20.623Z"
                                             transform="translate(-43.008 0)" fill="#171717" />
                                       </g>
                                    </g>
                                    <g id="Group_2252" data-name="Group 2252" transform="translate(70.161 4.444)">
                                       <g id="Group_2251" data-name="Group 2251" transform="translate(0)">
                                          <path id="Path_3448" data-name="Path 3448"
                                             d="M387.284,56.22a.794.794,0,0,0,0,1.587A.794.794,0,0,0,387.284,56.22Z"
                                             transform="translate(-386.517 -56.22)" fill="#171717" />
                                       </g>
                                    </g>
                                 </g>
                              </svg>

                           </div>
                           <div class="irc-item-content">
                              <div class="irc-item-heading">Special Support</div>
                              <p>24/7 Dedicated Support</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
       </main>
      </section>
   

  

  
   <?php include("footer.php"); ?>  

   
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
   
   
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->


   <!-- JS here -->
   <?php include("js.php"); ?>
</body>


<!-- Mirrored from themepure.net/php/ecomart-prev/ecomart/index-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Jun 2022 10:48:34 GMT -->
</html>