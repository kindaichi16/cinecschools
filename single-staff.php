<?php get_header(); ?>

<div class="main-content-block">
<div class="container">
	<div class="row">
		<?php /* left menu will only appear in the 3 below categories slug */
   if (in_category( 'events' ) || in_category( 'announcements' ) ) :?>
		<div class="col-sm-4 col-md-3 left-menu hidden-xs">
			<?php  get_template_part( 'left-side-menu' );?>
		</div>
		<!--begin main content-->
		<div class="col-sm-8 col-md-9 main-content">
			<?php else: ?>
			<!--begin main content-->
			<div class="col-sm-12 main-content">
				<?php endif; ?>
				<div class="row main-content-top">
					<div class="col-sm-5 main-content-heading">
						<p class="main-content-heading-txt"> <?php echo get_cat_name(get_category_id('Staff')) ?>
							<?php
							/*foreach (get_the_category() as $cat) {
								$parent = get_category($cat->category_parent);
								$parent_name = $parent->cat_name;
								echo $parent_name;
								
							}*/
							
							?>
						</p>
					</div>
					<div class="col-sm-7 breadcrumb hidden-xs hidden-sm">
						<p class="pull-right">
							<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
						</p>
					</div>
				</div>
				<?php if (have_posts()) :?>
				<?php while (have_posts()) : the_post();?>
				<div class="row main-content-top-pad"><!-- Begin first section holds the right content columns-->
					
					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<div class="main-content-title">
							<?php the_title();?>
							<br>
							<span class="main-content-role">
							<?php foreach((get_the_category()) as $category) {
										echo $category->cat_name . ' ';
								}?>
							</span></div>
						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-2">
								<?php cinecschools_check_thumbnail_link(270); ?>
							</div>
							<div class="col-xs-12 col-sm-9 col-md-10">
								<?php the_content();?>
							</div>
						</div>
					</article>
					
					<!--content--> 
				</div>
				<?php endwhile; //the loop?>
				<?php else : ?>
				<div class="row main-content-top-pad">
					<h2 class="center">
						<?php _e('Not Found', 'cinec_school_theme'); ?>
					</h2>
					<p class="center">
						<?php _e('Sorry, but you are looking for something that isn\'t here.', 'cinec_school_theme'); ?>
					</p>
				</div>
				<?php get_search_form(); ?>
				<?php endif;  //the loop?>
				
				<!--end main content--> 
			</div>
		</div>
	</div>
</div>
<!--end news block-->
<?php get_footer(); ?>
