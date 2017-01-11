
<form class="navbar-form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div class="form-group">
		<label class="sr-only" for="s">
			<?php _e('Search for:', 'cinec_school_theme'); ?>
		</label>
		<input type="text" class="form-control form-navsearch" placeholder="<?php _e('Search', 'cinec_school_theme'); ?>" name="s" id="s">
	</div>
	<button type="submit" id="searchsubmit" class="btn btn-default btn-nav-search"><span class="glyphicon glyphicon-search"></span></button>
</form>
<?php /*?> <!--default for wordpress-->  <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form><?php */?>
