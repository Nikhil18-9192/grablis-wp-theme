<?php
/**
 * Template Name: sub Page2 Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */ 
 
get_header(); ?>
  <section class="title">
    <div class="container">
    <h1>Our Latest Project</h1>
    </div> 
  </section>
   <div class="custome-gallery">
  <div class="container">
  <div class="row">
     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
     <a class="group1" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/project1.jpg" title="project image."> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/project1.jpg" alt="img" /></a>
     </div>
     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
     <a class="group1" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/project2.jpg" title="project image."> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/project2.jpg" alt="img" /></a>
     </div>
     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
     <a class="group1" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/project3.jpg" title="project image."> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/project3.jpg" alt="img" /></a>
     </div>
     </div>
  <div class="row gallery1">
     <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
     <a class="group1" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/project4.jpg" title="project image."> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/project4.jpg" alt="img" /></a>
     </div>
     
     </div>
     </div>
     </div>
<?php get_footer(); ?>