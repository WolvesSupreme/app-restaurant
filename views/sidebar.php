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

 <!-- ========== Left Sidebar Start ========== -->
 <div class="left-side-menu">

     <div class="slimscroll-menu">

         <!--- Sidemenu -->
         <div id="sidebar-menu">

             <ul class="metismenu" id="side-menu">

                 <li class="menu-title">Main Menu</li>

                 <li>
                     <a href="<?php echo constant('URL'); ?>dashboard">
                         <i class="fa-solid fa-house"></i>
                         <span> Dashboards </span>
                     </a>

                 </li>

                 <li>
                     <a href="javascript: void(0);">
                         <i class="fa-solid fa-bell-concierge"></i>
                         <span> Menu </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <ul class="nav-second-level" aria-expanded="false">
                         <li>
                             <a href="<?php echo constant('URL'); ?>menucatalogue">Menu Catalogue</a>
                         </li>
                         <li>
                             <a href="<?php echo constant('URL'); ?>menulist">Menu List</a>
                         </li>
                         <li>
                             <a href="<?php echo constant('URL'); ?>menugrid">Menu Grid</a>
                         </li>
                         <li>
                             <a href="<?php echo constant('URL'); ?>addproduct">Add Product</a>
                         </li>
                         <li>
                             <a href="<?php echo constant('URL'); ?>productdetail">Product Detail</a>
                         </li>
                     </ul>
                 </li>

                 <li>
                     <a href="<?php echo constant('URL'); ?>orders">
                         <i class="fa-solid fa-clipboard-check"></i>
                         <span> Orders </span>
                     </a>

                 </li>


                 <li>
                     <a href="javascript: void(0);">
                         <i class="fa-solid fa-users"></i>
                         <span> Customers </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <ul class="nav-second-level" aria-expanded="false">
                         <li>
                             <a href="<?php echo constant('URL'); ?>addemployees">Add Employees</a>
                         </li>
                         <li>
                             <a href="<?php echo constant('URL'); ?>customersreview">Customers Review</a>
                         </li>
                         <li>
                             <a href="<?php echo constant('URL'); ?>customerslist">Customers List</a>
                         </li>
                         <li>
                             <a href="<?php echo constant('URL'); ?>socialactivity">Social Activity</a>
                         </li>
                         
                     </ul>
                 </li>

                 <li>
                     <a href="<?php echo constant('URL'); ?>analysis">
                         <i class="fa-solid fa-chart-line"></i>
                         <span> Analysis </span>
                     </a>
                 </li>

                 <li>
                     <a href="<?php echo constant('URL'); ?>onlystore">
                         <i class="fa-solid fa-basket-shopping"></i>
                         <span> Only Store </span>
                     </a>
                 </li>

                 <li class="menu-title mt-2">Components</li>

                 <li>
                     <a href="<?php echo constant('URL'); ?>restaurantlist">
                         <i class="fa-solid fa-ballot"></i>
                         <span> Restaurant List </span>
                     </a>
                 </li>

                 <li>
                     <a>
                         <i class="fa-solid fa-bag-shopping"></i>
                         <span> Stock Control </span>
                         <span class="menu-arrow"></span>
                     </a>
                     <ul class="nav-second-level" aria-expanded="false">
                         <li>
                             <a href="<?php echo constant('URL'); ?>categories">Categories</a>
                         </li>
                     </ul>
                 </li>
             </ul>

         </div>
         <!-- End Sidebar -->

         <div class="clearfix"></div>

     </div>
     <!-- Sidebar -left -->

 </div>
 <!-- Left Sidebar End -->

 <?php require 'views/mainJs.php'; ?>