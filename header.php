<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<title><?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<!--[if lt IE 9]>
<link href="<?php echo bloginfo('template_url') ?>/css/bootstrap.min.css" rel="stylesheet">
<![endif]-->
<link media="all" rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js" type="text/javascript"></script>
	<script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>    
<![endif]-->
<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}


?>
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
<header class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="nav-language pull-right">
					<?php /*echo qtranxf_generateLanguageSelectCode('text');*/ ?>
					<?php if ( is_active_sidebar( 'header-language-widget-area' ) ) : ?>
					<?php dynamic_sidebar( 'header-language-widget-area' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-9 col-md-10 hidden-xs">
				<div class="row">
					<div class="col-sm-2 nav-school-logo"><img class="img-responsive img-logo" src="<?php echo bloginfo('template_url') ?>/images/logo.png"></div>
					<div class="col-sm-10 nav-school-name"> <a href="<?php echo bloginfo('url') ?>"><span class="nav-school-name-e">
						<?php bloginfo('name'); ?>
						</span><br>
						<span class="nav-school-name-c">
						<?php bloginfo('description'); ?>
						</span></a></div>
				</div>
			</div>
			<div class="col-sm-3 col-md-2 pull-right hidden-xs">
				<div class="cinec-logo pull-right"> <img src="<?php echo bloginfo('template_url') ?>/images/<?php _e('logo-cinec', 'cinec_school_theme'); ?>.png" class="img-responsive"> </div>
			</div>
		</div>
	</div>
</header>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<div class="col-xs-10 visible-xs nav-school-name"> <a href="<?php echo bloginfo('url') ?>"><span class="nav-school-name-e">
				<?php bloginfo('name'); ?>
				</span><br>
				<span class="nav-school-name-c">
				<?php bloginfo('description'); ?>
				</span></a></div>
			<div class="col-xs-2 visible-xs">
				<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand sr-only" href="<?php echo bloginfo('url') ?>">
				<?php bloginfo('name'); ?>
				<br>
				<?php bloginfo('description'); ?>
				</a> </div>
		</div>
		<div class="navbar-collapse collapse navbar-border">
			<?php wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => false,                
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            ); ?>
			<div class="navbar-right hidden-xs hidden-sm">
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>
</nav>
<!--end nav-->