<?php
/**
 * The front page template file
 * Template Name: Who we’ve helped
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
         <section class="AboutBanner1">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Monarchy-logo.svg"></a>
               <ul class="navbar-nav mr-auto">
               </ul>
               <span class="opennavv" style="font-size:30px; cursor:pointer" onclick="openNav()"><img src="<?php echo get_stylesheet_directory_uri();?>/img/Menu-icon.svg"/></span>
            </nav>
            <div class="container banner-content1">
               <h2 class="mbold text-center text-white"><?php the_field('clients','46'); ?></h2>
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
      
        <section class="about-founder">
         <div class="">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-12 about-meet bg-primary-col">
                  <aside class="" style="padding-top: 50px;">
                     <div class="client-head">
                        <h1 class="cboit text-white">who we’ve helped
                        </h1>
                     </div>
                     <div class="about-sweet">
                        <h6 class="cseboit text-white">We push brands to go beyond their usual limits to see dynamic growth. </h6>
                     </div>
                  </aside>
               </div>
               <div class="col-lg-9 col-md-9 col-sm-12 " style="padding-top: 50px;">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="mbold second-col about-gap">We help brands stand out by adding art to entrepreneurship</p>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="mregular about-biz p-bg-c">We know that every brand, big or small, has great potential for further growth with the right strategies. That's what we do. We help brands reach their goals by exploring every possible opportunity and creating new avenues for growth.  </p>     
                     </div>
                  </div>
                  <div class="row client-founder1"></div>
               </div>
            </div>
         </div>
       </section>

      <section class="leader-ship" style="padding-bottom: 60px;">
         <h1 class="head-leader"><?php the_field('case_studies','46'); ?>
         </h1>
         <div class="container">  
                  <?php
                     $the_query = new WP_Query( array('posts_per_page'=>-1,
                                                  'post_type'=>'case_studies',
                                                  'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                                             );                      
                  ?>
                 <div class="row">            
                 <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                     <?php $thumb = get_the_post_thumbnail_url(); ?>
                   <div class="banner-case bg1" data-toggle="modal" data-target="#exampleModal<?php echo get_the_ID(); ?>" style="background-image: url('<?php echo $thumb;?>'); height: 380px; margin-top: 18px;margin-left: 13px; width: 89%;">

                    <i class="fas fa-ellipsis-h icon-all"></i>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/play-icon.svg" class="play-icon">
                     <div class="box-b-1">
                        <h1 class="banner-case-head"><?php the_title(); ?></h1>
                        <div class="banner-para"><?php the_content(); ?></div>
                     </div>
                   </div>
                 </div>

                 <div class="modal fade" id="exampleModal<?php echo get_the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <iframe width="470" height="400"
                      src="<?php echo get_field('video'); ?>">
                      </iframe>
                    </div>
                  </div>
                </div>
              </div>       
<?php
                   endwhile;
            ?>
          </div>
        </div>
  </section>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->

<?php
get_footer();
