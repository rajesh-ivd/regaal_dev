    <aside class="aside aside-fixed">

      <div class="aside-header">

        <a href="<?php echo base_url();?>admin/home" class="aside-logo" style="font-size: 17px;">Regaal <span>Resources</span></a>

        <a href="javascript:void(0);" class="aside-menu-link">

          <i data-feather="menu"></i>

          <i data-feather="x"></i>

        </a>

      </div>

      <div class="aside-body">

        <div class="aside-loggedin">

          <div class="aside-loggedin-user">

            <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">

              <h6 class="tx-semibold mg-b-0">Regaal Resources Admin</h6>

              <i data-feather="chevron-down"></i>

            </a>

            <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>

          </div>

          <div class="collapse" id="loggedinMenu">

            <ul class="nav nav-aside mg-b-0">

              <li class="nav-item"><a href="" class="nav-link" onclick="return logout()"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>

            </ul>

          </div>

        </div><!-- aside-loggedin -->

        <ul class="nav nav-aside">

          <!-- <li class="nav-item" id="applicant_management"><a href="javascript:viod(0);" class="nav-link"><i class="fas fa-user"></i> <span>Organisational Details</span></a></li> -->
          <li class="nav-item" id="home" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/home" class="nav-link"><i class="fas fa-cubes"></i> <span>Home</span></a></li>
          <li class="nav-item" id="about" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/about" class="nav-link"><i class="fas fa-cubes"></i> <span>About</span></a></li>
          <!-- <li class="nav-item" id="culture" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/culture" class="nav-link"><i class="fas fa-cubes"></i> <span>Our Culture</span></a></li> -->
          <!-- <li class="nav-item" id="achievements" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/achievements" class="nav-link"><i class="fas fa-cubes"></i> <span>Our Achievements</span></a></li> -->

          <li class="nav-item" id="leadership" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/leadership" class="nav-link"><i class="fas fa-cubes"></i> <span>Leadership</span></a></li>
          <li class="nav-item" id="products" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/products" class="nav-link"><i class="fas fa-cubes"></i> <span>Products</span></a></li>

          <li class="nav-item" id="gallery" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/gallery" class="nav-link"><i class="fas fa-cubes"></i> <span>Gallery</span></a></li>
          <!-- <li class="nav-item" id="applicant_management"><a href="javascript:viod(0);" class="nav-link"><i class="fas fa-user"></i> <span>News</span></a></li> -->
          <li class="nav-item" id="csr" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/csr" class="nav-link"><i class="fas fa-cubes"></i> <span>CSR</span></a></li>
          <!-- <li class="nav-item" id="applicant_management"><a href="javascript:viod(0);" class="nav-link"><i class="fas fa-user"></i> <span>New Business Initiatives</span></a></li> -->

          <li class="nav-item" id="careers" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/careers" class="nav-link"><i class="fas fa-cubes"></i> <span>Careers</span></a></li>
          <li class="nav-item" id="contact" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/contact" class="nav-link"><i class="fas fa-cubes"></i> <span>Contact</span></a></li>




         <!--  <li class="nav-item" id="about" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/about" class="nav-link"><i class="fas fa-cubes"></i> <span>About Page</span></a></li>
          <li class="nav-item" id="gallery" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/gallery" class="nav-link"><i class="fas fa-cubes"></i> <span>Gallery</span></a></li>
          <li class="nav-item" id="services" onclick="make_active('section1')"><a href="<?php echo base_url();?>admin/services" class="nav-link"><i class="fas fa-cubes"></i> <span>Services</span></a></li>
          <li class="nav-item" id="applicant_management"><a href="javascript:viod(0);" class="nav-link"><i class="fas fa-user"></i> <span>Rates/Pricing</span></a></li>
          <li class="nav-item" id="news" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/news" class="nav-link"><i class="fas fa-cubes"></i> <span>News/Blog</span></a></li>
          <li class="nav-item" id="contact" onclick="make_active('banner')"><a href="<?php echo base_url();?>admin/contact" class="nav-link"><i class="fas fa-cubes"></i> <span>Contact Page</span></a></li> -->

          <!-- <li class="nav-item" id="applicant_management"><a href="<?php echo base_url();?>admin/applicant_management" class="nav-link"><i class="fas fa-user"></i> <span>Participant Management</span></a></li>

          <li class="nav-item" id="team_management"><a href="<?php echo base_url();?>admin/team_management" class="nav-link"><i class="fas fa-user"></i> <span>Team Management</span></a></li></li>

          <li class="nav-item" id="event_management"><a href="<?php echo base_url();?>admin/event_management" class="nav-link"><i class="far fa-calendar-alt"></i> <span>Event Management</span></a></li></li>

          <li class="nav-item" id="leaderboard_management"><a href="<?php echo base_url();?>admin/leaderboard_management" class="nav-link"><i class="fas fa-cubes"></i> <span>Leaderboard Management</span></a></li></li>

          <li class="nav-item" id="gallery_management"><a href="<?php echo base_url();?>admin/gallery_management" class="nav-link"><i class="fas fa-cubes"></i> <span>Gallery Management</span></a></li></li>

          <li class="nav-item" id="banner_management"><a href="<?php echo base_url();?>admin/banner_management" class="nav-link"><i class="fas fa-images"></i> <span>Banner Management</span></a></li></li>

          <li class="nav-item" id="blog"><a href="<?php echo base_url();?>admin/blog" class="nav-link"><i class="fas fa-images"></i> <span>Blog</span></a></li></li> -->

        </ul>

      </div>

    </aside>

















































<!-- 

    <aside class="aside aside-fixed">

      <div class="aside-header">

        <a href="../../index.html" class="aside-logo">dash<span>forge</span></a>

        <a href="" class="aside-menu-link">

          <i data-feather="menu"></i>

          <i data-feather="x"></i>

        </a>

      </div>

      <div class="aside-body">

        <div class="aside-loggedin">

          <div class="d-flex align-items-center justify-content-start">

            <a href="" class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></a>

            <div class="aside-alert-link">

              <a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>

              <a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a>

              <a href="" data-toggle="tooltip" title="Sign out" onclick="return logout()"><i data-feather="log-out"></i></a>

            </div>

          </div>

          <div class="aside-loggedin-user">

            <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">

              <h6 class="tx-semibold mg-b-0">Katherine Pechon</h6>

              <i data-feather="chevron-down"></i>

            </a>

            <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>

          </div>

          <div class="collapse" id="loggedinMenu">

            <ul class="nav nav-aside mg-b-0">

              <li class="nav-item"><a href="" class="nav-link"><i data-feather="edit"></i> <span>Edit Profile</span></a></li>

              <li class="nav-item"><a href="page-profile-view.html" class="nav-link"><i data-feather="user"></i> <span>View Profile</span></a></li>

              <li class="nav-item"><a href="" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>

            </ul>

          </div>

        </div>

        <ul class="nav nav-aside">

          <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-globe" aria-hidden="true"></i> <span>Dashboard</span></a></li></li>

          <li class="nav-item" id="applicant_management"><a href="<?php echo base_url();?>admin/applicant_management" class="nav-link"><i class="fas fa-user"></i> <span>Participant Management</span></a></li></li>

          <li class="nav-item" id="team_management"><a href="<?php echo base_url();?>admin/team_management" class="nav-link"><i class="fas fa-user"></i> <span>Team Management</span></a></li></li>

          <li class="nav-item" id="event_management"><a href="<?php echo base_url();?>admin/event_management" class="nav-link"><i class="far fa-calendar-alt"></i> <span>Event Management</span></a></li></li>

          <li class="nav-item"><a href="#" class="nav-link"><i class="fas fa-cubes"></i> <span>Leaderboard Management</span></a></li></li>

          <li class="nav-item" id="gallery_management"><a href="<?php echo base_url();?>admin/gallery_management" class="nav-link"><i class="fas fa-cubes"></i> <span>Gallery Management</span></a></li></li>

          <li class="nav-item"><a href="banner-management.html" class="nav-link"><i class="fas fa-images"></i> <span>Banner Management</span></a></li></li>

          <li class="nav-item"><a href="report.html" class="nav-link"><i class="fas fa-file-signature"></i> <span>Report</span></a></li></li>

        </ul>

      </div>

    </aside>

 -->

 