<?php
/*
 *Template Name: Contact page
 */

$contact_submit_uri = get_template_directory() . '/scripts/contact-submit.php';
include_once($contact_submit_uri);
get_header(); ?>

<div class="main-content-block">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 main-content">
				<div class="row main-content-top">
					<div class="col-sm-5 main-content-heading">
						<p class="main-content-heading-txt">
							<?php the_title();?>
						</p>
					</div>
					<div class="col-sm-7 breadcrumb hidden-xs">
						<p class="pull-right">
							<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
						</p>
					</div>
				</div>
				<div class="row main-content-top-pad"> 
					<!-- Begin first section holds the right content columns-->
					
					<?php if (have_posts()) :?>
					<?php while (have_posts()) : the_post();?>
					<?php /*?><article <?php post_class(); ?> id="post-<?php the_ID(); ?>"><?php */?>
					<article>
						<div class="post-address"><!--//post-->
							
							<div id="address-table">
								<div class="address-row">
									<div class="address-cat-name">
										<?php _e('Address:', 'cinec_school_theme'); ?>
										&nbsp;&nbsp; </div>
									<?php if(qtranxf_getLanguage() == "zh") :?>
									<div id="address_c"><?php echo get_theme_mod( 'edu_footer_text_c' ); ?></div>
									<?php endif ;
         				if(qtranxf_getLanguage() == "en") : ?>
									<div id="address_e"><?php echo get_theme_mod( 'edu_footer_text' ); ?></div>
									<?php endif;?>
								</div>
								<?php if(get_theme_mod( 'display_phone_fields', true )) :?>
								<div class="address-row">
									<div class="address-cat-name">
										<?php _e('Tel:', 'cinec_school_theme'); ?>
									</div>
									<div id="address_tel"><?php echo get_theme_mod( 'edu_footer_tel' ); ?></div>
								</div>
								<?php endif;?>
								<?php if(get_theme_mod( 'display_fax_fields', true )) :?>
								<div class="address-row">
									<div class="address-cat-name">
										<?php _e('Fax:', 'cinec_school_theme'); ?>
									</div>
									<div id="address_fax"><?php echo get_theme_mod( 'edu_footer_fax' ); ?></div>
								</div>
								<?php endif;?>
								<?php if(get_theme_mod( 'display_email_fields', true )) :?>
								<div class="address-row">
									<div class="address-cat-name">
										<?php _e('Email:', 'cinec_school_theme'); ?>
									</div>
									<div id="address_email"><?php echo get_theme_mod( 'edu_footer_email' ); ?></div>
								</div>
								<div class="address-row">
									<div class="address-cat-name"></div>
									<?php echo get_theme_mod( 'edu_footer_email2' ); ?></div>
								<?php endif;?>
								<?php if(get_theme_mod( 'display_contact_person_fields', true )) :?>
								<div class="address-row">
									<div class="address-cat-name">
										<?php _e('Contact person:', 'cinec_school_theme'); ?>
									</div>
									<?php if(qtranxf_getLanguage() == "zh") :?>
									<div id="address_tel"><?php echo get_theme_mod( 'edu_footer_contact_person_c' ); ?></div>
									<?php endif ;
         								if(qtranxf_getLanguage() == "en") : ?>
									<div id="address_tel"><?php echo get_theme_mod( 'edu_footer_contact_person' ); ?></div>
									<?php endif;?>
								</div>
								<?php endif;?>
							</div>
						</div>
						<?php the_content();?>
						<?php /*?><div id="inquiry-form col-xs-12">
							<div id="respond"> <?php echo $response; ?>
								<form action="<?php echo the_permalink();  ?>" method="post"  class="form-horizontal">
									<div class="form-group">
										<label for="name" class="col-sm-2 control-label">Name: <span>*</span></label>
										<div class="col-sm-10">
											<input type="text" name="message_name"  class="form-control" value="<?php echo esc_attr($_POST['message_name']); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="message_email" class="col-sm-2 control-label">Email: <span>*</span> </label>
										<div class="col-sm-10">
											<input type="email" name="message_email"  class="form-control" value="<?php echo esc_attr($_POST['message_email']); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="message_phone" class="col-sm-2 control-label">Phone Number: <span>*</span></label>
										<div class="col-sm-10">
											<input type="text" name="message_phone" class="form-control" value="<?php echo esc_attr($_POST['message_phone']); ?>">
											<p class="antispam">Leave this empty: <input type="text" name="url" /></p>
										</div>
									</div>
									<div class="form-group">
										<label for="message_text" class="col-sm-2 control-label">Message: <span>*</span></label>
										<div class="col-sm-10">
											<textarea type="text" name="message_text" class="form-control" rows="3"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="message_human" class="col-sm-2 control-label">Human Verification: <span>*</span> </label>
										<div class="col-sm-10">
											<input type="text" style="width: 60px;" name="message_human">
											+ 3 = 5 </div>
									</div>
									<div class="form-group">
										<input type="hidden" name="submitted" value="1">
										<div class="col-sm-10 col-sm-offset-2">
											<button type="submit" class="btn btn-default">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div><?php */?>
						<div class="push"></div>
					</article>
					<?php endwhile; ?>
					<?php else : ?>
					<h2 class="center">
						<?php _e('Not Found', 'cinec_school_theme'); ?>
					</h2>
					<p class="center">
						<?php _e('Sorry, but you are looking for something that isn\'t here.', 'cinec_school_theme'); ?>
					</p>
					<?php get_search_form(); ?>
					<?php endif; ?>
					<div class="push"></div>
					<!--content--> 
					
				</div>
			</div>
		</div>
	</div>
</div>
<!--end news block-->
<?php get_footer(); ?>
