<?php $this->load->view('common/header');?>
    <!-- slider Area Start-->
    <div class="slider-area slider-about-area-desktop">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$gallery_banner_data_desk[0]->img_link;?>" style="background-size: cover;background-position: center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $gallery_banner_data_desk[0]->img_text;?></h2>
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
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$gallery_banner_data_mob[0]->img_link;?>" style="background-size: cover;background-position: center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $gallery_banner_data_mob[0]->img_text;?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

	
	<!-- Start Align Area -->
	<div class="whole-wrap culture-bottom">
		<div class="container box_1170">
		<br /><br />
			<h3 align="center" class="bold-text" style="font-size:38px;">Gallery</h3>
			<br />
			<div class="section-top-border">
					<!-- <div class="row">	
							<div class="col-md-4">&nbsp;</div>
							<div class="col-md-1">&nbsp;</div>
							<div align="center" class="col-md-4">		
									<select id="gallery" name="gallery" onchange="set_cat(this.value)">
										<option value="">-Select Gallery-</option>
                    <?php
                    if(isset($gallery_cat_data)){
                      foreach ($gallery_cat_data as $key => $val) {
                      	if($this->session->userdata('cat_id') && $this->session->userdata('cat_id')!='all'){
                        	echo '<option value="'.$val->cat_id.'" selected>'.$val->cat_name.'</option>';
                      	}
                      	else{
                        	echo '<option value="'.$val->cat_id.'">'.$val->cat_name.'</option>';
                      	}
                      }
                    }
                    ?>
									</select>
							</div>
							<div class="col-md-2">&nbsp;</div>
					</div> -->



					<div class="row gallery-item" id="gallery_div">
            <?php
            if(isset($gallery_image_data)){
              foreach ($gallery_image_data as $key => $val) {
                echo '<div class="col-md-6 padding-culture">
                        <a href="'.base_url().'uploads/'.$val->gallery_img_link.'" class="img-pop-up">
                          <div class="single-gallery-image" style="background: url('.base_url().'uploads/'.$val->gallery_img_link.');"></div>
                          <h5 align="center" style="font-size: 17px;margin-top: 15px;">'.$val->gallery_img_text.'</h5>
                        </a>
                      </div>';
              }
            }
            ?>
					<!-- <div class="col-md-6">
						<a href="assets/img/elements/1.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/1.JPG);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="assets/img/elements/2.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/2.JPG);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="assets/img/elements/3.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/3.JPG);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="assets/img/elements/4.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/4.JPG);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="assets/img/elements/5.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/5.JPG);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="assets/img/elements/6.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/6.JPG);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="assets/img/elements/7.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/7.JPG);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="assets/img/elements/8.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/8.JPG);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="assets/img/elements/9.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/9.JPG);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="assets/img/elements/10.JPG" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/10.JPG);"></div>
						</a>
					</div> -->
				</div>
			</div>

			<div align="center" style="float:right">
			 	<nav aria-label="...">
    				<?php echo $links;?>
				</nav>
			</div>
			
		</div>
	</div>
	<!-- End Align Area -->

<script type="text/javascript">

function set_cat(cat_id){
  var base_url = '<?php echo base_url();?>';
  $.ajax({
    type: "POST",
    url: base_url + 'front/front/set_cat',
    data: {cat_id: cat_id},
    success:
        function(data){
          window.location.reload();
          // $('#gallery_div').html(data);
        }
  });
}

</script>

<?php $this->load->view('common/footer');?>