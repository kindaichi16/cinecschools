<?php 

function edu_customizer_sections( $wp_customize ) {
	$wp_customize->add_section( 'edu_footer', array(
		'title' => 'School Info',
		'priority' => 105,
		'capability' => 'edit_pages',
	) );
	//Address
	$wp_customize->add_setting( 'edu_footer_text', array(
		'default' => '365 Hongyin Rd, <br>Xiuzhou, Jiaxing, Zhejiang <br>China',
		'sanitize_callback' => 'edu_sanitize_footer_text',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( 'edu_footer_text', array(
		'label' => 'School Address (English)',
		'section' => 'edu_footer',
		'type' => 'text',
	) );
	$wp_customize->add_setting( 'edu_footer_text_c', array(
		'default' => '浙江嘉兴洪殷路365号',
		'sanitize_callback' => 'edu_sanitize_footer_text',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( 'edu_footer_text_c', array(
		'label' => 'School Address (Chinese)',
		'section' => 'edu_footer',
		'type' => 'text',
	) );
	//Phone
	$wp_customize->add_setting( 'display_phone_fields', array(
			'default'           => true,
			'sanitize_callback' => 'edu_sanitize_checkbox'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'display_phone_fields', array(
		'label'       => esc_html__( 'Display Phone Numbers on Site', 'cinec_school_theme' ),
		'description' => esc_html__( 'Check this on to display phone number on contact page and footer.', 'cinec_school_theme' ),
		'section'     => 'edu_footer',
		'settings'    => 'display_phone_fields',
		'type'        => 'checkbox',
	) ) );

	$wp_customize->add_setting( 'edu_footer_tel', array(
		'default' => '86-0000000000',
		'sanitize_callback' => 'edu_sanitize_footer_text',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( 'edu_footer_tel', array(
		'label' => 'Phone Number',
		'section' => 'edu_footer',
		'type' => 'text',
	) );
	//Fax
	$wp_customize->add_setting( 'display_fax_fields', array(
			'default'           => true,
			'sanitize_callback' => 'edu_sanitize_checkbox'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'display_fax_fields', array(
		'label'       => esc_html__( 'Display Fax Numbers on Site', 'cinec_school_theme' ),
		'description' => esc_html__( 'Check this on to display fax number on contact page and footer.', 'cinec_school_theme' ),
		'section'     => 'edu_footer',
		'settings'    => 'display_fax_fields',
		'type'        => 'checkbox',
	) ) );
	
	$wp_customize->add_setting( 'edu_footer_fax', array(
		'default' => '86-0000000000',
		'sanitize_callback' => 'edu_sanitize_footer_text',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( 'edu_footer_fax', array(
		'label' => 'Fax Number',
		'section' => 'edu_footer',
		'type' => 'text',
	) );
	//Email Address
	$wp_customize->add_setting( 'display_email_fields', array(
			'default'           => true,
			'sanitize_callback' => 'edu_sanitize_checkbox'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'display_email_fields', array(
		'label'       => esc_html__( 'Display Email Address on Site', 'cinec_school_theme' ),
		'description' => esc_html__( 'Check this on to display email address on contact page and footer.', 'cinec_school_theme' ),
		'section'     => 'edu_footer',
		'settings'    => 'display_email_fields',
		'type'        => 'checkbox',
	) ) );
	$wp_customize->add_setting( 'edu_footer_email', array(
		'default' => 'support@cinec.ca',
		'sanitize_callback' => 'edu_sanitize_footer_text',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( 'edu_footer_email', array(
		'label' => 'Email',
		'section' => 'edu_footer',
		'type' => 'text',
	) );
	$wp_customize->add_setting( 'edu_footer_email2', array(
		'default' => 'support@cinec.ca',
		'sanitize_callback' => 'edu_sanitize_footer_text',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( 'edu_footer_email2', array(
		'label' => 'Email 2',
		'section' => 'edu_footer',
		'type' => 'text',
	) );
	//Contact Person
	$wp_customize->add_setting( 'display_contact_person_fields', array(
			'default'           => true,
			'sanitize_callback' => 'edu_sanitize_checkbox'
	) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'display_contact_person_fields', array(
		'label'       => esc_html__( 'Display Contact Person on Site', 'cinec_school_theme' ),
		'description' => esc_html__( 'Check this on to display contact person on contact page and footer.', 'cinec_school_theme' ),
		'section'     => 'edu_footer',
		'settings'    => 'display_contact_person_fields',
		'type'        => 'checkbox',
		'priority'    => 10
	) ) );
	$wp_customize->add_setting( 'edu_footer_contact_person', array(
		'default' => '',
		'sanitize_callback' => 'edu_sanitize_footer_text',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( 'edu_footer_contact_person', array(
		'label' => 'Contact Person (English)',
		'section' => 'edu_footer',
		'type' => 'text',
	) );
	$wp_customize->add_setting( 'edu_footer_contact_person_c', array(
		'default' => '',
		'sanitize_callback' => 'edu_sanitize_footer_text',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( 'edu_footer_contact_person_c', array(
		'label' => 'Contact Person (Chinese)',
		'section' => 'edu_footer',
		'type' => 'text',
	) );
	//get newsletter src
	$wp_customize->add_section( 'edu_newsletter', array(
		'title' => 'Newsletter Source',
		'priority' => 125,
		'capability' => 'edit_pages',
	) );
	$wp_customize->add_setting( 'edu_newsletter_from_cinec', array(
		'default' => 'cinecca',
	) );
	//below for checkbox
	/*$wp_customize->add_control( 'edu_newsletter_from_cinec', array(
		'label' => 'Retrieve Newsletter from CINEC website',
		'section' => 'edu_newsletter',
		'type' => 'checkbox',
	) );*/
	$wp_customize->add_control( 'edu_newsletter_from_cinec', array(
		'label' => 'Newsletter Source',
		'section' => 'edu_newsletter',
		'type' => 'radio',
		'choices' => array(
							'cinecca' => 'Retrieve Newsletter from CINEC.ca',
							'own' => 'Post Newsletter manually every time',),
	) );
	
	
	$wp_customize->add_section( 'textcolors' , array(
    'title' =>  'Color Scheme',
	) );
	
		// main color ( site title, h1, h2, h4. h6, widget headings, nav links, footer headings )
	$txtcolors[] = array(
			'slug'=>'color_scheme_1', 
			'default' => '#015198',
			'label' => 'Main Color'
	);
	 
	// secondary color ( site description, sidebar headings, h3, h5, nav links on hover )
	$txtcolors[] = array(
			'slug'=>'color_scheme_2', 
			'default' => '#f09b4a',
			'label' => 'Secondary Color'
	);
	
	// news menu color ( site description, sidebar headings, h3, h5, nav links on hover )
	$txtcolors[] = array(
			'slug'=>'color_scheme_3', 
			'default' => '#f09b4a',
			'label' => 'News Menu Color'
	);
	 
	// link color
	/*$txtcolors[] = array(
			'slug'=>'link_color', 
			'default' => '#008AB7',
			'label' => 'Link Color'
	);*/
	 
	// link color ( hover, active )
	/*$txtcolors[] = array(
			'slug'=>'hover_link_color', 
			'default' => '#9e4059',
			'label' => 'Link Color (on hover)'
	);*/
	
	// add the settings and controls for each color
foreach( $txtcolors as $txtcolor ) {
 
    // SETTINGS
    $wp_customize->add_setting(
        $txtcolor['slug'], array(
            'default' => $txtcolor['default'],
            'type' => 'option', 
            'capability' =>  'edit_theme_options'
        )
    );
     
}

// CONTROLS
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        $txtcolor['slug'], 
        array('label' => $txtcolor['label'], 
        'section' => 'textcolors',
        'settings' => $txtcolor['slug'])
    )
);

// add the settings and controls for each color
foreach( $txtcolors as $txtcolor ) {
 
    // SETTINGS
    $wp_customize->add_setting(
        $txtcolor['slug'], array(
            'default' => $txtcolor['default'],
            'type' => 'option', 
            'capability' => 'edit_theme_options'
        )
    );
    // CONTROLS
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            $txtcolor['slug'], 
            array('label' => $txtcolor['label'], 
            'section' => 'textcolors',
            'settings' => $txtcolor['slug'])
        )
    );
}
	

} //end register function
add_action( 'customize_register', 'edu_customizer_sections' );

function cinecschools_customize_colors() {
 /**********************
text colors
**********************/
// main color
$color_scheme_1 = get_option( 'color_scheme_1' );
 
// secondary color
$color_scheme_2 = get_option( 'color_scheme_2' );

// secondary color
$color_scheme_3 = get_option( 'color_scheme_3' );
 
// link color
//$link_color = get_option( 'link_color' );
 
// hover or active link color
//$hover_link_color = get_option( 'hover_link_color' );

/****************************************
styling
****************************************/
?>
<style>
 
 
/* color scheme */
 
/* main color */
.navbar, .top-header, .banner { 
    background-color:  <?php echo $color_scheme_1; ?>; 
}
.navbar { 
    color:  <?php echo $color_scheme_1; ?>; 
}
 
/* secondary color */
.index-content-category {
    background-color:  <?php echo $color_scheme_2; ?>; 
}

.breadcrumb .current {
    color:  <?php echo $color_scheme_2; ?>; 
}

.left-menu-heading, .left-menu .nav-pills > li.active > a, .left-menu .nav-pills > li.active > a:hover, .left-menu .nav-pills > li.active > a:focus {
    background-color:  <?php echo $color_scheme_3; ?>; 
}

.left-menu .nav > li > a, .left-menu .nav > li > a:hover, .left-menu .nav > li > a:focus {
    color:  <?php echo $color_scheme_3; ?>; 
}


 
/* links color */
<?php /*?>.index-content-list-text a, .index-content-list-text-right a, .article-content-list-text a:link, .article-content-list-text a:visited { 
    color:  <?php echo $link_color; ?>; 
}<?php */?>
 
/* hover links color */
/*a:hover, a:active {
    color:  <?php //echo $hover_link_color; ?>; 
}*/
 
</style>
     
<?php
}
add_action( 'wp_head', 'cinecschools_customize_colors' );




function edu_sanitize_footer_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function edu_sanitize_checkbox( $input ) {
	return ( $input === true ) ? true : false;
}


function edu_customizer_live_preview() {
	wp_enqueue_script( 'edu-theme-customizer', get_template_directory_uri().'/js/themecustomizer.js', array( 'jquery','customize-preview' ), '', true );
}
add_action( 'customize_preview_init', 'edu_customizer_live_preview' );
?>