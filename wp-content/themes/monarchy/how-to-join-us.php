<?php
/**
 * The front page template file
 * Template Name: how-to-join-us
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<body>
      <section class="bg-primary-col">
         <section class="careerbanner">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Monarchy-logo.svg"></a>
               <ul class="navbar-nav mr-auto">
               </ul>
               <span class="opennavv" style="font-size:30px; cursor:pointer" onclick="openNav()"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Menu-icon.svg"/></span>
            </nav>
            <div class="container banner-content1">
               <h2 class="mbold text-center text-white">Careers

</h2>
            </div>
             <div id="mySidenav" class="sidenav">
               <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <?php
                        wp_nav_menu( array(
                          'theme_location' => 'top',
                          'menu_class'     => 'more',                    
                         ) );
                    ?>
               <a>
                  <p class="snav_social">
               <a href="<?php the_field('linkedin_url','5'); ?>"><i class="fab fa-linkedin-in"></i></a>
               <a href="<?php the_field('facebook_url','5'); ?>"><i class="fab fa-facebook-f"></i></a>
               <a href="<?php the_field('insta_url','5'); ?>"><i class="fab fa-instagram"></i></a>
               </p></a>
            </div>
         </section>
      </section>
      <section class="service-founder">
         <div class="">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-12 about-meet">
                  <aside class="">
                     <div class="about-our">
                        <h1 class="cboit service-head service-over-1">how to join us</h1>
                     </div>

                     <?php echo do_shortcode('[contact-form-7 id="196" title="Contact form 1"]'); ?>
                    
                  </aside>
               </div>
               <div class="col-lg-9 col-md-9 col-sm-12  paddi-service" style="background-color: #D66125;">
                                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="mbold second-col text-white about-gap font-size-big">Do you have what it takes to be part of Monarchy</p>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="mregular text-white about-biz p-bg-c" style="color: rgba(255,255,255,0.7) !important;padding-bottom: 45px;">We are a powerhouse of marketers and creatives that deliver powerful results to clients worldwide. If you believe you've got that spark of brilliance, join our team!





</p>
                     </div>
                  </div>
                  
                  <div class="row box-an-s">
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <i class="fas fa-pencil-alt text-white form-icon"></i>
                           <h1 class="head-box">content creator
                           </h1>
                           <p class="para-mix">We create content that balances your brand and your audience’s aesthetic wavelength.
                           </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <i class="fas fa-eye text-white form-icon"></i>
                           <h1 class="head-box">influencer/ marketer
                           </h1>
                           <p class="para-mix">We have a huge influencer network that delivers added value for both brands and audiences.
                           </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <!-- <i class="fas fa-puzzle-piece "></i> -->
                           <i class="fas fa-thumbs-up text-white form-icon"></i>
                           <h1 class="head-box">social media strategist
                           </h1>
                           <p class="para-mix">We maximize the power of social media to deliver long-term results and genuine engagement
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="row box-an-s">
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <i class="fas fa-calendar-alt text-white form-icon"></i>
                           <h1 class="head-box">event planner
                           </h1>
                           <p class="para-mix">We create the right experiences for stronger audience connection and long-term content.
                           </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <i class="fas fa-dot-circle text-white form-icon"></i>
                           <h1 class="head-box">brand designer
                           </h1>
                           <p class="para-mix">We tell the right stories to personalize your brand, affirming your brand philosophy.
                           </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <!-- <i class="fas fa-bullhorn "></i> -->
                           <i class="fas fa-street-view text-white form-icon"></i>
                           <h1 class="head-box">PR specialist

 
                           </h1>
                           <p class="para-mix">We create new spaces for visibility and help curate the link between brands and media.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
     


<?php
get_footer();
