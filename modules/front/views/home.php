<?php $this->load->view('common/header');?>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area slider-desktop">
            <div class="slider-active">
                <?php
                if(isset($home_banner_desk_data)){
                    foreach ($home_banner_desk_data as $key => $val) {
                        ?>
                        <!-- <div class="single-slider slider-height d-flex align-items-center" data-background="https://via.placeholder.com/1350x400"> -->
                        <div class="single-slider slider-height d-flex align-items-center" data-background="<?php echo base_url();?>uploads/<?php echo $val->img_link;?>">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="hero__caption">
                                            <h1 data-animation="fadeInLeft" data-delay=".6s" ><?php echo $val->img_text;?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- mobile slider area start --->
         <!-- slider Area Start-->
        <div class="slider-area slider-mobile">
            <div class="slider-active">
                <?php
                if(isset($home_banner_mob_data)){
                    foreach ($home_banner_mob_data as $key => $val) {
                        ?>
                        <!-- <div class="single-slider slider-height d-flex align-items-center" style="background-size:cover;" data-background="https://via.placeholder.com/1350x400"> -->
                        <div class="single-slider slider-height d-flex align-items-center" style="background-size:cover;" data-background="<?php echo base_url();?>uploads/<?php echo $val->img_link;?>">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <div class="hero__caption">
                                            <h1 data-animation="fadeInLeft" data-delay=".6s" ><?php echo $val->img_text;?></h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- mobile slider area end ---->

        <!-- Team-profile Start -->
        <div class="team-profile team-padding bar-bottom" style="background:#ffffff;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                         <h2 align="center" style="margin-top:40px;font-weight: 700;font-size:38px;"><?php echo $home_section1_data[0]->element_content;?></h2>
                    </div>
                    <div class="col-md-6">
                        
                            <!-- Back -->
                            <div class="single-profile-back-last single-margin ">
                            <br />
                                <p align="justify" class="exporal-padding"><?php echo nl2br($home_section1_data[1]->element_content);?></p>
                                <!--<a href="#">View profile »</a>-->
                            </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="trusted-img">
                            <iframe src="https://player.vimeo.com/video/<?php echo $home_section2_data[1]->element_content;?>" width="550" height="310" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/fIU7mPQKr6w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                            <!-- <video
                                id="my-video"
                                class="video-js"
                                controls
                                preload="auto"
                                width="640"
                                height="350"
                                data-setup="{}"
                              >
                                <source src="<?php echo base_url();?>assets/front/vid/Regaal_Home.mp4" type="video/mp4" />
                                <source src="MY_VIDEO.webm" type="video/webm" />
                                <p class="vjs-no-js">
                                  To view this video please enable JavaScript, and consider upgrading to a
                                  web browser that
                                  <a href="https://videojs.com/html5-video-support/" target="_blank"
                                    >supports HTML5 video</a
                                  >
                                </p>
                              </video> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team-profile End-->

        <!-- We Trusted Start-->
      <div class="we-trusted-area">
            <div class="container">
              <div class="row d-flex align-items-end">
                    <div class="col-xl-12 col-lg-12">
                        <div class="trusted-caption journer-bar">
                           <h2 align="center" style="margin-bottom:0px !important;margin-top:50px;"><?php echo $home_section2_data[0]->element_content;?></h2>
                          <!-- <p>
                            <ul class="trusted-calender-sec">
                                <li><i class="fas fa-calendar-alt" style="color:#ff656a;"></i>2012 – Conception of Idea and Company Incorporation.</li>
                                <li> <i class="fas fa-calendar-alt" style="color:#012f5f;"></i>2015 – Commencement of work for the set-up of Manufacturing Unit</li>
                                <li><i class="fas fa-calendar-alt" style="color:#e07979;"></i>2018 –Commencement of Production</li>
                                <li><i class="fas fa-calendar-alt" style="color:#47901a;"></i>2019 – Consistent plant capacity Utilization at above 100%.</li>
                                <li><i class="fas fa-calendar-alt"></i>2020 - Plans for capacity expansion and set-up of modified starch unit.</li>
                            </ul>
                           </p>-->
                        </div>
                    </div>
                
                    
                  
                    
                </div>
                
            </div>
            
        </div>
        <section class="ps-timeline-sec">
        <div class="container">
            
            <ol class="ps-timeline">
                <li>
                    <div class="img-handler-top">
                       <!-- <img src="http://www.physology.co.uk/wp-content/uploads/2016/02/ps-elem_03.png" alt=""/>-->
                       
                       <img src="<?php echo base_url()?>assets/front/img/icon/icon.webp" alt=""/>
                    </div>
                    <div class="ps-bot">
                        <p><?php echo $home_timeline_data[5]->timeline_text;?></p>
                    </div>
                    <span class="ps-sp-top"><?php echo $home_timeline_data[5]->timeline_year;?></span>
                </li>
                <li>
                    <div class="img-handler-bot">
                        <img src="<?php echo base_url()?>assets/front/img/icon/icon4.webp" alt=""/>
                    </div>
                    <div class="ps-top">
                        <p><?php echo $home_timeline_data[4]->timeline_text;?></p>
                    </div>
                    <span class="ps-sp-bot"><?php echo $home_timeline_data[4]->timeline_year;?></span>
                </li>
                <li>
                    <div class="img-handler-top">
                        <img src="<?php echo base_url()?>assets/front/img/icon/icon2.webp" alt=""/>
                    </div>
                    <div class="ps-bot">
                        <p><?php echo $home_timeline_data[3]->timeline_text;?></p>
                    </div>
                    <span class="ps-sp-top"><?php echo $home_timeline_data[3]->timeline_year;?></span>
                </li>
                <li>
                    <div class="img-handler-bot">
                        <img src="<?php echo base_url()?>assets/front/img/icon/icon_new.webp" alt=""/>
                    </div>
                    <div class="ps-top">
                        <p><?php echo $home_timeline_data[2]->timeline_text;?></p>
                    </div>
                    <span class="ps-sp-bot"><?php echo $home_timeline_data[2]->timeline_year;?></span>
                </li>
                <li>
                    <div class="img-handler-top">
                        <img src="<?php echo base_url()?>assets/front/img/icon/icon3.webp" alt=""/>
                    </div>
                    <div class="ps-bot">
                        <p><?php echo $home_timeline_data[1]->timeline_text;?></p>
                    </div>
                    <span class="ps-sp-top"><?php echo $home_timeline_data[1]->timeline_year;?></span>
                </li>
                <li class="last-timeline">
                    <div class="last-timeline-img ">
                        <img src="<?php echo base_url()?>assets/front/img/icon/icon6.png" alt=""/>
                    </div>
                    <div class="ps-top">
                        <p><?php echo $home_timeline_data[0]->timeline_text;?></p>
                    </div>
                    <span class="ps-sp-bot"><?php echo $home_timeline_data[0]->timeline_year;?></span>
                </li>
               
                
            </ol>
        </div>
    </section>
        
        <!-- We Trusted End-->

        

       
        <!-- Request Back Start -->
        <div class="request-desktop request-back-area section-padding30" style="background-image: url(<?php echo base_url().'uploads/'.$home_section3_pic_data_desk[0]->img_link;?>);min-height: 370px;background-size: cover;background-position: center center;">
        </div>
        <!-- <div class="request-desktop request-back-area section-padding30" style="background-image: url('https://via.placeholder.com/1350x400');min-height: 370px;background-size: cover;background-position: center center;">
        </div> -->
        
        <!-- for mobile footer above--->
        <div class="request-mobile request-back-area section-padding30" style="background-image: url(<?php echo base_url().'uploads/'.$home_section3_pic_data_mob[0]->img_link;?>);min-height: 370px;background-size: cover;
    background-position: center;">
            </div>
            <!-- <div class="request-mobile request-back-area section-padding30" style="background-image: url('https://via.placeholder.com/1350x400');min-height: 370px;background-size: cover;
    background-position: center;">
            </div> -->
        <!-- for mobile end -->
        <!-- Request Back End -->

    </main>

<?php $this->load->view('common/footer');?>