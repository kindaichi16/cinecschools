<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="footer-top">
					<?php wp_nav_menu( array(
                'menu'              => 'footer-menu',
                'theme_location'    => 'footer-menu',
                'depth'             => 2,
                'container'         => false
			   )
            ); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-8 col-sm-12">
				<address>
				<div class="address-row">
					<?php _e('Address:', 'cinec_school_theme'); ?>
					&nbsp;&nbsp;
					<?php if(qtranxf_getLanguage() == "zh") :?>
					<div id="address_c"><?php echo get_theme_mod( 'edu_footer_text_c' ); ?></div>
					<?php endif ;
         				if(qtranxf_getLanguage() == "en") : ?>
					<div id="address_e"><?php echo get_theme_mod( 'edu_footer_text' ); ?></div>
					<?php endif;?>
				</div>
				<?php if(get_theme_mod( 'display_phone_fields', true )) :?>
				<div class="address-row">
					<?php _e('Tel:', 'cinec_school_theme'); ?>
					<div id="address_tel"><?php echo get_theme_mod( 'edu_footer_tel' ); ?></div>
				</div>
				<?php endif;?>
				<?php if(get_theme_mod( 'display_fax_fields', true )) :?>
				<div class="address-row">
					<?php _e('Fax:', 'cinec_school_theme'); ?>
					<div id="address_fax"><?php echo get_theme_mod( 'edu_footer_fax' ); ?></div>
				</div>
				<?php endif;?>
				<?php /*?><?php if ( is_active_sidebar( 'footer-address-widget-area' ) ) : ?>
    <?php dynamic_sidebar( 'footer-address-widget-area' ); ?>
    <?php endif; ?><?php */?>
				</address>
			</div>
			<div class="col-xs-4 visible-xs">
				<div class="cinec-logo-btm pull-right"><a href="http://www.cinec.ca" target="_blank"><img src="<?php echo bloginfo('template_url') ?>/images/<?php _e('logo-cinec', 'cinec_school_theme'); ?>.png" class="img-responsive"></a></div>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<p>
				<?php 
			//if(isMobile()){ $copyright_br = '<br>';} else { $copyright_br = ' ';}
			
				if(qtranxf_getLanguage() == "zh") :
        	echo bloginfo('name').' 版权所有'.$copyright_br.'&copy; '.date('Y');
        endif ;
        if(qtranxf_getLanguage() == "en") : 
          echo ' &copy; '.date('Y').' '.bloginfo('name').'  All rights reserved.';
        endif;?>
			</p>
		</div>
	</div>
</footer>
<?php wp_footer();?>
</body></html>