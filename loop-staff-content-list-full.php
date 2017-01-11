<div class="category-content-list">
	<div class="row mobile-content-padding">
		<div class="col-sm-3 col-md-2 hidden-xs"><?php /*?><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php */?>
			<?php cinecschools_check_thumbnail(170); ?>
			<?php /*?></a><?php */?></div>
		<div class="col-xs-12 visible-xs margin-l-10"><?php /*?><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php */?>
			<p class="category-thumb">
				<?php cinecschools_check_thumbnail(270); ?>
			</p>
			<?php /*?></a><?php */?></div>
		<div class="col-xs-12 col-sm-9 col-md-10 category-content-list-text margin-l-10">
			<p class="title"><?php /*?><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php */?>
				<?php the_title();?>
				<?php /*?></a><?php */?><br>
				<span class="role">
				<?php
					$staff_category_ID = get_category_id('Staff');
					foreach((get_the_category()) as $childcat) {
						if (cat_is_ancestor_of($staff_category_ID, $childcat)) {
							//echo '<a href="'.get_category_link($childcat->cat_ID).'">';
							echo $childcat->cat_name . '<br><!--</a>-->';
						}
					} ?>
				</span> </p>
			<p>
				<?php the_content(); ?>
			</p>
		</div>
	</div>
</div>
