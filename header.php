<?php
//   session_start();
//   if(!isset($_SESSION['login_status'])){
//     header("location: not_allowed.php");
//   }
?>
  
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Poor Developed Fund</title>

    <!-- vendor css -->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Starlight CSS -->
    <link rel="stylesheet" href="css/starlight.css">
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="css/my_style.css">
  </head>

  <body>

    <div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> P D F</a></div>
    <div class="sl-sideleft bg_color">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->

      <div class="sl-sideleft-menu ">
        <a href="dashboard.php" class="sl-menu-link <?= (isset($dashboard))?'active': ''?>">
          <div class="sl-menu-item font_color">
            <i class="menu-item-icon  font_coloricon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a>
        <a href="header_part.php" class="sl-menu-link <?= (isset($header_part))?'active': ''?>">
          <div class="sl-menu-item font_color">
            <i class="Emenu-item-icon icon fas fa-box tx-20"></i>
            <span class="menu-item-label ">General Setup</span>
          </div><!-- menu-item -->
          <a href="skill.php" class="sl-menu-link <?= (isset($skill))?'active': ''?>">
          <div class="sl-menu-item font_color">
            <i class="Emenu-item-icon icon fas fa-briefcase tx-20"></i>
            <span class="menu-item-label">Skill</span>
          </div><!-- menu-item -->
          <a href="facts.php" class="sl-menu-link <?= (isset($facts))?'active': ''?>">
          <div class="sl-menu-item font_color">
            <i class="Emenu-item-icon icon <tx-20 fas fa-id-card tx-20"></i>
            <span class="menu-item-label">Facts</span>
          </div><!-- menu-item -->
          <a href="testimonial.php" class="sl-menu-link <?= (isset($testimonial))?'active': ''?>">
          <div class="sl-menu-item font_color">
            <i class="Emenu-item-icon icon <tx-20 fas fa-newspaper tx-20"></i>
            <span class="menu-item-label">Testimonial</span>
          </div><!-- menu-item -->
          <a href="service.php" class="sl-menu-link <?= (isset($service))?'active': ''?>">
          <div class="sl-menu-item font_color">
            <i class="Emenu-item-icon icon <tx-20 fas fa-project-diagram tx-20"></i>
            <span class="menu-item-label">Service</span>
          </div><!-- menu-item -->
          <a href="portfolio.php" class="sl-menu-link <?= (isset($portfolio))?'active': ''?>">
          <div class="sl-menu-item font_color">
            <i class="Emenu-item-icon icon <tx-20 fab fa-fonticons-fi tx-20"></i>
            <span class="menu-item-label">Portfolio</span>
          </div><!-- menu-item -->
          <a href="setup.php" class="sl-menu-link <?= (isset($setup))?'active': ''?>">
          <div class="sl-menu-item font_color">
            <i class="Emenu-item-icon icon <tx-20 fas fa-id-card tx-20"></i>
            <span class="menu-item-label">Setup</span>
          </div><!-- menu-item -->
          <a href="education.php" class="sl-menu-link <?= (isset($education))?'active': ''?>">
          <div class="sl-menu-item font_color">
            <i class="Emenu-item-icon icon <tx-20 fas fa-id-card tx-20"></i>
            <span class="menu-item-label">Education</span>
          </div><!-- menu-item -->
          <a href="pro_experiance.php" class="sl-menu-link <?= (isset($professional))?'active': ''?>">
          <div class="sl-menu-item font_color">
            <i class="Emenu-item-icon icon <tx-20 fas fa-id-card tx-20"></i>
            <span class="menu-item-label">Profe: Experiance</span>
          </div><!-- menu-item -->


        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item font_color">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-22"></i>
            <span class="menu-item-label">Pages</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="blank.html" class="nav-link">Blank Page</a></li>
          <li class="nav-item"><a href="page-signin.html" class="nav-link">Signin Page</a></li>
          <li class="nav-item"><a href="page-signup.html" class="nav-link">Signup Page</a></li>
          <li class="nav-item"><a href="page-notfound.html" class="nav-link">404 Page Not Found</a></li>
        </ul>
      </div><!-- sl-sideleft-menu -->
      
      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link ion-android-contact" data-toggle="dropdown">
              <span class="logged-name"><?= $_SESSION['login_name'] ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person-outline"></i>Edit Profile</a></li>
                <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href="index.php"><i class="icon ion-android-train"></i> Visite Website</a></li>
                <li><a href="signout.php"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
  
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="" class="media-list-link">
              <div class="media">
                <img src="img/img4.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                  <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="img/img7.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                  <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="img/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                  <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                  <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="" class="media-list-link">
              <div class="media">
                <img src="img/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #messages -->     
      </div><!-- tab-content -->
    </div><!-- sl-sideright -->