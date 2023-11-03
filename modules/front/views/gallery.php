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
                <div class="container con-more-sec">
                    <div class="row" style="text-align: center;margin: 0 auto;">
                        <div class="col-md-12">
    <ul class="nav nav-pills pills-dark mb-3 left-padding" id="pills-tab" role="tablist">
	  <li class="nav-item">
		 <a class="nav-link <?php echo $category_target=='machines' ? 'active' : '';?>" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Machines</a>
	  </li>
	  <li class="nav-item">
		 <a class="nav-link <?php echo $category_target=='people' ? 'active' : '';?>" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">People</a>
	  </li>
	  
	</ul>
</div>
<div class="col-md-12">
	<div class="tab-content" id="pills-tabContent">
	  <div class="tab-pane fade show <?php echo $category_target=='machines' ? 'active' : '';?>" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <!-- <div class="col-md-6 padding-culture">
        <a href="'.base_url().'uploads/1620726209.jpg" class="img-pop-up">
            <div class="single-gallery-image" style="background: url(".base_url()."uploads/1620726209.jpg);"></div>
            <h5 align="center" style="font-size: 17px;margin-top: 15px;">'.$val->gallery_img_text.'</h5>
        </a>
      </div> -->

        <?php
            if(isset($gallery_image_data_machines)){
                echo '<div class="row">';
                foreach ($gallery_image_data_machines as $key => $val) {
                    if($key!=0 && $key%2==0) echo '</div><div class="row">';
                    echo '<div class="col-md-6 padding-culture">
                            <a href="'.base_url().'uploads/'.$val->gallery_img_link.'" class="img-pop-up">
                              <div class="single-gallery-image" style="background: url('.base_url().'uploads/'.$val->gallery_img_link.');"></div>
                              <h5 align="center" style="font-size: 17px;margin-top: 15px;">'.$val->gallery_img_text.'</h5>
                            </a>
                          </div>';
                }
                echo '</div>';
            }
            else{
                echo '<h6>No Images Available!</h6>';
            }
        ?>


                      <!-- <div class="row">
                      <div class="col-md-6 padding-culture">
                        <a href="https://regaal.in/uploads/1620726209.jpg" class="img-pop-up">
                          <div class="single-gallery-image" style="background: url(https://regaal.in/uploads/1620726209.jpg);"></div>
                          <h5 align="center" style="font-size: 17px;margin-top: 15px;">Germ Dryer</h5>
                        </a>
                      </div>
                      <div class="col-md-6 padding-culture">
                        <a href="https://regaal.in/uploads/1604773949.webp" class="img-pop-up">
                          <div class="single-gallery-image" style="background: url(https://regaal.in/uploads/1604773949.webp);"></div>
                          <h5 align="center" style="font-size: 17px;margin-top: 15px;">Hydrocyclone</h5>
                        </a>
                      </div>
                      </div> -->

            <!-- <div align="center" style="float:right">
                <nav aria-label="...">
                    <?php echo $machines_links;?>
                </nav>
            </div> -->
            <?php
            if(isset($total_pages_machines) && $total_pages_machines>1){
                ?>
                <div align="center" style="float:right; margin-top: 25px; margin-right: 100px;">
                    <nav aria-label="...">
                        <ul class='pagination list--reset'>
                            <?php
                            if(isset($total_pages_machines)){
                                if($page_start_machines!=1) echo '<li class="page-item"><a href="'.base_url().'gallery/machines/'.($page_start_machines-1).'"><span class="page-link">Prev</span></a></li>';
                                for ($i=1; $i <= $total_pages_machines; $i++) {
                                    if($page_start_machines==$i) echo '<li class="page-item active"><span class="page-link">'.$i.'</span></li>';
                                    else echo '<li class="page-item"><a href="'.base_url().'gallery/machines/'.$i.'"><span class="page-link">'.$i.'</span></a></li>';
                                }
                                if($page_start_machines!=$total_pages_machines) echo '<li class="page-item"><a href="'.base_url().'gallery/machines/'.$total_pages_machines.'"><span class="page-link">Next</span></a></li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
                <?php
            }
            ?>
            
     
      </div>
	  <div class="tab-pane fade show <?php echo $category_target=='people' ? 'active' : '';?>" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

        <?php
            if(isset($gallery_image_data_people)){
                echo '<div class="row" style="margin-top:30px;"><div class="col-md-1"></div>';
                foreach ($gallery_image_data_people as $key => $val) {
                    if($key!=0 && $key%2==0) echo '<div class="col-md-1"></div></div><div class="row" style="margin-top:30px;"><div class="col-md-1"></div>';
                    echo '<div class="col-md-5 para-gallery-right">
                            <div class="card card-pink overflow-hidden shadow bg-white border-0 px-0">
                               <div class="card-shape">
                               <a href="'.base_url().'uploads/'.$val->gallery_img_link.'" class="img-pop-up">
                               <img src="'.base_url().'uploads/'.$val->gallery_img_link.'" class="card-img-top card-img" style="height: 300px;">
                               </a>
                              </div>
                              <div class="card-footer">
                                <p>'.$val->gallery_img_text.'</p>
                              </div>
                            </div>
                        </div>';
                }
                echo '</div>';
            }
            else{
                echo '<h6>No Images Available!</h6>';
            }
        ?>
        
        <!-- <div class="row" style="margin-top:30px;">
            <div class="col-md-1"></div>
            <div class="col-md-5 para-gallery-right">
                <div class="card card-pink overflow-hidden shadow bg-white border-0 px-0">
                   <div class="card-shape">
                   <img src="assets/front/img/gallery/500X300.png" class="card-img-top card-img" >                   
                  </div>
                 
                  <div class="card-footer">               
                    <p>Group Image1 </p>             
                  </div>
                </div>
            </div>
            <div class="col-md-5 para-gallery-right para-gallery-top" >
                <div class="card card-pink h-100 overflow-hidden shadow bg-white border-0 px-0">
                   <div class="card-shape">
                   <img src="assets/front/img/gallery/500X300.png" class="card-img-top card-img" >                   
                  </div>
                 
                  <div class="card-footer">           
                    <p>Group Image 2</p>                 
                  </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div> -->


            <!-- <div align="center" style="float:right; margin-top: 50px;">
                <nav aria-label="...">
                    <?php echo $people_links;?>
                </nav>
            </div> -->
            <?php
            if(isset($total_pages_people) && $total_pages_people>1){
            ?>
                <div align="center" style="float:right; margin-top: 50px; margin-right: 100px;">
                    <nav aria-label="...">
                        <ul class='pagination list--reset'>
                            <?php
                            if(isset($total_pages_people)){
                                if($page_start_people!=1) echo '<li class="page-item"><a href="'.base_url().'gallery/people/'.($page_start_people-1).'"><span class="page-link">Prev</span></a></li>';
                                for ($i=1; $i <= $total_pages_people; $i++) {
                                    if($page_start_people==$i) echo '<li class="page-item active"><span class="page-link">'.$i.'</span></li>';
                                    else echo '<li class="page-item"><a href="'.base_url().'gallery/people/'.$i.'"><span class="page-link">'.$i.'</span></a></li>';
                                }
                                if($page_start_people!=$total_pages_people) echo '<li class="page-item"><a href="'.base_url().'gallery/people/'.$total_pages_people.'"><span class="page-link">Next</span></a></li>';
                            }
                            ?>
                        </ul>
                    </nav>
                </div>
            <?php
            }
            ?>




      </div>
	</div>
    </div>  
                    </div>
                </div>
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