<?php $this->load->view('common/header');?>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area slider-about-area-desktop">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$achievements_banner_data_desk[0]->img_link;?>" style="background-size: cover;background-position: center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2 ><?php echo $achievements_banner_data_desk[0]->img_text;?></h2>
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
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$achievements_banner_data_mob[0]->img_link;?>" style="background-size: cover;background-position: center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2 ><?php echo $achievements_banner_data_mob[0]->img_text;?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->


               

        <!-- Request Back Start -->
        <div class="we-trusted-area trusted-padding">
            <div class="container">
                <!--<div class="row d-flex justify-content-between">-->
                        <br /><br />
                	               
                	<div class="row">
                    <div class="col-md-12 padding-culture"><h3 align="center" class="bold-text"style="font-size:38px;"><?php echo $achievements_section1_data[0]->element_content;?></h3></div>
                	<div class="col-md-4">
						<img src="<?php echo base_url();?>assets/front/img/about/Our Achievements-min.png" alt="" class="img-fluid">
					</div>
					<div class="col-md-8">
					
                	<br />
					<ul style="padding-top:70px;">
            <?php
            if(isset($achievements_section1_data)){
              $li_arr = explode(PHP_EOL, nl2br($achievements_section1_data[1]->element_content));
              foreach ($li_arr as $key => $val) {
                echo '<li style="list-style-type: disc;">'.$val.'</li>';
              }
            }
            ?>
            <!-- <li style="list-style-type: disc;">Operating at more than 100% of the plant capacity</li>
					<li style="list-style-type: disc;"> Our customers include the top names in Food, Packaged Food & Paper Industry</li> -->
          </ul>
					</div>
                    </div>
                    <br /><br /><br />
						<div class="row">
						
		                	<div class="col-md-4 padding-culture">
								<img src="<?php echo base_url();?>assets/front/img/about/future-goals.jpg" alt="" class="img-fluid img-future">
							</div>
							<div class="col-md-8">
							<ul style="padding-top:50px;">
                <?php
                if(isset($achievements_section1_data)){
                  $li_arr = explode(PHP_EOL, nl2br($achievements_section1_data[2]->element_content));
                  foreach ($li_arr as $key => $val) {
                    echo '<li style="list-style-type: disc;">'.$val.'</li>';
                  }
                }
                ?>
							<!-- <li style="list-style-type: disc;"> Operating at more than 100% of the plant capacity</li>
							<li style="list-style-type: disc;"> Our customers include the top names in Food, Packaged Food & Paper Industry</li> -->
            </ul>
							</div>
		                    </div>
				<!--<div class="row">
					<div class="col-md-9">
						<br /><br />
						<p><img src="assets/img/about/modified.png" alt="" class="img-fluid">Setup modified starch processes by mid 2021</p>
					<p><img src="assets/img/about/Double-production-capacity.png" alt="" class="img-fluid"> Double the production capacity by 2021</p>
					<p><img src="assets/img/about/Increase-production-capacity.png" alt="" class="img-fluid">Increase the production capacity by four times in the next four years</p>
					</div>
					<div class="col-md-3">
					<br /><br />
						<img src="assets/img/about/future-goals.jpg" alt="" class="img-fluid">
					</div>
				</div>-->
			
            <!--</div>-->
        </div>
    </div>
        <!-- Request Back End -->
    </main>

<?php $this->load->view('common/footer');?>