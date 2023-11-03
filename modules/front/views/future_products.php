<?php $this->load->view('common/header');?>
    <!-- slider Area Start-->
    <div class="slider-area slider-about-area-desktop">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$products_banner_data_desk[0]->img_link;?>" style="background-size: cover;background-position: center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $products_banner_data_desk[0]->img_text;?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->


    <!-- slider Area Start-->
    <div class="slider-area slider-about-area-mobile">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$products_banner_data_mob[0]->img_link;?>" style="background-size: cover;background-position: center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $products_banner_data_mob[0]->img_text;?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

	

	<!-- Start Align Area -->
	<div class="whole-wrap title_class">
		<div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h3 class="h2_class"><?php echo strtoupper('Future Products');?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <ul class="ul_class">
                        <?php
                        if(isset($future_products_all) && count($future_products_all)>0){
                            foreach ($future_products_all as $key => $val) {
                                echo '<li class="li_class">'.$val->product_name.'</li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>Inquiry</h5>
                    <p>If you would like to inquire about any product please email our sales team at <b>sales@regaal.in</b></p>
                </div>
            </div>



      <?php
      // if(isset($future_products_all)){
      //   $k = 0;
      //   echo '<div class="desktop-div">';
      //   foreach ($future_products_all as $key => $val) {
      //     if($k%2==0){
      //       echo '<div class="section-top-border"  style="background-color:#f8fafe;">
      //               <br />
      //                <div class="container box_1170">
      //               <div class="row">
      //                 <div class="col-md-7 mt-sm-20">
      //                 <h3 class="mb-30">'.$val->product_name.'</h3>
      //                 </div>
      //               </div></div>
      //             </div>';
      //     }
      //     else{
      //       echo '<div class="section-top-border text-right">
      //                <div class="container box_1170">
      //               <div class="row">
      //                 <div class="col-md-7">
      //                 <h3 class="mb-30">'.$val->product_name.'</h3>
      //                 </div>
      //               </div>
      //             </div>
      //             </div>';
      //     }
      //     $k++;
      //   }
      //   echo '</div>';






      //   echo '<div class="mobile-div">';
      //   foreach ($future_products_all as $key => $val) {
      //       echo '<div class="section-top-border"  style="background-color:#f8fafe;">
      //               <br />
      //                <div class="container box_1170">
      //               <div class="row">
      //                 <div class="col-md-7 mt-sm-20">
      //                 <h3 class="mb-30">'.$val->product_name.'</h3>
      //                 </div>
      //               </div></div>
      //             </div>';
      //       $k++;
      //   }
      //   echo '</div>';

      // }
      ?>

			</div>
    </div>
	</div>
	<!-- End Align Area -->

<?php $this->load->view('common/footer');?>