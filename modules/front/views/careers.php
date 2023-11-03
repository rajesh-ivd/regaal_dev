<?php $this->load->view('common/header');?>
     <!-- slider Area Start-->
     <div class="slider-area slider-about-area-desktop">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$careers_banner_data_desk[0]->img_link;?>"style="background-size: cover;background-position: center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $careers_banner_data_desk[0]->img_text;?></h2>
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
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$careers_banner_data_mob[0]->img_link;?>"style="background-size: cover;background-position: center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $careers_banner_data_mob[0]->img_text;?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
        <br />
        <h3 align="center" class="bold-text" style="font-size:38px;"><?php echo $careers_section1_data[0]->element_content;?></h3>
            <div class="row">
            <p style="text-align: justify;"><?php echo nl2br($careers_section1_data[1]->element_content);?></p>

            </div>
            <h3 align="center" class="bold-text top-padding">Open Positions</h3>
                
                
            <!-- Accordion Starts here -->
                <!--Accordion wrapper-->
							<div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">


                                <?php
                                if(isset($careers_job_data)){
                                    $k = 1;
                                    foreach ($careers_job_data as $key => $val) {
                                        ?>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingTwo1">
                                              <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo<?php echo $k;?>"
                                                aria-expanded="false" aria-controls="collapseTwo<?php echo $k;?>">
                                                <h5 class="mb-0">
                                                  <?php echo $val->job_title;?><i class="fas fa-angle-down rotate-icon"></i>
                                                </h5>
                                              </a>
                                            </div>
                                            <div id="collapseTwo<?php echo $k;?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo1"
                                              data-parent="#accordionEx1">
                                              <div class="card-body">
                                                <?php echo nl2br($val->job_text);?>
                                              </div>
                                              <div class="card-body"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Apply Online</button></div>
                                            </div>
                                          </div>
                                        <?php
                                        $k++;
                                    }
                                }
                                ?>

							</div>
							<!-- Accordion wrapper -->
							                
                <!-- Accordion end ---------->
        </div>
    </section>


    <div class="testimonial-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Employee Testimonials</h3>
                </div>
            </div>
            <div class="row">
                <?php
                    if(isset($careers_testimonial_data)){
                        foreach ($careers_testimonial_data as $key => $val) {
                            if($key%3==0) echo '</div><div class="row">';
                            if(!empty($val->testimonial_image_link)) $src = base_url().'uploads/'.$val->testimonial_image_link;
                            else $src = base_url().'assets/img/blank_user.png';
                            if($key<3){
                                echo '<div class="col-md-4 top-space">
                                        <div class="team">
                                            <img src="'.$src.'" />
                                            <h4>'.$val->testimonial_name.'</h4>
                                            <p><q> '.$val->testimonial_text.' </q></p>
                                        </div>
                                    </div>';
                            }
                            else{
                                echo '<div class="col-md-4" style="margin-top: 40px;">
                                        <div class="team">
                                            <img src="'.$src.'" />
                                            <h4>'.$val->testimonial_name.'</h4>
                                            <p><q> '.$val->testimonial_text.' </q></p>
                                        </div>
                                    </div>';
                            }
                        }
                    }
                ?>
                <!-- <div class="col-md-4">
                    <div class="team">
                        <img src="<?php echo base_url();?>assets/img/blank_user.png" />
                        <h4>Amit</h4>
                        <p><q> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ante vitae ex tincidunt sollicitudin. Curabitur egestas pellentesque mauris. Donec tristique lacus neque, consequat rutrum sapien posuere nec. In posuere mattis ipsum sit amet consectetur. </q></p>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="team">
                        <img src="<?php echo base_url();?>assets/img/blank_user.png" />
                        <h4>Amit</h4>
                        <p><q> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ante vitae ex tincidunt sollicitudin. Curabitur egestas pellentesque mauris. Donec tristique lacus neque, consequat rutrum sapien posuere nec. In posuere mattis ipsum sit amet consectetur. </q></p>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="team">
                        <img src="<?php echo base_url();?>assets/img/blank_user.png" />
                        <h4>Amit</h4>
                        <p><q> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at ante vitae ex tincidunt sollicitudin. Curabitur egestas pellentesque mauris. Donec tristique lacus neque, consequat rutrum sapien posuere nec. In posuere mattis ipsum sit amet consectetur. </q></p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    
    <!--- Modal Box --->
    <!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					      <h4 class="modal-title">Apply</h4>
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        
					      </div>
					      <div class="modal-body">
					        <div class="col-lg12">
                        <form class="form-contact contact_form" action="<?php echo base_url().'front/send_email_careers';?>" method="post" id="contactForm" onsubmit="return check_sub()">
                            <div class="row">
                                <div class="col-12">
                                
                                	<div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" name="exp" id="exp" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Job Experience'" placeholder="Job Experience">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control" name="number" id="number" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact Number'" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="col-sm-12">
	                                    <div class="form-group">
	                                        <input class="form-control" type="file" name="attach" id="attach" placeholder="Upload CV" />
	                                    </div>
                                	</div>
	                                <div class="col-sm-12">
	                                    <div class="form-group">
	                                        <select class="form-select" name="job" id="job" required>
	                                        	<option value="">-Select Position Applied For -</option>
	                                        	<!-- <option value="1">Production Engineer</option>
	                                        	<option value="2">Site In-charge</option> -->
                                                <?php
                                                if(isset($careers_job_data)){
                                                    foreach ($careers_job_data as $key => $val) {
                                                        echo '<option value="'.$val->job_title.'">'.$val->job_title.'</option>';
                                                    }
                                                }
                                                ?>
	                                        </select>
                                            <label id="job_text" style="display: none;">which position you are aplying for?</label>
	                                    </div>
	                                </div>
                                	
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" id="submit_btn" class="button button-contactForm boxed-btn">Submit <div class="loader" id="sub_loader"></div></button>
                            </div>
                        </form>
                    </div>
					      </div>
					      <!--<div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>-->
					    </div>

					  </div>
					</div>
    <?php
    if($this->session->userdata('mail_status') && $this->session->userdata('mail_status')=='yes'){
        $this->session->set_userdata(array('mail_status'=>'no'));
        ?><h1 style="text-align: center; color: limegreen;">Your application submitted successfully.</h1><?php
    }
    ?>
    
    <!-- Modal Box ends -->
    
    
    
    <!--================Blog Area =================-->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
<style type="text/css">
.loader {
    float: right;
    display: none;
  border: 5px solid #f3f3f3; /* Light grey */
  border-top: 5px solid #3498db; /* Blue */
  border-radius: 50%;
  width: 20px;
  height: 20px;
  animation: spin 1s linear infinite;
}
@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

<script type="text/javascript">
function check_sub(){
    // alert($('#job').val());
    if($('#job').val()==''){
        $('#job_text').css('display','block');
        return false;
    }
    else{
        $('#sub_loader').css('display','block');
        // $('#contactForm').submit();
        var base_url = '<?php echo base_url();?>';
        var attach = $('#attach').prop('files')[0];
        var form_data = new FormData();
        form_data.append('attach', attach);
        form_data.append('name', $('#name').val());
        form_data.append('email', $('#email').val());
        form_data.append('exp', $('#exp').val());
        form_data.append('number', $('#number').val());
        form_data.append('job', $('#job').val());
        $.ajax({
            type: "POST",
            url: base_url + 'front/send_email_careers',
            data: form_data,
            processData:false,
            contentType:false,
            cache:false,
            success:
                function(data){
                    // alert(data);
                    window.location.reload();
                }
          });
    }
    return false;
}
</script>
<?php $this->load->view('common/footer');?>