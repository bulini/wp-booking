<?php 
$options=load_theme_options();
global $bswp_options;
//echo 'ciaone'. bswp_option("css_style"); die();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(''); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


    <!-- Bootstrap core CSS -->
	<?php wp_head(); ?>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

</head>

<body class="<?php echo join(' ', get_body_class()); ?>">



    <nav class="navbar transparent navbar-<?php echo $options['navbar_select'];?> navbar-fixed-top" role="navigation">
		<div class="container transparent">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navcat">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="<?php bloginfo('siteurl'); ?>"><img src="<?php LogoImage(); ?>" class="img-responsive" style="max-width:200px;" /></a>
            </div>
             <div class="collapse navbar-collapse" id="navcat" style="margin-top:15px;">
				<?php 
					$args = array(
					'theme_location'  => '',
					'menu'            => 'categorie', 
					'container'       => '', 
					'container_class' => '', 
					'container_id'    => '',
					'menu_class'      => 'nav navbar-nav ', 
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => new wp_bootstrap_navwalker()
					);

					wp_nav_menu($args); 
					?>
					
					
		<ul class="nav navbar-nav navbar-right">		
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-share"></i></a>
			<ul class="dropdown-menu" style="min-width:40px;">
			<li><a href="#" title=""><i class="icon-twitter"></i></a></li>
			<li><a href="https://www.facebook.com/AppartamentiLefkadacom" title=""><i class="icon-facebook"></i></a></li>
			<li><a href="#" title=""><i class="icon-google-plus"></i></a></li>

			</ul>
		  </li>

			
		</ul>
					
            </div>
            <!-- /.navbar-collapse -->
		</div>
        <!-- /.container -->
    </nav>
 </div>