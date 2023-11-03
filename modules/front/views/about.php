<?php $this->load->view('common/header');?>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area slider-about-area-desktop">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$about_banner_data_desk[0]->img_link;?>" style="background-size: cover;background-position: center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php echo $about_banner_data_desk[0]->img_text;?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        
        <!-- slider area mobile start -->
        <div class="slider-area slider-about-area-mobile">
            <!-- Mobile Menu -->
            <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$about_banner_data_mob[0]->img_link;?>" style="background-size: cover;background-position: center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2><?php echo $about_banner_data_mob[0]->img_text;?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider area mobile end --->

        <!-- We Trusted Start-->
        <div class="we-trusted-area trusted-padding">
            <div class="container">
            <br /><br />
                <div class="row">
					<div class="col-md-3">
						<img src="<?php echo base_url().'uploads/'.$about_section1_pic_data[0]->img_link;?>" alt="" class="img-fluid img-sagarmal">
					</div>
                    <div class="col-md-9 mt-sm-20">
                    <!--<h3 class="mb-30">Mr. Raj Kumar Kishorepuria </h3>-->
                        <p style="margin-bottom:10px; text-align:justify"><i style="font-weight:bold;">"<?php echo $about_section1_data[0]->element_content;?>"</i>- <?php echo $about_section1_pic_data[0]->img_title;?>
</p>
<p style="margin-bottom:10px;text-align:justify "><?php echo $about_section1_data[2]->element_content;?></p></p>
<p style="margin-bottom:10px;text-align:justify "><?php echo $about_section1_data[3]->element_content;?> <i style="font-weight:bold;">"<?php echo $about_section1_data[1]->element_content;?>"</i></p>
<p style="margin-bottom:10px; text-align:justify"><?php echo $about_section1_data[4]->element_content;?></p>
                    </div>
					<!-- <div class="col-md-9 mt-sm-20">
						<p><i>"<?php echo $about_section1_data[0]->element_content;?>"</i>- <?php echo $about_section1_pic_data[0]->img_title;?>
</p>
<p><?php echo $about_section1_data[2]->element_content;?></p>
<p><?php echo $about_section1_data[3]->element_content;?> <i>"<?php echo $about_section1_data[1]->element_content;?>"</i></p>
<p><?php echo $about_section1_data[4]->element_content;?></p>
					</div> -->
				</div>
                
            </div>
        </div>
        <!-- We Trusted End-->
        <!--company section start -->
            <div class="com-sec">
                
                <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="com-sec-left">
                        
                    <h2><?php echo $about_section1_data[16]->element_content;?></h2>
                    <p><?php echo nl2br($about_section1_data[17]->element_content);?></p>    
                </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                    <div class="com-sec-right">
                    <h2><?php echo $about_section1_data[18]->element_content;?></h2>
                    <p><?php echo nl2br($about_section1_data[19]->element_content);?></p>
                    </div>
                    
                    </div>
                    <!-- <div class="col-md-1"></div> -->
                    
            </div>
            </div>
            </div>
        <!--company section end --> 
        <!-- logo section start --->
        <div class="logo-sec">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo $about_section1_data[20]->element_content;?></h2>
                        <p><?php echo nl2br($about_section1_data[21]->element_content);?></p>
                </div>
                </div>
            </div>
        </div>
        <!-- logo section end --->

        <!-- Request Back Start -->
        <div class="we-trusted-area trusted-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="row gallery-item" style="margin:0 auto;">
                        <div class="col-md-2" style=""></div>
                        <div class="col-md-4" style="padding-right:0px;">
                        <br />
                    <div class="round-sec round-first-sec" style="min-height: 260px;">

                            <h3 align="center" style="color: #ffffff">Mission</h3>
                            <p align="justify" style="color: #fff;font-size:17px;"><?php
                            $string = str_replace(array("\r\n", "\r", "\n"), "<br />", $about_section1_data[5]->element_content);
                            $string = str_replace(array("<br /><br />"), "<br />", $string);
                             echo $string;?></p>
                    </div>
                        </div>
                        <div class="col-md-4" style="padding-right:0px;">
                        <br />
                    <div class="round-sec round-second-sec" style="min-height: 260px;">

                            <h3 align="center" style="color: #ffffff">Vision</h3>
                            <p align="justify" style="color: #fff;font-size:17px;"><?php echo $about_section1_data[6]->element_content;?></p>
                        </div>
                  </div>
                  <div class="col-md-2" style=""></div>
                    </div>
                	<!-- <div class="row gallery-item">
                		<div class="col-md-6" style="background-color: #d4565a; padding: 10px;">
                		<br />
                			<h3 align="center" style="color: #ffffff">Mission</h3>
                			<p align="justify" style="color: #fff"><?php echo nl2br($about_section1_data[5]->element_content);?></p>
                		</div>
                		<div class="col-md-6" style="background-color: #49b9a4de; padding: 10px;">
                		<br />
                			<h3 align="center" style="color: #ffffff">Vision</h3>
                			<p align="justify" style="color: #fff"><?php echo $about_section1_data[6]->element_content;?></p>
                		</div>
                	</div> -->
                    <div class="col-xl-12 col-lg-12 col-md-12">
                    <br /><br />

                    <h3 align="center" class="heading-value value-head">Our Values</h3>
                    <p align="justify" class="value-text value-text-small p_class"><?php echo $about_section1_data[7]->element_content;?></p>
                    
                    <div align="center">
    <table width="80%" align="center" class="table-value table_class">
	<tr>
		<td align="center">&nbsp;</td>
		<td align="center" class="integrity left-sec">
            <!-- <h4><?php echo $about_section1_data[10]->element_content;?></h4>
		<?php echo $about_section1_data[11]->element_content;?> -->
        <h4><?php echo $about_section1_data[10]->element_content;?></h4>
        <p><?php echo $about_section1_data[11]->element_content;?></p>
    
    </td>
		<td align="center">&nbsp;</td>
		<td align="center" class="opportunity left-sec">
            <!-- <h4><?php echo $about_section1_data[14]->element_content;?></h4>
		<?php echo $about_section1_data[15]->element_content;?> -->
        <h4><?php echo $about_section1_data[14]->element_content;?></h4>
        <p><?php echo $about_section1_data[15]->element_content;?></p>
    
    </td>
    <td align="center">&nbsp;</td>
		<td align="center" class="opportunity left-sec left-sec-age">
            <!-- <h4><?php echo $about_section1_data[14]->element_content;?></h4>
		<?php echo $about_section1_data[15]->element_content;?> -->
        <h4><?php echo $about_section1_data[24]->element_content;?></h4>
        <p><?php echo $about_section1_data[25]->element_content;?></p>
    
    </td>
    <td align="center">&nbsp;</td>
	</tr>
	<tr>
		<td align="center"><div class="col-xl-3"><img src="<?php echo base_url();?>assets/front/img/about/Our-values-01.png"></div></td>
		<td align="center"><div class="col-xl-3"><img src="<?php echo base_url();?>assets/front/img/about/Our-values-02.png"></div></td>
		<td align="center"><div class="col-xl-3"><img src="<?php echo base_url();?>assets/front/img/about/Our-values-03.png"></div></td>
		<td align="center"><div class="col-xl-3"><img src="<?php echo base_url();?>assets/front/img/about/Our-values-04.png"></div></td>
        <td align="center"><div class="col-xl-3"><img src="<?php echo base_url();?>assets/front/img/about/Our-values-05.png"></div></td>
        <td align="center"><div class="col-xl-3"><img src="<?php echo base_url();?>assets/front/img/about/Our-values-06.png"></div></td>
        <td align="center"><div class="col-xl-3"><img src="<?php echo base_url();?>assets/front/img/about/Our-values-07.png"></div></td>
	</tr>
	<tr>
		<td align="center" class="self left-sec" >
            <!-- <h4><?php echo $about_section1_data[8]->element_content;?></h4>
		<?php echo $about_section1_data[9]->element_content;?> -->
        <h4><?php echo $about_section1_data[8]->element_content;?></h4>
        <p><?php echo $about_section1_data[9]->element_content;?></p>
    
    
    </td>
		<td align="center">&nbsp;</td>
		<td align="center" class="create left-sec">
            <!-- <h4><?php echo $about_section1_data[12]->element_content;?></h4>
		<?php echo $about_section1_data[13]->element_content;?> -->
        <h4><?php echo $about_section1_data[12]->element_content;?></h4>
        <p><?php echo $about_section1_data[13]->element_content;?></p>
    
    </td>
		<td align="center">&nbsp;</td>
        <td align="center" class="create left-sec left-sec-fiv">
            <!-- <h4><?php echo $about_section1_data[12]->element_content;?></h4>
		<?php echo $about_section1_data[13]->element_content;?> -->
        <h4><?php echo $about_section1_data[22]->element_content;?></h4>
        <p><?php echo $about_section1_data[23]->element_content;?></p>
    
    </td>

    <td align="center">&nbsp;</td>
        <td align="center" class="create left-sec left-sec-sprit">
            <!-- <h4><?php echo $about_section1_data[12]->element_content;?></h4>
		<?php echo $about_section1_data[13]->element_content;?> -->
        <h4><?php echo $about_section1_data[26]->element_content;?></h4>
        <p><?php echo $about_section1_data[27]->element_content;?></p>
    
    </td>
	</tr>
</table>
                    </div>
                        
                    </div>
            </div>
        </div>
        <!-- Request Back End -->

    </main>

<?php $this->load->view('common/footer');?>