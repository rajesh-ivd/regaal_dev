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
	<div class="whole-wrap">
		<div class="">
      <?php
      if(isset($products_section1_pic_data)){
        $k = 0;
        echo '<div class="desktop-div">';
        foreach ($products_section1_pic_data as $key => $val) {
          $text = nl2br($val->img_text);
          // $text = str_replace("\n", "</p>\n<p>", $text);
          // // $text = str_replace("</p>\n<p></p>\n<p>", "</p>\n<p>", $text);
          // $text = str_replace("</p>\n<p>•", "<br>•", $text);
          // $text = str_replace("<p><br>•", "<p>•", $text);
          if($k%2==0){
            echo '<div class="section-top-border"  style="background-color:#f8fafe;">
                    <br />
                     <div class="container box_1170">
                    <div class="row">
                      <div class="col-md-5">
                        <img src="'.base_url().'uploads/'.$val->img_link.'" alt="" class="img-fluid">
                      </div>
                      <div class="col-md-7 mt-sm-20">
                      <h3 class="mb-30">'.$val->img_title.'</h3>
                        <p>'.$text.'</p>
                      </div>
                    </div></div>
                  </div>';
          }
          else{
            echo '<div class="section-top-border text-right">
                     <div class="container box_1170">
                    <div class="row">
                      <div class="col-md-7">
                      <h3 class="mb-30">'.$val->img_title.'</h3>
                        <p style="text-align: justify;">'.$text.'</p>
                      </div>
                      <div class="col-md-5">
                        <img src="'.base_url().'uploads/'.$val->img_link.'" alt="" class="img-fluid">
                      </div>
                    </div>
                  </div>
                  </div>';
          }
          $k++;
        }
        echo '</div>';






        echo '<div class="mobile-div">';
        foreach ($products_section1_pic_data as $key => $val) {
          $text = nl2br($val->img_text);
          // $text = str_replace("\n", "</p>\n<p>", $text);
          // // $text = str_replace("</p>\n<p></p>\n<p>", "</p>\n<p>", $text);
          // $text = str_replace("</p>\n<p>•", "<br>•", $text);
          // $text = str_replace("<p><br>•", "<p>•", $text);
          // if($k%2==0){
            echo '<div class="section-top-border"  style="background-color:#f8fafe;">
                    <br />
                     <div class="container box_1170">
                    <div class="row">
                      <div class="col-md-5">
                        <img src="'.base_url().'uploads/'.$val->img_link.'" alt="" class="img-fluid">
                      </div>
                      <div class="col-md-7 mt-sm-20">
                      <h3 class="mb-30">'.$val->img_title.'</h3>
                        <p>'.$text.'</p>
                      </div>
                    </div></div>
                  </div>';
          // }
          // else{
            // echo '<div class="section-top-border text-right">
            //          <div class="container box_1170">
            //         <div class="row">
            //           <div class="col-md-7">
            //           <h3 class="mb-30">'.$val->img_title.'</h3>
            //             <p style="text-align: justify;">'.$text.'</p>
            //           </div>
            //           <div class="col-md-5">
            //             <img src="'.base_url().'uploads/'.$val->img_link.'" alt="" class="img-fluid">
            //           </div>
            //         </div>
            //       </div>
            //       </div>';
          // }
          $k++;
        }
        echo '</div>';

      }
      ?>
			<!-- <div class="section-top-border" style="background-color:#f8fafe;">
				<br /><br />
        <div class="container box_1170">
				<div class="row">
				
					<div class="col-md-5">
						<img src="assets/img/elements/product1.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-md-7 mt-sm-20">
					<h3 class="mb-30">MAIZE STARCH</h3>
						<p>Maize starch also known as Corn starch or flour is a fundamental ingredient in most of the packaged food and industrial products; it is extracted from the corn kernel and has a distinctive appearance and feed.</p>
						<p>Maize starch in natural & modified, forms provides viscosity, texture and other desired properties to:</p>
						<p>
							•	Food & paper products<br />
							•	Canned, chilled & frozen products<br />
							•	Microwaveable goods<br />
							•	Dry mixes<br />
							•	Extruded snacks
							</ul>
						</p>
					</div>
        </div>
				</div>
			</div>
			
			<div class="section-top-border text-right">
         <div class="container box_1170">
				<div class="row">
					<div class="col-md-7">
					<h3 class="mb-30">MAIZE GERM</h3>
						<p style="text-align: justify;">Germ is one of the ingredients of the maize which is separated in Maize crushing process. Corm Germ is the endosperm of Maize grain; it is a yellow colored seed, pleasantly nutty in taste and rich in oil. It is mainly used for extraction of maize oil and manufacturing of feed supplement.</p>
					</div>
					<div class="col-md-5">
						<img src="assets/img/elements/product2.jpg" alt="" class="img-fluid">
					</div>
				</div>
      </div>
			</div>
			<div class="section-top-border"  style="background-color:#f8fafe;">
				<br />
         <div class="container box_1170">
				<div class="row">
					<div class="col-md-5">
						<img src="assets/img/elements/product3.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-md-7 mt-sm-20">
					<h3 class="mb-30">ENRICHED MAIZE FIBRE</h3>
						<p>Maize fiber is a by-product of corn starch processing and is also known as corn fiber. The many advantages of corn fiber include its positive effect on digestive health and prebiotic properties. At about 90% insolubility, corn fiber is a high-content insoluble fiber with low acidity.</p>
						<p>We produce Enriched Maize fiber which has higher protein content.</p>
					</div>
				</div></div>
			</div>
			<div class="section-top-border text-right">
				<br />
         <div class="container box_1170">
				<div class="row">
					<div class="col-md-7">
					<h3 class="mb-30">MAIZE GLUTEN</h3>
						<p style="text-align: justify;">Maize gluten is derived from the corn-milling process.Corn gluten contains high protein & therefore is used as an important ingredient in the animal feed industry worldwide, mainly for the poultry, aqua, pigs & cattles.</p>
						<p style="text-align: justify;">Originally used as a supplement in hog feed, corn gluten has become a common organic alternative to synthetic chemical herbicides. It can be effective as a pre-emergent herbicide used to control crabgrass and other lawn weeds, and it also has nutritional properties.</p>
					</div>
					<div class="col-md-5">
						<img src="assets/img/elements/product4.jpg" alt="" class="img-fluid">
					</div>
        </div>
				</div>
			</div> -->

			</div>
    </div>
	</div>
	<!-- End Align Area -->

<?php $this->load->view('common/footer');?>