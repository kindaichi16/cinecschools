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
						<?php the_category(); ?>
						<!--<p class="main-content-heading-txt"></p>--> 
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
						<div class="main-content-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<?php the_title();?>
							</a><br>
							<span class="main-content-date">
							<?php the_time(get_option('date_format')); ?>
							</span></div>
						<div class="article-img pull-left">
							<?php 
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
									$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
									echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';
									if(isMobile()){
											// Do something for only mobile users
											the_post_thumbnail(array('class' => 'img-responsive', 'large'));
									}
									else {
											// Do something for only desktop users
											the_post_thumbnail(array('class' => 'img-responsive', 250,250));
									}
									echo '</a>';
								} 
								?>
						</div>
						<?php the_content();?>
						<?php $attachments = new Attachments( 'attachments' ); /* pass the instance name */ ?>
							<?php if( $attachments->exist() ) : ?>
								<h3>Attachments</h3>
								<ul>
									<?php while( $attachment = $attachments->get() ) : ?>
										<li>
											<pre><?php print_r( $attachment ); ?></pre>
										</li>
									<?php endwhile; ?>
								</ul>
							<?php endif; ?>
					</article>
					
					<!--content--> 
				</div>
				<div class="row">
					<div class="article-content-box top-border">
						<?php 
							$prev_pretext = __('Previous Post: ', 'cinec_school_theme');
							$next_pretext = __('Next Post: ', 'cinec_school_theme'); 
							$prev_post = get_previous_post(TRUE); //begin previous post link loop
					if (!empty( $prev_post )): ?>
						<div class="article-content-list">
							<div class="row mobile-content-padding">
								<div class="col-xs-2"> <a href="<?php echo get_permalink( $prev_post->ID ); ?>">
									<?php if ('' != get_the_post_thumbnail($prev_post->ID)){
					echo get_the_post_thumbnail($prev_post->ID, 'thumbnail', array( 70,70,'class' => 'img-responsive thumb-news')); ?>
									</a>
									<?php } else{ 
                	echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.png" class="img-responsive thumb-news" width="70" height="70" />';
                 }  ?>
								</div>
								<div class="col-xs-10 article-content-list-text margin-l-10">
									<p>
										<?php previous_post_link('%link', $prev_pretext.'%title', TRUE); ?>
										<br>
										<span class="news-date"> <?php echo mysql2date(the_time(get_option('date_format')), $prev_post->post_date, false) ?> </span></p>
								</div>
							</div>
						</div>
						<?php endif; //end previous post link loop?>
						<?php $next_post = get_next_post(TRUE); //begin next post link loop
					if (!empty( $next_post )): ?>
						<div class="article-content-list">
							<div class="row mobile-content-padding">
								<div class="col-xs-2"> <a href="<?php echo get_permalink( $next_post->ID ); ?>">
									<?php if ('' != get_the_post_thumbnail($next_post->ID)){
					echo get_the_post_thumbnail($next_post->ID, 'thumbnail', array( 70,70,'class' => 'img-responsive thumb-news')); ?>
									</a>
									<?php } else{ 
                	echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.png" class="img-responsive thumb-news" width="70" height="70" />';
                 }  ?>
								</div>
								<div class="col-xs-10 article-content-list-text margin-l-10">
									<p>
										<?php next_post_link('%link', $next_pretext.'%title', TRUE); ?>
										<br>
										<span class="news-date"> <?php echo mysql2date(the_time(get_option('date_format')), $next_post->post_date, false) ?> </span></p>
								</div>
							</div>
						</div>
						<?php endif; //end next post link loop?>
					</div>
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
