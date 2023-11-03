<?php $this->load->view('common/header');?>
<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: Welcome ::</title>

    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/admin/css/style.css" rel="stylesheet" />
</head> 
<body style="background: #fff;" onload="bodyload()">  -->
  <div class="loginSec">
  <div class="loginHeader clearfix">
    <div class="log"><img src="<?php echo base_url();?>assets/img/logo.webp" alt=""></div>
  </div>
  <div class="log-back text-center">
    <div class="logSec">
      <div id="username_validation"></div>
      <div class="logSecHead clearfix">
          <div class="iconEducation"><i class="fa fa-lock"></i></div>
          <div class="secureEducation">HIGH SECURED LOGIN</div>
      </div>
      <div class="loginBody">
      <form method="POST" >
        <div class="col-md-12 eform-top">
            <!-- <label class="form-label">User ID</label> -->
            <div class="input-group">
                <!-- <div class="emailArow" onclick="username_validation()">&nbsp;</div> -->
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input id="email" type="text" class="form-control uid" name="email"  placeholder="Email" value="">
            </div>
                <p style="color: red;" id="error_email"></p>
        </div>
        <div class="col-md-12 eform-top">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input id="password" type="password" class="form-control demos" name="password" placeholder="Password" value="" autocomplete="off">
                <!-- <div class="passArow logButton" style="border: none;" onclick="admin_login()">&nbsp;</div> -->
            </div>
                <p style="color: red;" id="error_password"></p>
        </div>
        <div class="col-md-12 eform-top">
            <div class="input-group">
                <input type="submit" value="Submit" onclick="return admin_login()">
            </div>
        </div>
      </form>
    </div>
      <!-- <div class="clicky"><span>If you are having trouble loging in please<a href="#"> contact here</a></span></div> -->
    </div>
  </div>
</div>
	</div>
<!-- Jquery Core Js -->
<!-- <script src="<?php echo base_url();?>assets/admin/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script> -->

<script>

$('#email').focus();

function admin_login()
{
    var base_url = "<?php echo base_url(); ?>";

    $('#error_email').html('');
    $('#error_password').html('');

    var email = $("#email").val();
    var password = $("#password").val();
    // alert(email);
    $.ajax({
      type: "POST",
      url: base_url + "admin/admin/login_check",
      data: {email: email,password: password, target: 'admin'},
      success: 
          function(data){              
            // alert(data);
            var obj = JSON.parse(data);
            if(obj.status=='failed'){
                $('#'+obj.error_p).html(obj.msg);
                $('#'+obj.focus).focus();
            }
            else{
                // alert('success');
                window.location.href = base_url + 'admin/home';
            }
          }
    });
    return false;
}


</script>
<script>
$('#email').keypress(function(event){
  var keycode = (event.keyCode ? event.keyCode : event.which);
  if(keycode == '13'){
    // username_validation();
    $("#password").focus();
  }
});

$('#password').keypress(function(event){
  var keycode = (event.keyCode ? event.keyCode : event.which);
  if(keycode == '13'){
    admin_login();
  }
});
</script>

<?php $this->load->view('common/footer');?>
<!-- </body>
</html> -->