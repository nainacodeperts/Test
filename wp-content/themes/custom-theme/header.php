<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Arsha Bootstrap Template - Index</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet">
         <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
         <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
         <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
         <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
         <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
         <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
      <!-- Template Main CSS File -->
      <!-- <link href="assets/css/style.css" rel="stylesheet"> -->
      <!-- =======================================================
         * Template Name: Arsha - v4.9.1
         * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
         * Author: BootstrapMade.com
         * License: https://bootstrapmade.com/license/
         ======================================================== -->
      <?php wp_head();?>
   </head>
   <body>
      <!-- ======= Header ======= -->
      <header id="header" class="fixed-top ">
         <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <nav id="navbar" class="navbar">
               <?php 
                  if (has_nav_menu('mytheme_register_nav_menu')) 
                      wp_nav_menu( array('theme_location' => 'primary_menu' ) );
                  $defaults = array(
                      'theme_location'  => 'primary_menu',
                      'menu'            => '',
                      'container'       => false,
                      'container_class' => '',
                      'container_id'    => '',
                      'menu_class'      => 'menu',
                      'menu_id'         => '',
                      'echo'            => true,
                      'fallback_cb'     => 'wp_page_menu',
                      'before'          => '',
                      'after'           => '',
                      'link_before'     => '',
                      'link_after'      => '',
                      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'depth'           => 3,
                      'walker'          => ''
                      );
                  wp_nav_menu( $defaults );
                  
                  ?>
               <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
         </div>
      </header>
      <!-- End Header -->