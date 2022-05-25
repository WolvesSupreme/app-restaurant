 <!-- App favicon -->
 <link rel="shortcut icon" href="assets/images/favicon.ico">

 <!-- Inconos -->
 <script src="https://kit.fontawesome.com/ef43d58cca.js" crossorigin="anonymous"></script>

 <!-- Plugins css -->
 <link href="assets/libs/nestable2/jquery.nestable.min.css" rel="stylesheet" />

 <!-- App css -->
 <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
 <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

 <!-- Topbar Start -->
 <div class="navbar-custom">
     <ul class="list-unstyled topnav-menu float-right mb-0">

         <li class="d-none d-sm-block">
             <form class="app-search">
                 <div class="app-search-box">
                     <div class="input-group">
                         <input type="text" class="form-control" placeholder="Search...">
                         <div class="input-group-append">
                             <button class="btn" type="submit">
                                 <i class="fe-search"></i>
                             </button>
                         </div>
                     </div>
                 </div>
             </form>
         </li>

         <!-- USER + PHOTO -->
         <li class="dropdown notification-list">
             <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="" role="button" aria-haspopup="false" aria-expanded="false">
                 <span>
                     <?php if ($user->getPhoto() == '') { ?>
                         <i class="material-icons">account_circle</i>
                     <?php } else { ?>
                         <img class="rounded-circle" src="<?php echo constant('URL'); ?>public/img/photos/<?php echo $user->getPhoto() ?>" width="32" />
                     <?php }  ?>

                 </span>

                 <span class="pro-user-name ml-1">
                     <?php echo $user->getName(); ?>
                     <i class="mdi mdi-chevron-down"></i>
                 </span>

             </a>
             <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                 <!-- item-->
                 <div class="dropdown-item noti-title">
                     <h5 class="m-0 text-white">
                         Welcome !
                     </h5>
                 </div>

                 <!-- item-->
                 <a href="<?php echo constant('URL'); ?>profile" class="dropdown-item notify-item">
                     <i class="fe-user"></i>
                     <span>My Account</span>
                 </a>

                 <!-- item-->
                 <a href="<?php echo constant('URL'); ?>user" class="dropdown-item notify-item">
                     <i class="fe-settings"></i>
                     <span>Settings</span>
                 </a>

                 <!-- item-->

                 <div class="dropdown-divider"></div>

                 <!-- item-->
                 <a href="<?php echo constant('URL'); ?>logout" class="dropdown-item notify-item">
                     <i class="fe-log-out"></i>
                     <span>Logout</span>
                 </a>

             </div>
         </li>
     </ul>

     <!-- LOGO -->
     <div class="logo-box">
         <a href="<?php echo constant('URL'); ?>admin" class="logo text-center">
             <span class="logo-lg">
                 <img src="assets/images/logo-light.png" alt="" height="16">
                 <!-- <span class="logo-lg-text-light">Xeria</span> -->
             </span>
             <span class="logo-sm">
                 <!-- <span class="logo-sm-text-dark">X</span> -->
                 <img src="assets/images/logo-sm.png" alt="" height="18">
             </span>
         </a>
     </div>

     <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
         <li>
             <button class="button-menu-mobile waves-effect">
                 <span></span>
                 <span></span>
                 <span></span>
             </button>
         </li>

         <!-- <li class="dropdown d-none d-lg-block">
             <a class="nav-link dropdown-toggle waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                 User
             </a>
         </li> -->


     </ul>
 </div>
 <!-- end Topbar -->

 <!-- App js -->
 <script src="assets/js/app.min.js"></script>