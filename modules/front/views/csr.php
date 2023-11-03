<?php $this->load->view('common/header');?>
    <!-- slider Area Start-->
    <div class="slider-area slider-about-area-desktop">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$csr_banner_data_desk[0]->img_link;?>"style="background-size: cover;background-position: center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $csr_banner_data_desk[0]->img_text;?></h2>
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
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$csr_banner_data_mob[0]->img_link;?>"style="background-size: cover;background-position: center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $csr_banner_data_mob[0]->img_text;?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

	
	<!-- Start Align Area -->
	<div class="whole-wrap" style="padding-bottom:70px;">
		<div class="container box_1170">
		<br /><br />
			<h3 align="center" class="bold-text" style="font-size:38px;"><?php echo $csr_section1_data[0]->element_content;?></h3>
			<br />
			<div class="section-top-border">
					<div class="row">	
					<p style="text-align: justify;"><?php
					$string = str_replace(array("\r\n", "\r", "\n"), "<br />", $csr_section1_data[1]->element_content);
                    $string = str_replace(array("<br /><br />"), "</p><p style='text-align: justify;'>", $string);
                    echo $string;?></p>
            
						<!--<div class="col-md-12">-->
							<!--<div class="col-md-4">&nbsp;</div>
							<div class="col-md-1">&nbsp;</div>
							<div align="center" class="col-md-4">		
									<select id="gallery" name="gallery">
										<option value="">-Select Gallery-</option>
										<option value="1">Factory Images</option>
										<option value="2">Events Images</option>
										<option value="3">Other Images</option>
									</select>
							</div>
							<div class="col-md-2">&nbsp;</div>-->
						<!--</div>-->
					</div>
					<div class="row gallery-item">
            <?php
            if(isset($csr_section1_pic_data)){
              foreach ($csr_section1_pic_data as $key => $val) {
                ?>
                <div class="col-md-6 padding-culture">
					<div class="single-gallery-image" style="background: url(<?php echo base_url().'uploads/'.$val->img_link;?>);"></div>
					<h5 align="center" style="font-size: 17px;margin-top: 15px;"><?php echo $val->img_text;?></h5>
				</div>
                <?php
              }
            }
            ?>
					<!-- <div class="col-md-6">
							<div class="single-gallery-image" style="background: url(assets/img/gallery/csr1.jpg);"></div>
							<h5 align="justify" style="font-size: 17px;margin-top: 15px;">Ration Kits were distributed during the Covid-19 Pandemic Lockdown</h5>
					</div>
					<div class="col-md-6">
						
							<div class="single-gallery-image" style="background: url(assets/img/gallery/csr2.jpg);"></div>
							<h5 align="justify" style="font-size: 17px;margin-top: 15px;">Villagers in Thakurganj were given Ration Kits including Rice, Dal, and Spices</h5>
					</div>
					<div class="col-md-6">
						
							<div class="single-gallery-image" style="background: url(assets/img/gallery/csr3.jpg);"></div>
							<h5 align="justify" style="font-size: 17px;margin-top: 15px;">Sanitizers, Hand Gloves, Masks & Ration Kits were distributed in and around Kishanganj District</h5>
					</div>
					<div class="col-md-6">
						
							<div class="single-gallery-image" style="background: url(assets/img/gallery/csr6.jpg);"></div>
							<h5 align="justify" style="font-size: 17px;margin-top: 15px;">Sponsored football matches for Village Teenagers</h5>
					</div> -->
					
					<!--<div class="col-md-4">
						<a href="assets/img/elements/7.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/7.JPG);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/elements/8.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/8.JPG);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/elements/9.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/9.JPG);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/elements/10.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/10.JPG);"></div>
						</a>
					</div>-->
				</div>
				
			</div>
			<!-----   Pagination -->
		
				<div align="center" style="float:right">
						 	<nav aria-label="...">
                <?php echo $links;?>
							  <!-- <ul class="pagination">
							    <li class="page-item disabled">
							      <a class="page-link" href="#" tabindex="-1">Previous</a>
							    </li>
							    <li class="page-item active"><a class="page-link" href="#">1</a></li>
							    <li class="page-item">
							      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
							    </li>
							    <li class="page-item"><a class="page-link" href="#">3</a></li>
							    <li class="page-item">
							      <a class="page-link" href="#">Next</a>
							    </li>
							  </ul> -->
							</nav>
				</div>
		
			
			
			<!----    pagination ends  -->
		</div>
	</div>
	<!-- End Align Area -->

<?php $this->load->view('common/footer');?>