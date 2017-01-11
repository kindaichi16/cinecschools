<?php
/*
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

<div class="main-content-block">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 main-content">
				<div class="row main-content-top">
					<div class="col-sm-5 main-content-heading">
						<p class="main-content-heading-txt">
							<?php wp_title('');?>
						</p>
					</div>
					<div class="col-sm-7 breadcrumb hidden-xs">
						<p class="pull-right">
							<?php /*the_breadcrumb();  if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); */?>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="article-content-box main-content-top-pad">
						<p class="center">
							<?php _e('Sorry, but you are looking for something that does not exists.', 'cinec_school_theme'); ?>
						</p>
						<?php include (TEMPLATEPATH . '/list-news-events.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end news block-->

<?php get_footer(); ?>
