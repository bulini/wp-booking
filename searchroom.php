<?php
/*
Template Name:SearchRoom
*/
get_header(); 
?>  
  
  <!-- First Band (Slider) -->
  <!-- The Orbit slider is initialized at the bottom of the page by calling .orbit() on #slider -->

 
 
 <!-- Call to Action Panel -->
 <!-- reservation Panel -->

 
  
  
  <!-- Three-up Content Blocks -->

  
  <div class="row">
	 <div class="eight columns room">

<?php if(have_posts()): while(have_posts()): the_post();?>


<?php display_search(); ?> 

<?php endwhile; endif; ?>
 	</div>
 	<div class="four columns">
  		<?php get_template_part('inc_home/check-availability-horiz-small'); ?>
 		<div class="panel"> 		
 		<h3>Filtra strutture</h3>
 			<ul class="sub-nav">
  <li>Visualizza:</li>
  <li><a href="#" id="all_accommodations">Tutte le strutture</a></li>
  <li><a href="#" id="only_instant">Solo con prenotazione immediata</a></li>
  <li><a href="#" id="on_request">Solo con richiesta informazioni</a></li>
  <li><a href="#" id="only_room">Visualizza solo camere</a></li>

</ul> 
 		</div>
 	</div>
  </div>
<?php get_footer(); ?>

