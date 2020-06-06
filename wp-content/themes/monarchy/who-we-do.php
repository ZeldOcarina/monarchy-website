<?php
/**
 * The front page template file
 * Template Name: Who we do
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
         <section class="servicebanner">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Monarchy-logo.svg"></a>
               <ul class="navbar-nav mr-auto">
               </ul>
               <span class="opennavv" style="font-size:30px; cursor:pointer" onclick="openNav()"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Menu-icon.svg"/></span>
            </nav>
            <div class="container banner-content1">
               <h2 class="mbold text-center text-white"><?php the_field('service_title','39'); ?></h2>
            </div>
            <div id="mySidenav" class="sidenav">
              <div></div>
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
                        <h1 class="cboit service-head"><?php the_field('what_we_do','39'); ?></h1>
                     </div>
                     <div class="about-sweet service-sweet">
                        <h6 class="cseboit"><?php the_field('marketing_text','39'); ?>
                        </h6>
                     </div>
                  </aside>
               </div>
               <div class="col-lg-9 col-md-9 col-sm-12 bg-third-col paddi-service">
                  <div class="row box-an-s">
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <i class="fas fa-puzzle-piece form-icon"></i>
                           <h1 class="head-box"><?php the_field('marketing_strategy','39'); ?>
                              
                           </h1>
                           <p class="para-mix"><?php the_field('marketing_strategy_text','39'); ?>


                           </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <i class="fas fa-chart-bar form-icon"></i>
                           <h1 class="head-box"><?php the_field('business_development','39'); ?>
                           </h1>
                           <p class="para-mix"><?php the_field('business_development_text','39'); ?>


                           </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <i class="fas fa-bullhorn form-icon"></i>
                           <h1 class="head-box"><?php the_field('advertising','39'); ?>
                           </h1>
                           <p class="para-mix"><?php the_field('advertising_text','39'); ?>
                           </p>
                        </div>
                     </div>
                  </div>
                   <div class="row box-an-s">
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <i class="fas fa-pencil-alt form-icon"></i>
                           <h1 class="head-box"><?php the_field('content_creation','39'); ?>
                           </h1>
                           <p class="para-mix"><?php the_field('content_creation_text','39'); ?>


                           </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <i class="fas fa-eye form-icon"></i>
                           <h1 class="head-box"><?php the_field('influencer_marketing','39'); ?>
                           </h1>
                           <p class="para-mix"><?php the_field('influencer_marketing_text','39'); ?>


                           </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                            <!-- <i class="fas fa-puzzle-piece "></i> -->

                            <i class="fas fa-thumbs-up form-icon"></i>
                           <h1 class="head-box"><?php the_field('social_media','39'); ?>
                           </h1>
                           <p class="para-mix"><?php the_field('social_media_text','39'); ?>


                           </p>
                        </div>
                     </div>
                  </div>
                   <div class="row box-an-s">
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <i class="fas fa-calendar-alt form-icon"></i>
                           <h1 class="head-box"><?php the_field('events','39'); ?>
                              
                           </h1>
                           <p class="para-mix"><?php the_field('events_text','39'); ?>


                           </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                          <i class="fas fa-dot-circle form-icon"></i>
                           <h1 class="head-box"><?php the_field('personal_branding','39'); ?>
                           </h1>
                           <p class="para-mix"><?php the_field('personal_branding_text','39'); ?>


                           </p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="box-service">
                           <!-- <i class="fas fa-bullhorn "></i> -->
                           <i class="fas fa-street-view form-icon"></i>
                           <h1 class="head-box"><?php the_field('public_relations','39'); ?>
                           </h1>
                           <p class="para-mix"><?php the_field('public_relations_text','39'); ?>


                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
         <section class="" >
         <div class="">
             <div class="row">


                 <div class="col-lg-12 col-md-7 col-sm-12 col-xl-12" style="background-color: #D66125;">
<!--                    <h1 class="head-creator"><?php the_field('creator’_s_network','39'); ?></h1>
 -->                    <h1 class="head-creator">creator’ s network</h1>
                  <p class="para-service-a">With our skills and experience combined, we have made marketing<br> an art. With our help, your brand will do more than just stand out—<br>it will be the set standard everyone in your niche will look to for<br> inspiration.

</p>

<button class="join-service"><a href="http://18.207.168.148/how-to-join-us/" style="color: #fff; text-decoration: none;">Join our Creator’s Network</a>

</button>
                   <div class="row row-serveice">

                       

                                     <?php
                    $the_query = new WP_Query( array('posts_per_page'=>-1,
                                                 'post_type'=>'creator_network',
                                                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                                            ); 
                    
                 ?>
                  <div class="row">            
                  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <div class="col-xl-3 col-lg-3 col-md-3">
                       <div class="box-artist">
                         <img src="<?php the_field('creatnw_image'); ?>" class="img-artist">
                         <h2 class="head-artist"><?php the_title(); ?></h2>
                         <div class="create-text"><?php the_content(); ?></div>
                       </div>
                    </div>
                    <?php
                        endwhile;
                 ?>
                  </div>

                   </div>
                 </div>

                 <div class="col-lg-3 col-md-5 col-sm-12 col-xl-3 desktop-all  margin-al d-none">
                   <div class="mgap6 p-l-mobile padding-left-10">
                      <h1 class="head-home1 about cboit"><?php the_field('meet_our_friends','39'); ?></h1>
                      <p class="para-second-home about mregular"><?php the_field('meet_our_friends_text','39'); ?>
         
         
         
         </p>
         <button class="btn-creator"><?php the_field('join_our_network','39'); ?></button>
                      <div class="">
                       
                         <a href="#" class="anchor-network">  <i class="fas fa-hand-point-right"></i> &nbsp;&nbsp;NEXT:<i style="font-size: 22px;"><?php the_field('who_we’ve_helped','39'); ?></i></a>
                      </div>
                   </div>
                 </div>
             </div>
         </div>
         </section>
  

<?php
get_footer();
