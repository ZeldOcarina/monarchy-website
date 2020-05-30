<?php
/**
 * The front page template file
 * Template Name: client-AP&G
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
      <section class="">
         <section class="">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #15A2A6 !important;">
               <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Monarchy-logo.svg"></a>
               <ul class="navbar-nav mr-auto">
               </ul>
               <span class="opennavv" style="font-size:30px; cursor:pointer" onclick="openNav()"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Menu-icon.svg"/></span>
            </nav>
            <div class="container banner-content1">
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
      <section class="bg-banner-join">
      </section>
      <section>
         <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7">
               <div class="left-manage">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/img/logo-am.png" class="img-fluid" style="
                     width: 400px; margin-bottom: 40px; margin-top: 15px;">
                  <h1>Developing business opportunities through communications, positioning and branding
                  </h1>
                  <p class="upper-position">
                     American Power and Gas is one of the fastest growing energy companies in the US, growing by 166% from 2013 to 2016 alone. With Monarchy’s ability to create content at scale, we’ve been helping American Power and Gas achieve the genuine engagement that they need to further fuel and sustain their growth. Our amazing network of influencers is not only giving American Power and Gas a more modern voice, we are giving their advocacy a more relatable tone.
                  </p>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7">
               <div class="left-manage" style="padding-top: 0;">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/img/video-apg.JPG" class="img-fluid">
                  <p class="upper-position">
                     American Power and Gas is one of the fastest growing energy companies in the US, growing by 166% from 2013 to 2016 alone. With Monarchy’s ability to create content at scale, we’ve been helping American Power and Gas achieve the genuine engagement that they need to further fuel and sustain their growth. Our amazing network of influencers is not only giving American Power and Gas a more modern voice, we are giving their advocacy a more relatable tone.
                  </p>
               </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5">
               <p class="italic-para-monarch">
                  We create paths and opportunities for brands no matter the size, and the continuous growth of American Power and Gas since working with us is proof of that.
               </p>
            </div>
         </div>
      </section>

      
      <section>
                  <img src="<?php echo get_stylesheet_directory_uri();?>/img/join-make.png" class="img-fluid img-custom-join">
         <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7">
               <div class="left-manage" style="padding-top: 0;">
                  <h1>Developing business opportunities through communications, positioning and branding
                  </h1>
                  <p class="upper-position">
                    We have paved the way for new business opportunities to be developed through communications, positioning and branding. We also continue to show audiences how American Power and Gas thrives on serving the people through non-profits and other engaging campaigns. We are behind the successful launch of their affiliate program as well.<br><br>

                    We have paved the way for new business opportunities to be developed through communications, positioning and branding. We also continue to show audiences how American Power and Gas thrives on serving the people through non-profits and other engaging campaigns. We are behind the successful launch of their affiliate program as well.





                  </p>
               </div>
            </div>
            
         </div>
      </section>

       <section>
                  <img src="<?php echo get_stylesheet_directory_uri();?>/img/banner-apg.png" class="img-fluid img-custom-join">
         
         <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7">
               <div class="left-manage">
                 
                  <h1>Developing business opportunities through communications, positioning and branding
                  </h1>
                  <p class="upper-position">
                    We have paved the way for new business opportunities to be developed through communications, positioning and branding. We also continue to show audiences how American Power and Gas thrives on serving the people through non-profits and other engaging campaigns. We are behind the successful launch of their affiliate program as well.


                  </p>
               </div>
            </div>
         </div>
      </section>
      <section>
         <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7">
               <div class="left-manage" style="padding-top: 0;">
                  <img src="<?php echo get_stylesheet_directory_uri();?>/img/video2apg.JPG" class="img-fluid">
                  <p class="upper-position">
                    We have paved the way for new business opportunities to be developed through communications, positioning and branding. We also continue to show audiences how American Power and Gas thrives on serving the people through non-profits and other engaging campaigns. We are behind the successful launch of their affiliate program as well.


                  </p>
               </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5">
               <p class="italic-para-monarch">
                  We create paths and opportunities for brands no matter the size, and the continuous growth of American Power and Gas since working with us is proof of that.
               </p>
            </div>
         </div>
      </section>

<?php
get_footer();
