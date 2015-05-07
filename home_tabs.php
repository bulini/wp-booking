<?php 
$options=load_theme_options();
?>

<ul id="myTab" class="nav nav-tabs">
	<li class="active"><a href="#mappa" data-toggle="tab">Vacanze</a></li>
	<li><a href="#zone" data-toggle="tab">Localit&agrave;</a></li>
</ul>

  <div id="myTabContent" class="tab-content">
	<div class="tab-pane fade in active" id="mappa">
			<div class="row white">
				<div class="col-md-12">
					<h3><?php bloginfo('description'); ?></h3>				
				</div>
			</div>												
	</div>
	 
	<div class="tab-pane fade" id="zone">

		<h3><?php echo $options['city-name']; ?></h3>
		<?php $terms = get_terms("areas");
		 	if ( !empty( $terms ) && !is_wp_error( $terms ) ){
		 		foreach ( $terms as $term ) { ?>
		
		<!-- ITEM-->
			<div class="row hov-action-border ">
		
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3><a href="<?php echo get_term_link( $term ); ?>" title=""><?php echo $term->name; ?></a> <small></small></h3>
					<p><?php echo term_description($term->term_id,'areas');?></p>
					<?php echo get_types(); ?>
				</div>
	
			</div>
			<!-- /ITEM-->
			<hr class="hr-sm">
		<?php    }
		 }
		?>	
	
	<!-- / ITEMS-->
	</div>


  </div>