<?php get_header(); ?>

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
							<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="article-content-box main-content-top-pad">
						<?php if (have_posts()) :?>
						<?php while (have_posts()) : the_post();?>
						<?php get_template_part( 'loop-article-content-list' ); ?>
						<?php endwhile; ?>
						<p class="pagination-centered">
							<?php previous_posts_link(); ?>
							<?php next_posts_link(); ?>
						</p>
						<?php else : ?>
						<h2 class="center">
							<?php _e('Not Found', 'cinec_school_theme'); ?>
						</h2>
						<p class="center">
							<?php _e('Sorry, but you are looking for something that isn\'t here.', 'cinec_school_theme'); ?>
						</p>
						<?php include (TEMPLATEPATH . '/list-news-events.php'); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end news block-->
<?php get_footer(); ?>
