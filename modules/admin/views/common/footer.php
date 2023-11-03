    <script src="<?php echo base_url().'assets/' ?>lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url().'assets/'?>lib/feather-icons/feather.min.js"></script>
    <!-- <script src="<?php echo base_url().'assets/' ?>lib/perfect-scrollbar/perfect-scrollbar.min.js"></script> -->

    <script src="<?php echo base_url().'assets/' ?>js/dashforge.js"></script>
    <!-- <script src="<?php echo base_url().'assets/' ?>js/dashforge.aside.js"></script> -->

    <!-- append theme customizer -->
    <script src="<?php echo base_url().'assets/' ?>lib/js-cookie/js.cookie.js"></script>
    <!-- <script src="<?php echo base_url().'assets/' ?>js/dashforge.settings.js"></script> -->
        <script src="<?php echo base_url().'assets/' ?>lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url().'assets/' ?>lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script type="text/javascript">

     // ClassicEditor
     //   .create( document.querySelector( '#editor' ) )
     //   .catch( error => {
     //       console.error( error );
     //   } );
     // BalloonEditor
     //   .create( document.querySelector( '#editor' ) )
     //   .catch( error => {
     //       console.error( error );
     //   } );
     // function auto_grow(element) {
     //     element.style.height = "5px";
     //     element.style.height = (element.scrollHeight)+"px";
     // }


     $('#example2').DataTable({
        responsive: true,
        language: {
          searchPlaceholder: 'Search...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });

      var page = "<?php echo $page;?>";
      $('#'+page).addClass('active');

     // var active_target = "<?php echo $this->session->userdata('active_target');?>";
     console.log(localStorage.getItem("active_target"));
     if(localStorage.getItem("active_target")){
        $('#'+localStorage.getItem("active_target")).addClass('active');
        $('#'+localStorage.getItem("active_target")+'-tab').addClass('active');
     }
     // if(active_target!='' && $('#'+active_target).length){
     //   if(active_target!=''){
     //     $('#'+active_target).addClass('active');
     //     $('#'+active_target+'-tab').addClass('active');
     //   }
     // }
     else{
       $('#banner').addClass('active');
       $('#banner-tab').addClass('active');
     }

     function make_active(active_target){
      localStorage.setItem("active_target", active_target);
       // var base_url = "<?php echo base_url(); ?>";
       // $.ajax({
       //   type: "POST",
       //   url: base_url + "admin/admin/make_active",
       //   data: {active_target: active_target},
       //   success: 
       //       function(data){
       //         // alert(data);
       //       }
       //   });
     }

    function logout(){
        var base_url = "<?php echo base_url(); ?>";
      $.ajax({
        type: "POST",
        url: base_url + "admin/admin/logout",
        success: 
            function(data){
              window.location.href = base_url+'admin';
            }
      });
      return false;
    }















    //Home Page Functions start//

    function set_type_home(type){
      $('#target_type').val(type);
      if(type=='home_desk.php'){
        $('#type_text').text('Choose Image(1350x400):');
        $('#type_text_edit').text('Choose Image(1350x400):');
      }
      else{
        $('#type_text').text('Choose Image(384x150):');
        $('#type_text_edit').text('Choose Image(384x150):');
      }
    }

    function home_banner_add(){
      var base_url = '<?php echo base_url();?>';
      var home_banner_text = $('#home_banner_text').val();
      var target_type = $('#target_type').val();
      var pic = $('#home_banner_pic').prop('files')[0];
      if(home_banner_text==''){home_banner_text=' ';}
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_text', home_banner_text);
      form_data.append('img_target_page', target_type);
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function home_banner_edit_data_desk(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#home_banner_text_edit').val(obj.img_text);
              $('#home_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text_edit').text('Choose Image(1350x400):');
            }
      });
    }

    function home_banner_edit_data_mob(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#home_banner_text_edit').val(obj.img_text);
              $('#home_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text_edit').text('Choose Image(384x150):');
            }
      });
    }


    function home_banner_edit(){
      var base_url = '<?php echo base_url();?>';
      var home_banner_text_edit = $('#home_banner_text_edit').val();
      var home_banner_edit_id = $('#home_banner_edit_id').val();
      var pic = $('#home_banner_pic_edit').prop('files')[0];
      if(home_banner_text_edit==''){home_banner_text_edit=' ';}
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', home_banner_edit_id);
      form_data.append('img_text', home_banner_text_edit);
      // form_data.append('img_target_page', 'home.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function image_del(img_id){

      $.confirm({
          title: 'You are about to Delete an Item!!',
          content: 'Would you like to continue?',
          backgroundDismiss: true,
          boxWidth: '30%',
          useBootstrap: false,
          buttons: {
              proceed: {
                btnClass: 'btn-green',
                  action: function(){
                    image_del2(img_id);
                }},
              cancel: {
                btnClass: 'btn-red',
                  action: function(){
                    // del_pro2(row_id);
                }}
          }
      });
    }



    function image_del2(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_del',
        data: {img_id: img_id},
        success:
            function(data){
              window.location.reload();
            }
      });
    }


    function home_section1_save(){
      var base_url = '<?php echo base_url();?>';
      var home_section1_title = $('#home_section1_title').val();
      var home_section1_text = $('#home_section1_text').val();
      var home_section2_videoid = $('#home_section2_videoid').val();
      if(home_section1_title=='' || home_section1_text=='' || home_section2_videoid==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/home_section1_save',
        data: {home_section1_title: home_section1_title, home_section1_text: home_section1_text, home_section2_videoid: home_section2_videoid},
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function home_section2_save(){
      var base_url = '<?php echo base_url();?>';
      var home_section2_title = $('#home_section2_title').val();
      // var home_section2_videoid = $('#home_section2_videoid').val();
      if(home_section2_title==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/home_section2_save',
        data: {home_section2_title: home_section2_title},
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function home_timeline_year_add(){
      var base_url = '<?php echo base_url();?>';
      var home_timeline_year = $('#home_timeline_year').val();
      var home_timeline_text = $('#home_timeline_text').val();
      if(home_timeline_year=='' || home_timeline_text==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/home_timeline_year_add',
        data: {home_timeline_year: home_timeline_year, home_timeline_text: home_timeline_text},
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function home_timeline_data(timeline_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/home_timeline_data',
        data: {timeline_id: timeline_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.timeline_year);
              $('#home_timeline_year_edit').val(obj.timeline_year);
              $('#home_timeline_text_edit').val(obj.timeline_text);
              $('#home_timeline_id_edit').val(timeline_id);
            }
      });
    }


    function home_timeline_year_update(){
      var base_url = '<?php echo base_url();?>';
      var home_timeline_year_edit = $('#home_timeline_year_edit').val();
      var home_timeline_text_edit = $('#home_timeline_text_edit').val();
      var home_timeline_id_edit = $('#home_timeline_id_edit').val();
      if(home_timeline_text_edit=='' || home_timeline_text_edit==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/home_timeline_year_update',
        data: {
          home_timeline_year_edit: home_timeline_year_edit,
          home_timeline_text_edit: home_timeline_text_edit,
          home_timeline_id_edit: home_timeline_id_edit
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }

    function home_timeline_del(timeline_id){

      $.confirm({
          title: 'You are about to Delete an Item!!',
          content: 'Would you like to continue?',
          backgroundDismiss: true,
          boxWidth: '30%',
          useBootstrap: false,
          buttons: {
              proceed: {
                btnClass: 'btn-green',
                  action: function(){
                    home_timeline_del2(timeline_id);
                }},
              cancel: {
                btnClass: 'btn-red',
                  action: function(){
                    // del_pro2(row_id);
                }}
          }
      });
    }

    function home_timeline_del2(timeline_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/home_timeline_del',
        data: {timeline_id: timeline_id},
        success:
            function(data){
              window.location.reload();
            }
      });
    }


    function home_section3_save(){
      var base_url = '<?php echo base_url();?>';
      var home_section3_title = $('#home_section3_title').val();
      var home_section3_text = $('#home_section3_text').val();
      if(home_section3_title=='' || home_section3_text==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/home_section3_save',
        data: {home_section3_title: home_section3_title, home_section3_text: home_section3_text},
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function home_section3_pic_data_desk(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              // $('#home_banner_text_edit').val(obj.img_text);
              $('#home_section3_image_edit_id').val(img_id);
              $('#show_pic2').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic2').css('display', 'block');
              $('#type_text_env').text('Choose Image(1350x400):');
            }
      });
    }


    function home_section3_pic_data_mob(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              // $('#home_banner_text_edit').val(obj.img_text);
              $('#home_section3_image_edit_id').val(img_id);
              $('#show_pic2').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic2').css('display', 'block');
              $('#type_text_env').text('Choose Image(384x150):');
            }
      });
    }


    function home_section3_image_update(){
      var base_url = '<?php echo base_url();?>';
      var home_section3_image_edit_id = $('#home_section3_image_edit_id').val();
      var pic = $('#home_section3_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', home_section3_image_edit_id);
      // form_data.append('img_target_page', 'home.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
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


























    function leadership_banner_edit_data_desk(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#leadership_banner_text_edit').val(obj.img_text);
              $('#leadership_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(1350x400):');
            }
      });
    }

    function leadership_banner_edit_data_mob(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#leadership_banner_text_edit').val(obj.img_text);
              $('#leadership_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(384x150):');
            }
      });
    }


    function leadership_banner_edit(){
      var base_url = '<?php echo base_url();?>';
      var leadership_banner_text_edit = $('#leadership_banner_text_edit').val();
      var leadership_banner_edit_id = $('#leadership_banner_edit_id').val();
      var pic = $('#leadership_banner_pic_edit').prop('files')[0];
      if(leadership_banner_text_edit==''){leadership_banner_text_edit=' ';}
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', leadership_banner_edit_id);
      form_data.append('img_text', leadership_banner_text_edit);
      // form_data.append('img_target_page', 'leadership.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }

    function leadership_section1_image_add(){
      var base_url = '<?php echo base_url();?>';
      var leadership_section1_image_name = $('#leadership_section1_image_name').val();
      var leadership_section1_image_text = $('#leadership_section1_image_text').val();
      var leadership_section1_linkedin_link = $('#leadership_section1_linkedin_link').val();
      var pic = $('#leadership_section1_image').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_title', leadership_section1_image_name);
      form_data.append('img_text', leadership_section1_image_text);
      form_data.append('linkedin_link', leadership_section1_linkedin_link);
      form_data.append('img_target_page', 'leadership.php');
      form_data.append('img_section', '4');
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function leadership_section1_pic_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#leadership_section1_image_name_edit').val(obj.img_title);
              $('#leadership_section1_image_text_edit').val(obj.img_text);
              $('#leadership_section1_linkedin_link_edit').val(obj.linkedin_link);
              $('#leadership_section1_image_id_edit').val(img_id);
              $('#show_pic2').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic2').css('display', 'block');
            }
      });
    }


    function leadership_section1_image_update(){
      var base_url = '<?php echo base_url();?>';
      var leadership_section1_image_name_edit = $('#leadership_section1_image_name_edit').val();
      var leadership_section1_image_text_edit = $('#leadership_section1_image_text_edit').val();
      var leadership_section1_linkedin_link_edit = $('#leadership_section1_linkedin_link_edit').val();
      var leadership_section1_image_id_edit = $('#leadership_section1_image_id_edit').val();
      var pic = $('#leadership_section1_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', leadership_section1_image_id_edit);
      form_data.append('img_title', leadership_section1_image_name_edit);
      form_data.append('img_text', leadership_section1_image_text_edit);
      form_data.append('linkedin_link', leadership_section1_linkedin_link_edit);
      form_data.append('img_target_page', 'leadership.php');
      form_data.append('img_section', '4');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function image_del(img_id){

      $.confirm({
          title: 'You are about to Delete an Item!!',
          content: 'Would you like to continue?',
          backgroundDismiss: true,
          boxWidth: '30%',
          useBootstrap: false,
          buttons: {
              proceed: {
                btnClass: 'btn-green',
                  action: function(){
                    image_del2(img_id);
                }},
              cancel: {
                btnClass: 'btn-red',
                  action: function(){
                    // del_pro2(row_id);
                }}
          }
      });
    }



    function image_del2(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_del',
        data: {img_id: img_id},
        success:
            function(data){
              window.location.reload();
            }
      });
    }






































    function products_banner_edit_data_desk(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#products_banner_text_edit').val(obj.img_text);
              $('#products_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(1350x400):');
            }
      });
    }

    function products_banner_edit_data_mob(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#products_banner_text_edit').val(obj.img_text);
              $('#products_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(384x150):');
            }
      });
    }


    function products_banner_edit(){
      var base_url = '<?php echo base_url();?>';
      var products_banner_text_edit = $('#products_banner_text_edit').val();
      var products_banner_edit_id = $('#products_banner_edit_id').val();
      var pic = $('#products_banner_pic_edit').prop('files')[0];
      if(products_banner_text_edit==''){products_banner_text_edit=' ';}
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', products_banner_edit_id);
      form_data.append('img_text', products_banner_text_edit);
      // form_data.append('img_target_page', 'products.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }

    function products_section1_image_add(){
      var base_url = '<?php echo base_url();?>';
      var products_section1_image_name = $('#products_section1_image_name').val();
      var products_section1_image_text = $('#products_section1_image_text').val();
      var products_section1_category = $('#products_section1_category').val();
      var pic = $('#products_section1_image').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_title', products_section1_image_name);
      form_data.append('img_text', products_section1_image_text);
      form_data.append('category', products_section1_category);
      form_data.append('img_target_page', 'products.php');
      form_data.append('img_section', '5');
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function products_section1_pic_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#products_section1_image_name_edit').val(obj.img_title);
              $('#products_section1_image_text_edit').val(obj.img_text);
              $('#products_section1_category_edit').val(obj.category);
              $('#products_section1_image_id_edit').val(img_id);
              $('#show_pic2').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic2').css('display', 'block');
            }
      });
    }


    function products_section1_image_update(){
      var base_url = '<?php echo base_url();?>';
      var products_section1_image_name_edit = $('#products_section1_image_name_edit').val();
      var products_section1_image_text_edit = $('#products_section1_image_text_edit').val();
      var products_section1_category_edit = $('#products_section1_category_edit').val();
      var products_section1_image_id_edit = $('#products_section1_image_id_edit').val();
      var pic = $('#products_section1_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', products_section1_image_id_edit);
      form_data.append('img_title', products_section1_image_name_edit);
      form_data.append('img_text', products_section1_image_text_edit);
      form_data.append('category', products_section1_category_edit);
      form_data.append('img_target_page', 'products.php');
      form_data.append('img_section', '5');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function image_del(img_id){

      $.confirm({
          title: 'You are about to Delete an Item!!',
          content: 'Would you like to continue?',
          backgroundDismiss: true,
          boxWidth: '30%',
          useBootstrap: false,
          buttons: {
              proceed: {
                btnClass: 'btn-green',
                  action: function(){
                    image_del2(img_id);
                }},
              cancel: {
                btnClass: 'btn-red',
                  action: function(){
                    // del_pro2(row_id);
                }}
          }
      });
    }



    function image_del2(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_del',
        data: {img_id: img_id},
        success:
            function(data){
              window.location.reload();
            }
      });
    }


    function future_product_add(){
      var base_url = '<?php echo base_url();?>';
      var form_data = new FormData();
      form_data.append('product_name', $('#future_product_name').val());
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/future_product_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
              window.location.reload();
            }
      });
    }



    function future_product_edit_data(product_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/future_product_edit_data',
        data: {product_id, product_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              $('#future_product_name_edit').val(obj.product_name);
              $('#future_product_id_edit').val(obj.product_id);
            }
      });
    }


    function future_product_update(){
      var base_url = '<?php echo base_url();?>';
      var form_data = new FormData();
      form_data.append('product_name', $('#future_product_name_edit').val());
      form_data.append('product_id', $('#future_product_id_edit').val());
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/future_product_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
              // console.log(data);
              window.location.reload();
            }
      });
    }


    function futute_product_del(product_id){
      $.confirm({
          title: 'You are about to Delete an Item!!',
          content: 'Would you like to continue?',
          backgroundDismiss: true,
          boxWidth: '30%',
          useBootstrap: false,
          buttons: {
              proceed: {
                btnClass: 'btn-green',
                  action: function(){
                    futute_product_del2(product_id);
                }},
              cancel: {
                btnClass: 'btn-red',
                  action: function(){
                    // del_pro2(row_id);
                }}
          }
      });
    }


    function futute_product_del2(product_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/futute_product_del',
        data: {product_id: product_id},
        success:
            function(data){
              window.location.reload();
            }
      });
    }































    function csr_banner_edit_data_desk(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#csr_banner_text_edit').val(obj.img_text);
              $('#csr_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(1350x400):');
            }
      });
    }


    function csr_banner_edit_data_mob(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#csr_banner_text_edit').val(obj.img_text);
              $('#csr_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(384x150):');
            }
      });
    }


    function csr_banner_edit(){
      var base_url = '<?php echo base_url();?>';
      var csr_banner_text_edit = $('#csr_banner_text_edit').val();
      var csr_banner_edit_id = $('#csr_banner_edit_id').val();
      var pic = $('#csr_banner_pic_edit').prop('files')[0];
      if(csr_banner_text_edit==''){csr_banner_text_edit=' ';}
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', csr_banner_edit_id);
      form_data.append('img_text', csr_banner_text_edit);
      // form_data.append('img_target_page', 'csr.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function csr_section1_save(){
      var base_url = '<?php echo base_url();?>';
      var csr_section1_title = $('#csr_section1_title').val();
      var csr_section1_text = $('#csr_section1_text').val();
      if(csr_section1_title=='' || csr_section1_text==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/csr_section1_save',
        data: {csr_section1_title: csr_section1_title, csr_section1_text: csr_section1_text},
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function csr_section1_image_add(){
      var base_url = '<?php echo base_url();?>';
      var csr_section1_image_text = $('#csr_section1_image_text').val();
      var pic = $('#csr_section1_image').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_text', csr_section1_image_text);
      form_data.append('img_target_page', 'csr.php');
      form_data.append('img_section', '9');
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function csr_section1_pic_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#csr_section1_image_text_edit').val(obj.img_text);
              $('#csr_section1_image_id_edit').val(img_id);
              $('#show_pic2').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic2').css('display', 'block');
            }
      });
    }


    function csr_section1_image_update(){
      var base_url = '<?php echo base_url();?>';
      var csr_section1_image_text_edit = $('#csr_section1_image_text_edit').val();
      var csr_section1_image_id_edit = $('#csr_section1_image_id_edit').val();
      var pic = $('#csr_section1_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', csr_section1_image_id_edit);
      form_data.append('img_text', csr_section1_image_text_edit);
      form_data.append('img_target_page', 'csr.php');
      form_data.append('img_section', '9');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }
































    function about_banner_edit_data_desk(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#about_banner_text_edit').val(obj.img_text);
              $('#about_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(1350x400):');
            }
      });
    }


    function about_banner_edit_data_mob(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#about_banner_text_edit').val(obj.img_text);
              $('#about_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(384x150):');
            }
      });
    }


    function about_banner_edit(){
      var base_url = '<?php echo base_url();?>';
      var about_banner_text_edit = $('#about_banner_text_edit').val();
      var about_banner_edit_id = $('#about_banner_edit_id').val();
      var pic = $('#about_banner_pic_edit').prop('files')[0];
      if(about_banner_text_edit==''){about_banner_text_edit=' ';}
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', about_banner_edit_id);
      form_data.append('img_text', about_banner_text_edit);
      // form_data.append('img_target_page', 'about.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function about_section1_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#about_section1_name_edit').val(obj.img_text);
              $('#about_section1_edit_id').val(img_id);
              $('#show_pic2').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic2').css('display', 'block');
            }
      });
    }


    function about_section1_edit(){
      var base_url = '<?php echo base_url();?>';
      var about_section1_name_edit = $('#about_section1_name_edit').val();
      var about_section1_edit_id = $('#about_section1_edit_id').val();
      var pic = $('#about_section1_pic_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', about_section1_edit_id);
      form_data.append('img_title', about_section1_name_edit);
      form_data.append('img_target_page', 'about.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }

    function about_section1_save(){
      var base_url = '<?php echo base_url();?>';
      var about_section1_quote1 = $('#about_section1_quote1').val();
      var about_section1_quote2 = $('#about_section1_quote2').val();

      var about_section1_company_title = $('#about_section1_company_title').val();
      var about_section1_company_text = $('#about_section1_company_text').val();

      var about_section1_family_title = $('#about_section1_family_title').val();
      var about_section1_family_text = $('#about_section1_family_text').val();

      var about_section1_logo_title = $('#about_section1_logo_title').val();
      var about_section1_logo_text = $('#about_section1_logo_text').val();

      var about_section1_boldtext1 = $('#about_section1_boldtext1').val();
      var about_section1_boldtext2 = $('#about_section1_boldtext2').val();
      var about_section1_boldtext3 = $('#about_section1_boldtext3').val();

      var about_section1_mission_text = $('#about_section1_mission_text').val();
      var about_section1_vision_text = $('#about_section1_vision_text').val();
      var about_section1_values_text = $('#about_section1_values_text').val();

      var about_section1_value1_title = $('#about_section1_value1_title').val();
      var about_section1_value1_text = $('#about_section1_value1_text').val();

      var about_section1_value2_title = $('#about_section1_value2_title').val();
      var about_section1_value2_text = $('#about_section1_value2_text').val();

      var about_section1_value3_title = $('#about_section1_value3_title').val();
      var about_section1_value3_text = $('#about_section1_value3_text').val();

      var about_section1_value4_title = $('#about_section1_value4_title').val();
      var about_section1_value4_text = $('#about_section1_value4_text').val();

      var about_section1_value5_title = $('#about_section1_value5_title').val();
      var about_section1_value5_text = $('#about_section1_value5_text').val();

      var about_section1_value6_title = $('#about_section1_value6_title').val();
      var about_section1_value6_text = $('#about_section1_value6_text').val();

      var about_section1_value7_title = $('#about_section1_value7_title').val();
      var about_section1_value7_text = $('#about_section1_value7_text').val();

      if(about_section1_quote1=='' || about_section1_quote2=='' || about_section1_boldtext1=='' || about_section1_boldtext2=='' || about_section1_boldtext3=='' || about_section1_mission_text=='' || about_section1_vision_text=='' || about_section1_values_text=='' || about_section1_value1_title=='' || about_section1_value1_text=='' || about_section1_value2_title=='' || about_section1_value2_text=='' || about_section1_value3_title=='' || about_section1_value3_text=='' || about_section1_value4_title=='' || about_section1_value4_text=='' || about_section1_company_title=='' || about_section1_company_text=='' || about_section1_family_title=='' || about_section1_family_text=='' || about_section1_logo_title=='' || about_section1_logo_text=='' || about_section1_value5_title=='' || about_section1_value5_text=='' || about_section1_value6_title=='' || about_section1_value6_text=='' || about_section1_value7_title=='' || about_section1_value7_text==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/about_section1_save',
        data: {
          about_section1_quote1: about_section1_quote1, 
          about_section1_quote2: about_section1_quote2,

          about_section1_company_title: about_section1_company_title,
          about_section1_company_text: about_section1_company_text,

          about_section1_family_title: about_section1_family_title,
          about_section1_family_text: about_section1_family_text,

          about_section1_logo_title: about_section1_logo_title,
          about_section1_logo_text: about_section1_logo_text,

          about_section1_boldtext1: about_section1_boldtext1,
          about_section1_boldtext2: about_section1_boldtext2,
          about_section1_boldtext3: about_section1_boldtext3,
          about_section1_mission_text: about_section1_mission_text,
          about_section1_vision_text: about_section1_vision_text,
          about_section1_values_text: about_section1_values_text,

          about_section1_value1_title: about_section1_value1_title,
          about_section1_value1_text: about_section1_value1_text,

          about_section1_value2_title: about_section1_value2_title,
          about_section1_value2_text: about_section1_value2_text,

          about_section1_value3_title: about_section1_value3_title,
          about_section1_value3_text: about_section1_value3_text,

          about_section1_value4_title: about_section1_value4_title,
          about_section1_value4_text: about_section1_value4_text,

          about_section1_value5_title: about_section1_value5_title,
          about_section1_value5_text: about_section1_value5_text,

          about_section1_value6_title: about_section1_value6_title,
          about_section1_value6_text: about_section1_value6_text,

          about_section1_value7_title: about_section1_value7_title,
          about_section1_value7_text: about_section1_value7_text
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }

































    function culture_banner_edit_data_desk(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#culture_banner_text_edit').val(obj.img_text);
              $('#culture_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(1350x400):');
            }
      });
    }


    function culture_banner_edit_data_mob(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#culture_banner_text_edit').val(obj.img_text);
              $('#culture_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(384x150):');
            }
      });
    }


    function culture_banner_edit(){
      var base_url = '<?php echo base_url();?>';
      var culture_banner_text_edit = $('#culture_banner_text_edit').val();
      var culture_banner_edit_id = $('#culture_banner_edit_id').val();
      var pic = $('#culture_banner_pic_edit').prop('files')[0];
      if(culture_banner_text_edit==''){culture_banner_text_edit=' ';}
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', culture_banner_edit_id);
      form_data.append('img_text', culture_banner_text_edit);
      // form_data.append('img_target_page', 'culture.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function culture_section1_save(){
      var base_url = '<?php echo base_url();?>';
      var culture_section1_title = $('#culture_section1_title').val();
      var culture_section1_text1 = $('#culture_section1_text1').val();
      var culture_section1_text2 = $('#culture_section1_text2').val();
      var culture_section1_text3 = $('#culture_section1_text3').val();

      if(culture_section1_title=='' || culture_section1_text1=='' || culture_section1_text2=='' || culture_section1_text3==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/culture_section1_save',
        data: {
          culture_section1_title: culture_section1_title, 
          culture_section1_text1: culture_section1_text1,
          culture_section1_text2: culture_section1_text2,
          culture_section1_text3: culture_section1_text3
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


































    function achievements_banner_edit_data_desk(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#achievements_banner_text_edit').val(obj.img_text);
              $('#achievements_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(1350x400):');
            }
      });
    }


    function achievements_banner_edit_data_mob(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#achievements_banner_text_edit').val(obj.img_text);
              $('#achievements_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(384x150):');
            }
      });
    }


    function achievements_banner_edit(){
      var base_url = '<?php echo base_url();?>';
      var achievements_banner_text_edit = $('#achievements_banner_text_edit').val();
      var achievements_banner_edit_id = $('#achievements_banner_edit_id').val();
      var pic = $('#achievements_banner_pic_edit').prop('files')[0];
      if(achievements_banner_text_edit==''){achievements_banner_text_edit=' ';}
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', achievements_banner_edit_id);
      form_data.append('img_text', achievements_banner_text_edit);
      // form_data.append('img_target_page', 'achievements.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function achievements_section1_save(){
      var base_url = '<?php echo base_url();?>';
      var achievements_section1_title = $('#achievements_section1_title').val();
      var achievements_section1_text1 = $('#achievements_section1_text1').val();
      var achievements_section1_text2 = $('#achievements_section1_text2').val();

      if(achievements_section1_title=='' || achievements_section1_text1=='' || achievements_section1_text2==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/achievements_section1_save',
        data: {
          achievements_section1_title: achievements_section1_title, 
          achievements_section1_text1: achievements_section1_text1,
          achievements_section1_text2: achievements_section1_text2
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }














































    function careers_banner_edit_data_desk(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#careers_banner_text_edit').val(obj.img_text);
              $('#careers_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(1350x400):');
            }
      });
    }


    function careers_banner_edit_data_mob(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#careers_banner_text_edit').val(obj.img_text);
              $('#careers_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(384x150):');
            }
      });
    }


    function careers_banner_edit(){
      var base_url = '<?php echo base_url();?>';
      var careers_banner_text_edit = $('#careers_banner_text_edit').val();
      var careers_banner_edit_id = $('#careers_banner_edit_id').val();
      var pic = $('#careers_banner_pic_edit').prop('files')[0];
      if(careers_banner_text_edit==''){careers_banner_text_edit=' ';}
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', careers_banner_edit_id);
      form_data.append('img_text', careers_banner_text_edit);
      // form_data.append('img_target_page', 'careers.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }

    function careers_section1_save(){
      var base_url = '<?php echo base_url();?>';
      var careers_section1_title = $('#careers_section1_title').val();
      var careers_section1_text = $('#careers_section1_text').val();
      if(careers_section1_title=='' || careers_section1_text==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/careers_section1_save',
        data: {careers_section1_title: careers_section1_title, careers_section1_text: careers_section1_text},
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function careers_section2_save(){
      var base_url = '<?php echo base_url();?>';
      var careers_section2_email = $('#careers_section2_email').val();
      // var check = isEmail(careers_section2_email);
      if(careers_section2_email==''){
        $.confirm({
            title: 'Invalid Email!!',
            content: 'Please Enter a Valid Email!',
            backgroundDismiss: true,
            boxWidth: '30%',
            useBootstrap: false,
            buttons: {
                ok: {
                  btnClass: 'btn-red',
                    action: function(){
                      // del_pro2(row_id);
                  }}
            }
        });
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/careers_section2_save',
        data: {careers_section2_email: careers_section2_email},
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }

    function isEmail(email) {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }


    function careers_section2_add(){
      var base_url = '<?php echo base_url();?>';
      var careers_section2_title = $('#careers_section2_title').val();
      var careers_section2_text = $('#careers_section2_text').val();
      if(careers_section2_title=='' || careers_section2_text==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/careers_section2_add',
        data: {careers_section2_title: careers_section2_title, careers_section2_text: careers_section2_text},
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function careers_job_data(job_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/careers_job_data',
        data: {job_id: job_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.timeline_year);
              $('#careers_section2_title_edit').val(obj.job_title);
              $('#careers_section2_text_edit').val(obj.job_text);
              $('#careers_section2_id_edit').val(job_id);
            }
      });
    }


    function careers_section2_update(){
      var base_url = '<?php echo base_url();?>';
      var careers_section2_title_edit = $('#careers_section2_title_edit').val();
      var careers_section2_text_edit = $('#careers_section2_text_edit').val();
      var careers_section2_id_edit = $('#careers_section2_id_edit').val();
      if(careers_section2_text_edit=='' || careers_section2_text_edit==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/careers_section2_update',
        data: {
          careers_section2_title_edit: careers_section2_title_edit,
          careers_section2_text_edit: careers_section2_text_edit,
          careers_section2_id_edit: careers_section2_id_edit
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }

    function careers_job_del(job_id){

      $.confirm({
          title: 'You are about to Delete an Item!!',
          content: 'Would you like to continue?',
          backgroundDismiss: true,
          boxWidth: '30%',
          useBootstrap: false,
          buttons: {
              proceed: {
                btnClass: 'btn-green',
                  action: function(){
                    careers_job_del2(job_id);
                }},
              cancel: {
                btnClass: 'btn-red',
                  action: function(){
                    // del_pro2(row_id);
                }}
          }
      });
    }

    function careers_job_del2(job_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/careers_job_del',
        data: {job_id: job_id},
        success:
            function(data){
              window.location.reload();
            }
      });
    }
































    function contact_banner_edit_data_desk(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#contact_banner_text_edit').val(obj.img_text);
              $('#contact_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(1350x400):');
            }
      });
    }


    function contact_banner_edit_data_mob(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#contact_banner_text_edit').val(obj.img_text);
              $('#contact_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(384x150):');
            }
      });
    }


    function contact_banner_edit(){
      var base_url = '<?php echo base_url();?>';
      var contact_banner_text_edit = $('#contact_banner_text_edit').val();
      var contact_banner_edit_id = $('#contact_banner_edit_id').val();
      var pic = $('#contact_banner_pic_edit').prop('files')[0];
      if(contact_banner_text_edit==''){contact_banner_text_edit=' ';}
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', contact_banner_edit_id);
      form_data.append('img_text', contact_banner_text_edit);
      // form_data.append('img_target_page', 'contact.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function contact_section1_save(){
      var base_url = '<?php echo base_url();?>';
      var contact_section1_email = $('#contact_section1_email').val();
      var contact_section1_address1 = $('#contact_section1_address1').val();
      var contact_section1_address2 = $('#contact_section1_address2').val();
      var contact_section1_address3 = $('#contact_section1_address3').val();
      if(contact_section1_email=='' || contact_section1_address1=='' || contact_section1_address2=='' || contact_section1_address3==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/contact_section1_save',
        data: {
          contact_section1_email: contact_section1_email,
          contact_section1_address1: contact_section1_address1,
          contact_section1_address2: contact_section1_address2,
          contact_section1_address3: contact_section1_address3
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }
































    function gallery_banner_edit_data_desk(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#gallery_banner_text_edit').val(obj.img_text);
              $('#gallery_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(1350x400):');
            }
      });
    }


    function gallery_banner_edit_data_mob(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#gallery_banner_text_edit').val(obj.img_text);
              $('#gallery_banner_edit_id').val(img_id);
              $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic').css('display', 'block');
              $('#type_text').text('Choose Image(384x150):');
            }
      });
    }


    function gallery_banner_edit(){
      var base_url = '<?php echo base_url();?>';
      var gallery_banner_text_edit = $('#gallery_banner_text_edit').val();
      var gallery_banner_edit_id = $('#gallery_banner_edit_id').val();
      var pic = $('#gallery_banner_pic_edit').prop('files')[0];
      if(gallery_banner_text_edit==''){gallery_banner_text_edit=' ';}
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', gallery_banner_edit_id);
      form_data.append('img_text', gallery_banner_text_edit);
      // form_data.append('img_target_page', 'gallery.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }

    function gallery_cat_add(){
      var base_url = '<?php echo base_url();?>';
      var gallery_cat_name = $('#gallery_cat_name').val();
      if(gallery_cat_name==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/gallery_cat_add',
        data: {
          gallery_cat_name: gallery_cat_name
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function gallery_cat_data_edit(cat_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/gallery_cat_data_edit',
        data: {cat_id: cat_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#gallery_cat_name_edit').val(obj.cat_name);
              $('#gallery_cat_id').val(cat_id);
            }
      });
    }


    function gallery_cat_update(){
      var base_url = '<?php echo base_url();?>';
      var gallery_cat_name_edit = $('#gallery_cat_name_edit').val();
      var gallery_cat_id = $('#gallery_cat_id').val();
      if(gallery_cat_name_edit==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/gallery_cat_update',
        data: {
          gallery_cat_name_edit: gallery_cat_name_edit,
          gallery_cat_id: gallery_cat_id
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }

    function gallery_cat_del(cat_id){

      $.confirm({
          title: 'You are about to Delete an Item!!',
          content: 'Would you like to continue?',
          backgroundDismiss: true,
          boxWidth: '30%',
          useBootstrap: false,
          buttons: {
              proceed: {
                btnClass: 'btn-green',
                  action: function(){
                    gallery_cat_del2(cat_id);
                }},
              cancel: {
                btnClass: 'btn-red',
                  action: function(){
                    // del_pro2(row_id);
                }}
          }
      });
    }

    function gallery_cat_del2(cat_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/gallery_cat_del',
        data: {cat_id: cat_id},
        success:
            function(data){
              window.location.reload();
            }
      });
    }

    function gallery_image_add(){
      var base_url = '<?php echo base_url();?>';
      // var cat_id = $('#cat_id').val();
      var gallery_image_text = $('#gallery_image_text').val();
      var gallery_image_category = $('#gallery_image_category').val();
      var pic = $('#gallery_image').prop('files')[0];
      if(!pic || gallery_image_category==''){
        return false;
      }
      if(gallery_image_text==''){
        gallery_image_text = ' ';
      }
      var form_data = new FormData();
      form_data.append('pic', pic);
      // form_data.append('cat_id', cat_id);
      form_data.append('gallery_image_text', gallery_image_text);
      form_data.append('gallery_image_category', gallery_image_category);
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/gallery_image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }

    function gallery_image_data_edit(gallery_img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/gallery_image_data_edit',
        data: {gallery_img_id: gallery_img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              // $('#cat_id_edit').val(obj.gallery_cat_id);
              $('#gallery_image_edit_id').val(gallery_img_id);
              if(!obj.gallery_img_text){
                $('#gallery_image_text_edit').val('');
                $('#gallery_image_category_edit').val('');
                char_count_edit('');
              }
              else{
                $('#gallery_image_text_edit').val(obj.gallery_img_text);
                $('#gallery_image_category_edit').val(obj.gallery_img_category);
                char_count_edit(obj.gallery_img_text);
              }
              $('#show_pic3').attr('src', base_url+'uploads/'+obj.gallery_img_link);
              $('#show_pic3').css('display', 'block');
            }
      });
    }


    function gallery_image_update(){
      var base_url = '<?php echo base_url();?>';
      // var cat_id_edit = $('#cat_id_edit').val();
      var gallery_image_edit_id = $('#gallery_image_edit_id').val();
      var gallery_image_text_edit = $('#gallery_image_text_edit').val();
      var gallery_image_category_edit = $('#gallery_image_category_edit').val();
      var pic = $('#gallery_image_edit').prop('files')[0];
      // if(cat_id_edit==''){
      //   return false;
      // }
      if(gallery_image_text_edit==''){
        gallery_image_text_edit = ' ';
      }
      var form_data = new FormData();
      form_data.append('pic', pic);
      // form_data.append('cat_id', cat_id_edit);
      form_data.append('gallery_img_id', gallery_image_edit_id);
      form_data.append('gallery_image_text', gallery_image_text_edit);
      form_data.append('gallery_image_category', gallery_image_category_edit);
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/gallery_image_add_edit',
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


    function gallery_image_del(gallery_img_id){

      $.confirm({
          title: 'You are about to Delete an Item!!',
          content: 'Would you like to continue?',
          backgroundDismiss: true,
          boxWidth: '30%',
          useBootstrap: false,
          buttons: {
              proceed: {
                btnClass: 'btn-green',
                  action: function(){
                    gallery_image_del2(gallery_img_id);
                }},
              cancel: {
                btnClass: 'btn-red',
                  action: function(){
                    // del_pro2(row_id);
                }}
          }
      });
    }

    function gallery_image_del2(gallery_img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/gallery_image_del',
        data: {gallery_img_id: gallery_img_id},
        success:
            function(data){
              window.location.reload();
            }
      });
    }


























































































    function section1_save(){
      var base_url = '<?php echo base_url();?>';
      var section1_title = $('#section1_title').val();
      var section1_boldtext = $('#section1_boldtext').val();
      var section1_normaltext = $('#section1_normaltext').val();
      if(section1_title=='' || section1_boldtext=='' || section1_normaltext==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/section1_save',
        data: {section1_title: section1_title, section1_boldtext: section1_boldtext, section1_normaltext: section1_normaltext},
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function section1_pic_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#section1_icon_text_edit').val(obj.img_title);
              $('#section1_icon_edit_id').val(img_id);
              $('#show_pic2').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic2').css('display', 'block');
            }
      });
    }


    function section1_icon_edit(){
      var base_url = '<?php echo base_url();?>';
      var section1_icon_text_edit = $('#section1_icon_text_edit').val();
      if(section1_icon_text_edit==''){
        return false;
      }
      var section1_icon_edit_id = $('#section1_icon_edit_id').val();
      var pic = $('#section1_icon_pic_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', section1_icon_edit_id);
      form_data.append('img_title', section1_icon_text_edit);
      form_data.append('img_target_page', 'home.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }




    function section2_save(){
      var base_url = '<?php echo base_url();?>';
      var section2_title = $('#section2_title').val();
      var section2_text = $('#section2_text').val();
      var section2_blocktitle = $('#section2_blocktitle').val();
      var section2_blocktext = $('#section2_blocktext').val();
      if(section2_title=='' || section2_text=='' || section2_blocktitle=='' || section2_blocktext==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/section2_save',
        data: {section2_title: section2_title, section2_text: section2_text, section2_blocktitle: section2_blocktitle, section2_blocktext: section2_blocktext},
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function section2_image_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              // $('#section1_icon_text_edit').val(obj.img_title);
              $('#section2_image_edit_id').val(img_id);
              $('#show_pic3').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic3').css('display', 'block');
            }
      });
    }


    function section2_image_update(){
      var base_url = '<?php echo base_url();?>';
      // var section1_icon_text_edit = $('#section1_icon_text_edit').val();
      var section2_image_edit_id = $('#section2_image_edit_id').val();
      var pic = $('#section2_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', section2_image_edit_id);
      // form_data.append('img_title', section1_icon_text_edit);
      form_data.append('img_target_page', 'home.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }



    function section3_save(){
      var base_url = '<?php echo base_url();?>';
      var section3_title = $('#section3_title').val();
      if(section3_title==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/section3_save',
        data: {section3_title: section3_title},
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function section3_pic_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#section3_icon_title').val(obj.img_title);
              $('#section3_icon_text').val(obj.img_text);
              $('#section3_image_edit_id').val(img_id);
              $('#show_pic5').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic5').css('display', 'block');
            }
      });
    }



    function section3_image_update(){
      var base_url = '<?php echo base_url();?>';
      var section3_icon_title = $('#section3_icon_title').val();
      var section3_icon_text = $('#section3_icon_text').val();
      if(section3_icon_title=='' || section3_icon_text==''){
        return false;
      }
      var section3_image_edit_id = $('#section3_image_edit_id').val();
      var pic = $('#section3_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', section3_image_edit_id);
      form_data.append('img_title', section3_icon_title);
      form_data.append('img_text', section3_icon_text);
      form_data.append('img_target_page', 'home.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function section4_save(){
      var base_url = '<?php echo base_url();?>';
      var section4_title1 = $('#section4_title1').val();
      var section4_title2 = $('#section4_title2').val();
      var section4_title3 = $('#section4_title3').val();
      var section4_suffix1 = $('#section4_suffix1').val();
      var section4_suffix2 = $('#section4_suffix2').val();
      var section4_suffix3 = $('#section4_suffix3').val();
      var section4_text1 = $('#section4_text1').val();
      var section4_text2 = $('#section4_text2').val();
      var section4_text3 = $('#section4_text3').val();
      if(section4_title1=='' || section4_title2=='' || section4_title3=='' || section4_suffix1=='' || section4_suffix2=='' || section4_suffix3=='' || section4_text1=='' || section4_text2=='' || section4_text3==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/section4_save',
        data: {
          section4_title1: section4_title1,
          section4_title2: section4_title2,
          section4_title3: section4_title3,
          section4_suffix1: section4_suffix1,
          section4_suffix2: section4_suffix2,
          section4_suffix3: section4_suffix3,
          section4_text1: section4_text1,
          section4_text2: section4_text2,
          section4_text3: section4_text3
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function section5_save(){
      var base_url = '<?php echo base_url();?>';
      var section5_title = $('#section5_title').val();
      var section5_blocktitle = $('#section5_blocktitle').val();
      var section5_target_email = $('#section5_target_email').val();
      if(section5_title=='' || section5_blocktitle=='' || section5_target_email==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/section5_save',
        data: {
          section5_title: section5_title,
          section5_blocktitle: section5_blocktitle,
          section5_target_email: section5_target_email
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function section5_image_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              // $('#section1_icon_text_edit').val(obj.img_title);
              $('#section5_image_edit_id').val(img_id);
              $('#show_pic10').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic10').css('display', 'block');
            }
      });
    }


    function section5_image_update(){
      var base_url = '<?php echo base_url();?>';
      // var section1_icon_text_edit = $('#section1_icon_text_edit').val();
      var section5_image_edit_id = $('#section5_image_edit_id').val();
      var pic = $('#section5_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', section5_image_edit_id);
      // form_data.append('img_title', section1_icon_text_edit);
      form_data.append('img_target_page', 'home.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function section6_save(){
      var base_url = '<?php echo base_url();?>';
      var section6_title = $('#section6_title').val();
      var section6_text = $('#section6_text').val();
      if(section6_title=='' || section6_text==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/section6_save',
        data: {
          section6_title: section6_title,
          section6_text: section6_text
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function section6_image_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#section6_image_text').val(obj.img_title);
              $('#section6_image_edit_id').val(img_id);
              $('#show_pic6').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic6').css('display', 'block');
            }
      });
    }


    function section6_image_update(){
      var base_url = '<?php echo base_url();?>';
      var section6_image_text = $('#section6_image_text').val();
      if(section6_image_text==''){
        return false;
      }
      var section6_image_edit_id = $('#section6_image_edit_id').val();
      var pic = $('#section6_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', section6_image_edit_id);
      form_data.append('img_title', section6_image_text);
      form_data.append('img_target_page', 'home.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function section7_save(){
      var base_url = '<?php echo base_url();?>';
      var section7_title = $('#section7_title').val();
      var section7_name1 = $('#section7_name1').val();
      var section7_name2 = $('#section7_name2').val();
      var section7_name3 = $('#section7_name3').val();
      var section7_desg1 = $('#section7_desg1').val();
      var section7_desg2 = $('#section7_desg2').val();
      var section7_desg3 = $('#section7_desg3').val();
      var section7_text1 = $('#section7_text1').val();
      var section7_text2 = $('#section7_text2').val();
      var section7_text3 = $('#section7_text3').val();
      if(section7_title=='' || section7_name1=='' || section7_name2=='' || section7_name3=='' || section7_desg1=='' || section7_desg2=='' || section7_desg3=='' || section7_text1=='' || section7_text2=='' || section7_text3==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/section7_save',
        data: {
          section7_title: section7_title,
          section7_name1: section7_name1,
          section7_name2: section7_name2,
          section7_name3: section7_name3,
          section7_desg1: section7_desg1,
          section7_desg2: section7_desg2,
          section7_desg3: section7_desg3,
          section7_text1: section7_text1,
          section7_text2: section7_text2,
          section7_text3: section7_text3
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function section7_image_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              // $('#section6_image_text').val(obj.img_title);
              $('#section7_image_edit_id').val(img_id);
              $('#show_pic7').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic7').css('display', 'block');
            }
      });
    }


    function section7_image_update(){
      var base_url = '<?php echo base_url();?>';
      // var section6_image_text = $('#section6_image_text').val();
      var section7_image_edit_id = $('#section7_image_edit_id').val();
      var pic = $('#section7_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', section7_image_edit_id);
      // form_data.append('img_title', section6_image_text);
      form_data.append('img_target_page', 'home.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }



    function section8_save(){
      var base_url = '<?php echo base_url();?>';
      var section8_title = $('#section8_title').val();
      if(section8_title==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/section8_save',
        data: {
          section8_title: section8_title
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function section8_image_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              // alert(data);
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#section8_article_title').val(obj.img_title);
              $('#section8_article_text').val(obj.img_text);
              $('#section8_article_edit_id').val(img_id);
              $('#show_pic8').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic8').css('display', 'block');
            }
      });
    }


    function section8_article_update(){
      var base_url = '<?php echo base_url();?>';
      var section8_article_title = $('#section8_article_title').val();
      var section8_article_text = $('#section8_article_text').val();
      if(section8_article_title=='' || section8_article_text==''){
        return false;
      }
      var section8_article_edit_id = $('#section8_article_edit_id').val();
      var pic = $('#section8_article_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', section8_article_edit_id);
      form_data.append('img_title', section8_article_title);
      form_data.append('img_text', section8_article_text);
      form_data.append('img_target_page', 'home.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function section9_save(){
      var base_url = '<?php echo base_url();?>';
      var section9_title = $('#section9_title').val();
      if(section9_title==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/section9_save',
        data: {
          section9_title: section9_title
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function section9_image_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              // alert(data);
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#section9_image_title').val(obj.img_title);
              $('#section9_image_edit_id').val(img_id);
              $('#show_pic9').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic9').css('display', 'block');
            }
      });
    }


    function section9_image_update(){
      var base_url = '<?php echo base_url();?>';
      var section9_image_title = $('#section9_image_title').val();
      // var section8_article_text = $('#section8_article_text').val();
      var section9_image_edit_id = $('#section9_image_edit_id').val();
      var pic = $('#section9_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', section9_image_edit_id);
      form_data.append('img_title', section9_image_title);
      // form_data.append('img_text', section8_article_text);
      form_data.append('img_target_page', 'home.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function section10_save(){
      var base_url = '<?php echo base_url();?>';
      var section10_title = $('#section10_title').val();
      var section10_target_email = $('#section10_target_email').val();
      if(section10_title=='' || section10_target_email==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/section10_save',
        data: {
          section10_title: section10_title,
          section10_target_email: section10_target_email
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }


    function section10_image_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              // alert(data);
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              // $('#section9_image_title').val(obj.img_title);
              $('#section10_image_edit_id').val(img_id);
              $('#show_pic10').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic10').css('display', 'block');
            }
      });
    }


    function section10_image_update(){
      var base_url = '<?php echo base_url();?>';
      // var section9_image_title = $('#section9_image_title').val();
      // var section8_article_text = $('#section8_article_text').val();
      var section10_image_edit_id = $('#section10_image_edit_id').val();
      var pic = $('#section10_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', section10_image_edit_id);
      // form_data.append('img_title', section9_image_title);
      // form_data.append('img_text', section8_article_text);
      form_data.append('img_target_page', 'home.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }

    //Home Page Functions end//




























    //Contact Page Functions start//

    // function banner_edit_data(img_id){
    //   var base_url = '<?php echo base_url();?>';
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_edit_data',
    //     data: {img_id: img_id},
    //     success:
    //         function(data){
    //           var obj = JSON.parse(data);
    //           // alert(obj.img_text);
    //           // $('#home_banner_text_edit').val(obj.img_text);
    //           $('#banner_edit_id').val(img_id);
    //           $('#show_pic').attr('src', base_url+'uploads/'+obj.img_link);
    //           $('#show_pic').css('display', 'block');
    //         }
    //   });
    // }


    // function banner_update(){
    //   var base_url = '<?php echo base_url();?>';
    //   // var home_banner_text_edit = $('#home_banner_text_edit').val();
    //   var banner_edit_id = $('#banner_edit_id').val();
    //   var pic = $('#banner_pic_edit').prop('files')[0];
    //   var form_data = new FormData();
    //   form_data.append('pic', pic);
    //   form_data.append('img_id', banner_edit_id);
    //   // form_data.append('img_text', home_banner_text_edit);
    //   form_data.append('img_target_page', 'contact.php');
    //   // alert(pic);
    //   // return false;
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_add_edit',
    //     data: form_data,
    //     processData:false,
    //     contentType:false,
    //     cache:false,
    //     success:
    //         function(data){
    //             window.location.reload();
    //         }
    //   });
    // }


    // function contact_section1_save(){
    //   var base_url = '<?php echo base_url();?>';
    //   var contact_section1_title1 = $('#contact_section1_title1').val();
    //   var contact_section1_title2 = $('#contact_section1_title2').val();
    //   var contact_section1_ph1 = $('#contact_section1_ph1').val();
    //   var contact_section1_ph2 = $('#contact_section1_ph2').val();
    //   var contact_section1_location1 = $('#contact_section1_location1').val();
    //   var contact_section1_location2 = $('#contact_section1_location2').val();
    //   var contact_section1_fb1 = $('#contact_section1_fb1').val();
    //   var contact_section1_fb2 = $('#contact_section1_fb2').val();
    //   var contact_section1_twitter1 = $('#contact_section1_twitter1').val();
    //   var contact_section1_twitter2 = $('#contact_section1_twitter2').val();
    //   var contact_section1_linkedin1 = $('#contact_section1_linkedin1').val();
    //   var contact_section1_linkedin2 = $('#contact_section1_linkedin2').val();
    //   if(contact_section1_title1=='' || contact_section1_title2=='' || contact_section1_ph1=='' || contact_section1_ph2=='' || contact_section1_location1=='' || contact_section1_location2==''){
    //     return false;
    //   }
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/contact_section1_save',
    //     data: {
    //       contact_section1_title1: contact_section1_title1,
    //       contact_section1_title2: contact_section1_title2,
    //       contact_section1_ph1: contact_section1_ph1,
    //       contact_section1_ph2: contact_section1_ph2,
    //       contact_section1_location1: contact_section1_location1,
    //       contact_section1_location2: contact_section1_location2,
    //       contact_section1_fb1: contact_section1_fb1,
    //       contact_section1_fb2: contact_section1_fb2,
    //       contact_section1_twitter1: contact_section1_twitter1,
    //       contact_section1_twitter2: contact_section1_twitter2,
    //       contact_section1_linkedin1: contact_section1_linkedin1,
    //       contact_section1_linkedin2: contact_section1_linkedin2
    //     },
    //     success:
    //         function(data){
    //           // alert(data);
    //           window.location.reload();
    //         }
    //   });
    // }


    // function contact_section2_save(){
    //   var base_url = '<?php echo base_url();?>';
    //   var contact_section2_title = $('#contact_section2_title').val();
    //   var contact_section2_email = $('#contact_section2_email').val();
    //   var contact_section2_iframe = $('#contact_section2_iframe').val();
    //   if(contact_section2_title=='' || contact_section2_email=='' || contact_section2_iframe==''){
    //     return false;
    //   }
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/contact_section2_save',
    //     data: {
    //       contact_section2_title: contact_section2_title,
    //       contact_section2_email: contact_section2_email,
    //       contact_section2_iframe: contact_section2_iframe
    //     },
    //     success:
    //         function(data){
    //           // alert(data);
    //           window.location.reload();
    //         }
    //   });
    // }



























    //About Page Functions start//

    // function about_banner_update(){
    //   var base_url = '<?php echo base_url();?>';
    //   // var home_banner_text_edit = $('#home_banner_text_edit').val();
    //   var banner_edit_id = $('#banner_edit_id').val();
    //   var pic = $('#banner_pic_edit').prop('files')[0];
    //   var form_data = new FormData();
    //   form_data.append('pic', pic);
    //   form_data.append('img_id', banner_edit_id);
    //   // form_data.append('img_text', home_banner_text_edit);
    //   form_data.append('img_target_page', 'about.php');
    //   // alert(pic);
    //   // return false;
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_add_edit',
    //     data: form_data,
    //     processData:false,
    //     contentType:false,
    //     cache:false,
    //     success:
    //         function(data){
    //             window.location.reload();
    //         }
    //   });
    // }

    // function about_section1_save(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section1_title = $('#about_section1_title').val();
    //   var about_section1_text = $('#about_section1_text').val();
    //   var about_section1_block_title = 'We Deliver with Care everytime';
    //   // var about_section1_block_title = $('#about_section1_block_title').val();
    //   var about_section1_check_text1 = $('#about_section1_check_text1').val();
    //   var about_section1_check_text2 = $('#about_section1_check_text2').val();
    //   if(about_section1_title==''){
    //     return false;
    //   }
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/about_section1_save',
    //     data: {
    //       about_section1_title: about_section1_title,
    //       about_section1_text: about_section1_text,
    //       about_section1_block_title: about_section1_block_title,
    //       about_section1_check_text1: about_section1_check_text1,
    //       about_section1_check_text2: about_section1_check_text2
    //     },
    //     success:
    //         function(data){
    //           // alert(data);
    //           window.location.reload();
    //         }
    //   });
    // }


    // function about_section1_image_edit_data(img_id){
    //   var base_url = '<?php echo base_url();?>';
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_edit_data',
    //     data: {img_id: img_id},
    //     success:
    //         function(data){
    //           var obj = JSON.parse(data);
    //           // alert(obj.img_text);
    //           // $('#home_banner_text_edit').val(obj.img_text);
    //           $('#about_section1_image_edit_id').val(img_id);
    //           $('#show_pic2').attr('src', base_url+'uploads/'+obj.img_link);
    //           $('#show_pic2').css('display', 'block');
    //         }
    //   });
    // }


    // function about_section1_image_edit(){
    //   var base_url = '<?php echo base_url();?>';
    //   // var section9_image_title = $('#section9_image_title').val();
    //   // var section8_article_text = $('#section8_article_text').val();
    //   var about_section1_image_edit_id = $('#about_section1_image_edit_id').val();
    //   var pic = $('#about_section1_pic_edit').prop('files')[0];
    //   var form_data = new FormData();
    //   form_data.append('pic', pic);
    //   form_data.append('img_id', about_section1_image_edit_id);
    //   // form_data.append('img_title', section9_image_title);
    //   // form_data.append('img_text', section8_article_text);
    //   form_data.append('img_target_page', 'about.php');
    //   // alert(pic);
    //   // return false;
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_add_edit',
    //     data: form_data,
    //     processData:false,
    //     contentType:false,
    //     cache:false,
    //     success:
    //         function(data){
    //             window.location.reload();
    //         }
    //   });
    // }


    // function about_section2_save(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section2_title = $('#about_section2_title').val();
    //   var about_section2_bold_text = $('#about_section2_bold_text').val();
    //   var about_section2_text = $('#about_section2_text').val();
    //   if(about_section2_title=='' || about_section2_text==''){
    //     return false;
    //   }
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/about_section2_save',
    //     data: {
    //       about_section2_title: about_section2_title,
    //       about_section2_bold_text: about_section2_bold_text,
    //       about_section2_text: about_section2_text
    //     },
    //     success:
    //         function(data){
    //           // alert(data);
    //           window.location.reload();
    //         }
    //   });
    // }


    // function about_section2_image_edit_data(img_id){
    //   var base_url = '<?php echo base_url();?>';
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_edit_data',
    //     data: {img_id: img_id},
    //     success:
    //         function(data){
    //           var obj = JSON.parse(data);
    //           // alert(obj.img_text);
    //           // $('#home_banner_text_edit').val(obj.img_text);
    //           $('#about_section2_image_edit_id').val(img_id);
    //           $('#show_pic3').attr('src', base_url+'uploads/'+obj.img_link);
    //           $('#show_pic3').css('display', 'block');
    //         }
    //   });
    // }


    // function about_section2_image_update(){
    //   var base_url = '<?php echo base_url();?>';
    //   // var section9_image_title = $('#section9_image_title').val();
    //   // var section8_article_text = $('#section8_article_text').val();
    //   var about_section2_image_edit_id = $('#about_section2_image_edit_id').val();
    //   var pic = $('#about_section2_image_edit').prop('files')[0];
    //   var form_data = new FormData();
    //   form_data.append('pic', pic);
    //   form_data.append('img_id', about_section2_image_edit_id);
    //   // form_data.append('img_title', section9_image_title);
    //   // form_data.append('img_text', section8_article_text);
    //   form_data.append('img_target_page', 'about.php');
    //   // alert(pic);
    //   // return false;
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_add_edit',
    //     data: form_data,
    //     processData:false,
    //     contentType:false,
    //     cache:false,
    //     success:
    //         function(data){
    //             window.location.reload();
    //         }
    //   });
    // }


    // function about_section3_save(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section3_title = $('#about_section3_title').val();
    //   var about_section3_number1 = $('#about_section3_number1').val();
    //   var about_section3_number2 = $('#about_section3_number2').val();
    //   var about_section3_number3 = $('#about_section3_number3').val();
    //   var about_section3_suffix1 = $('#about_section3_suffix1').val();
    //   var about_section3_suffix2 = $('#about_section3_suffix2').val();
    //   var about_section3_suffix3 = $('#about_section3_suffix3').val();
    //   var about_section3_text1 = $('#about_section3_text1').val();
    //   var about_section3_text2 = $('#about_section3_text2').val();
    //   var about_section3_text3 = $('#about_section3_text3').val();

    //   if(about_section3_title=='' || about_section3_number1=='' || about_section3_number2=='' || about_section3_number3=='' || about_section3_suffix1=='' || about_section3_suffix2=='' || about_section3_suffix3=='' || about_section3_text1=='' || about_section3_text2=='' || about_section3_text3==''){
    //     return false;
    //   }
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/about_section3_save',
    //     data: {
    //       about_section3_title: about_section3_title,
    //       about_section3_number1: about_section3_number1,
    //       about_section3_number2: about_section3_number2,
    //       about_section3_number3: about_section3_number3,
    //       about_section3_suffix1: about_section3_suffix1,
    //       about_section3_suffix2: about_section3_suffix2,
    //       about_section3_suffix3: about_section3_suffix3,
    //       about_section3_text1: about_section3_text1,
    //       about_section3_text2: about_section3_text2,
    //       about_section3_text3: about_section3_text3
    //     },
    //     success:
    //         function(data){
    //           // alert(data);
    //           window.location.reload();
    //         }
    //   });
    // }


    // function about_section4_save(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section4_video_link = $('#about_section4_video_link').val();
    //   if(about_section4_video_link==''){
    //     return false;
    //   }
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/about_section4_save',
    //     data: {
    //       about_section4_video_link: about_section4_video_link
    //     },
    //     success:
    //         function(data){
    //           // alert(data);
    //           window.location.reload();
    //         }
    //   });
    // }


    // function about_section4_image_edit_data(img_id){
    //   var base_url = '<?php echo base_url();?>';
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_edit_data',
    //     data: {img_id: img_id},
    //     success:
    //         function(data){
    //           var obj = JSON.parse(data);
    //           // alert(obj.img_text);
    //           // $('#home_banner_text_edit').val(obj.img_text);
    //           $('#about_section4_image_edit_id').val(img_id);
    //           $('#show_pic4').attr('src', base_url+'uploads/'+obj.img_link);
    //           $('#show_pic4').css('display', 'block');
    //         }
    //   });
    // }


    // function about_section4_image_update(){
    //   var base_url = '<?php echo base_url();?>';
    //   // var section9_image_title = $('#section9_image_title').val();
    //   // var section8_article_text = $('#section8_article_text').val();
    //   var about_section4_image_edit_id = $('#about_section4_image_edit_id').val();
    //   var pic = $('#about_section4_image_edit').prop('files')[0];
    //   var form_data = new FormData();
    //   form_data.append('pic', pic);
    //   form_data.append('img_id', about_section4_image_edit_id);
    //   // form_data.append('img_title', section9_image_title);
    //   // form_data.append('img_text', section8_article_text);
    //   form_data.append('img_target_page', 'about.php');
    //   // alert(pic);
    //   // return false;
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_add_edit',
    //     data: form_data,
    //     processData:false,
    //     contentType:false,
    //     cache:false,
    //     success:
    //         function(data){
    //             window.location.reload();
    //         }
    //   });
    // }


    // function about_section5_year_add(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section5_year = $('#about_section5_year').val();
    //   var about_section5_bold_text = $('#about_section5_bold_text').val();
    //   var about_section5_text = $('#about_section5_text').val();
    //   if(about_section5_year=='' || about_section5_bold_text=='' || about_section5_text==''){
    //     return false;
    //   }
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/about_section5_year_add',
    //     data: {
    //       about_section5_year: about_section5_year,
    //       about_section5_bold_text: about_section5_bold_text,
    //       about_section5_text: about_section5_text
    //     },
    //     success:
    //         function(data){
    //           // alert(data);
    //           window.location.reload();
    //         }
    //   });
    // }


    // function about_timeline_data(timeline_id){
    //   var base_url = '<?php echo base_url();?>';
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/about_timeline_data',
    //     data: {timeline_id: timeline_id},
    //     success:
    //         function(data){
    //           var obj = JSON.parse(data);
    //           // alert(obj.timeline_year);
    //           $('#about_section5_year_edit').val(obj.timeline_year);
    //           $('#about_section5_bold_text_edit').val(obj.timeline_bold_text);
    //           $('#about_section5_text_edit').val(obj.timeline_text);
    //           $('#about_section5_id_edit').val(timeline_id);
    //         }
    //   });
    // }


    // function about_section5_year_update(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section5_year_edit = $('#about_section5_year_edit').val();
    //   var about_section5_bold_text_edit = $('#about_section5_bold_text_edit').val();
    //   var about_section5_text_edit = $('#about_section5_text_edit').val();
    //   var about_section5_id_edit = $('#about_section5_id_edit').val();
    //   if(about_section5_year_edit=='' || about_section5_bold_text_edit=='' || about_section5_text_edit==''){
    //     return false;
    //   }
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/about_section5_year_update',
    //     data: {
    //       about_section5_year_edit: about_section5_year_edit,
    //       about_section5_bold_text_edit: about_section5_bold_text_edit,
    //       about_section5_text_edit: about_section5_text_edit,
    //       about_section5_id_edit: about_section5_id_edit
    //     },
    //     success:
    //         function(data){
    //           // alert(data);
    //           window.location.reload();
    //         }
    //   });
    // }

    // function timeline_del(timeline_id){

    //   $.confirm({
    //       title: 'You are about to Delete an Item!!',
    //       content: 'Would you like to continue?',
    //       backgroundDismiss: true,
    //       boxWidth: '30%',
    //       useBootstrap: false,
    //       buttons: {
    //           proceed: {
    //             btnClass: 'btn-green',
    //               action: function(){
    //                 timeline_del2(timeline_id);
    //             }},
    //           cancel: {
    //             btnClass: 'btn-red',
    //               action: function(){
    //                 // del_pro2(row_id);
    //             }}
    //       }
    //   });
    // }

    // function timeline_del2(timeline_id){
    //   var base_url = '<?php echo base_url();?>';
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/timeline_del',
    //     data: {timeline_id: timeline_id},
    //     success:
    //         function(data){
    //           window.location.reload();
    //         }
    //   });
    // }


    // function about_section5_save(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section5_title = $('#about_section5_title').val();
    //   if(about_section5_title==''){
    //     return false;
    //   }
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/about_section5_save',
    //     data: {
    //       about_section5_title: about_section5_title
    //     },
    //     success:
    //         function(data){
    //           // alert(data);
    //           window.location.reload();
    //         }
    //   });
    // }


    // function about_section6_save(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section6_title = $('#about_section6_title').val();
    //   if(about_section6_title==''){
    //     return false;
    //   }
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/about_section6_save',
    //     data: {
    //       about_section6_title: about_section6_title
    //     },
    //     success:
    //         function(data){
    //           // alert(data);
    //           window.location.reload();
    //         }
    //   });
    // }



    // function about_section6_image_edit_data(img_id){
    //   var base_url = '<?php echo base_url();?>';
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_edit_data',
    //     data: {img_id: img_id},
    //     success:
    //         function(data){
    //           var obj = JSON.parse(data);
    //           // alert(obj.img_text);
    //           $('#about_section6_image_title').val(obj.img_title);
    //           $('#about_section6_image_id').val(img_id);
    //           $('#show_pic5').attr('src', base_url+'uploads/'+obj.img_link);
    //           $('#show_pic5').css('display', 'block');
    //         }
    //   });
    // }


    // function about_section6_image_update(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section6_image_title = $('#about_section6_image_title').val();
    //   // var section8_article_text = $('#section8_article_text').val();
    //   var about_section6_image_id = $('#about_section6_image_id').val();
    //   var pic = $('#about_section6_image').prop('files')[0];
    //   var form_data = new FormData();
    //   form_data.append('pic', pic);
    //   form_data.append('img_id', about_section6_image_id);
    //   form_data.append('img_title', about_section6_image_title);
    //   // form_data.append('img_text', section8_article_text);
    //   form_data.append('img_target_page', 'about.php');
    //   // alert(pic);
    //   // return false;
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_add_edit',
    //     data: form_data,
    //     processData:false,
    //     contentType:false,
    //     cache:false,
    //     success:
    //         function(data){
    //             window.location.reload();
    //         }
    //   });
    // }


    // function about_section7_save(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section7_title = $('#about_section7_title').val();
    //   var about_section7_text = $('#about_section7_text').val();
    //   if(about_section7_title=='' || about_section7_text==''){
    //     return false;
    //   }
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/about_section7_save',
    //     data: {
    //       about_section7_title: about_section7_title,
    //       about_section7_text: about_section7_text
    //     },
    //     success:
    //         function(data){
    //           // alert(data);
    //           window.location.reload();
    //         }
    //   });
    // }


    // function about_section7_image_add(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section7_image_title = $('#about_section7_image_title').val();
    //   var about_section7_image_text = $('#about_section7_image_text').val();
    //   // var about_section6_image_id = $('#about_section6_image_id').val();
    //   var pic = $('#about_section7_image').prop('files')[0];
    //   var form_data = new FormData();
    //   form_data.append('pic', pic);
    //   // form_data.append('img_id', about_section6_image_id);
    //   form_data.append('img_title', about_section7_image_title);
    //   form_data.append('img_text', about_section7_image_text);
    //   form_data.append('img_target_page', 'about.php');
    //   form_data.append('img_section', '19');
    //   // alert(pic);
    //   // return false;
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_add_edit',
    //     data: form_data,
    //     processData:false,
    //     contentType:false,
    //     cache:false,
    //     success:
    //         function(data){
    //             window.location.reload();
    //         }
    //   });
    // }

    // function about_section7_image_edit_data(img_id){
    //   var base_url = '<?php echo base_url();?>';
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_edit_data',
    //     data: {img_id: img_id},
    //     success:
    //         function(data){
    //           var obj = JSON.parse(data);
    //           // alert(obj.img_text);
    //           $('#about_section7_image_title_edit').val(obj.img_title);
    //           $('#about_section7_image_text_edit').val(obj.img_text);
    //           $('#about_section7_image_id_edit').val(img_id);
    //           $('#show_pic7').attr('src', base_url+'uploads/'+obj.img_link);
    //           $('#show_pic7').css('display', 'block');
    //         }
    //   });
    // }

    // function about_section7_image_update(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section7_image_title_edit = $('#about_section7_image_title_edit').val();
    //   var about_section7_image_text_edit = $('#about_section7_image_text_edit').val();
    //   var about_section7_image_id_edit = $('#about_section7_image_id_edit').val();
    //   var pic = $('#about_section7_image_edit').prop('files')[0];
    //   var form_data = new FormData();
    //   form_data.append('pic', pic);
    //   form_data.append('img_id', about_section7_image_id_edit);
    //   form_data.append('img_title', about_section7_image_title_edit);
    //   form_data.append('img_text', about_section7_image_text_edit);
    //   form_data.append('img_target_page', 'about.php');
    //   form_data.append('img_section', '19');
    //   // alert(pic);
    //   // return false;
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/image_add_edit',
    //     data: form_data,
    //     processData:false,
    //     contentType:false,
    //     cache:false,
    //     success:
    //         function(data){
    //             window.location.reload();
    //         }
    //   });
    // }


    // function about_section7_member_del(img_id){

    //   $.confirm({
    //       title: 'You are about to Delete an Item!!',
    //       content: 'Would you like to continue?',
    //       backgroundDismiss: true,
    //       boxWidth: '30%',
    //       useBootstrap: false,
    //       buttons: {
    //           proceed: {
    //             btnClass: 'btn-green',
    //               action: function(){
    //                 about_section7_member_del2(img_id);
    //             }},
    //           cancel: {
    //             btnClass: 'btn-red',
    //               action: function(){
    //                 // del_pro2(row_id);
    //             }}
    //       }
    //   });
    // }

    // function about_section7_member_del2(img_id){
    //   var base_url = '<?php echo base_url();?>';
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/about_section7_member_del',
    //     data: {img_id: img_id},
    //     success:
    //         function(data){
    //           window.location.reload();
    //         }
    //   });
    // }

    // function about_section8_save(){
    //   var base_url = '<?php echo base_url();?>';
    //   var about_section8_title = $('#about_section8_title').val();
    //   var about_section8_name1 = $('#about_section8_name1').val();
    //   var about_section8_name2 = $('#about_section8_name2').val();
    //   var about_section8_name3 = $('#about_section8_name3').val();
    //   var about_section8_desg1 = $('#about_section8_desg1').val();
    //   var about_section8_desg2 = $('#about_section8_desg2').val();
    //   var about_section8_desg3 = $('#about_section8_desg3').val();
    //   var about_section8_text1 = $('#about_section8_text1').val();
    //   var about_section8_text2 = $('#about_section8_text2').val();
    //   var about_section8_text3 = $('#about_section8_text3').val();
    //   if(about_section8_title=='' || about_section8_name1=='' || about_section8_name2=='' || about_section8_name3=='' || about_section8_desg1=='' || about_section8_desg2=='' || about_section8_desg3=='' || about_section8_text1=='' || about_section8_text2=='' || about_section8_text3==''){
    //     return false;
    //   }
    //   $.ajax({
    //     type: "POST",
    //     url: base_url + 'admin/admin/about_section8_save',
    //     data: {
    //       about_section8_title: about_section8_title,
    //       about_section8_name1: about_section8_name1,
    //       about_section8_name2: about_section8_name2,
    //       about_section8_name3: about_section8_name3,
    //       about_section8_desg1: about_section8_desg1,
    //       about_section8_desg2: about_section8_desg2,
    //       about_section8_desg3: about_section8_desg3,
    //       about_section8_text1: about_section8_text1,
    //       about_section8_text2: about_section8_text2,
    //       about_section8_text3: about_section8_text3
    //     },
    //     success:
    //         function(data){
    //           // alert(data);
    //           window.location.reload();
    //         }
    //   });
    // }




























    //News Page Functions start//

    function news_banner_update(){
      var base_url = '<?php echo base_url();?>';
      // var home_banner_text_edit = $('#home_banner_text_edit').val();
      var banner_edit_id = $('#banner_edit_id').val();
      var pic = $('#news_banner_image').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', banner_edit_id);
      // form_data.append('img_text', home_banner_text_edit);
      form_data.append('img_target_page', 'news.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }

    function news_article_add(){
      var base_url = '<?php echo base_url();?>';
      var news_article_title = $('#news_article_title').val();
      var news_article_date = $('#news_article_date').val();
      var news_article_block_text = $('#news_article_block_text').val();
      var news_article_main_text = $('#news_article_main_text').val();
      var pic = $('#news_article_image').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('art_title', news_article_title);
      form_data.append('art_date', news_article_date);
      form_data.append('art_block_text', news_article_block_text);
      form_data.append('art_main_text', news_article_main_text);

      if(news_article_title=='' || news_article_date=='' || news_article_block_text=='' || news_article_main_text=='' || !pic){
        return false;
      }
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/news_article_add_edit',
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


    function news_article_edit_data(art_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/news_article_edit_data',
        data: {art_id: art_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#news_article_id').val(art_id);
              $('#news_article_title_edit').val(obj.art_title);
              $('#news_article_date_edit').val(obj.art_date);
              $('#news_article_block_text_edit').val(obj.art_block_text);
              $('#news_article_main_text_edit').val(obj.art_main_text);
              $('#show_pic3').attr('src', base_url+'uploads/'+obj.art_image);
              $('#show_pic3').css('display', 'block');
            }
      });
    }


    function news_article_update(){
      var base_url = '<?php echo base_url();?>';
      var news_article_id = $('#news_article_id').val();
      var news_article_title = $('#news_article_title_edit').val();
      var news_article_date = $('#news_article_date_edit').val();
      var news_article_block_text = $('#news_article_block_text_edit').val();
      var news_article_main_text = $('#news_article_main_text_edit').val();
      var pic = $('#news_article_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('art_id', news_article_id);
      form_data.append('art_title', news_article_title);
      form_data.append('art_date', news_article_date);
      form_data.append('art_block_text', news_article_block_text);
      form_data.append('art_main_text', news_article_main_text);

      if(news_article_title=='' || news_article_date=='' || news_article_block_text=='' || news_article_main_text==''){
        return false;
      }
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/news_article_add_edit',
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


    function news_article_del(art_id){

      $.confirm({
          title: 'You are about to Delete an Item!!',
          content: 'Would you like to continue?',
          backgroundDismiss: true,
          boxWidth: '30%',
          useBootstrap: false,
          buttons: {
              proceed: {
                btnClass: 'btn-green',
                  action: function(){
                    news_article_del2(art_id);
                }},
              cancel: {
                btnClass: 'btn-red',
                  action: function(){
                    // del_pro2(row_id);
                }}
          }
      });
    }

    function news_article_del2(art_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/news_article_del',
        data: {art_id: art_id},
        success:
            function(data){
              window.location.reload();
            }
      });
    }


    function news_block_save(){
      var base_url = '<?php echo base_url();?>';
      var news_block_title = $('#news_block_title').val();
      var news_block_text = $('#news_block_text').val();
      if(news_block_title=='' || news_block_text==''){
        return false;
      }
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/news_block_save',
        data: {
          news_block_title: news_block_title,
          news_block_text: news_block_text
        },
        success:
            function(data){
              // alert(data);
              window.location.reload();
            }
      });
    }































    //Services Page Functions start//

    function services_banner_update(){
      var base_url = '<?php echo base_url();?>';
      // var home_banner_text_edit = $('#home_banner_text_edit').val();
      var banner_edit_id = $('#banner_edit_id').val();
      var pic = $('#services_banner_image').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', banner_edit_id);
      // form_data.append('img_text', home_banner_text_edit);
      form_data.append('img_target_page', 'services.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }


    function service_add(){
      var base_url = '<?php echo base_url();?>';
      var serv_name = $('#serv_name').val();
      var serv_banner_text = $('#serv_banner_text').val();
      var serv_text = $('#serv_text').val();
      var pic1 = $('#serv_image').prop('files')[0];
      var pic2 = $('#serv_banner_image').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic1', pic1);
      form_data.append('pic2', pic2);
      form_data.append('serv_name', serv_name);
      form_data.append('serv_banner_text', serv_banner_text);
      form_data.append('serv_text', serv_text);

      if(serv_name=='' || serv_banner_text=='' || serv_text=='' || !pic1 || !pic2){
        return false;
      }
      // console.log(form_data);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/service_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
              // alert(data);
              // console.log(data);
              window.location.reload();
            }
      });
    }


    function services_edit_data(serv_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/services_edit_data',
        data: {serv_id: serv_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#serv_id').val(serv_id);
              $('#serv_name_edit').val(obj.serv_name);
              $('#serv_banner_text_edit').val(obj.serv_banner_text);
              $('#serv_text_edit').val(obj.serv_text);
              $('#show_pic3').attr('src', base_url+'uploads/'+obj.serv_image);
              $('#show_pic3').css('display', 'block');
              $('#show_pic4').attr('src', base_url+'uploads/'+obj.serv_banner_image);
              $('#show_pic4').css('display', 'block');
            }
      });
    }


    function service_update(){
      var base_url = '<?php echo base_url();?>';
      var serv_id = $('#serv_id').val();
      var serv_name = $('#serv_name_edit').val();
      var serv_banner_text = $('#serv_banner_text_edit').val();
      var serv_text = $('#serv_text_edit').val();
      var pic1 = $('#serv_image_edit').prop('files')[0];
      var pic2 = $('#serv_banner_image_edit').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic1', pic1);
      form_data.append('pic2', pic2);
      form_data.append('serv_id', serv_id);
      form_data.append('serv_name', serv_name);
      form_data.append('serv_banner_text', serv_banner_text);
      form_data.append('serv_text', serv_text);

      if(serv_name=='' || serv_banner_text=='' || serv_text==''){
        return false;
      }
      // console.log(form_data);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/service_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
              // alert(data);
              // console.log(data);
              window.location.reload();
            }
      });
    }


    function services_del(serv_id){

      $.confirm({
          title: 'You are about to Delete an Item!!',
          content: 'Would you like to continue?',
          backgroundDismiss: true,
          boxWidth: '30%',
          useBootstrap: false,
          buttons: {
              proceed: {
                btnClass: 'btn-green',
                  action: function(){
                    services_del2(serv_id);
                }},
              cancel: {
                btnClass: 'btn-red',
                  action: function(){
                    // del_pro2(row_id);
                }}
          }
      });
    }

    function services_del2(serv_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/services_del',
        data: {serv_id: serv_id},
        success:
            function(data){
              window.location.reload();
            }
      });
    }


    function benefit_edit_data(img_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_edit_data',
        data: {img_id: img_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              // alert(obj.img_text);
              $('#img_text').val(obj.img_text);
              $('#img_id').val(img_id);
              $('#show_pic5').attr('src', base_url+'uploads/'+obj.img_link);
              $('#show_pic5').css('display', 'block');
            }
      });
    }

    function benefits_update(){
      var base_url = '<?php echo base_url();?>';
      var img_text = $('#img_text').val();
      var img_id = $('#img_id').val();
      var pic = $('#benefit_image').prop('files')[0];
      var form_data = new FormData();
      form_data.append('pic', pic);
      form_data.append('img_id', img_id);
      form_data.append('img_text', img_text);
      form_data.append('img_target_page', 'services.php');
      // alert(pic);
      // return false;
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }



























    //New Functions 19-05-2022//
    function testimonial_image_add(){
      var base_url = '<?php echo base_url();?>';
      if($('#testimonial_name').val()=='' || $('#testimonial_text').val()==''){
        return false;
      }
      $('#loading_div').css('display', 'block');
      var form_data = new FormData();
      form_data.append('testimonial_name', $('#testimonial_name').val());
      form_data.append('testimonial_text', $('#testimonial_text').val());
      form_data.append('testimonial_image', $('#testimonial_image').prop('files')[0]);
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/testimonial_image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                window.location.reload();
            }
      });
    }








    function testimonial_edit_data(testimonial_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/testimonial_edit_data',
        data: {testimonial_id: testimonial_id},
        success:
            function(data){
              var obj = JSON.parse(data);
              console.log(obj);
              $('#testimonial_name_edit').val(obj.testimonial_name);
              $('#testimonial_text_edit').val(obj.testimonial_text);
              if(obj.testimonial_text) char_count_testimonial_edit(obj.testimonial_text);
              else char_count_testimonial_edit('');
              if(obj.testimonial_image_link) {
                $('#show_pic3').attr('src', base_url+'uploads/'+obj.testimonial_image_link);
                $('#show_pic3').css('display', 'block');
              }
              else {
                $('#show_pic3').attr('src', '#');
                $('#show_pic3').css('display', 'none');
              }
              $('#testimonial_id_edit').val(obj.testimonial_id);
            }
      });
    }




    function testimonial_image_update(){
      var base_url = '<?php echo base_url();?>';
      if($('#testimonial_name_edit').val()=='' || $('#testimonial_text_edit').val()==''){
        return false;
      }
      $('#loading_div2').css('display', 'block');
      var form_data = new FormData();
      form_data.append('testimonial_name', $('#testimonial_name_edit').val());
      form_data.append('testimonial_text', $('#testimonial_text_edit').val());
      form_data.append('testimonial_image', $('#testimonial_image_edit').prop('files')[0]);
      form_data.append('testimonial_id', $('#testimonial_id_edit').val());
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/testimonial_image_add_edit',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
              // console.log(data);
              window.location.reload();
            }
      });
    }










    function testimonial_del(testimonial_id){
      $.confirm({
          title: 'You are about to Delete an Item!!',
          content: 'Would you like to continue?',
          backgroundDismiss: true,
          boxWidth: '30%',
          useBootstrap: false,
          buttons: {
              proceed: {
                btnClass: 'btn-green',
                  action: function(){
                    testimonial_del2(testimonial_id);
                }},
              cancel: {
                btnClass: 'btn-red',
                  action: function(){
                    // del_pro2(row_id);
                }}
          }
      });
    }

    function testimonial_del2(testimonial_id){
      var base_url = '<?php echo base_url();?>';
      $.ajax({
        type: "POST",
        url: base_url + 'admin/admin/testimonial_del',
        data: {testimonial_id: testimonial_id},
        success:
            function(data){
              window.location.reload();
            }
      });
    }
























    </script>

  </body>

</html>

