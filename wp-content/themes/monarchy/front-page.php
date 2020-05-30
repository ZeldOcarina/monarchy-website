<?php
/**
 * The front page template file
 * Template Name: Home
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
      <section class="banner">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Monarchy-logo.svg"></a>
             

                 <ul class="navbar-nav mr-auto">
                  
                 </ul>
                  <span class="opennavv" style="cursor:pointer" onclick="openNav()"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Menu-icon.svg"/></span>
         
         </nav>
         <div class="container banner-content"> 
            <h2 class="mbold text-center text-white"><?php the_field('banner_text','5'); ?> <span class="brandd"><?php the_field('brands_text','5'); ?></span> <?php the_field('brands_media_text','5'); ?></h2>
            <div class="button-pro">
               <a href="<?php the_field('banner_button_url','5'); ?>" class="anchor-read-more cseboit"><?php the_field('banner_button_text','5'); ?></a>
            </div>
            
         </div>
         <div class="banner-content-bottom ">
            <div class="row">
               <div class="col-3 align-self-center">
                  <div class="bannimg">
                     <p class="cseboit text-white"><?php the_field('our_team_text','5'); ?></p>
                  </div>
               </div>
               <div class="col-2 align-self-center">
                  <div class="bannimg">
                     <img src="<?php the_field('banner_logo1','5'); ?>" class="img-fluid">
                  </div>
               </div>
               <div class="col-2 align-self-center">
                  <div class="bannimg">
                     <img src="<?php the_field('banner_logo2','5'); ?>" class="img-fluid">
                  </div>
               </div>
               <div class="col-2 align-self-center">
                  <div class="bannimg">
                     <img src="<?php the_field('banner_logo3','5'); ?>" class="img-fluid">
                  </div>
               </div>
               <div class="col-2 align-self-center">
                  <div class="bannimg">
                     <img src="<?php the_field('banner_logo4','5'); ?>" class="img-fluid">
                  </div>
               </div>
               <div class="col-1 align-self-center">
                  <div class="bannimg">
                     <p class="cseboit text-white"><?php the_field('and_more_text','5'); ?></p>
                  </div>
               </div>
            </div>
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
              </p>
            </a>
         </div>
      </section>
   </section>

   <!-- new section-->

    <section class=" bg-primary-col">
         
        <div class=" bg-white-col">
            <div class="row">

          <?php
                        $args = array(
                          'post_type'   => 'post',
                          'post_status' => 'publish',
                           'posts_per_page'=>4,
                           'order' => 'ASC',
                          'tax_query'   => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => 'section1'
                            )
                          )
                         );
                         
                        $testimonials = new WP_Query( $args );
                        if( $testimonials->have_posts() ) :
                        ?>
                    <?php
                        while( $testimonials->have_posts() ) :
                          $testimonials->the_post();
                          ?>
                          <?php $thumb = get_the_post_thumbnail_url(); ?>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6 p-t-60 margin-al img-bg4"
                  style="background-image: url('<?php echo $thumb;?>');background-size: cover; background-position: center; background-origin: padding-box;">
                  <div class="spotlight-client text-center">
                     <p class="home-p cseboit text-white"><?php the_title(); ?></p>
                     <h1 class="head-home mbold text-white"><?php echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 4 ) ); ?>
                     </h1>
                     <div class="button-pro-left">
                        <a href="<?php echo the_permalink(); ?>" class="anchor-read">Read more</a>
                     </div>
                  </div>
                </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    <?php
                        else :
                          esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
                        endif;
                        ?>




        </div>

   </section>

    


      <section class="container-fluid bg-primary-col order1">
        <div class="bg-second-col">
            <div class="row list-company">
                <div class="col-lg-7 col-md-6 col-sm-12 col-xl-7">
                  <div class="bomre-img"> 
                     <!-- <img src="img/list-company.jpg" > -->
                  </div>
                    

                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-xl-5  margin-al align-self-center">
                  <div class="spotlight-client mgap6" style="padding-left: 50px;">
                     <p class="home-p about text-white">List of clients</p>
                     <h1 class="head-home about mbold text-white">Why trust us in<br> brands into<br> something bigger</h1>
                     <p class="para-second-home about mregular text-white padding-personal">We believe that masterpieces are created by fusing art and business together. We push businesses to go beyond their usual limits to bring dynamic growth.</p>
                     <div class="button-pro-left">
                        <a href="#" class="anchor-read about brandds">Get to know them</a>
                     </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section class=" bg-primary-col">
         
        <div class=" bg-white-col">
            <div class="row">
                <?php
                        $args = array(
                          'post_type'   => 'post',
                          'post_status' => 'publish',
                           'posts_per_page'=>4,
                           'order' => 'ASC',
                          'tax_query'   => array(
                            array(
                                'taxonomy' => 'category',
                                'field'    => 'slug',
                                'terms'    => 'section2'
                            )
                          )
                         );
                         
                        $testimonials = new WP_Query( $args );
                        if( $testimonials->have_posts() ) :
                        ?>
                    <?php
                        while( $testimonials->have_posts() ) :
                          $testimonials->the_post();
                          ?>
                          <?php $thumb = get_the_post_thumbnail_url(); ?>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6 p-t-60 margin-al img-bg4"
                  style="background-image: url('<?php echo $thumb;?>');background-size: cover; background-position: center; background-origin: padding-box;">
                  <div class="spotlight-client text-center">
                     <p class="home-p cseboit text-white"><?php the_title(); ?></p>
                     <h1 class="head-home mbold text-white"><?php echo apply_filters( 'the_content', wp_trim_words( get_the_content() , 4 ) ); ?>
                     </h1>
                     <div class="button-pro-left">
                        <a href="<?php echo the_permalink(); ?>" class="anchor-read">Read more</a>
                     </div>
                  </div>
                </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    <?php
                        else :
                          esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
                        endif;
                        ?>
            </div>
        </div>
   </section>

   <section class=" bg-primary-col">
        <div class="bg-third-col">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 col-xl-6 order1">
                  <div class="bomre-img"> 
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/Monarchy-vertical-white.svg" >
                  </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-xl-6 margin-al align-self-center">
                  <div class="spotlight-client mgap6">
                     <p class="home-p about cseboit">About us</p>
                     <h1 class="head-home about mbold">How we turn<br> brands into<br> something bigger</h1>
                     <p class="para-second-home about mregular">Here at Monarchy, we eliminate the line between entrepreneurship and artistry. With our skills and experience combined, we have made marketing an art, allowing us to turn your brand into a source of inspiration.</p>
                     <div class="button-pro-left">
                        <a href="#" class="anchor-read about">Learn more</a>
                     </div>
                  </div>
                </div>
            </div>
        </div>
   </section>
  

<?php
get_footer();
