<div class="left-menu-heading">
  <?php
		foreach (get_the_category() as $cat) {
			$parent = get_category($cat->category_parent);
			$parent_name = $parent->cat_name;
			echo $parent_name;
		}
		?>
</div>
<div class="left-menu-block"><!--left menu-->
  <div class="left-menu">
    <?php 
		wp_nav_menu( array(
		'menu'              => 'left-side-menu',
		'theme_location'    => 'left-side-menu',
		'depth'             => 2,
		'container'         => false,                
		'menu_class'        => 'nav nav-pills nav-stacked',
		'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		'walker'            => new wp_bootstrap_navwalker())); ?>
  </div>
</div>
