<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Regaal - <?php echo ucfirst($active_page);?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>assets/front/img/favicon.ico">

        <!-- CSS here -->
            <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/bootstrap.min.css">
            <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/owl.carousel.min.css"> -->
            <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/flaticon.css"> -->
            <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/slicknav.css">
            <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/animate.min.css"> -->
            <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/magnific-popup.css"> -->
            <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/themify-icons.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/slick.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/nice-select.css">
            <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/style.css">

            <!-- <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" /> -->
   </head>

   <body>
            
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?php echo base_url();?>assets/front/img/logo/logo.webp" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-1 col-md-1">
                                <div class="logo">
                                  <a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/front/img/logo/regaal_logo_new.png" style="height: 60px;" alt=""></a>
                                  <!--<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/front/img/logo/logo.webp" alt=""></a>-->
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">                                                                                                                                     
                                        <li><a href="<?php echo base_url();?>">Home</a></li>
                                        <li><a href="<?php echo base_url();?>about">About</a>
                                            <!-- <ul class="submenu">
                                                <li><a href="<?php echo base_url();?>about">About</a></li>
                                                <li><a href="<?php echo base_url();?>culture">Our Culture</a></li>
                                                <li><a href="<?php echo base_url();?>achievements">Our Achievements</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="<?php echo base_url();?>leadership">Leadership</a></li>
                                        <li><a href="javascript:void(0);">Products</a>
                                            <ul class="submenu">
                                            <?php
                                            if(isset($products_section1_pic_data_all)){
                                                foreach ($products_section1_pic_data_all as $key => $val) {
                                                    if($val->category=='Primary Product') $target = 'Primary_Product';
                                                    if($val->category=='Allied Products') $target = 'Allied_Products';
                                                    if($val->category=='Value added Products') $target = 'Value_added_Products';
                                                    if($val->category=='Modified Starches') $target = 'Modified_Starches';
                                                    echo '<li><a href="'.base_url().'products/'.$target.'">'.$val->category.'</a></li>';
                                                }
                                            }
                                            if(isset($future_products_all) && count($future_products_all)>0){
                                                echo '<li><a href="'.base_url().'future_products">Future Products</a></li>';
                                            }
                                            ?>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);">Others</a>
                                            <ul class="submenu">
                                                <li><a href="<?php echo base_url();?>gallery">Gallery</a></li>
                                                <!-- <li><a href="javascript:void(0);">News</a></li> -->
                                                <li><a href="<?php echo base_url();?>csr">CSR</a></li>
                                                <!-- <li><a href="javascript:void(0);">New Business Initiatives</a></li> -->
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url();?>careers">Careers</a></li>
                                        <li><a href="<?php echo base_url();?>contact">Contact</a></li>
                                    </ul>
                                    </nav>
                                </div>
                            </div>             
                            <!--<div class="col-xl-2 col-lg-3 col-md-3">
                                <div class="header-right-btn f-right d-none d-lg-block">
                                    <a href="#" class="btn header-btn">Contact Now</a>
                                </div>
                            </div>-->
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
