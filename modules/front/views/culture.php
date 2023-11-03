<?php $this->load->view('common/header');?>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area slider-about-area-desktop">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$culture_banner_data_desk[0]->img_link;?>" style="background-size: cover;background-position: center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php echo $culture_banner_data_desk[0]->img_text;?></h2>
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
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$culture_banner_data_mob[0]->img_link;?>" style="background-size: cover;background-position: center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php echo $culture_banner_data_mob[0]->img_text;?></h2>
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
                <div class="row d-flex justify-content-between">
                                      
                    <div class="col-xl-12 col-lg-12 col-md-12 padding-culture">
                    <br />
                    <div align="center"><h3 class="bold-text text-culture
                    "  style="font-size:38px;"><?php echo $culture_section1_data[0]->element_content;?></h3></div>
                    <br />
                    <div class="row gallery-item">
                        <div class="col-xl-4 gallery-padding" >
                            <img src="<?php echo base_url()?>assets/front/img/about/Our-Culture1.png"  style="display:block;margin:0 auto;" /><br>
                              <h3 style="text-align: center;margin: -11px 0px;font-family:'Karla', sans-serif;font-weight:700;">People </h3>
                            <br />
                            <p align="center" style="text-align:justify;"><?php echo $culture_section1_data[1]->element_content;?></p>
                        </div>
                        <div class="col-xl-4 gallery-padding" >
                            <img src="<?php echo base_url()?>assets/front/img/about/Our-Culture-2.png"  style="display:block;margin:0 auto;"/>
                            <br>
                              <h3 style="text-align: center;margin: -11px 0px;font-family:'Karla', sans-serif;font-weight:700;">Process  </h3>
                            <br /><p align="center" style="text-align:justify;"><?php echo $culture_section1_data[2]->element_content;?></p>
                            </div>
                        <div class="col-xl-4 gallery-last">
                            <img src="<?php echo base_url()?>assets/front/img/about/Our-Culture-3.png"  style="display:block;margin:0 auto;"/>
                              <br>
                              <h3 style="text-align: center;margin: -11px 0px;font-family:'Karla', sans-serif;font-weight:700;">Productivity  </h3>
                            <br /><p align="center" style="text-align:justify;"><?php echo $culture_section1_data[3]->element_content;?></p>
                        </div>
                        <!-- <div class="col-xl-4 gallery-padding" >
                        	<p align="center" style="text-align:justify;"><img src="<?php echo base_url();?>assets/front/img/about/Our-Culture1.png"  style="display:block;margin:0 auto;" /><br /><?php echo $culture_section1_data[1]->element_content;?></p>
                        </div>
                        <div class="col-xl-4 gallery-padding" >
                        	<p align="center" style="text-align:justify;"><img src="<?php echo base_url();?>assets/front/img/about/Our-Culture-2.png"  style="display:block;margin:0 auto;"/><br /><?php echo $culture_section1_data[2]->element_content;?></p>
                        	</div>
                        <div class="col-xl-4">
                        	<p align="center" style="text-align:justify;"><img src="<?php echo base_url();?>assets/front/img/about/Our-Culture-3.png"  style="display:block;margin:0 auto;"/><br /><?php echo $culture_section1_data[3]->element_content;?></p>
                        </div> -->
                    </div>
                </div>
                	                    
            </div>
        </div>
    </div>
        <!-- Request Back End -->

    </main>

<?php $this->load->view('common/footer');?>