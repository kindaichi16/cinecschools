<?php get_header(); ?>

<div class="main-content-block">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 main-content">
				<div class="row main-content-top">
					<div class="col-sm-5 main-content-heading">
						<p class="main-content-heading-txt">
							<?php the_title();?>
						</p>
					</div>
					<div class="col-sm-7 breadcrumb hidden-xs">
						<p class="pull-right">
							<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
						</p>
					</div>
				</div>
				<div class="row main-content-top-pad"><!-- Begin first section holds the right content columns-->
					
					<?php if (have_posts()) :?>
					<?php while (have_posts()) : the_post();?>
					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<div class="entry-content"><!--//post-->
							<div class="article-img pull-left">
								<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  the_post_thumbnail(array('class' => 'img-responsive', 250,250));
				} 
				?>
							</div>
							<?php the_content();?>
						</div>
						<!--//.entry-content-->
						
						<div class="push"></div>
					</article>
					<?php endwhile; ?>
					<?php else : ?>
					<h2 class="center">
						<?php _e('Not Found', 'cinec_school_theme'); ?>
					</h2>
					<p class="center">
						<?php _e('Sorry, but you are looking for something that isn\'t here.', 'cinec_school_theme'); ?>
					</p>
					<?php get_search_form(); ?>
					<?php endif; ?>
					<div class="push"></div>
					
					<!--content--> 
					
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!--end news block-->
<?php get_footer(); ?>
