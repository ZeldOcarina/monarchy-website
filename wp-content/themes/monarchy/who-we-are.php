<?php
/**
 * The front page template file
 * Template Name: Who we are
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
      <section class="AboutBanner">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Monarchy-logo.svg"></a>
          

          
                 <ul class="navbar-nav mr-auto">
                  
                 </ul>
                  <span class="opennavv" style="font-size:30px; cursor:pointer" onclick="openNav()"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Menu-icon.svg"/></span>
       
         </nav>
         <div class="container banner-content1"> 
            <h2 class="mbold text-center text-white"><?php the_field('about_title','44'); ?></h2>
         </div>
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <?php
                        wp_nav_menu( array(
                          'theme_location' => 'top',
                          'menu_class'     => 'more',                    
                         ) );
                    ?>
            <a><p class="snav_social">
               <a href="<?php the_field('linkedin_url','5'); ?>"><i class="fab fa-linkedin-in"></i></a>
               <a href="<?php the_field('facebook_url','5'); ?>"><i class="fab fa-facebook-f"></i></a>
               <a href="<?php the_field('insta_url','5'); ?>"><i class="fab fa-instagram"></i></a>
            </p></a>
         </div>
      </section>
   </section>
   
   <section class="about-founder">
     <div class="">
       <div class="row">
         <div class="col-lg-3 col-md-3 col-sm-12 about-meet bg-primary-col">
           <aside class="per-head">
              <div class="about-our"> 
                <h1 class="cboit text-white">meet our founder</h1>                
              </div>
              <div class="about-sweet">
                <h6 class="cseboit text-white">She’s all about finding that sweet spot where art and business are fused together</h6>
              </div>
           </aside>
         </div>
         <div class="col-lg-9 col-md-9 col-sm-12">
           <div class="row">
            <div class="col-lg-4 col-md-4 bg-primary-col">
              <p class="para-about-line">With a background in advertising, sales, business and process development, film production and different branches of marketing, Nicole has become an authority in transforming brands in ways others didn’t think possible. With an entrepreneur for a father and a Hollywood producer for a mother, she had a strong foundation that paved the way towards Monarchy’s conception and growth. 

</p>
            </div>
             <div class="col-lg-8 col-md-8 col-sm-12">
              <!--  <p class="mbold second-col about-gap">An entrepreneur passionate about bridging the gaps that hinder growth</p> -->
               <div class="row imgae-founder">
             
              </div>
             </div>
             
           </div>
          
         </div>
       </div>
     </div>
   </section>

<section class="leader-ship" style="padding-bottom: 60px;"> 
 <h1 class="head-leader"><?php the_field('leadership_team_text','44'); ?></h1>
<div class="container">
   <?php
      $the_query = new WP_Query( array('posts_per_page'=>-1,
                                   'post_type'=>'leadership_post',
                                   'order' => 'ASC',
                                   'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                              ); 000
      
   ?>
  <div class="row">            
  <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                               <div class="col-lg-3 col-xl-3 col-md-6 col-sm-6">
    <div class="box-leader">
      <img src="<?php echo get_field('leader_image'); ?>" class="img-avtar">
      <h1><?php the_title(); ?></h1>
      <img src="<?php echo get_field('flag_image'); ?>" class="img-flag1">
      <?php the_content(); ?>
    </div>
  </div>
    <?php
        endwhile;
 ?>
  </div>
</div>
</section>


   <section class=" bg-third-col" >
        <div class="bg-third-col">
            <div class="row">
                <div class="col-lg-10 col-md-7 col-sm-12 col-xl-9 img-about-last">
                  <div class="bomre-img1"> 
                    <button class="btn-video">video of influencers</button>
                  </div>
                </div>
                <div class="col-lg-2 col-md-5 col-sm-12 col-xl-3 desktop-all  margin-al">
                  <div class="mgap6 p-l-mobile">
                     <h1 class="head-home1 about cboit text-white"><?php the_field('who_text','44'); ?><br> <?php the_field('we_are_text','44'); ?></h1>

                     <p class="para-second-home about text-white"><?php the_field('who_we_are_paragraph','44'); ?>

</p>
                     <div class="">
                      
                        <a href="<?php the_field('what_we_do_url','44'); ?>" class="anchor-next cboit">  <i class="fas fa-hand-point-right"></i> &nbsp;&nbsp;Next:<i style="font-size: 26px;"><?php the_field('what_we_do_text','44'); ?></i></a>
                     </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
  

<?php
get_footer();
