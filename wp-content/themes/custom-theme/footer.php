<!-- ======= Footer ======= -->
<footer id="footer">
   <div class="footer-newsletter">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-6">
               <h4><?php the_field('join_our_newsletter_heading', 'option'); ?> </h4>
               <p><?php the_field('join_our_newsletter_description', 'option'); ?> </p>
               <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="Subscribe">
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="footer-top">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
               <h3><?php the_field('address_heading', 'option'); ?></h3>
               <p>
                  <?php the_field('address', 'option'); ?> <br><br>
                  <strong><?php the_field('phone_number_heading', 'option'); ?></strong><?php the_field('phone_number', 'option'); ?><br>
                  <strong><?php the_field('email_heading', 'option'); ?></strong><?php the_field('email_id', 'option'); ?><br>
               </p>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
               <h4><?php the_field('useful_links', 'option'); ?></h4>
               <?php 
                  if (has_nav_menu('mytheme_register_nav_menu')) 
                      wp_nav_menu( array('theme_location' => 'footer_menu' ) );
                  $defaults = array(
                      'theme_location'  => 'footer_menu',
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
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
               <h4><?php the_field('our_services', 'option'); ?></h4>
               <?php 
                  if (has_nav_menu('mytheme_register_nav_menu')) 
                      wp_nav_menu( array('theme_location' => 'footer_menu1' ) );
                   $defaults = array(
                      'theme_location'  => 'footer_menu1',
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
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
               <h4><?php the_field('our_social_networks', 'option'); ?></h4>
               <p><?php the_field('our_social_networks_description', 'option'); ?></p>
               <div class="social-links mt-3">
                  <?php
                     if( have_rows('social_media_icons_section', 'option') ){
                     
                     	// Loop through rows.
                     	while( have_rows('social_media_icons_section', 'option') ) { the_row();
                     	?>
                  <a href="<?php the_sub_field('social_icon', 'option'); ?>" class="twitter"><i class="<?php the_sub_field('social_icon', 'option'); ?>"></i></a>
                  <?php 
                     }
                     // Do something...
                     }
                 ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container footer-bottom clearfix">
      <div class="copyright">
         &copy; <?php the_field('copy_right_text', 'option'); ?>
      </div>
      <div class="credits">
         <!-- All the links in the footer should remain intact. -->
         <!-- You can delete the links only if you purchased the pro version. -->
         <!-- Licensing information: https://bootstrapmade.com/license/ -->
         <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
         <a href="https://bootstrapmade.com/"><?php the_field('design_by', 'option'); ?></a>
      </div>
   </div>
</footer>
<!-- End Footer -->
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<!-- <script src="assets/vendor/aos/aos.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
   <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
   <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
   <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
   <script src="assets/vendor/php-email-form/validate.js"></script> -->
<!-- Template Main JS File -->
<!-- <script src="assets/js/main.js"></script> -->
<?php wp_footer();?>
</body>
</html>