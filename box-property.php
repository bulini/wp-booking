<div class="[ col-sm-4 col-md-4 ]">
	<div class="[ info-card ]  hov-action-border">
	<?php $img=wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), 'thumbnail', false); ?>
		<img style="width: 100%" src="<?php echo $img[0]; ?>" />

		<div class="[ info-card-details ] animate">
			<div class="[ info-card-header ]">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</div>
			<div class="[ info-card-detail ]">
				<!-- Description -->

				<small>capienza: <?php echo get_post_meta( get_the_ID(), 'bookandpay_maxpeople', true); ?> <i class="fa fa-user"></i></small>
				<?php echo prices_table($post->ID); ?>
				<a class="btn-primary btn" href="<?php the_permalink(); ?>">Prenota</a>	

<!--				<div class="social">
					<a href="https://www.facebook.com/rem.mcintosh" class="[ social-icon facebook ] animate"><span class="fa fa-facebook"></span></a>

					<a href="https://twitter.com/Mouse0270" class="[ social-icon twitter ] animate"><span class="fa fa-twitter"></span></a>

					<a href="https://github.com/mouse0270" class="[ social-icon github ] animate"><span class="fa fa-github-alt"></span></a>

					<a href="https://plus.google.com/u/0/115077481218689845626/posts" class="[ social-icon google-plus ] animate"><span class="fa fa-google-plus"></span></a>

					<a href="www.linkedin.com/in/remcintosh/" class="[ social-icon linkedin ] animate"><span class="fa fa-linkedin"></span></a>
				</div>
				
-->				
			</div>
		</div>
	</div>
</div>