<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?> 
 <div class="footer">
   <div class="container">
     <div class="row">
     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5 col-12">
        <div class="footer-logo">
        <a href="<?php echo get_home_url(); ?>">
                        	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/design.png" alt="img" />
            </a>
            <p>36 years of experience | 24/7emergency roof repair We work with all major insurance companies We'll beat any written estimate by 20%</p>
            
        </div>
        <div class="social-icon">
              <span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> </a></span>
              <span><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></span>
              <span><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
            </div>
     </div>
     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-6">
     <div class="footer-nav">
     <div class="footer-title">
          <p>Quick Links</p>
        </div>
        <ul>
          <li><a href="front-page.php">HOME</a></li>
          <li><a href="#about">ABOUT US</a></li>
          <li><a href="http://localhost/grablis/services/">SERVICES</a></li>
          <li><a href="gallery.php">GALLERY</a></li>
          <li><a href="#contact">CONTACT</a></li>
        </ul>
     </div>  
     </div>
     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6">
     <div class="footer-nav">
     <div class="footer-title">
          <p>Our Services</p>
        </div>
        <ul>
          <li><a href="services.php">Roof Repairs</a></li>
          <li><a href="services.php">Roofing Contractor</a></li>
          <li><a href="services.php">Roofing Installation</a></li>
          <li><a href="services.php">Residential Roofing</a></li>
          <li><a href="services.php">Commercial Roofing</a></li>
        </ul>
     </div>  
     </div>
     <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
     <div class="footer-nav">
     <div class="footer-title">
          <p>GET IN TOUCH</p>
        </div>
        <div class="footer-contact">
          <div class="address">
            <div class="icon">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <div class="text">
              <p>351 Childs Rd Elkton, MD 21921</p>
            </div>
          </div>
          <div class="address">
            <div class="icon">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            </div>
            <div class="text">
              <p>Mo, Tu, We, Th, Fr <br> 9:00am – 5:00pm</p>
            </div>
          </div>
          <div class="address">
            <div class="icon">
            <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <div class="text">
               <p><a href="tel:4433508244">(443) 350-8244</a> </p>  
            </div>
          </div>
        </div>
     </div>
     </div>
     </div>
   </div>
 </div>
 
<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.colorbox-min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.colorbox.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script>
</body>   
</html>