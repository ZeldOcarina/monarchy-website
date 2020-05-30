<?php
/**
 * The template for displaying the footer

 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<section class="copyright bg-primary-col container-fluid gap">
      <div class="row">
         <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="row">
               <div class="col-lg-3 col-md-4 col-sm-12 text-center align-self-center">
                   <p class="mregular text-white">Ady Production, LLC</p>
               </div>
               <div class="col-lg-3 col-md-4 col-sm-12 text-center align-self-center">
                   <p class="mregular text-white main-copy">Copyright 2020</p>
               </div>
               <div class="col-lg-3 col-md-4 col-sm-12 text-center align-self-center">
                   <p class="mregular text-white">All Rights Reserved</p>
               </div>
               <div class="col-lg-3 col-md-4 col-sm-12 text-center align-self-center">
               </div>   
            </div>
            
         </div>
         <div class="col-lg-4 col-md-12 col-sm-12">
         </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/app.js"></script>


      <script>
          function openNav() {
           document.getElementById("mySidenav").style.width = "550px";
         
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
            
         }
  /*client page*/

  jQuery(document).ready(function(){
         jQuery(".open-video").click(function(){
         jQuery(".open-video-modal").fadeIn();
         });
         jQuery(".blur").click(function(){
         jQuery(".open-video-modal").fadeOut();
         });

         jQuery(".close").click(function(){
         jQuery(".open-video-modal").fadeOut();
          
         });

         });
        </script>



<?php wp_footer(); ?>

</body>
</html>
