<?php get_header(); ?>

<div class="main-content-block">
  <div class="container">
    <div class="row">
      <?php /* left menu will only appear in the 3 below categories slug */
   if (in_category( 'news' ) || in_category( 'events' ) || in_category( 'announcements' ) ) :?>
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
          <div class="article-content-box main-content-top-pad">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part( 'loop-article-content-list' ); ?>
            <?php  endwhile; endif; ?>
            <?php // ?>
            <p class="pagination-centered">
<?php /*?>            <?php previous_posts_link(); ?>
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
				?></p>
          </div>
          <!--end content box--> 
          
        </div>
      </div>
    </div>
  </div>
</div>
<!--end news block-->
<?php get_footer(); ?>
