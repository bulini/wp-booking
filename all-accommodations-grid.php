<?php 
/*
Template Name: All Grid
*/

get_header(); ?>

<?php 
$options=load_theme_options();
?>

	<!-- Main blog .container -->
	<div class="container">

	
<!-- Teasers right side wrapper col-->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
	<!-- ADDS PANEL-->
				<div class="row margin-top-10 white">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
							<h1>Appartamenti <?php single_cat_title(); ?> <?php echo $options['city']; ?></h1>
							<p>Invia una richiesta multipla a tutte le strutture presenti su questa pagina, specifica le tue esigenze, se &egrave; una vacanza di gruppo, pi&ugrave; famiglie, bambini etc.</p>
							<p class="text-center">
								<a class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Inviaci una richiesta informazioni multipla</a>									
							</p>

						</div>
					</div>

							<hr class="hr-sm">
							
					<div class="row margin-top-10">						
							<?php query_posts('post_type=accommodations&posts_per_page=-1'); ?>
							
					<!-- ITEM-->
							<?php while ( have_posts() ) : the_post(); 
								$maxpax= get_post_meta( get_the_ID(), 'bookandpay_maxpeople', true)
							?>
							
							<!-- COUNTRY ITEM-->
								<?php get_template_part('box-property')?>
							<!-- /COUNTRY ITEM-->
					<!-- /ITEM-->
					<?php endwhile; ?>
					</div>					
					
					<div class="row margin-top-10 white">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
							<h1>Appartamenti <?php single_cat_title(); ?> <?php echo $options['city']; ?></h1>
							<p>Invia una richiesta multipla a tutte le strutture presenti su questa pagina, specifica le tue esigenze, se &egrave; una vacanza di gruppo, pi&ugrave; famiglie, bambini etc.</p>
							<p class="text-center">
								<a class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal">Inviaci una richiesta informazioni multipla</a>									
							</p>

						</div>
					</div>
					
		
		
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<a class="btn btn-warning btn-sm" href="#" title="" style="margin-top:20px;"><i class="icon-angle-left"></i> Back to search results</a>
		</div>
		<!-- Pagination -->
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<ul class="pagination pull-right">
			  <li class="disabled"><a href="#">Previous</a></li>
			  <li class="active"><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li><a href="#">4</a></li>
			  <li><a href="#">5</a></li>
			  <li><a href="#">Next</a></li>
			</ul>
		</div>
	  <!-- /Pagination -->
					
					
					
					
						
		</div>
	</div>
	<!-- /Main blog .container -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<hr>
</div>
<!-- /.container-->
				<?php wp_reset_query(); ?>
					<!-- Modal -->
				<div class="modal fade modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">Richiedi un preventivo</h4>
				      </div>
				      <div class="modal-body">
				        
						<!-- instant booking o no -->
				 		<?php 
				 		$instant_booking=get_post_meta(get_the_ID(),'bookandpay_instant_booking',true);
				 		if($instant_booking=='on'): ?>
				  		<h3><?php _e("<!--:it-->Booking immediato<!--:--><!--:en-->Instant booking<!--:-->"); ?></h3>
						<?php else : ?>
				
				 		<p><?php _e("<!--:it-->Compilate il seguente modulo per inviare una richiesta multipla a tutte le strutture o per gruppi numerosi. Indicateci anche la presenza di bambini, e l'eventuale disposizione desiderata.<!--:--><!--:en-->Please submit this module to ask availability. We will contact you as soon as possible.<!--:-->"); ?>. In alternativa o se avete delle domande inviate una mail a <a href="mailto:booking@appartamenti-lefkada.com">booking@appartamenti-lefkada.com</a>
				 		<?php endif ?></p> <hr />
				 		<?php BookingBsForm(get_the_ID(),'it'); ?>
				 			
				 
				 		
				 		<?php dynamic_sidebar('right_1'); ?>  

				        <div id="booking_response">
				        	<div id="wheel" style="display:none;">Un momento di pazienza</div>
				        </div>
				        
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Chiudi</button>
				      </div>
				    </div>
				  </div>
				</div>
			
			<!-- end modal -->




	<hr>
	<?php get_template_part('pre-footer');?>  
	<?php get_footer(); ?>