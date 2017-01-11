<?php get_header(); ?>

<div class="main-content-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 col-md-3 left-menu hidden-xs">
        <?php get_template_part( 'left-side-menu' ); ?>
      </div>
      <div class="col-sm-8 col-md-9 main-content">
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
            <?php 
			$args = array ( 'category' => ID, 'posts_per_page' => 8);
			$myposts = get_posts( $args );
			foreach( $myposts as $post ) :	setup_postdata($post);
			 ?>
            <?php get_template_part( 'loop-article-content-list' ); ?>
            <?php endforeach; ?>
            <?php /*?><?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?><?php */?>
            <?php previous_posts_link('Newer Entries &raquo;', 0) ?>
            <?php next_posts_link('&laquo; Older Entries', 0); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--end news block-->
<?php get_footer(); ?>
