<?php
/**
 * Template Name: sub Page services Template
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
    <h1>Services We Provide</h1>
    </div> 
  </section>
  <section class="service-detail">
    <div class="container">
      <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 order-sm-2">
          <div class="tabing">
          <div class="our-services">
            <h2>Our Services</h2>
          </div>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Roofing Repairs</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Roofing Contractor</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> Roofing Installation</a>
                            </div>
                            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service24.jpg" alt="img" />
                            <div class="tab-text">
                              <h2>Roofing Repairs and Replacements</h2>
                              <p>Hail, moisture, wind and sun can all take a toll on your home’s roof over time. A less-than-perfect roof can cause water and moisture to seep into areas that cause long-term damage to the other elements of your home’s structure, jeopardizing its integrity. At Grablis Roofing in Elkton, we handle all aspects of roof repair from the replacement of missing or damaged shingles, to mitigating the damage caused by faulty flashings. From the soffit to the peak, we systematically check for all areas of concern, ensuring that all repairs to your roof are done promptly and efficiently, saving you valuable time and money.</p>
                              <h2>Roof Water Leaks & Broken Shingles</h2>
                              <p>Our most frequent roof repair projects involve water leaks, at both the joints and along flashing seams, broken shingles, and water-damaged soffits and fascia. After thousands of repairs made to thousands of homes in the Elkton area, we are confident in our ability to provide skilled and affordable repairs to any roof of any size, made of any material. Furthermore, annual roof inspections can help reduce the amount of repairs you’ll need as our roof health experts can identify troublesome areas before they have the opportunity to create costly issues.</p>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service25.jpg" alt="img" />
                            <div class="tab-text">
                              <h2>Elkton’s Top-Rated Local® Roofers</h2>
                              <p>There is no structure more important to the integrity of your home than your roof. A well-designed and engineered roof will last for decades and will provide you with a sense of security of safety. As Elkton’s Top-Rated Local® roofing contractors, we believe that a strong roof is a beautiful roof.</p>
                              <h2>Licensed & Insured Roofing Contractors</h2>
                              <p>When you hire a licensed and insured roofing contractor to install a new roof on your home, you can rest assured you’re hiring a professional to get the job done right. At Grablis Roofing, all of our roofing specialists are trained to use the safest roofing techniques to quickly and efficiently install the roof of your dreams.</p>
                              <h2>Roof Installation & Repair Services</h2>
                              <p>For more than 30 years, homeowners in Maryland and Delaware have relied on us for the absolute best in roofing services. Don’t leave the extreme importance of your roof in the hands of a less qualified roofing contractor. We’ve got the skills, knowledge and equipment needed for a sound, reliable and beautiful residential roof. Contact us to schedule an appointment or to request a free roofing estimate today!</p>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/service24.jpg" alt="img" />
                            <div class="tab-text">
                              <h2>New Roof Installation Experts</h2>
                              <p>Whether a new roof is a much-needed update or simply part of a newly-built custom home, our team has built a stellar reputation for both their skill and their customer care techniques. From design and engineering to final clean-up, our roof installation projects come with the same uncompromising guarantee that all of our roofing services: that of unparalleled and lasting durability and unquestionable quality.</p>
                              <p>After the final shingle has been placed and the final nail has been secured, each and every project is inspected by our owner himself. This attention to detail ensures your peace of mind, because if you’re not happy, we’ll make it right. We know every aspect of what makes a roof the most important aspect of your home’s structure and we work to ensure that your new roof lasts, without issue, for years to come.</p>
                              <p>Find out why so many of your friends and neighbors rely on us for their roofing needs by calling our customer care team today. We provide free estimates and work to beat our competition on any written estimate. <a href="tel:4433508244">Call now</a>.</p>
                            </div>
                            </div>
                        </div>
        </div>
       
      </div>
    </div>
  </section>
 
<?php get_footer(); ?>