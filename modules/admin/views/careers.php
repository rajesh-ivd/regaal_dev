

    <div class="content ht-100v pd-0">

      <div class="content-header">

        <div style="padding-left: 300px;">
          <h3 style="color: limegreen;"><?php echo $this->session->flashdata('flashmsg'); ?></h3>
        </div>

        <!-- <div class="content-search">

          <i data-feather="search"></i>

          <input type="search" class="form-control" placeholder="Search">

        </div> -->

        <!-- <nav class="nav">

          <a href="" class="nav-link"><i data-feather="help-circle"></i></a>

          <a href="" class="nav-link"><i data-feather="grid"></i></a>

          <a href="" class="nav-link"><i data-feather="align-left"></i></a>

        </nav> -->

      </div>



      <div class="content-body">

        <div class="container pd-x-0 tx-13">

          <div class="media d-block d-lg-flex">

            <div class="media-body mg-t-40 mg-lg-t-0 pd-lg-x-10">

              <div class="df-example">

                <ul class="nav nav-tabs" id="myTab" role="tablist">

                  <li class="nav-item" onclick="make_active('banner')">

                    <a class="nav-link" id="banner-tab" data-toggle="tab" href="#banner" role="tab" aria-controls="banner" aria-selected="true">Banner</a>

                  </li>

                  <li class="nav-item" onclick="make_active('section1')">

                    <a class="nav-link" id="section1-tab" data-toggle="tab" href="#section1" role="tab" aria-controls="section1" aria-selected="true">Introduction Section</a>

                  </li>

                  <li class="nav-item" onclick="make_active('section2')">

                    <a class="nav-link" id="section2-tab" data-toggle="tab" href="#section2" role="tab" aria-controls="section2" aria-selected="true">Job Section</a>

                  </li>

                  <li class="nav-item" onclick="make_active('section3')">

                    <a class="nav-link" id="section3-tab" data-toggle="tab" href="#section3" role="tab" aria-controls="section3" aria-selected="true">Testimonial Section</a>

                  </li>

                  <!-- <li class="nav-item" onclick="make_active('section3')">

                    <a class="nav-link" id="section3-tab" data-toggle="tab" href="#section3" role="tab" aria-controls="section3" aria-selected="true">Picture Section</a>

                  </li> -->

                  <!-- <li class="nav-item" onclick="make_active('section4')">

                    <a class="nav-link" id="section4-tab" data-toggle="tab" href="#section4" role="tab" aria-controls="section4" aria-selected="true">Video Section</a>

                  </li> -->

                  <!--<li class="nav-item" onclick="make_active('section5')">

                    <a class="nav-link" id="section5-tab" data-toggle="tab" href="#section5" role="tab" aria-controls="section5" aria-selected="true">Section 5</a>

                  </li>

                  <li class="nav-item" onclick="make_active('section6')">

                    <a class="nav-link" id="section6-tab" data-toggle="tab" href="#section6" role="tab" aria-controls="section6" aria-selected="true">Section 6</a>

                  </li>

                  <li class="nav-item" onclick="make_active('section7')">

                    <a class="nav-link" id="section7-tab" data-toggle="tab" href="#section7" role="tab" aria-controls="section7" aria-selected="true">Section 7</a>

                  </li>

                  <li class="nav-item" onclick="make_active('section8')">

                    <a class="nav-link" id="section8-tab" data-toggle="tab" href="#section8" role="tab" aria-controls="section8" aria-selected="true">Section 8</a>

                  </li> -->

                  <!-- <li class="nav-item" onclick="make_active('section9')">

                    <a class="nav-link" id="section9-tab" data-toggle="tab" href="#section9" role="tab" aria-controls="section9" aria-selected="true">Client Section</a>

                  </li> -->

                  <!-- <li class="nav-item" onclick="make_active('section10')">

                    <a class="nav-link" id="section10-tab" data-toggle="tab" href="#section10" role="tab" aria-controls="section10" aria-selected="true">Section 10</a>

                  </li> -->

                </ul>

























                <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">

                  <div class="tab-pane fade show" id="banner" role="tabpanel" aria-labelledby="banner-tab">

                    <div class="headerText">

                      <h4 class="mg-b-25">Desktop Banner Management</h4>

                      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Upload Banner Image</button> -->

                    </div>

            <div class="row">
            <div class="col-xl-12">
              <div class="row row-sm mg-b-25 crd">
                <?php
                if(isset($careers_banner_data_desk)){
                  foreach ($careers_banner_data_desk as $key => $val) {
                    echo '<div class="col-md-6">
                            <div class="card card-event">
                              <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                              <div class="card-body tx-13">
                                <h5>'.$val->img_text.'</h5>
                              </div>
                              <div class="card-footer tx-13">
                                <span class="tx-color-03"></span>
                                <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal2" onclick="careers_banner_edit_data_desk('.$val->img_id.')"></i>
                                </span>
                              </div>
                            </div>
                          </div>';
                    if(($key+1)%2==0){
                      echo '</div><div class="row row-sm mg-b-25 crd">';
                    }
                  }
                }
                else{
                  echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                }
                ?>
                  </div>
                </div>
              </div>


              <div class="headerText">

                      <h4 class="mg-b-25">Mobile Banner Management</h4>

                      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Upload Banner Image</button> -->

                    </div>

            <div class="row">
            <div class="col-xl-12">
              <div class="row row-sm mg-b-25 crd">
                <?php
                if(isset($careers_banner_data_mob)){
                  foreach ($careers_banner_data_mob as $key => $val) {
                    echo '<div class="col-md-6">
                            <div class="card card-event">
                              <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                              <div class="card-body tx-13">
                                <h5>'.$val->img_text.'</h5>
                              </div>
                              <div class="card-footer tx-13">
                                <span class="tx-color-03"></span>
                                <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal2" onclick="careers_banner_edit_data_mob('.$val->img_id.')"></i>
                                </span>
                              </div>
                            </div>
                          </div>';
                    if(($key+1)%2==0){
                      echo '</div><div class="row row-sm mg-b-25 crd">';
                    }
                  }
                }
                else{
                  echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                }
                ?>
                  </div>
                </div>
              </div>

            </div>



             <!--  <div class="modal fade" id="exampleModal">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Upload Banner</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <label for="home_banner_text"><b>Banner Text:</b></label>
                      <input type="text" class="form-control" placeholder="Enter text" id="home_banner_text" required><br>
                      <label for="home_banner_pic"><b>Choose Image(1350x850):</b></label>
                      <input type="file" id="home_banner_pic" accept="image/png, image/jpg, image/jpeg" required><br>
                      <button type="submit" class="btn btn-success" onclick="home_banner_add()">Save</button>
                      <p style="color: red; font-size: 15px;"><b id="home_banner_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->

              <div class="modal fade" id="exampleModal2">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Banner</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <input type="hidden" id="careers_banner_edit_id" value="">
                      <label for="careers_banner_text_edit"><b>Banner Title:</b></label>
                      <input type="text" class="form-control" placeholder="Enter text" id="careers_banner_text_edit"><br>
                      <label for="careers_banner_pic_edit"><b id="type_text">Choose Image(1350x400):</b></label>
                      <img src="#" id="show_pic" width="150px;" style="display: none;"><br>
                      <input type="file" id="careers_banner_pic_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="careers_banner_edit()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="careers_banner_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>



































              <div class="tab-pane fade show" id="section1" role="tabpane2" aria-labelledby="section1-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Intoduction Management</h4>

                      <button type="submit" class="btn btn-primary" onclick="careers_section1_save()">Save</button>

                    </div>

                    <label for="careers_section1_title">Title:</label>
                    <input type="text" class="form-control" placeholder="Enter title" id="careers_section1_title" value="<?php echo $careers_section1_data[0]->element_content;?>" required>
                    <label for="careers_section1_text">Text:</label>
                    <textarea class="form-control" placeholder="Enter text" rows="7" id="careers_section1_text" required><?php echo $careers_section1_data[1]->element_content;?></textarea>

                </form>
              </div>





































              <!-- <div class="tab-pane fade show" id="section4" role="tabpane5" aria-labelledby="section4-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Video Management</h4>

                      <button type="button" class="btn btn-primary" onclick="about_section4_save()">Save</button>

                    </div>
                    <label for="about_section4_video_link">Video Link:</label>
                    <input type="text" class="form-control" placeholder="Enter title" id="about_section4_video_link" value="<?php echo $about_section4_data[0]->element_content;?>" required>

                    <h5>Background Image:</h5>

          <div class="row">
            <div class="col-xl-12">
              <div class="row row-sm mg-b-25 crd">
                <?php
                if(isset($about_section4_pic_data)){
                  foreach ($about_section4_pic_data as $key => $val) {
                    echo '<div class="col-md-6">
                            <div class="card card-event">
                              <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                              <div class="card-footer tx-13">
                                <span class="tx-color-03"></span>
                                <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal4" onclick="about_section4_image_edit_data('.$val->img_id.')"></i>
                                </span>
                              </div>
                            </div>
                          </div>';
                    if(($key+1)%2==0){
                      echo '</div><div class="row row-sm mg-b-25 crd">';
                    }
                  }
                }
                else{
                  echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                }
                ?>
                  </div>
                </div>
              </div>

                </form>
              </div>


              <div class="modal fade" id="exampleModal4">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <input type="hidden" id="about_section4_image_edit_id" value="">
                      <label for="about_section4_image_edit"><b>Choose Image(1170x550):</b></label>
                      <img src="#" id="show_pic4" width="150px;" style="display: none;"><br>
                      <input type="file" id="about_section4_image_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic4').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="about_section4_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="about_section4_image_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->
































              <!-- <div class="tab-pane fade show" id="section1" role="tabpane2" aria-labelledby="section1-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Section 1 Management</h4>

                      <button type="submit" class="btn btn-primary" onclick="section1_save()">Save</button>

                    </div>
                  <label for="section1_title">Title:</label>
                  <input type="text" class="form-control" placeholder="Enter title" id="section1_title" value="<?php echo $section1_data[0]->element_content;?>" required>
                  <label for="section1_boldtext">Bold Text:</label>
                  <textarea class="form-control" placeholder="Enter Text" rows="3" id="section1_boldtext" required><?php echo $section1_data[1]->element_content;?></textarea>
                  <label for="section1_normaltext">Normal Text:</label>
                  <textarea class="form-control" placeholder="Enter Text" rows="3" id="section1_normaltext" required><?php echo $section1_data[2]->element_content;?></textarea>

                  <h5>Icons:</h5>

                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Icon Title</th>
                        <th>Icon</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(isset($section1_pic_data)){
                        foreach ($section1_pic_data as $key => $val) {
                      ?>
                          <tr>
                            <td><?php echo $val->img_title;?></td>
                            <td><img src="<?php echo base_url();?>uploads/<?php echo $val->img_link;?>" width="50px;"></td>
                            <td><button class="btn btn-info btn-sm" onclick="section1_pic_edit_data('<?php echo $val->img_id;?>')" data-toggle="modal" data-target="#exampleModal3"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                          </tr>
                      <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>

                </form>
              </div>


              <div class="modal fade" id="exampleModal3">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Icon</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <label for="section1_icon_text_edit"><b>Icon Title:</b></label>
                      <input type="hidden" id="section1_icon_edit_id" value="">
                      <input type="text" class="form-control" placeholder="Enter text" id="section1_icon_text_edit" required><br>
                      <label for="section1_icon_pic_edit"><b>Choose Image(130x130):</b></label><br>
                      <img src="#" id="show_pic2" width="150px;" style="display: none;"><br>
                      <input type="file" id="section1_icon_pic_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic2').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section1_icon_edit()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section1_icon_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->






















              <div class="tab-pane fade show" id="section2" role="tabpane3" aria-labelledby="section2-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Job Management</h4>

                      <button type="button" class="btn btn-warning" style="margin-left: 635px;" data-toggle="modal" data-target="#exampleModal3">Add Job</button>
                      <button type="button" class="btn btn-primary" onclick="careers_section2_save()">Save</button>

                    </div>
                  <label for="careers_section2_email">Target Email ID:</label>
                  <input type="email" class="form-control" placeholder="Enter email" required multiple id="careers_section2_email" value="<?php echo $careers_section2_data[0]->element_content;?>">

                  <h5 style="margin-top: 20px;margin-bottom: 15px;">Jobs:</h5>

                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th style="width: 200px;">Title</th>
                        <th>Description</th>
                        <th style="width: 170px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(isset($careers_job_data)){
                        foreach ($careers_job_data as $key => $val) {
                          ?>
                            <tr>
                              <td><?php echo $val->job_title;?></td>
                              <td><?php echo $val->job_text;?></td>
                              <td>
                                <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal4" onclick="careers_job_data('<?php echo $val->job_id;?>')"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="careers_job_del('<?php echo $val->job_id;?>')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                              </td>
                            </tr>
                          <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>
            </form>
              </div>



              <div class="modal fade" id="exampleModal3">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Add New Job</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">

                      <label for="careers_section2_title">Title:</label>
                      <input type="text" class="form-control" placeholder="Enter title" required id="careers_section2_title">
                      <label for="careers_section2_text">Description:</label>
                      <textarea class="form-control" placeholder="Enter description" rows="6" id="careers_section2_text" required></textarea>

                      <button type="submit" class="btn btn-success" onclick="careers_section2_add()">Add</button>
                      <p style="color: red; font-size: 15px;"><b id="careers_section2_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>



              <div class="modal fade" id="exampleModal4">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                        <input type="hidden" name="careers_section2_id_edit" id="careers_section2_id_edit">

                      <label for="careers_section2_title_edit">Title:</label>
                      <input type="text" class="form-control" placeholder="Enter year" required id="careers_section2_title_edit">
                      <label for="careers_section2_text_edit">Description:</label>
                      <textarea class="form-control" placeholder="Enter text" rows="6" id="careers_section2_text_edit" required></textarea>

                      <button type="submit" class="btn btn-success" onclick="careers_section2_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="careers_section2_error_edit"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>










































              <div class="tab-pane fade show" id="section3" role="tabpane3" aria-labelledby="section3-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">
                    <h4 class="mg-b-25">Testimonial Management</h4>
                    <button type="button" class="btn btn-warning" style="margin-left: 580px;" data-toggle="modal" data-target="#exampleModal5">Add Testimonial</button>
                  </div>

                  <table class="table table-hover" style="width: 80%; margin: 0 auto;">
                    <thead>
                      <tr>
                        <th style="width: 200px;">Name</th>
                        <th>Text</th>
                        <th>Image</th>
                        <th style="width: 170px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(isset($careers_testimonial_data)){
                        foreach ($careers_testimonial_data as $key => $val) {
                          ?>
                            <tr>
                              <td><?php echo $val->testimonial_name;?></td>
                              <td><?php echo $val->testimonial_text;?></td>
                              <td>
                                <?php
                                  if(!empty($val->testimonial_image_link)){
                                    ?>
                                      <img src="<?php echo base_url().'uploads/'.$val->testimonial_image_link;?>" width="100px">
                                    <?php
                                  }
                                ?>
                              </td>
                              <td>
                                <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal6" onclick="testimonial_edit_data('<?php echo $val->testimonial_id;?>')"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="testimonial_del('<?php echo $val->testimonial_id;?>')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                              </td>
                            </tr>
                          <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </form>
              </div>





              <div class="modal fade" id="exampleModal5">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Add New Testimonial</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">

                        <label for="testimonial_name">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" required id="testimonial_name">

                        <label for="testimonial_text">Test:</label>
                        <textarea class="form-control" placeholder="Enter text" rows="5" id="testimonial_text" onkeyup="char_count_testimonial(this.value)" maxlength="300" required></textarea>
                        <p><strong>Max charecters:</strong> 300</p>
                        <p><strong>Charecter count:</strong> <span id="char_count_testimonial">0</span></p>

                        <label for="testimonial_image"><b>Choose Image(200x200):</b></label>
                        <img src="#" id="show_pic2" width="150px;" style="display: none;"><br>
                        <input type="file" id="testimonial_image" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic2').src = window.URL.createObjectURL(this.files[0]);document.getElementById('show_pic2').style.display = 'block';"><br>

                        <button type="submit" class="btn btn-success" onclick="testimonial_image_add()">Add</button>
                         
                        <button type="button" class="btn btn-danger" style="margin-top: 18px;" data-dismiss="modal">Close</button>
                        <div style="display: none;" id="loading_div">
                         <p style="position: relative;left: 3px;top: 10px;color: brown;">Wait while we upload your image<div class="loader"></div></p>
                        </div>

                        <p style="color: red; font-size: 15px;"><b id="testimonial_image_error"></b></p>
                      </form>
                    </div>


                  </div>
                </div>
              </div>










              <div class="modal fade" id="exampleModal6">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Testimonial</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">

                        <label for="testimonial_name_edit">Name:</label>
                        <input type="text" class="form-control" placeholder="Enter name" required id="testimonial_name_edit">
                        <input type="hidden" name="testimonial_id_edit" id="testimonial_id_edit">

                        <label for="testimonial_text_edit">Test:</label>
                        <textarea class="form-control" placeholder="Enter text" rows="5" id="testimonial_text_edit" onkeyup="char_count_testimonial(this.value)" maxlength="300" required></textarea>
                        <p><strong>Max charecters:</strong> 300</p>
                        <p><strong>Charecter count:</strong> <span id="char_count_testimonial_edit">0</span></p>

                        <label for="testimonial_image_edit"><b>Choose Image(200x200):</b></label>
                        <img src="#" id="show_pic3" width="150px;" style="display: none;"><br>
                        <input type="file" id="testimonial_image_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic3').src = window.URL.createObjectURL(this.files[0]);document.getElementById('show_pic3').style.display = 'block';"><br>
                        <button type="submit" class="btn btn-success" onclick="testimonial_image_update()">Update</button>
                         
                        <button type="button" class="btn btn-danger" style="margin-top: 18px;" data-dismiss="modal">Close</button>
                        <div style="display: none;" id="loading_div2">
                         <p style="position: relative;left: 3px;top: 10px;color: brown;">Wait while we upload your image<div class="loader"></div></p>
                        </div>

                        <p style="color: red; font-size: 15px;"><b id="testimonial_image_edit_error"></b></p>

                      </form>
                    </div>

                  </div>
                </div>
              </div>



              <!-- <div class="modal fade" id="exampleModal3">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Add New Job</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">

                      <label for="careers_section2_title">Title:</label>
                      <input type="text" class="form-control" placeholder="Enter title" required id="careers_section2_title">
                      <label for="careers_section2_text">Description:</label>
                      <textarea class="form-control" placeholder="Enter description" rows="6" id="careers_section2_text" required></textarea>

                      <button type="submit" class="btn btn-success" onclick="careers_section2_add()">Add</button>
                      <p style="color: red; font-size: 15px;"><b id="careers_section2_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>



              <div class="modal fade" id="exampleModal4">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                        <input type="hidden" name="careers_section2_id_edit" id="careers_section2_id_edit">

                      <label for="careers_section2_title_edit">Title:</label>
                      <input type="text" class="form-control" placeholder="Enter year" required id="careers_section2_title_edit">
                      <label for="careers_section2_text_edit">Description:</label>
                      <textarea class="form-control" placeholder="Enter text" rows="6" id="careers_section2_text_edit" required></textarea>

                      <button type="submit" class="btn btn-success" onclick="careers_section2_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="careers_section2_error_edit"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->







































              <!-- <div class="tab-pane fade show" id="section3" role="tabpane4" aria-labelledby="section3-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Picture Section Management</h4>

                      <button type="button" class="btn btn-primary" onclick="home_section3_save()">Save</button>

                    </div>
                  <label for="home_section3_title">Title:</label>
                  <input type="text" class="form-control" placeholder="Enter title" id="home_section3_title" value="<?php echo $home_section3_data[0]->element_content;?>">
                  <label for="home_section3_text">Text:</label>
                  <textarea class="form-control" placeholder="Enter text" rows="4" id="home_section3_text" required><?php echo $home_section3_data[1]->element_content;?></textarea>

                  <h5>Background Image:</h5>

                  <div class="row">
                    <div class="col-xl-12">
                      <div class="row row-sm mg-b-25 crd">
                        <?php
                        if(isset($home_section3_pic_data)){
                          foreach ($home_section3_pic_data as $key => $val) {
                            echo '<div class="col-md-6">
                                    <div class="card card-event">
                                      <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                                      <div class="card-footer tx-13">
                                        <span class="tx-color-03"></span>
                                        <span class="del-icon">
                                          <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal5" onclick="home_section3_pic_data('.$val->img_id.')"></i>
                                        </span>
                                      </div>
                                    </div>
                                  </div>';
                            if(($key+1)%2==0){
                              echo '</div><div class="row row-sm mg-b-25 crd">';
                            }
                          }
                        }
                        else{
                          echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                        }
                        ?>
                          </div>
                        </div>
                      </div>

                </form>
              </div>



              <div class="modal fade" id="exampleModal5">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Icons</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <input type="hidden" id="home_section3_image_edit_id" value="">
                      <label for="home_section3_image_edit"><b>Choose Image(1280x500):</b></label>
                      <img src="#" id="show_pic2" width="150px;" style="display: none;"><br>
                      <input type="file" id="home_section3_image_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic2').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="home_section3_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="home_section3_image_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->

























             <!--  <div class="tab-pane fade show" id="section4" role="tabpane5" aria-labelledby="section4-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Section 4 Management</h4>

                      <button type="button" class="btn btn-primary" onclick="section4_save()">Save</button>

                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <label for="section4_title1">Counter 1 Number:</label>
                        <input type="number" class="form-control" placeholder="Enter title" id="section4_title1" value="<?php echo $section4_data[0]->element_content;?>" required>
                      </div>
                      <div class="col-md-4">
                        <label for="section4_suffix1">Counter 1 Suffix:</label>
                        <input type="text" class="form-control" placeholder="Enter suffix" id="section4_suffix1" value="<?php echo $section4_data[3]->element_content;?>" required>
                      </div>
                      <div class="col-md-4">
                        <label for="section4_text1">Counter 1 Text:</label>
                        <input type="text" class="form-control" placeholder="Enter text" id="section4_text1" value="<?php echo $section4_data[6]->element_content;?>" required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label for="section4_title2">Counter 2 Number:</label>
                        <input type="number" class="form-control" placeholder="Enter title" id="section4_title2" value="<?php echo $section4_data[1]->element_content;?>" required>
                      </div>
                      <div class="col-md-4">
                        <label for="section4_suffix2">Counter 2 Suffix:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section4_suffix2" value="<?php echo $section4_data[4]->element_content;?>" required>
                      </div>
                      <div class="col-md-4">
                        <label for="section4_text2">Counter 2 Text:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section4_text2" value="<?php echo $section4_data[7]->element_content;?>" required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label for="section4_title3">Counter 3 Number:</label>
                        <input type="number" class="form-control" placeholder="Enter title" id="section4_title3" value="<?php echo $section4_data[2]->element_content;?>" required>
                      </div>
                      <div class="col-md-4">
                        <label for="section4_suffix3">Counter 3 Suffix:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section4_suffix3" value="<?php echo $section4_data[5]->element_content;?>" required>
                      </div>
                      <div class="col-md-4">
                        <label for="section4_text3">Counter 3 Text:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section4_text3" value="<?php echo $section4_data[8]->element_content;?>" required>
                      </div>
                    </div>

                </form>
              </div> -->


























              <!-- <div class="tab-pane fade show" id="section5" role="tabpane6" aria-labelledby="section5-tab">
                <form class="form" action="">
                  <div class="headerText">

                      <h4 class="mg-b-25">Section 5 Management</h4>

                      <button type="button" class="btn btn-primary" onclick="section5_save()">Save</button>

                    </div>
                  <label for="section5_title">Title:</label>
                  <input type="text" class="form-control" placeholder="Enter title" id="section5_title" value="<?php echo $section5_data[0]->element_content;?>">
                  <label for="section5_blocktitle">Block Title:</label>
                  <input type="text" class="form-control" placeholder="Enter title" id="section5_blocktitle" value="<?php echo $section5_data[1]->element_content;?>">
                  <label for="section5_target_email">Target Email:</label>
                  <input type="email" class="form-control" placeholder="Enter title" id="section5_target_email" value="<?php echo $section5_data[2]->element_content;?>">

                  <h5>Background Image:</h5>


                  <div class="row">
            <div class="col-xl-12">
              <div class="row row-sm mg-b-25 crd">
                <?php
                if(isset($section5_pic_data)){
                  foreach ($section5_pic_data as $key => $val) {
                    echo '<div class="col-md-6">
                            <div class="card card-event">
                              <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                              <div class="card-footer tx-13">
                                <span class="tx-color-03"></span>
                                <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal6" onclick="section5_image_edit_data('.$val->img_id.')"></i>
                                </span>
                              </div>
                            </div>
                          </div>';
                    if(($key+1)%2==0){
                      echo '</div><div class="row row-sm mg-b-25 crd">';
                    }
                  }
                }
                else{
                  echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                }
                ?>
                  </div>
                </div>
              </div>

                </form>
              </div>


              <div class="modal fade" id="exampleModal6">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <input type="hidden" id="section5_image_edit_id" value="">
                      <label for="section5_image_edit"><b>Choose Image(1226x611):</b></label><br>
                      <img src="#" id="show_pic5" width="150px;" style="display: none;"><br>
                      <input type="file" id="section5_image_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic5').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section5_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section5_image_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->
































              <!-- <div class="tab-pane fade show" id="section6" role="tabpane7" aria-labelledby="section6-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Section 6 Management</h4>

                      <button type="button" class="btn btn-primary" onclick="section6_save()">Save</button>

                    </div>
                  <label for="section6_title">Title:</label>
                  <input type="text" class="form-control" placeholder="Enter title" id="section6_title" value="<?php echo $section6_data[0]->element_content;?>">
                  <label for="section6_text">Text:</label>
                  <textarea class="form-control" placeholder="Enter Text" rows="3" id="section6_text"><?php echo $section6_data[1]->element_content;?></textarea>

                  <h5>Images:</h5>

                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Image Title</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(isset($section6_pic_data)){
                        foreach ($section6_pic_data as $key => $val) {
                          ?>
                            <tr>
                              <td><?php echo $val->img_title;?></td>
                              <td><img src="<?php echo base_url();?>uploads/<?php echo $val->img_link;?>" width="50px;"></td>
                              <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal7" onclick="section6_image_edit_data('<?php echo $val->img_id;?>')"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                            </tr>
                          <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>

                </form>
              </div>


              <div class="modal fade" id="exampleModal7">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <label for="section6_image_text"><b>Icon Title:</b></label>
                      <input type="hidden" id="section6_image_edit_id" value="">
                      <input type="text" class="form-control" placeholder="Enter text" id="section6_image_text" required><br>
                      <label for="section6_image_edit"><b>Choose Image(306x306):</b></label><br>
                      <img src="#" id="show_pic6" width="150px;" style="display: none;"><br>
                      <input type="file" id="section6_image_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic6').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section6_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section6_icon_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->



































              <!-- <div class="tab-pane fade show" id="section7" role="tabpane8" aria-labelledby="section7-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Section 7 Management</h4>

                      <button type="button" class="btn btn-primary" onclick="section7_save()">Save</button>

                    </div>

                        <label for="section7_title">Title:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section7_title" value="<?php echo $section7_data[0]->element_content;?>"><br><br><br>

                    <div class="row">
                      <div class="col-md-6">
                        <label for="section7_name1">Name 1:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section7_name1" value="<?php echo $section7_data[1]->element_content;?>">
                      </div>
                      <div class="col-md-6">
                        <label for="section7_desg1">Desgnation 1:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section7_desg1" value="<?php echo $section7_data[2]->element_content;?>">
                      </div>
                      <div class="col-md-12">
                        <label for="section7_text1">Text 1:</label>
                        <textarea class="form-control" placeholder="Enter Text" rows="6" id="section7_text1"><?php echo $section7_data[3]->element_content;?></textarea>
                      </div>
                    </div><br><br><br>

                    <div class="row">
                      <div class="col-md-6">
                        <label for="section7_name2">Name 2:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section7_name2" value="<?php echo $section7_data[4]->element_content;?>">
                      </div>
                      <div class="col-md-6">
                        <label for="section7_desg2">Desgnation 2:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section7_desg2" value="<?php echo $section7_data[5]->element_content;?>">
                      </div>
                      <div class="col-md-12">
                        <label for="section7_text2">Text 2:</label>
                        <textarea class="form-control" placeholder="Enter Text" rows="6" id="section7_text2"><?php echo $section7_data[6]->element_content;?></textarea>
                      </div>
                    </div><br><br><br>

                    <div class="row">
                      <div class="col-md-6">
                        <label for="section7_name3">Name 3:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section7_name3" value="<?php echo $section7_data[7]->element_content;?>">
                      </div>
                      <div class="col-md-6">
                        <label for="section7_desg3">Desgnation 3:</label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section7_desg3" value="<?php echo $section7_data[8]->element_content;?>">
                      </div>
                      <div class="col-md-12">
                        <label for="section7_text3">Text 3:</label>
                        <textarea class="form-control" placeholder="Enter Text" rows="6" id="section7_text3"><?php echo $section7_data[9]->element_content;?></textarea>
                      </div>
                    </div><br><br><br>
                  

                  <h5>Image:</h5>


                  <div class="row">
            <div class="col-xl-12">
              <div class="row row-sm mg-b-25 crd">
                <?php
                if(isset($section7_pic_data)){
                  foreach ($section7_pic_data as $key => $val) {
                    echo '<div class="col-md-6">
                            <div class="card card-event">
                              <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                              <div class="card-footer tx-13">
                                <span class="tx-color-03"></span>
                                <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal8" onclick="section7_image_edit_data('.$val->img_id.')"></i>
                                </span>
                              </div>
                            </div>
                          </div>';
                    if(($key+1)%2==0){
                      echo '</div><div class="row row-sm mg-b-25 crd">';
                    }
                  }
                }
                else{
                  echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                }
                ?>
                  </div>
                </div>
              </div>

                </form>
              </div>


              <div class="modal fade" id="exampleModal8">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <input type="hidden" id="section7_image_edit_id" value="">
                      <label for="section7_image_edit"><b>Choose Image(470x314):</b></label><br>
                      <img src="#" id="show_pic7" width="150px;" style="display: none;"><br>
                      <input type="file" id="section7_image_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic7').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section7_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section7_image_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->


































              <!-- <div class="tab-pane fade show" id="section8" role="tabpane9" aria-labelledby="section8-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Section 8 Management</h4>

                      <button type="button" class="btn btn-primary" onclick="section8_save()">Save</button>

                    </div>
                  <label for="section8_title">Title:</label>
                  <input type="text" class="form-control" placeholder="Enter title" id="section8_title" value="<?php echo $section8_data[0]->element_content;?>">

                  <h5>Articles:</h5>

                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Article Title</th>
                        <th>Article Image</th>
                        <th>Article Text</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(isset($section8_pic_data)){
                        foreach ($section8_pic_data as $key => $val) {
                          ?>
                            <tr>
                              <td><?php echo $val->img_title;?></td>
                              <td><img src="<?php echo base_url();?>uploads/<?php echo $val->img_link;?>" width="100px;"></td>
                              <td><?php echo $val->img_text;?></td>
                              <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal9" onclick="section8_image_edit_data('<?php echo $val->img_id;?>')"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                            </tr>
                          <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>

                </form>
              </div>


              <div class="modal fade" id="exampleModal9">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Article</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                        <label for="section8_article_title"><b>Article Title:</b></label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section8_article_title" required>
                        <label for="section8_article_text"><b>Article Text:</b></label>
                        <textarea class="form-control" placeholder="Enter Text" rows="2" id="section8_article_text" required></textarea>
                      <input type="hidden" id="section8_article_edit_id" value="">
                      <label for="section8_article_edit"><b>Choose Image(455x275):</b></label>
                      <img src="#" id="show_pic8" width="150px;" style="display: none;"><br>
                      <input type="file" id="section8_article_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic8').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section8_article_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section8_article_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->



























              <!-- <div class="tab-pane fade show" id="section9" role="tabpane10" aria-labelledby="section9-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Client Section Management</h4>

                      <button type="button" class="btn btn-primary" onclick="section9_save()">Save</button>

                    </div>
                  <label for="section9_title">Title:</label>
                  <input type="text" class="form-control" placeholder="Enter title" id="section9_title" value="<?php echo $section9_data[0]->element_content;?>">

                  <h5>Brands:</h5>

                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Brand Title</th>
                        <th>Brand Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if(isset($section9_pic_data)){
                        foreach ($section9_pic_data as $key => $val) {
                          ?>
                            <tr>
                              <td><?php echo $val->img_title;?></td>
                              <td><img src="<?php echo base_url();?>uploads/<?php echo $val->img_link;?>" width="100px;"></td>
                              <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal10" onclick="section9_image_edit_data('<?php echo $val->img_id;?>')"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                            </tr>
                          <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>

                </form>
              </div>


              <div class="modal fade" id="exampleModal10">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                        <label for="section9_image_title"><b>Image Title:</b></label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section9_image_title">
                      <input type="hidden" id="section9_image_edit_id" value="">
                      <label for="section9_image_edit"><b>Choose Image(150x80):</b></label>
                      <img src="#" id="show_pic9" width="150px;" style="display: none;"><br>
                      <input type="file" id="section9_image_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic9').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section9_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section9_article_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->




















            <!--   <div class="tab-pane fade show" id="section10" role="tabpane11" aria-labelledby="section10-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Section 10 Management</h4>

                      <button type="button" class="btn btn-primary" onclick="section10_save()">Save</button>

                    </div>
                  <label for="section10_title">Title:</label>
                  <input type="text" class="form-control" placeholder="Enter title" id="section10_title" value="<?php echo $section10_data[0]->element_content;?>">
                  <label for="section10_target_email">Target Email:</label>
                  <input type="email" class="form-control" placeholder="Enter title" id="section10_target_email" value="<?php echo $section10_data[1]->element_content;?>">

                  <h5>Background Image:</h5>


                  <div class="row">
            <div class="col-xl-12">
              <div class="row row-sm mg-b-25 crd">
                <?php
                if(isset($section10_pic_data)){
                  foreach ($section10_pic_data as $key => $val) {
                    echo '<div class="col-md-6">
                            <div class="card card-event">
                              <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                              <div class="card-footer tx-13">
                                <span class="tx-color-03"></span>
                                <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal11" onclick="section10_image_edit_data('.$val->img_id.')"></i>
                                </span>
                              </div>
                            </div>
                          </div>';
                    if(($key+1)%2==0){
                      echo '</div><div class="row row-sm mg-b-25 crd">';
                    }
                  }
                }
                else{
                  echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                }
                ?>
                  </div>
                </div>
              </div>

                </form>
              </div>


              <div class="modal fade" id="exampleModal11">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <input type="hidden" id="section10_image_edit_id" value="">
                      <label for="section10_image_edit"><b>Choose Image(1226x793):</b></label><br>
                      <img src="#" id="show_pic10" width="150px;" style="display: none;"><br>
                      <input type="file" id="section10_image_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic10').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section10_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section10_image_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->


























                </div>

              </div>

            </div><!-- media-body -->

          </div><!-- media -->

        </div><!-- container -->

      </div><!-- content-body -->

    </div><!-- content -->



<script type="text/javascript">

function char_count_testimonial(char){
  $('#char_count_testimonial').text(char.length);
}

function char_count_testimonial_edit(char){
  $('#char_count_testimonial_edit').text(char.length);
}

</script>