<?php
get_header(); ?>

<div class="main-content-block">
	<div class="container">
		<div class="row"> 
			
			<!--begin main content-->
			<div class="col-sm-12 main-content">
				<div class="row main-content-top">
					<div class="col-sm-5 main-content-heading">
						<p class="main-content-heading-txt">
							<?php single_cat_title(); ?>
						</p>
					</div>
					<div class="col-sm-7 breadcrumb hidden-xs hidden-sm">
						<p class="pull-right">
							<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
						</p>
					</div>
				</div>
				<div class="row">
					<div class="category-content-box">
						<?php //$catid = get_query_var('cat'); ?>
						<?php //$cats = get_categories('order=desc&title_li=&child_of='.$catid.'&orderby=name'); 
						// WP_Query arguments
						$staff_args = array (
							'order'               => 'ASC',
							'category_name'       => 'staff',
							'pagination'          => true,
							'paged'               => get_query_var('paged'),
							//'nopaging' => true,
							//'orderby'             => 'name',
						);
						
						// The Query
						$staff_query = new WP_Query( $staff_args );
						
						if ($staff_query->have_posts()) : while ($staff_query->have_posts()) : $staff_query->the_post(); 
						get_template_part( 'loop-staff-content-list-full' );
						endwhile; endif; ?>
						<?php // ?>
						<p class="pagination-centered">
							<?php /*?><?php previous_posts_link(); ?>
            <?php next_posts_link(); ?><?php */?>
							<?php
							global $wp_query;
							
							$big = 999999999; // need an unlikely integer
							
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages,
								//'type' => 'list'
							) );
							?>
						</p>
					</div>
					<!--end content box--> 
					
				</div>
			</div>
		</div>
	</div>
</div>
<!--end news block-->
<?php get_footer(); ?>
