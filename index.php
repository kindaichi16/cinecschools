<?php
/*
 *Template Name: Home page
 */
 get_header(); ?>

<div class="banner">
	<div class="container">
		<?php /*?><img src="<?php echo bloginfo('template_url') ?>/images/banner01.png" class="img-responsive"><?php */?>
		<?php /*do_action('insert_bootstrapslider');*/?>
		<?php echo do_shortcode('[image-carousel]'); ?></div>
</div>
<!--end mid banner-->
<div class="index-content-block">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="index-content-category">
					<?php
							// Get the ID of a given category
							$category_e_id = get_cat_ID( 'Events' );
					
							// Get the URL of this category
							$category_e_link = get_category_link( $category_e_id );
					?>
					
					<!-- Print a link to this category --> 
					<a href="<?php echo esc_url( $category_e_link ); ?>" title="<?php _e('EVENT', 'cinec_school_theme'); ?>">
					<?php _e('EVENT', 'cinec_school_theme'); ?>
					<span class="pull-right glyphicon glyphicon-play"></span></a> </div>
				<div class="index-content-box">
					<?php $args = array(
						'posts_per_page'   => 1,
						'offset'           => 0,
						/*'category'         => 3,*/
						'category_name' => 'Events',
						'orderby'          => 'post_date',
						 ); 
						$posts_array = get_posts( $args ); 
						foreach ( $posts_array as $post ) :
						setup_postdata( $post ); ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
					<?php 
				if(has_post_thumbnail()) {                    
					$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
					 echo '<img src="' . $image_src[0]  . '" width="100%"  />';
				} 
				?>
					</a>
					<?php endforeach; 
						wp_reset_postdata(); ?>
				</div>
				<div class="index-content-category">
					<?php
							// Get the ID of a given category
							$category_nl_id = get_cat_ID( 'Newsletter' );
					
							// Get the URL of this category
							$category_nl_link = get_category_link( $category_nl_id );
					?>
					
					<!-- Print a link to this category --> 
					
					<?php if ( get_theme_mod( 'edu_newsletter_from_cinec' ) === 'cinecca' ) { ?>
					<a href="http://www.cinec.ca/newsletter.php" target="_blank" title="<?php _e('NEWSLETTER', 'cinec_school_theme'); ?>">
					<?php } else { ?>
					<a href="<?php echo esc_url( $category_nl_link ); ?>" title="<?php _e('NEWSLETTER', 'cinec_school_theme'); ?>">
					<?php } ?>
					<?php _e('NEWSLETTER', 'cinec_school_theme'); ?>
					<span class="pull-right glyphicon glyphicon-play"></span></a> </div>
				<div class="index-content-box">
					<?php $args = array(
						'posts_per_page'   => 1,
						'offset'           => 0,
						/* 'category'         => 9,*/
						'category_name' => 'Newsletter',
						'orderby'          => 'post_date',
						 ); 
						$posts_array = get_posts( $args ); 
						foreach ( $posts_array as $post ) :
						setup_postdata( $post ); ?>
					
					
					<a href="http://www.cinec.ca/newsletter.php" target="_blank">
					<?php echo $current_cnl_thumbnail;?>dfgdf
					</a>
					
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
					<?php 
				if(has_post_thumbnail()) {                    
					$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
					 echo '<img src="' . $image_src[0]  . '" width="100%" class="img-responsive thumb-newsletter center-block"  />';
				} 
				?>
					</a>
					<?php endforeach; 
						wp_reset_postdata(); ?>
				</div>
			</div>
			<!--end column 1-->
			<div class="col-sm-4">
				<div class="index-content-category">
					<?php
							// Get the ID of a given category
							$category_n_id = get_cat_ID( 'News' );
					
							// Get the URL of this category
							$category_n_link = get_category_link( $category_n_id );
					?>
					
					<!-- Print a link to this category --> 
					<a href="<?php echo esc_url( $category_n_link ); ?>" title="<?php _e('LATEST NEWS', 'cinec_school_theme'); ?>">
					<?php _e('LATEST NEWS', 'cinec_school_theme'); ?>
					<span class="pull-right glyphicon glyphicon-play"></span></a> </div>
				<div class="index-content-box">
					<?php $args = array(
						'posts_per_page'   => 5,
						'offset'           => 0,
						/*'category'         => 2,*/
						'category_name' => 'News',
						'orderby'          => 'post_date',
						 ); 
						$posts_array = get_posts( $args ); 
						foreach ( $posts_array as $post ) :
						setup_postdata( $post ); ?>
					<div class="index-content-list">
						<div class="row">
							<div class="col-xs-2 col-sm-4"> <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
								<?php cinecschools_check_thumbnail(70); ?>
								</a> </div>
							<div class="col-xs-10 col-sm-8 index-content-list-text margin-l-10">
								<p>
									<?php /*?><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                  <?php the_title();?></a><?php */?>
									<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php if (strlen($post->post_title) > 50) {
                    echo substr(the_title($before = '', $after = '', FALSE), 0, 50) . '...'; } else {
                    the_title();
                    } ?>
									</a> <br>
									<span class="news-date">
									<?php the_time(get_option('date_format')); ?>
									</span></p>
							</div>
						</div>
					</div>
					<?php endforeach; 
						wp_reset_postdata(); ?>
				</div>
			</div>
			<!--end column 2-->
			<div class="col-sm-4">
				<div class="index-content-category">
					<?php
							// Get the ID of a given category
							$category_a_id = get_cat_ID( 'Announcements' );
					
							// Get the URL of this category
							$category_a_link = get_category_link( $category_a_id );
					?>
					
					<!-- Print a link to this category --> 
					<a href="<?php echo esc_url( $category_a_link ); ?>" title="<?php _e('ANNOUNCEMENTS', 'cinec_school_theme'); ?>">
					<?php _e('ANNOUNCEMENTS', 'cinec_school_theme'); ?>
					<span class="pull-right glyphicon glyphicon-play"></span></a> </div>
				<div class="index-content-box">
					<?php $args = array(
						'posts_per_page'   => 3,
						'offset'           => 0,
						/*'category'         => 4,//category id*/
						'category_name' => 'Announcements',
						'orderby'          => 'post_date',
						 ); 
						$posts_array = get_posts( $args ); 
						foreach ( $posts_array as $post ) :
						setup_postdata( $post ); ?>
					<div class="index-content-list">
						<div class="row">
							<div class="col-xs-12 index-content-list-text-right">
								<p class="mobile-content-padding"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php if (strlen($post->post_title) > 70) {
                    echo substr(the_title($before = '', $after = '', FALSE), 0, 70) . '...'; } else {
                    the_title();
                    } ?>
									</a><br>
									<span class="news-date">
									<?php the_time(get_option('date_format')); ?>
									</span></p>
							</div>
						</div>
					</div>
					<?php endforeach; 
						wp_reset_postdata(); ?>
				</div>
				<div class="index-content-category">
					<?php
							// Get the ID of a given category
							$category_t_id = get_cat_ID( 'Testimonials' );
					
							// Get the URL of this category
							$category_t_link = get_category_link( $category_t_id );
					?>
					
					<!-- Print a link to this category --> 
					<a href="<?php echo esc_url( $category_t_link ); ?>" title="<?php _e('TESTIMONIALS', 'cinec_school_theme'); ?>">
					<?php _e('TESTIMONIALS', 'cinec_school_theme'); ?>
					<span class="pull-right glyphicon glyphicon-play"></span></a> </div>
				<div class="index-content-box">
					<?php $args = array(
						'posts_per_page'   => 3,
						'offset'           => 0,
						/*'category'         => 8,*/
						'category_name' => 'Testimonials',
						'orderby'          => 'post_date',
						 ); 
						$posts_array = get_posts( $args ); 
						foreach ( $posts_array as $post ) :
						setup_postdata( $post ); ?>
					<div class="index-content-list">
						<div class="row">
							<div class="col-xs-12 index-content-list-text-right">
								<p class="mobile-content-padding"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<?php if (strlen($post->post_title) > 70) {
                    echo substr(the_title($before = '', $after = '', FALSE), 0, 70) . '...'; } else {
                    the_title();
                    } ?>
									</a><br>
									<span class="news-date">
									<?php the_time(get_option('date_format')); ?>
									</span></p>
							</div>
						</div>
					</div>
					<?php endforeach; 
							wp_reset_postdata(); ?>
				</div>
			</div>
			<!--end column 3--> 
		</div>
	</div>
</div>

<!--end index block-->
<?php get_footer(); ?>
