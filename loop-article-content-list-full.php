<div class="category-content-list">
	<div class="row mobile-content-padding">
		<div class="col-sm-3 hidden-xs"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php cinecschools_check_thumbnail(170); ?>
			</a></div>
		<div class="col-xs-12 visible-xs margin-l-10"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<p class="category-thumb">
				<?php cinecschools_check_thumbnail(270); ?>
			</p>
			</a></div>
		<div class="col-xs-12 col-sm-9 category-content-list-text margin-l-10">
			<p class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
				<?php the_title();?>
				</a><br>
				<span class="role">
				<?php
					$staff_category_ID = get_category_id('Staff');
					foreach((get_the_category()) as $childcat) {
						if (cat_is_ancestor_of($staff_category_ID, $childcat)) {
							echo '<a href="'.get_category_link($childcat->cat_ID).'">';
							echo $childcat->cat_name . '</a> ';
						}
					} ?>
				</span> </p>
			<p>
				<?php the_content(); ?>
			</p>
		</div>
	</div>
</div>
