<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
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

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			if (have_posts()) :
			the_post();
		?>
		<div class="title">
			<?php the_content(); ?>
        </div>
		<?php endif; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	
</div><!-- .wrap -->

<?php
get_footer();
