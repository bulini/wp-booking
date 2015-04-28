<?php
/*
Template Name: Request list
*/

if ( is_user_logged_in() ) {



?>  
<?php get_header(); ?>  

 
  
  
  <!-- Three-up Content Blocks -->
  
  <div class="container">
	 <div class="col-md-12">
		 <h1 class="subheader">Gestione prenotazioni</h1>
		 <p>Visualizza <a href="#" id="only_confirmed">Prenotazioni confermate</a> | <a href="#" id="only_owner">Camere bloccate</a> | <a href="#" id="only_bookings">Solo  booking</a></p>		 
		 <?php echo request_list_frontend(); ?>
	</div>
  </div>
  
<?php get_footer(); ?>
<?php } else { 

// Permanent redirection
header("HTTP/1.1 301 Moved Permanently");
header("Location: ".get_bloginfo('siteurl')."/404");
exit();

} ?>
