<?php /* Template Name: Edit gallery room */ 

if (!is_user_logged_in() ) { wp_redirect( wp_login_url(get_permalink( $post->ID )) ); exit;	} 


global $current_user;
get_currentuserinfo();


global $current_post;

$postTitleError = '';

$id=$_GET['prop_id'];

$post_author=get_post($id);

$post_author=$post_author->post_author;


if (is_user_logged_in() && (current_user_can('edit_others_posts') || $current_user->ID == $post_author) ) :
		
		
		if(isset($_POST['submitted']) && isset($_POST['post_nonce_field']) && wp_verify_nonce($_POST['post_nonce_field'], 'post_nonce'))
		{
			if ( $_FILES ) {
				$files = $_FILES['upload_attachment'];
				foreach ($files['name'] as $key => $value) {
				if ($files['name'][$key]) {
				$file = array(
				'name' => $files['name'][$key],
				'type' => $files['type'][$key],
				'tmp_name' => $files['tmp_name'][$key],
				'error' => $files['error'][$key],
				'size' => $files['size'][$key]
				);
 
				$_FILES = array("upload_attachment" => $file);
 
				foreach ($_FILES as $file => $array) {
					$newupload = insert_attachment($file,$_GET['prop_id'],$_POST['set_thumb']);
				}
			}
		}
	}

}

		
		$query = new WP_Query(array('post_type' => 'accommodations', 'posts_per_page' =>'-1', 'post_status' => array('publish', 'pending', 'draft', 'private', 'trash') ) );
		
		if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
			
			if(isset($_GET['prop_id'])) {
				
				if($_GET['prop_id'] == $post->ID)
				{
					$current_post = $post->ID;
		
					$title = get_the_title();
					$content = get_the_content();
		
				}
			}
		
		endwhile; endif;
		wp_reset_query();
		
		
		?>
		
		<?php get_header(); ?>
		
			<!-- #primary BEGIN -->


		<div class="row">		
		 <div class="col-md-12">			
			 <h3 class="subheader"><?php echo $title; ?></h3>
			 <?php get_template_part('inc/nav-accommodations'); ?>
		 </div>
		</div>
		
			<div class="row room-content">
			 <div class="col-md-12">
				 
				<form action="" id="custom" method="POST" class="custom" enctype="multipart/form-data">
					
					<fieldset>
						<legend>Seleziona l'immagine principale della strutttura!</legend>
						<?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>		
						<input type="hidden" name="submitted" id="submitted" value="true" />
						 <input type="file" multiple="multiple" name="upload_attachment[]">
						<input type="submit" class="button small success round" value="<?php _e('Aggiungi immagine principale', 'framework') ?>"/>
						<input type="hidden" name="set_thumb" id="set_thumb" value="1" />
					</fieldset>
				</form>

					<fieldset>
					<legend>Immagine principale</legend>
						 <?php echo get_the_post_thumbnail($current_post, 'thumbnail', $attr ); ?>
					</fieldset>
				<form action="" id="custom" method="POST" class="custom" enctype="multipart/form-data">

					<fieldset>
						<legend>Seleziona le immagini da caricare, puoi anche effettuare selezioni multiple!</legend>
						 <input type="file" multiple="multiple" name="upload_attachment[]">
						<?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>		
						<input type="hidden" name="set_thumb" id="set_thumb" value="0" />

						<input type="hidden" name="submitted" id="submitted" value="true" />
						<input type="submit" class="button small success round" value="<?php _e('Aggiungi immagini', 'framework') ?>"/>
					</fieldset>
					<fieldset>
					<legend>Immagini caricate</legend>
						<?php ThumbGallery($current_post,'thumbnail'); ?>
					</fieldset>		
				</form>
		
		
			</div><!-- #primary END -->
			</div>
			<?php get_footer(); ?>
<?php else: //current user o edit otherpost ?>
<?php wp_redirect( home_url() ); exit; 
	endif;
?>
