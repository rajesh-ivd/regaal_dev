<?php $this->load->view('common/header');?>
    <!-- slider Area Start-->
    <div class="slider-area slider-about-area-desktop">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$contact_banner_data_desk[0]->img_link;?>" style="background-size: cover;background-position: center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $contact_banner_data_desk[0]->img_text;?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="slider-area slider-about-area-mobile">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" data-background="<?php echo base_url().'uploads/'.$contact_banner_data_mob[0]->img_link;?>" style="background-size: cover;background-position: center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $contact_banner_data_mob[0]->img_text;?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    
    <?php
    if($this->session->userdata('mail_status') && $this->session->userdata('mail_status')=='yes'){
        $this->session->set_userdata(array('mail_status'=>'no'));
        ?><h1 style="text-align: center; color: limegreen;">Thank you for contacting us.</h1><?php
    }
    ?>
    
    <!-- slider Area End-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-6">
                        <form class="form-contact contact_form" action="<?php echo base_url().'send_email'?>" method="post" id="contactForm" novalidate="novalidate" onsubmit="return check_sub()">
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
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" cols="28" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                	</div>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>HEAD OFFICE:</h3>
                                <p><?php echo nl2br($contact_section1_data[1]->element_content);?></p>
                            </div>
                        </div>
                        
                        
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>FACTORY:</h3>
                                <p><?php echo nl2br($contact_section1_data[2]->element_content);?></p>
                            </div>
                        </div>
                        
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>CITY OFFICE:</h3>
                                <p><?php echo nl2br($contact_section1_data[3]->element_content);?></p>
                            </div>
                        </div>
                        <!--<div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
<script type="text/javascript">
function check_sub(){
    // alert($('#job').val());
    if($('#name').val()=='' || $('#email').val()=='' || $('#subject').val()=='' || $('#message').val()==''){
        // $('#job_text').css('display','block');
        return false;
    }
    else{
        // $('#sub_loader').css('display','block');
        // $('#contactForm').submit();
        var base_url = '<?php echo base_url();?>';
        // var attach = $('#attach').prop('files')[0];
        var form_data = new FormData();
        // form_data.append('attach', attach);
        form_data.append('name', $('#name').val());
        form_data.append('email', $('#email').val());
        form_data.append('subject', $('#subject').val());
        form_data.append('message', $('#message').val());
        $.ajax({
            type: "POST",
            url: base_url + 'front/send_email',
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