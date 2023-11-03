<?php $this->load->view('common/header');?>
    <!-- slider Area Start-->
    <div class="slider-area slider-about-area-desktop">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$leadership_banner_data_desk[0]->img_link;?>" style="background-size: cover;background-position: center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $leadership_banner_data_desk[0]->img_text;?></h2>
                            
                            
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
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$leadership_banner_data_mob[0]->img_link;?>" style="background-size: cover;background-position: center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $leadership_banner_data_mob[0]->img_text;?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

	

	<!-- Start Align Area -->
	<div class="whole-wrap">


    <?php
      if(isset($leadership_section1_pic_data)){
        $k = 0;
        echo '<div class="desktop-div">';
        foreach ($leadership_section1_pic_data as $key => $val) {
          // $img_text = $val->img_text;
          $img_text = str_replace(array("\r\n", "\r", "\n"), "</p><p style='text-align: justify;'>", $val->img_text);
          // $img_text = str_replace(array("<br /><br />"), "<br />", $img_text);
          if($k%2==0){
            echo '<div class="section-top-border" style="background-color:#f8fafe;">
                    <br />
                    <div class="container box_1170">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="'.base_url().'uploads/'.$val->img_link.'" alt="" class="img-fluid">
                      </div>
                      <div class="col-md-9 mt-sm-20 padding-culture img-height">
                      <h3 class="mb-30">'.$val->img_title.' '.(preg_replace('/\s+/', '', $val->linkedin_link)!='' ? '<a href="'.$val->linkedin_link.'" target="_blank"><img src="assets/front/img/logo/linkedin-logo.png"></a>' : '').'</h3>
                      
                        <p>'.$img_text.'</p>
                      </div>
                    </div>
                  </div>
                </div>';
          }
          else{
            echo '<div class="section-top-border text-right">
                    <div class="container box_1170">
                    <div class="row">
                      <div class="col-md-9 padding-culture img-heights">
                      <h3 class="mb-30">'.$val->img_title.' '.(preg_replace('/\s+/', '', $val->linkedin_link)!='' ? '<a href="'.$val->linkedin_link.'" target="_blank"><img src="assets/front/img/logo/linkedin-logo.png"></a>' : '').'</h3>
                        <p style="text-align: justify;">'.$img_text.'</p>
                      </div>
                      <div class="col-md-3">
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
        foreach ($leadership_section1_pic_data as $key => $val) {
          // $img_text = $val->img_text;
          $img_text = str_replace(array("\r\n", "\r", "\n"), "</p><p style='text-align: justify;'>", $val->img_text);
          // $img_text = str_replace(array("<br /><br />"), "<br />", $img_text);
          // if($k%2==0){
            echo '<div class="section-top-border" style="background-color:#f8fafe;">
                    <br />
                    <div class="container box_1170">
                    <div class="row">
                      <div class="col-md-3">
                        <img src="'.base_url().'uploads/'.$val->img_link.'" alt="" class="img-fluid">
                      </div>
                      <div class="col-md-9 mt-sm-20 padding-culture img-height">
                      <h3 class="mb-30">'.$val->img_title.'<a href="'.$val->linkedin_link.'" target="_blank"><img src="assets/front/img/logo/linkedin-logo.png"></a></h3>
                        <p>'.$img_text.'</p>
                      </div>
                    </div>
                  </div>
                </div>';
          // }
          // else{
            // echo '<div class="section-top-border text-right">
            //         <div class="container box_1170">
            //         <div class="row">
            //           <div class="col-md-9 padding-culture">
            //           <h3 class="mb-30">'.$val->img_title.'</h3>
            //             <p style="text-align: justify;">'.$img_text.'</p>
            //           </div>
            //           <div class="col-md-3">
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

<!-- 
    <div class="section-top-border" style="background-color:#f8fafe;">
        <br />
        <div class="container box_1170">
        <div class="row">
          <div class="col-md-3">
            <img src="assets/img/service/rk1.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md-9 mt-sm-20">
          <h3 class="mb-30">Mr. Raj Kumar Kishorepuria </h3>
            <p>Mr Raj Kumar Kishorepuria is a director of M/s Sagar Business Private Limited (SBPL). He is second generation entrepreneur with hands on experience of various business functions. He started his career in late sixties with trading of silk and steel and gradually taking it ahead with import and export. He was instrumental in setting up of SBPL which is now been looked after by his elder son Mr. Sunil Kishorepuria.</p>
          </div>
        </div>
      </div>
    </div>
		
			
			<div class="section-top-border text-right">
				<div class="container box_1170">
				<div class="row">
					<div class="col-md-9">
					<h3 class="mb-30">Mr. Anil Kishorepuria</h3>
						<p style="text-align: justify;">Mr. Anil Kishorepuria is the son of Mr. Raj Kumar Kishorepuria and is also a commerce graduate. He has a vast experience of handling various business functions such as import and export, trading of steel, trading of tractors. Currently he is developing a real estate project at Bhagalpur, Bihar consisting of 318 residential units with most advanced amenities and security system. He is also handling the entire finance of the group.</p>
					</div>
					<div class="col-md-3">
						<img src="assets/img/service/ak1.jpg" alt="" class="img-fluid">
					</div>
				</div>
      </div>
			</div>
			<div class="section-top-border" style="background-color:#f8fafe;">
				<div class="container box_1170">
				<div class="row">
					<div class="col-md-3">
						<img src="assets/img/service/rk2.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-md-9 mt-sm-20">
					<h3 class="mb-30">Mr. Rohan Kishorepuria</h3>
						<p>Mr. Rohan Kishorepuria is the youngest in the family business and is working in the organisation for almost 2 years.</p>
						<p>He is a Mechanical engineering graduate and leads the plant operations in Galgalia, as a young generation he believes in technological advancement, Information technology and willing to take the organisation at new heights.</p>
					</div>
				</div>
			</div>
    </div>
			<div class="section-top-border text-right">
				<div class="container box_1170">
				<div class="row">
					<div class="col-md-9">
					<h3 class="mb-30">Mr Anil Pandey</h3>
						<p style="text-align: justify;">Mr Anil Pandey a Mechanical engineering graduate, having 32 years’ experience in    the starch and food processing industry, he has been instrumental in installing and     establishing starch & its derivative projects. Gained vast experience in project co-ordination, construction, site selection, basic engineering. detailed engineering, operation, maintenance, erection & commissioning of major turnkey projects. Besides this he had also been part of the organizations such as Sr Technical executive, project co-coordinator, plant in charge & Technical Director.</p>
					</div>
					<div class="col-md-3">
						<img src="assets/img/service/ap1.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
    </div>
			 -->
	</div>
	<!-- End Align Area -->

<?php $this->load->view('common/footer');?>