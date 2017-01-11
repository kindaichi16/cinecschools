<?php get_search_form(); ?>
<p>&nbsp;</p>
<h3>
	<?php _e('Latest News & Events:', 'cinec_school_theme'); ?>
</h3>
<?php $query = new WP_Query( array ( 'post_type' => 'post', 'post_count' => '5', 'category_name' => 'news-events') );
while ( $query->have_posts() ) : $query->the_post(); 
	get_template_part( 'loop-article-content-list' ); 
endwhile; ?>
